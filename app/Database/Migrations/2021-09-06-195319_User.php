<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'constraint' => 5,
				'auto_increment' => true,
			],
			'first_name' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
			],
			'other_names' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'unique' => true,
			],
			'phone_number' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => true,
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
			],
			'role' => [
				'type' => 'ENUM',
				'constraint' => ['customer', 'chef'],
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('users');
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
