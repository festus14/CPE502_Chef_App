<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
	public function run()
        {

			$data = [
				[
					'first_name' => 'Chef',
					'other_names' => 'Spending',
					'phone_number' => '080234567654',
					'role' => 'chef',
					'email' => 'chefspending@yahoo.com',
					'password' => password_hash('money123', PASSWORD_DEFAULT),
				],
				[
					'first_name' => 'Customer',
					'other_names' => 'Dada',
					'phone_number' => '08085673094',
					'role' => 'customer',
					'email' => 'customerdada@yahoo.com',
					'password' => password_hash('gboy123', PASSWORD_DEFAULT),
				]
			];

			// Using Query Builder
			$this->db->table('users')->insertBatch($data);

			$this->call('Chef');
			$this->call('Customer');

        }
}
