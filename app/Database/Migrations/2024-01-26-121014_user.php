<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_user' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 40,
                'null'       => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            '_level' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => true,
            ],
            '_profile' => [
                'type'       => 'VARCHAR',
                'constraint' => 225,
                'null'       => false,
                'default'    => 'default-profile.png'
            ],
			'_createdAt DATETIME DEFAULT current_timestamp',
            'USR_createdBy' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => true,
            ],
			'USR_updatedAt' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'USR_updatedBy' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => true,
            ],
        ]);

        $this -> forge -> addKey('id_user', true);
        $this -> forge -> createTable('user', true);
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this -> forge -> dropTable('user');
    }
}