<?php

namespace App\Controllers;

use App\Models\Chef;
use App\Models\Customer;
use App\Models\User as ModelsUser;
use CodeIgniter\RESTful\ResourceController;

class User extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		//
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		//
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		return view('sign-up');
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		helper(['form']);

		$rules = [
			'first_name' => 'required|min_length[2]|max_length[50]',
			'other_names' => 'required|min_length[2]|max_length[50]',
			'phone_number' => 'required|min_length[10]|max_length[11]',
			'password' => 'required|min_length[4]|max_length[50]',
			'role' => 'required',
			'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
			'confirm_password' => 'matches[password]',
		];

		if ($this->validate($rules)) {
			$userModel = new ModelsUser();

			$data = [
				'first_name' => $this->request->getVar('first_name'),
				'other_names' => $this->request->getVar('other_names'),
				'phone_number' => $this->request->getVar('phone_number'),
				'role' => $this->request->getVar('role'),
				'email' => $this->request->getVar('email'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
			];

			$userModel->save($data);

			$user = $userModel->asArray()->where('email', $data['email'])->first();

			if ($user['role'] == 'chef') {
				$chefModel = new Chef();
				$chefModel->save(['user_id' => $user['id']]);
			} else {
				$customerModel = new Customer();
				$customerModel->save(['user_id' => $user['id']]);
			}

			return redirect()->to('/user/login/');
		} else {
			$data['validation'] = $this->validator;
			return view('sign-up', $data);
		}
	}

	public function login()
	{
		return view('login');
	}

	public function loginAuth()
	{

		$session = session();

		$userModel = new ModelsUser();

		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');
		$data = $userModel->asArray()->where('email', $email)->first();

		if (!empty($data)) {
			$pass = $data['password'];
			$authenticatePassword = password_verify($password, $pass);
			if ($authenticatePassword) {
				$ses_data = [
					'id' => $data['id'],
					'first_name' => $data['first_name'],
					'other_names' => $data['other_names'],
					'phone_number' => $data['phone_number'],
					'role' => $data['role'],
					'email' => $data['email'],
					'isLoggedIn' => true,
				];

				$session->set($ses_data);
				echo $session->get('id');

				if ($data['role'] == 'chef') {
					$chefModel = new Chef();
					$chef = $chefModel->where('user_id', $data['id'])->first();
					if ($chef['status'] == 'inactive') return redirect()->to('/chef/edit/' . $chef['id']);
					return redirect()->to('/chef/show/' . $chef['id']);
				} else {
					$customerModel = new Customer();
					$customer = $customerModel->where('user_id', $data['id'])->first();
					if ($customer['status'] == 'inactive') return redirect()->to('/customer/edit/' . $customer['id']);
					return redirect()->to('/customer/show/' . $customer['id']);
				}
			} else {
				$session->setFlashdata('msg', 'Password is incorrect.');
				return redirect()->to('/user/login/');
			}
		} else {
			$session->setFlashdata('msg', 'Email does not exist.');
			return redirect()->to('/user/login/');
		}
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		//
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		//
	}

	/**
	 * Delete the designated resource object from the model
	 *
	 * @return mixed
	 */
	public function delete($id = null)
	{
		//
	}
}
