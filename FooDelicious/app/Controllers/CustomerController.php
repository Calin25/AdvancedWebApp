<?php

namespace App\Controllers;
use App\Models\Customer_Model;

class CustomerController extends BaseController
{
    public function CustomerHomeView() {
        return view('CustomerViews/customerHeader')
        . view('CustomerViews/CustomerHomeView')
        . view('templates/footer');
    } 
}