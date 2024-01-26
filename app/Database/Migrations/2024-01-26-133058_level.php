<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Level extends Migration
{
	public function up()
	{
		$this -> forge -> addField([
			'id_level' => [
				'type'			 => 'INT',
				'constraint'	 => 10,
				'unsigned'		 => true,
				'auto_increment' => true,
			],
			'level' => [
				'type'		 => 'VARCHAR',
				'constraint' => 255,
				'null'		 => true,
			]
		]);

		$this -> forge -> addKey('id_level', true);
		$this -> forge -> createTable('level', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this -> forge -> dropTable('user');
	}
}
