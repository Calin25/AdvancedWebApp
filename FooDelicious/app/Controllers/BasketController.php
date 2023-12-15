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

    public function insertIntoBasket($produceCode)
    {
        $session = session();
        $basketData = $session->get('BasketData') ?? [];

        $userID = $session->get('customerNumber');

        $model = new Basket_Model();
        $pModel = new Products_Model();

        $productData = $pModel->getProductByIDCategory($produceCode);

        $updatedBasketData = $model->insertIntoBasket($productData, $userID);

        if ($updatedBasketData) {
            $basketData[] = $productData;

            $session->set('BasketData', $basketData);

            $msg = "Successfully Added to Basket";
        } else {
            $msg = "Issue adding to Basket";
        }

        $data['message'] = $msg;

        return view('CustomerViews/customerHeader')
            . view('displayMessageView', $data)
            . view('templates/footer');
    }

    public function removeFromBasket($produceCode)
    {
        $session = session();
        $basketData = $session->get('BasketData') ?? [];

        $indexToRemove = array_search($produceCode, array_column($basketData, 'produceCode'));

        if ($indexToRemove !== false) {
            unset($basketData[$indexToRemove]);
        }

        $basketData = array_values($basketData);

        $session->set('BasketData', $basketData);

        $msg = "Successfully Removed from Basket";

        $data['message'] = $msg;

        return view('CustomerViews/customerHeader')
            . view('displayMessageView', $data)
            . view('templates/footer');
    }

    


    public function viewBasket() {
        $session = session();
        $basketData = $session->get('BasketData') ?? [];
        
        $pager = null;
    
        $data['basketData'] = $basketData;
        
        return view('CustomerViews/customerHeader', $data)
                . view('CustomerViews/OrdersViews/basketView')
                . view('templates/footer');
    }

    public function drillDownProductsBasket($id) { 
        $model = new Products_Model();
        $userType = session()->get('userType');
        $productData['product'] = $model->getProductByIDCategory($id);
       
        switch($userType){
               
                case 'Customer':
                    if($userType != "Customer"){
                        return view('templates/HomeHeader', $productData)
                        . view('GeneralView/ProductViews/drillDownProduct')
                        . view('templates/footer');
                    }else{
                        return view('CustomerViews/customerHeader', $productData)
                        . view('CustomerViews/customerDrillDownBasket')
                        . view('templates/footer');
                    break;
                    }

                default:
                    return view('templates/HomeHeader', $productData)
                        . view('GeneralView/ProductViews/drillDownProduct')
                        . view('templates/footer');
                    break;
        }
	}
    


}