<?php

namespace App\Controllers;
use App\Models\Chef as ModelsChef;
use App\Models\Meal as ModelMeal;


class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function show()
	{
		$limit = 10;
		$mealModel = new ModelMeal();
		$data['meals'] = $mealModel->findAll($limit);

		return view('index', $data);
	}
}
