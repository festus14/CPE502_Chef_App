<?php

namespace App\Controllers;

use App\Models\Customer as ModelsCustomer;
use CodeIgniter\RESTful\ResourceController;

class Customer extends ResourceController
{
	/**
	 * Return an array of resource objects, themselves in array format
	 *
	 * @return mixed
	 */
	public function index()
	{
		$session = session();
		echo "Hello : " . $session->get('first_name') . $session->get('other_names');
	}

	/**
	 * Return the properties of a resource object
	 *
	 * @return mixed
	 */
	public function show($id = null)
	{
		$customerModel = new ModelsCustomer();
		$customer = $customerModel->find($id);
		return view('/customer-dashboard', $customer);
	}

	/**
	 * Return a new resource object, with default properties
	 *
	 * @return mixed
	 */
	public function new()
	{
		//
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function create()
	{
		//
	}

	/**
	 * Return the editable properties of a resource object
	 *
	 * @return mixed
	 */
	public function edit($id = null)
	{
		$customerModel = new ModelsCustomer();
		$customer = $customerModel->find($id);
		return view('/customer-profile', $customer);
	}

	/**
	 * Add or update a model resource, from "posted" properties
	 *
	 * @return mixed
	 */
	public function update($id = null)
	{
		$customerModel = new ModelsCustomer();

		$rules = [
			'user_name' => 'required|min_length[2]|max_length[50]',
			'address' => 'required|min_length[2]|max_length[50]',
		];

		if ($this->validate($rules)) {
			$data = [
				'address' => $this->request->getVar('address'),
				'user_name' => $this->request->getVar('user_name')
			];

			$customerModel->update($id, $data);
			return redirect()->to('/customer/show/' . $id);
		} else {
			$data['validation'] = $this->validator;
			return redirect()->back()->with('data', $data);
		}
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
