<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
{
	public function up()
	{
		
		$this->forge->addField([			
            'seq'           	=> ['type' => 'int', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
			'id'           		=> ['type' => 'int', 'constraint' => 5, 'unsigned' => true],
			'amount'           	=> ['type' => 'decimal', 'constraint' => '10,2', 'unsigned' => true,'null' => FALSE,
			'default' => 0.00],
            'description'		=> ['type' => 'varchar', 'constraint' => 191],
            'mode'       		=> ['type' => 'int', 'constraint' => 191, 'null' => true],
            'type'				=> ['type' => 'int', 'constraint' => 191],
            'create_date'		=> ['type' => 'timestamp', 'default' => 'CURRENT_TIMESTAMP'],
            'update_date'		=> ['type' => 'timestamp', 'default' => 'CURRENT_TIMESTAMP']            
        ]);
        $this->forge->addKey('id', true);
        //$this->forge->addForeignKey('id','users','id','CASCADE','CASCAD');
        $this->forge->createTable('transactions', true);
		
	}

	public function down()
	{
		$this->forge->dropTable('transactions', true);
	}
}
