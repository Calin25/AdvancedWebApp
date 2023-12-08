<?php

namespace App\Controllers;
use App\Models\Orders_Model;


class OrderController extends BaseController
{
    public function ViewMyOrders()
    {
        $model = new Orders_Model();
        $session = \Config\Services::session();
        $customerNumber = $session->get('customerNumber');
        $data['orders'] = $model->getOrders($customerNumber);

        $data['sessionData'] = $session->get(); // Add this line for debugging

        if (!empty($data)) {
            return view('CustomerViews/customerHeader', $data)
                . view('CustomerViews/OrdersViews/viewMyOrders')
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