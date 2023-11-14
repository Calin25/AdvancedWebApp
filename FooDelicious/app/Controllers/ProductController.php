<?php

namespace App\Controllers;
use App\Models\Products_Model;

class ProductController extends BaseController
{

public function ListOfBakedGoods()
{
    $model = new Products_Model();

    // Baked Goods is data within category in products table
    $categoryCode = 'Baked Goods';

    // Where category = Baked Goods
    $categoryProducts = $model->where('category', $categoryCode)->paginate(7);

    $data = [
        'categoryProducts' => $categoryProducts,
        'pager' => $model->pager,
    ];

    return view('templates/HomeHeader', $data)
        . view('GeneralView/ProductViews/BakedGoodsProductsView')
        . view('templates/footer');
}

public function ListOfEggsDairyView()
{
    $model = new Products_Model();

    // Baked Goods is data within category in products table
    $categoryCode = 'Eggs & Dairy';

    // Where category = Baked Goods
    $categoryProducts = $model->where('category', $categoryCode)->paginate(7);

    $data = [
        'categoryProducts' => $categoryProducts,
        'pager' => $model->pager,
    ];

    return view('templates/HomeHeader', $data)
        . view('GeneralView/ProductViews/Eggs&DairyProductsView')
        . view('templates/footer');
}

public function ListOfExoticFruits()
{
    $model = new Products_Model();

    // Baked Goods is data within category in products table
    $categoryCode = 'Exotic Fruit';

    // Where category = Baked Goods
    $categoryProducts = $model->where('category', $categoryCode)->paginate(7);

    $data = [
        'categoryProducts' => $categoryProducts,
        'pager' => $model->pager,
    ];

    return view('templates/HomeHeader', $data)
        . view('GeneralView/ProductViews/exoticFruitsView')
        . view('templates/footer');
}

public function ListofFruits()
{
    $model = new Products_Model();

    // Baked Goods is data within category in products table
    $categoryCode = 'Fruit';

    // Where category = Baked Goods
    $categoryProducts = $model->where('category', $categoryCode)->paginate(7);

    $data = [
        'categoryProducts' => $categoryProducts,
        'pager' => $model->pager,
    ];

    return view('templates/HomeHeader', $data)
        . view('GeneralView/ProductViews/fruitView')
        . view('templates/footer');
}

public function ListOfJams()
{
    $model = new Products_Model();

    // Baked Goods is data within category in products table
    $categoryCode = 'Jams and Preserves';

    // Where category = Baked Goods
    $categoryProducts = $model->where('category', $categoryCode)->paginate(7);

    $data = [
        'categoryProducts' => $categoryProducts,
        'pager' => $model->pager,
    ];

    return view('templates/HomeHeader', $data)
        . view('GeneralView/ProductViews/jamsViews')
        . view('templates/footer');
}

public function ListOfSalads()
{
    $model = new Products_Model();

    // Baked Goods is data within category in products table
    $categoryCode = 'Salads';

    // Where category = Baked Goods
    $categoryProducts = $model->where('category', $categoryCode)->paginate(7);

    $data = [
        'categoryProducts' => $categoryProducts,
        'pager' => $model->pager,
    ];

    return view('templates/HomeHeader', $data)
        . view('GeneralView/ProductViews/saladsView')
        . view('templates/footer');
}

public function ListOfVeg()
{
    $model = new Products_Model();

    // Baked Goods is data within category in products table
    $categoryCode = 'Vegetables';

    // Where category = Baked Goods
    $categoryProducts = $model->where('category', $categoryCode)->paginate(7);

    $data = [
        'categoryProducts' => $categoryProducts,
        'pager' => $model->pager,
    ];

    return view('templates/HomeHeader', $data)
        . view('GeneralView/ProductViews/saladsView')
        . view('templates/footer');
}

    
}