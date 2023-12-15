<?php

namespace App\Controllers;
use App\Models\Orders_Model;
use App\Models\Reviews_Model;


class OrderController extends BaseController
{
    public function ViewMyOrders()
    {
        $model = new Orders_Model();
        $session = \Config\Services::session();
        $customerNumber = $session->get('customerNumber');
        $data['orders'] = $model->getOrders($customerNumber);

        //$data['sessionData'] = $session->get();

        if (!empty($data)) {
            //var_dump($data);
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

    public function ViewAllOrders()
    {
        $model = new Orders_Model();
        $session = \Config\Services::session();
        $data['orders'] = $model->getAllOrders();

        //$data['sessionData'] = $session->get();

        return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageOrders/viewAllOrders')
                    . view('templates/footer');
    }

    public function drillDownOrder($id) { 
        $model = new Orders_Model();
        $userType = session()->get('userType');
        $productData['product'] = $model->getOrderByOrderNumber($id);
    
        switch($userType) {
            case 'Administrator':
                return view('AdministratorViews/adminHeader', $productData)
                . view('AdministratorViews/ManageOrders/adminDrillDownOrder')
                . view('templates/footer');
                break;
    
            case 'Customer':
                return view('CustomerViews/customerHeader', $productData)
                . view('CustomerViews/OrdersViews/customerDrillDown')
                . view('templates/footer');
    
            default:
                return view('templates/HomeHeader', $productData)
                    . view('GeneralView/ProductViews/drillDownProduct')
                    . view('templates/footer');
                break;
        }
    }

    public function AmendOrder($orderNumber) {

        $data = [];
        $msg = "";
    
        helper(['form']);
    
        $model = new Orders_Model();

        if ($this->request->getMethod() != 'post') {
    
            $orderData['order'] = $model->getOrderByOrderNumber($orderNumber);

            $userType = session()->get('userType');
            switch($userType){
                case 'Administrator': 
                    return view('AdministratorViews/adminHeader', $orderData)
                    . view('AdministratorViews/ManageOrders/amendOrder')
                    . view('templates/footer');
                break;

                case "Customer":
                    return view('CustomerViews/customerHeader', $orderData)
                    . view('CustomerViews/OrdersViews/customerAmendOrder')
                    . view('templates/footer');
                    break;

            }
    
        } else {

            $order = [
                'orderDate' => $_POST['orderDate'],
                'requiredDate' => $_POST['requiredDate'],
                'shippedDate' => $_POST['shippedDate'],
                'status' => $_POST['status'],
                'comments' => $_POST['comments'],
            ];
    
            $rules = [
                'orderDate' => 'required',
                'requiredDate' => 'required',
                'status' => 'required',
            ];
    
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
    
                $orderData['order'] = $order;
                $userType = session()->get('userType');
                switch($userType){
                    case 'Administrator': 
                        return view('AdministratorViews/adminHeader', $orderData)
                        . view('AdministratorViews/ManageOrders/amendOrder')
                        . view('templates/footer');
                    break;
    
                    case "Customer":
                        return view('CustomerViews/customerHeader', $orderData)
                        . view('CustomerViews/OrdersViews/customerAmendOrder')
                        . view('templates/footer');
                        break;
    
                }
    
            } else {

                if ($model->updateOrder($order, $orderNumber)) {
                    $msg .= "<br><br>The update to the database has been successful<br><br>";
                } else {
                    $msg .= "<br><br>Uh oh... problem on the update to the database<br><br>";
                }

                $userType = session()->get('userType');
                switch($userType){
                    case 'Administrator': 
                        $data['message'] = $msg;
                        return view('AdministratorViews/adminHeader')
                            . view('displayMessageView', $data)
                            . view('templates/footer');
                    break;
    
                    case "Customer":
                        $data['message'] = $msg;
                        return view('CustomerViews/customerHeader')
                            . view('displayMessageView', $data)
                            . view('templates/footer');
                        break;
    
                }
    
                $data['message'] = $msg;
                return view('AdministratorViews/adminHeader')
                    . view('displayMessageView', $data)
                    . view('templates/footer');
            }
        }

        
    }

    public function AddReview($productCode)
    {
        $data = [];
        $msg = "";

        helper(['form']);
        $session = session();
        $userID = $session->get('customerNumber');

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'customerReview' => 'required|min_length[5]',
                'stars' => 'required',
                'date' => 'required|valid_date',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new Reviews_Model();

                $reviewData = [
                    'customerReview' => $_POST['customerReview'],
                    'stars' => $_POST['stars'],
                    'date' => $_POST['date'],
                    'customerNumber' => $userID,
                    'produceCode' => $productCode,
                ];

                if ($model->save($reviewData)) {
                    $msg .= "<br><br>The review has been successfully added to the database<br><br>";
                } else {
                    $msg .= "<br><br>Uh oh ... problem adding the review to the database<br><br>";
                }

                $data['message'] = $msg;

                return view('CustomerViews/customerHeader')
                    . view('displayMessageView', $data)
                    . view('templates/footer');
            }
        }

        $data['productCode'] = $productCode;

        return view('CustomerViews/customerHeader', $data)
            . view('CustomerViews/Reviews/addReviewToOrder')
            . view('templates/footer');
    }

    
    
}