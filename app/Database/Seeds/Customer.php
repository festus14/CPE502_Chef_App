<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\User as ModelsUser;

class Customer extends Seeder
{
	public function run()
	{
		$userModel = new ModelsUser();
		$user = $userModel->asArray()->where('role', 'customer')->first();

		$data = [
			'user_id' => $user['id'],
			'user_name' => 'Moneyman',
			'address' => '90, Beverly Hills, Banana Island',
		];

		// Using Query Builder
		$this->db->table('customers')->insert($data);
	}
}
