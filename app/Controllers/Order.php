<?php

namespace App\Controllers;

use App\Models\Chef;
use App\Models\Customer;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Order as OrderModel;
use App\Models\Chef as ChefModel;


class Order extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view('chef-order');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function showByStatus($status = null)
    {
        $chefModel = new ChefModel();
        $chef = $chefModel->where('user_id', session()->get('id'))->first();

        $orderModel = new OrderModel();
        $data['order'] = $orderModel->where('status',$status, 'chef_id',$chef)->findAll();

        return view('chef-order', $data);
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
        $session = session();
        $cart = $session->cart;

        if (!empty($cart)) {
            $customerModel = new Customer();
            $customer = $customerModel->where('user_id', session()->id)->first();

            foreach ($cart as $id => $item) {
                $order = new OrderModel();
                $data = [
                    'name' => $item['name'],
                    'description' => $item['description'],
                    'item_category' => $item['item_category'],
                    // 'quantity' => $item['quantity'],
                    'cover' => $item['cover'],
                    'price' => $item['price'],
                    'is_discount' => $item['is_discount'] ?? false,
                    'discount' => $item['discount'] ?? 0,
                    'restaurant_name' => $item['restaurant_name'],
                    'chef_id' => $item['chef_id'],
                    'customer_id' => $customer['id'],
                    'user_name' => $customer['user_name'],
                    'status' => 'pending',
                ];
                $order->save($data);
            }

            $session->remove('cart');
            return redirect()->to('/customer/order/' . $customer['id']);
        }

        return redirect()->back();
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
        $order = new OrderModel();
        $order->delete($id);

        $customerModel = new Customer();
        $customer = $customerModel->where('user_id', session()->id)->first();

        return redirect()->to('/customer/order/' . $customer['id']);
    }

    public function accept($id = null)
    {
        $order = new OrderModel();

        $data = ['status' => 'processed'];

        $order->update($id, $data);

        $chefModel = new Chef();
        $chef = $chefModel->where('user_id', session()->id)->first();

        return redirect()->to('/chef/order/' . $chef['id']);
    }

    public function reject($id = null)
    {
        $order = new OrderModel();

        $data = ['status' => 'rejected'];

        $order->update($id, $data);

        $chefModel = new Chef();
        $chef = $chefModel->where('user_id', session()->id)->first();

        return redirect()->to('/chef/order/' . $chef['id']);
    }
}
