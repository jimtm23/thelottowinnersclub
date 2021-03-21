<?php
namespace Auth\Controllers;

use App\Models\Customer;
use CodeIgniter\Controller;
use Config\Email;
use Config\Services;
use Auth\Models\UserModel;

class RegistrationController extends Controller
{
	/**
	 * Access to current session.
	 *
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

	/**
	 * Authentication settings.
	 */
	protected $config;


    //--------------------------------------------------------------------

	public function __construct()
	{
		// start session
		$this->session = Services::session();

		// load auth settings
		$this->config = config('Auth');
	}

    //--------------------------------------------------------------------

	/**
	 * Displays register form.
	 */
	public function register()
	{
		if ($this->session->isLoggedIn) {
			return redirect()->to('account');
		}

        $data['title'] = 'The Lotto Winners Club';
        echo view('templates/header', $data);
        echo view('templates/navbar');
		echo view($this->config->views['register'], ['config' => $this->config]);
        echo view('templates/footer');
	}

    //--------------------------------------------------------------------

	/**
	 * Attempt to register a new user.
	 */
	public function attemptRegister()
	{
		helper('text');

		// save new user, validation happens in the model
		$users = new UserModel();

		$getRule = $users->getRule('registration');
		$users->setValidationRules($getRule);
        $user = [
            'name'          	=> $this->request->getPost('name'),
            'email'         	=> $this->request->getPost('email'),
            'password'     		=> $this->request->getPost('password'),
            'password_confirm'	=> $this->request->getPost('password_confirm'),
            'activate_hash' 	=> random_string('alnum', 32)
        ];

        if (! $users->save($user)) {
			return redirect()->back()->withInput()->with('errors', $users->errors());
        }

		// send activation email
		helper('auth');

//        send_activation_email($user['email'], $user['activate_hash']);

        $customers = new Customer();
        $customer = [
            'user_id'       => $users->getInsertID(),
            'first_name'    => $this->request->getPost('firstName'),
            'middle_name'   => $this->request->getPost('middleName'),
            'last_name'     => $this->request->getPost('lastName'),
            'suffix'        => $this->request->getPost('suffix'),
            'status'        => $this->request->getPost('status'),
            'addr_no'       => $this->request->getPost('addr_num'),
            'addr_bldg'     => $this->request->getPost('addr_bldg'),
            'addr_street'   => $this->request->getPost('addr_street'),
            'addr_state'    => $this->request->getPost('addr_state'),
            'addr_country'  => $this->request->getPost('addr_country'),
            'addr_zipcode'  => $this->request->getPost('addr_zipcode'),
            'id_type'       => "sample",
            'id_photo'      => "sample",
            'face_photo'    => "sample",
            'attachment'    => "sample",
            'notes'         => "sample"
        ];
        try {
            $customers->save($customer);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        /*************** ACTIVATE AGAD **************/
        $users2 = new UserModel();
        $user3 = $users2->where('activate_hash', $user['activate_hash'])
            ->where('active', 0)
            ->first();

        // update user account to active
        $updatedUser['id'] = $user3['id'];
        $updatedUser['active'] = 1;
        $users2->save($updatedUser);
        /*************** ACTIVATE AGAD **************/

		// success
//        return redirect()->to('login')->with('success', lang('Auth.registrationSuccess'));
        return redirect()->to('login')->with('success', lang('Auth.activationSuccess'));
	}

    //--------------------------------------------------------------------

	/**
	 * Activate account.
	 */
	public function activateAccount()
	{
		$users = new UserModel();

		// check token
		$user = $users->where('activate_hash', $this->request->getGet('token'))
			->where('active', 0)
			->first();

		if (is_null($user)) {
			return redirect()->to('login')->with('error', lang('Auth.activationNoUser'));
		}

		// update user account to active
		$updatedUser['id'] = $user['id'];
		$updatedUser['active'] = 1;
		$users->save($updatedUser);

		return redirect()->to('login')->with('success', lang('Auth.activationSuccess'));
	}

}
