<?php

namespace App\Controllers;
use App\Models\Orders_Model;


class OrderController extends BaseController
{
    public function ViewMyOrders()
    {
        $model = new Orders_Model();
        $customerNumber = session()->get('customerNumber');
        $data['orders'] = $model->getOrders($customerNumber);
    
        if (!empty($data['orders'])) {
            return view('CustomerViews/customerHeader', $data)
                . view('CustomerViews/OrdersViews/viewMyOrders')
                . view('templates/footer');
        } else {
            $msg = "No Data To Display";
            $data['message'] = $msg;
            return view('AdministratorViews/adminHeader')
                . view('displayMessageView', $data)
                . view('templates/footer');
        }
    }
    

    
}