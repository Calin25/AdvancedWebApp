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
        . view('GeneralView/BakedGoodsProductsView')
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
        . view('GeneralView/Eggs&DairyProductsView')
        . view('templates/footer');
}

    
}