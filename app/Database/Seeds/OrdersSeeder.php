<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrdersSeeder extends Seeder
{
	public function run()
	{
		//'seq','lucky_no', 'type', 'status',
        //'notes', 'create_date', 'update_date'
		$model = model('Orders');

                $model->insert([
                        'lucky_no'  	=> static::faker()->numfmt_format(1),
                        'type' 			=> 	static::faker(),
						'status' 		=> static::faker(),
						'notes'			=> static::faker(),
						'create_date'	=> static::faker()->date_timestamp_set,
						'update_date'	=> static::faker()->date_timestamp_set,
                ]);
	} 
}
