<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransactionTable extends Migration
{
	/*
	 * Users
	 */
    public function up()
    {
    	$this->forge->addField([			
            'seq'           	=> ['type' => 'int', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],
			'user_id'           => ['type' => 'varchar', 'constraint' => 50],
			'amount'           	=> ['type' => 'decimal', 'constraint' => '10,2', 'unsigned' => true,'null' => FALSE,
			'default' => 0.00],
            'description'		=> ['type' => 'varchar', 'constraint' => 191],
            'mode'       		=> ['type' => 'int', 'constraint' => 191, 'null' => true],
            'type'				=> ['type' => 'int', 'constraint' => 191],
            'create_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'update_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP'          
        ]);
        $this->forge->addKey('seq', true);
        $this->forge->addForeignKey('user_id','customers','user_id','CASCADE','CASCADE');
        $this->forge->createTable('transactions', true);
    }

    //--------------------------------------------------------------------

    public function down()
    {
    	$this->forge->dropTable('transactions', true);
    }
}
