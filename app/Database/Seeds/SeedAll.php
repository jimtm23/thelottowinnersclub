<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedAll extends Seeder
{
        public function run()
        {
                $this->call('CustomerSeeder');
                $this->call('OrdersSeeder');
                $this->call('Transactions');
        }
}