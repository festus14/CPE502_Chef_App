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
