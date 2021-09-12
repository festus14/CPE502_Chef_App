<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
            ],
            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '200',
                'null' => true,
            ],
            'item_category' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
            ],
            'quantity' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 5,
                'null' => true,
            ],
            'cover' => [
                'type' => 'VARCHAR',
                'constraint' => '300',
                'null' => true,
            ],
            'price' => [
                'type' => 'INT',
            ],
            'is_discount' => [
                'type' => 'BOOLEAN',
                'default' => false,
            ],
            'discount' => [
                'type' => 'INT',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['pending', 'processed', 'rejected'],
                'default' => 'pending',
            ],
            'restaurant_name' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true,
            ],
            'chef_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 5,
                'null' => true,
            ],
            'customer_name' => [
                'type' => 'VARCHAR',
                'constraint' => '150',
                'null' => true,
            ],
            'customer_id' => [
                'type' => 'INT',
                'unsigned' => true,
                'constraint' => 5,
                'null' => true,
            ],
            'created_at datetime default current_timestamp',
            'updated_at datetime default current_timestamp on update current_timestamp',
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('chef_id', 'chefs', 'id');
        $this->forge->addForeignKey('customer_id', 'customers');
        $this->forge->createTable('orders');
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
