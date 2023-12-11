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
        $data['prod'] = $pModel->where('produceCode', $productCodes)->paginate(7);

        if (!empty($data['prod'])) { // Update this line
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
}