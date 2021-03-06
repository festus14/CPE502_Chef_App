<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Chef extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'constraint' => 5,
				'auto_increment' => true,
			],
			'user_id' => [
				'type' => 'INT',
				'unsigned' => true,
				'constraint' => 5,
				'null' => true,
			],
			'user_name' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'restaurant_name' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'address' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'website_url' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => true,
			],
			'bio' => [
				'type' => 'VARCHAR',
				'constraint' => '250',
				'null' => true,
			],
			'status' => [
				'type' => 'ENUM',
				'constraint' => ['active', 'inactive'],
				'default' => 'inactive',
				'null' => true,
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('user_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('chefs');
		$this->db->enableForeignKeyChecks();
	}

	public function down()
	{
		$this->forge->dropTable('chefs');
	}
}
