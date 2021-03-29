<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedAll extends Seeder
{
        public function run()
        {
                for ($i = 0; $i < 500; $i++) {
                        $this->call('CustomerSeeder');
                }

                //$this->call('OrdersSeeder');
                //$this->call('Transactions');
        }
}
