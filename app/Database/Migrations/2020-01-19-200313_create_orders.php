<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTable extends Migration
{
	/*
	 * Users
	 */
    public function up()
    {
    	$this->forge->addField([			
            'seq'           	=> ['type' => 'int', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],	
			'id'          		=> ['type' => 'int', 'unsigned' => true,'null' => FALSE],
			'lucky_no'          => ['type' => 'varchar', 'constraint' => 20, 'null' => FALSE],			
            'type'       		=> ['type' => 'int', 'null' => false],
            'status'			=> ['type' => 'int', 'null' => false],
			'notes'				=> ['type' => 'varchar', 'constraint' => 200],
            'create_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP'          
        ]);

        $this->forge->addKey('seq', true);
        $this->forge->addForeignKey('id','customers','user_id','CASCADE','CASCADE');
        $this->forge->createTable('orders', true);
    }

    //--------------------------------------------------------------------

    public function down()
    {
    	$this->forge->dropTable('orders', true);
    }
}
