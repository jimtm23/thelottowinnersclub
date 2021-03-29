<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomersTable extends Migration
{
	/*
	 * Users
	 */
    public function up()
    {
    	$this->forge->addField([
            'seq'           	=> ['type' => 'int', 'constraint' => 5, 'unsigned' => true, 'auto_increment' => true],	
            'user_id'           => ['type' => 'varchar', 'constraint' => 50, 'unique' => TRUE],
            'first_name'		=> ['type' => 'varchar', 'constraint' => 50],
            'middle_name'       => ['type' => 'varchar', 'constraint' => 50, 'null' => true],
            'last_name'			=> ['type' => 'varchar', 'constraint' => 50],
            'suffix'			=> ['type' => 'varchar', 'constraint' => 191, 'null' => true],
            'status'			=> ['type' => 'varchar', 'constraint' => 191],
            'addr_no'           => ['type' => 'varchar', 'constraint' => 191],
            'addr_bldg'        	=> ['type' => 'varchar', 'constraint' => 191],
            'addr_street'		=> ['type' => 'varchar', 'constraint' => 191],
            'addr_state'		=> ['type' => 'varchar', 'constraint' => 191],
            'addr_country'      => ['type' => 'varchar', 'constraint' => 191],
            'addr_zipcode'      => ['type' => 'varchar', 'constraint' => 191],
            'contact_no'        => ['type' => 'varchar', 'constraint' => 191],
            'id_type'           => ['type' => 'varchar', 'constraint' => 191, 'null' => true ],
            'id_photo'          => ['type' => 'varchar', 'constraint' => 191, 'null' => true],          
            'face_photo'        => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
            'attachment'        => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
            'notes'             => ['type' => 'varchar', 'constraint' => 191, 'null' => true],
            'created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP'  
        ]);
  
        $this->forge->addKey('seq', true);   
        $this->forge->createTable('customers', true);
    }

    //--------------------------------------------------------------------

    public function down()
    {
    	$this->forge->dropTable('customers', true);
    }
}
