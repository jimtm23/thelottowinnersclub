<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CustomerSeeder extends Seeder
{
        public function run()
        {
                $model = model('Customers');

                $model->insert([
                        'user_id'           => static::faker()->email,
                        'first_name'        => static::faker()->firstName,
                         //'middle_name'      => static::faker()->name
                         'last_name'        => static::faker()->lastname,
                        // 'suffix'                        => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
                        // 'status'                        => ['type' => 'varchar', 'constraint' => 191],
                         //'addr_no'          => static::faker()->a
                        // 'addr_bldg'                => ['type' => 'varchar', 'constraint' => 191],
                        'addr_street'        => static::faker()->streetAddress,
                        'addr_state'         => "Nevada",
                        'addr_country'       => "USA",
                        'addr_zipcode'       => "12345",
                        'contact_no'         => static::faker()->phoneNumber,
                        // 'id_type'           => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
                        // 'id_photo'          => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
                        //'face_photo'        => static::faker()->p,
                        // 'attachment'        => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
                        // 'notes'             => ['type' => 'varchar', 'constraint' => 191, 'null' => true]

                ]);
        }
}
