<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
	public function up()
	{
		$this -> forge -> addField([
			'id_buku' => [
				'type'			 => 'INT',
				'constraint' 	 => 10,
				'unsigned' 		 => true,
				'auto_increment' => true
			],
			'cover_buku' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 255,
				'null' 		 => true
			],
			'judul_buku' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 255,
				'null' 		 => true
			],
			'pengarang_buku' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 255,
				'null' 		 => true
			],
			'kategori_buku' => [
				'type' 		 => 'INT',
				'constraint' => 10,
				'null' 		 => true
			],
			'penerbit_buku' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 255,
				'null' 		 => true
			],
			'tahun_buku' => [
				'type' 		 => 'VARCHAR',
				'constraint' => 255,
				'null' 		 => true
			],
			'tebal_buku' => [
				'type' 		 => 'INT',
				'constraint' => 10,
				'null' 		 => true
			],
			'orientasi_buku' => [
				'type'	=> 'TEXT',
				'null'	=> true
			],
			'tafsiran_buku' => [
				'type'	=> 'TEXT',
				'null'	=> true
			],
			'evaluasi_buku' => [
				'type'	=> 'TEXT',
				'null'	=> true
			],
			'rangkuman_buku' => [
				'type'	=> 'TEXT',
				'null'	=> true
			],
			'source_buku' => [
				'type'		 => 'TEXT',
				'null'		 => true
			],
			'BK_createdAt DATETIME DEFAULT current_timestamp',
			'BK_createdBy' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => true,
            ],
			'BK_updatedAt' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'BK_updatedBy' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => true,
            ],
		]);

		$this -> forge -> addKey('id_buku', true);
		$this -> forge -> createTable('buku', true);

	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this -> forge -> dropTable('buku');
	}
}
