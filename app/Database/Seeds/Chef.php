<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\User as ModelsUser;

class Chef extends Seeder
{
	public function run()
	{
		$userModel = new ModelsUser();
		$user = $userModel->asArray()->where('role', 'chef')->first();

		$data = [
			'user_id' => $user['id'],
			'user_name' => 'Spending',
			'restaurant_name' => 'MoneyBar',
			'address' => '69, Silent Hills, Banana Island',
			'website_url' => 'moneybar.com',
			'bio' => "Rice and Stew Very Plenty, O kpo",
		];

		// Using Query Builder
		$this->db->table('chefs')->insert($data);
	}
}
