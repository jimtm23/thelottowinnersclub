<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CustomerSeeder extends Seeder
{
	public function run()
	{
		$model = model('Customer');

                $model->insert([
                        'email'      => static::faker()->email,
                        'ip_address' => static::faker()->ipv4,
                ]);
	}
}
