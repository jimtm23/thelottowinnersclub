<?php

namespace App\Models;

use CodeIgniter\Model;

class Customers extends Model
{

	protected $table                = 'customers';
	protected $primaryKey           = 'seq';
	protected $useAutoIncrement     = true;

	protected $returnType           = 'array';
	protected $useSoftDelete        = false;

    protected $allowedFields = ['seq','user_id','first_name', 'middle_name', 'last_name', 'suffix',
        'status', 'addr_no', 'addr_bldg', 'addr_street', 'addr_state', 'addr_country',
		'contact_no',
        'addr_zipcode', 'id_type', 'id_photo', 'face_photo', 'attachment', 'notes','created_at', 'updated_at'];

		
	// Dates
	protected $useTimestamps        = true;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	//public function getCustomerDetails($emailID){

		//$query = $this->db->get_where('customers', array('user_id' => session()));	

        //return $query->result_array(); 
	//}
}
