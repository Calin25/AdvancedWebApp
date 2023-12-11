<?php

namespace App\Controllers;
use App\Models\Products_Model;
use App\Models\Basket_Model;


class BasketController extends BaseController
{
    public function ViewMyBasket()
    {
        $model = new Basket_Model();
        $pModel = new Products_Model();
        $session = \Config\Services::session();
        $customerNumber = $session->get('customerNumber');
        $productCodes = $model->getBasket($customerNumber);
        
        $productCodes = array_column($productCodes, 'produceCode');

        $pager = $pModel->pager;
        
        $data['prod'] = $pModel->whereIn('produceCode', $productCodes)->paginate(7);

        if (!empty($data['prod'])) {
            $data['pager'] = $pModel->pager;  
            return view('CustomerViews/customerHeader', $data)
                . view('CustomerViews/OrdersViews/ViewWishListView')
                . view('templates/footer');
        } else {
            $msg = "No Data To Display";
            $data['message'] = $msg;
            return view('CustomerViews/customerHeader')
                . view('displayMessageView', $data)
                . view('templates/footer');
        }

    }

    public function InsertIntoBasket($produceCode){
        $session = session()->start();
        $userID = session()->get('customerNumber');
        $model = new Basket_Model();
        $msg = "";
        $basketData = $model->insertIntoWishList($produceCode, $userID);

        if(!empty($basketData)){
            $session->set("BasketData",$basketData);
            $msg = "Successfully Added to Basket";
        }
        else{
            $msg = "Issue adding to Basket";
        }

        $data['message'] = $msg;
            return view('CustomerViews/customerHeader')
                . view('displayMessageView', $data)
                . view('templates/footer');

    }
}