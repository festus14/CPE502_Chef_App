<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Meal as MealModel;


class Menu extends ResourceController
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
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        return view('create-meal');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
		helper(['form']);
        $session = session();
        $rules = [
			'name' => 'required|min_length[2]|max_length[50]',
			'description' => 'required|min_length[2]|max_length[200]',
			'item_category' => 'required|min_length[2]|max_length[50]',
			'quantity' => 'required',
			'cover' => 'required',
			'price' => 'required',
            'is_discount' => 'required',
            'discount' => 'required',
        ];

        if($this->validate($rules)){
            $user = new MealModel();

            $data = [
				'name' => $this->request->getVar('name'),
				'description' => $this->request->getVar('description'),
				'item_category' => $this->request->getVar('item_category'),
				'quantity' => $this->request->getVar('quantity'),
				'cover' => $this->request->getVar('cover'),
				'is_discount' => $this->request->getVar('is_discount'),
				'discount' => $this->request->getVar('discount'),
				'chef_id' => $session->get('id'),
            ];

            $user->save($data);

            return redirect()->to('');
        }else{
            $data['validation'] = $this->validator;
			return view('', $data);
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $meal = new MealModel();
		$data['meal'] = $meal->find($id);
		return view('', $data);
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
        $meal = new MealModel();
		$meal->delete($id);
		return redirect()->to(base_url())->with('status','Meal Deleted Succesfully');
    }
}