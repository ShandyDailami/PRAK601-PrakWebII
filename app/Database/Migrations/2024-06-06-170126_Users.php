<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => true,
				'auto_increment' => true
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
			],
			'password' => [
				'type' => 'TEXT',
				'constraint' => '100',
			]

		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
	}
	public function down()
	{
		$this->forge->dropTable('users');
	}
}