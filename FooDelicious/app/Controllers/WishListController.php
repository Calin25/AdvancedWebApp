<?php

namespace App\Controllers;
use App\Models\WishList_Model;
use App\Models\Products_Model;


class WishListController extends BaseController
{
    public function ViewMyWishList()
    {
        $model = new WishList_Model();
        $pModel = new Products_Model();
        $session = \Config\Services::session();
        $customerNumber = $session->get('customerNumber');
        $productCodes = $model->getMyWishList($customerNumber);
        
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

    public function InsertIntoWishList($produceCode){
        $userID = session()->get('customerNumber');
        $model = new WishList_Model();
        $msg = "";

        if($model->insertIntoWishList($produceCode, $userID)){
            $msg = "Successfully Added to Wish List";
        }
        else{
            $msg = "Issue adding to Wish List";
        }

        $data['message'] = $msg;
            return view('CustomerViews/customerHeader')
                . view('displayMessageView', $data)
                . view('templates/footer');

    }

    public function drilDownProductWishList($id) { 
        $model = new Products_Model();
        $userType = session()->get('userType');
        $productData['product'] = $model->getProductByIDCategory($id);
       
        switch($userType){
                
            case 'Customer':
                return view('CustomerViews/customerHeader', $productData)
                        . view('CustomerViews/customerDrillDownWishList')
                        . view('templates/footer');
                        break;

            default:
                return view('templates/HomeHeader', $productData)
                    . view('GeneralView/ProductViews/drillDownProduct')
                    . view('templates/footer');
                break;
        }
	}

    public function deleteFromWishlist($produceCode){
        $userID = session()->get('customerNumber');
        $model = new WishList_Model();
        $msg = "";

        if ($model->deleteFromWishList($produceCode, $userID)) {
            $msg = "Successfully Deleted from Wish List";
        } else {
            $msg = "Issue deleting from Wish List";
            
        }

        $data['message'] = $msg;
            return view('CustomerViews/customerHeader')
                . view('displayMessageView', $data)
                . view('templates/footer');
    }
}