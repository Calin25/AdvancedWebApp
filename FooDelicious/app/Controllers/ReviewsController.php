<?php

namespace App\Controllers;
use App\Models\Reviews_Model;
use App\Models\Products_Model;


class ReviewsController extends BaseController
{
    public function ViewMyReviews()
    {
        $model = new Reviews_Model();
        $pModel = new Products_Model();
        $session = \Config\Services::session();
        $customerNumber = $session->get('customerNumber');
        $productCodes = $model->getMyReviews($customerNumber);
        
        $productCodes = array_column($productCodes, 'produceCode');

        $pager = $pModel->pager;
        
        $data['reviews'] = $model->getMyReviews($customerNumber);
        
        if (!empty($data['reviews'])) {
            $data['pager'] = $pModel->pager;  

            //return var_dump($data);
            return view('CustomerViews/customerHeader', $data)
                . view('CustomerViews/Reviews/viewMyReviews')
                . view('templates/footer');
        } else {
            $msg = "No Data To Display";
            $data['message'] = $msg;
            return view('CustomerViews/customerHeader')
                . view('displayMessageView', $data)
                . view('templates/footer');
        }

    }

    public function viewAllReviews()
    {
        $model = new Reviews_Model();
        $pModel = new Products_Model();
        $session = \Config\Services::session();
        $customerNumber = $session->get('customerNumber');
        $userType = $session->get('userType');
        $productCodes = $model->getMyReviews($customerNumber);
        
        $productCodes = array_column($productCodes, 'produceCode');

        $pager = $pModel->pager;
        
        $data['reviews'] = $model->getMyReviews($customerNumber);
        
        if (!empty($data['reviews'])) {
            $data['pager'] = $pModel->pager;  

            switch($userType){
                case 'Administrator':
                    return view('AdministratorViews/adminHeader', $data)
                    . view('CustomerViews/Reviews/viewAllReviews')
                    . view('templates/footer');
                    break;
                    case 'Customer':
                        return view('CustomerViews/customerHeader', $data)
                        . view('CustomerViews/Reviews/viewAllReviews')
                        . view('templates/footer');
                        break;
            }

           
        } else {
            $msg = "No Data To Display";
            $data['message'] = $msg;
            return view('CustomerViews/customerHeader')
                . view('displayMessageView', $data)
                . view('templates/footer');
        }

    }

   

}
