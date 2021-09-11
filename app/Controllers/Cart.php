<?php

namespace App\Controllers;

use App\Models\Customer;
use App\Models\Meal;
use CodeIgniter\RESTful\ResourceController;

class Cart extends ResourceController
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
		//
	}

	/**
	 * Create a new resource object, from "posted" parameters
	 *
	 * @return mixed
	 */
	public function add($id = null)
	{
		$session = session();
		// $session->remove('cart');

		if (!$session->has('cart')) {
			$session->set('cart', []);
		}

		$mealModel = new Meal();
		$meal = $mealModel->find($id);

		if (!array_key_exists($id, $session->cart)) {
			$session->push('cart', [$id => $meal]);
		}

		$customerModel = new Customer();
		$customer = $customerModel->where('user_id', $session->get('id'))->first();

		return redirect()->to('/customer/show/' . $customer['id']);
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
