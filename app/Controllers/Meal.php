<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Meal as MealModel;
use App\Models\Chef as ChefModel;


class Meal extends ResourceController
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
        $meal = new MealModel();
        $data['meal'] = $meal->find($id);
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

        $chefModel = new ChefModel();
        $chef = $chefModel->where('user_id', session()->get('id'))->first();

        $rules = [
            'name' => 'required|min_length[2]|max_length[50]',
            'description' => 'required|min_length[2]|max_length[200]',
            'item_category' => 'required|min_length[2]|max_length[50]',
            'quantity' => 'required',
            'cover' => 'required',
            'price' => 'required',
        ];

        if ($this->validate($rules)) {
            $meal = new MealModel();

            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'item_category' => $this->request->getVar('item_category'),
                'quantity' => $this->request->getVar('quantity'),
                'cover' => $this->request->getVar('cover'),
                'price' => $this->request->getVar('price'),
                'is_discount' => $this->request->getVar('is_discount') ?? false,
                'discount' => $this->request->getVar('discount') ?? 0,
                'restaurant_name' => $chef['restaurant_name'],
                'chef_id' => $chef['id'],
            ];

            $meal->save($data);

            return redirect()->to('/chef/show/' . $chef['id']);
        } else {
            $data['validation'] = $this->validator;
            return view('create-meal', $data);
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $mealModel = new MealModel();
        $meal = $mealModel->find($id);
        return view('', $meal);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $chefModel = new ChefModel();
        $chef = $chefModel->where('user_id', session()->get('id'))->first();

        $mealModel = new MealModel();
        $meal = $mealModel->where('id',$id)->first();
        $rules = [
            'name' => 'required|min_length[2]|max_length[50]',
            'description' => 'required|min_length[2]|max_length[200]',
            'item_category' => 'required|min_length[2]|max_length[50]',
            'quantity' => 'required',
            'cover' => 'required',
            'price' => 'required',
        ];

        if ($this->validate($rules)) {
            $meal = new MealModel();

            $data = [
                'name' => $this->request->getVar('name'),
                'description' => $this->request->getVar('description'),
                'item_category' => $this->request->getVar('item_category'),
                'quantity' => $this->request->getVar('quantity'),
                'cover' => $this->request->getVar('cover'),
                'price' => $this->request->getVar('price'),
                'is_discount' => $this->request->getVar('is_discount') ?? false,
                'discount' => $this->request->getVar('discount') ?? 0,
                'chef_id' => $chef['id'],
            ];

            $meal->update($data);

            return redirect()->to('/chef/show/' . $chef['id']);
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
        $session = session();
        $chefModel = new ChefModel();
        $chef = $chefModel->where('user_id', session()->get('id'))->first();

        $mealModel = new MealModel();
        $meal = $mealModel->where('id',$id)->first();

        if($meal['chef_id'] == $chef['id']){
            $meal->delete();
			$session->setFlashdata('msg', 'Meal Deleted Succesfully');
        }else{
			$session->setFlashdata('msg', 'Unauthorized');
        }

        return redirect()->back();
    }
}
