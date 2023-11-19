<?php

namespace App\Controllers;
use App\Models\User_Model;
use App\Models\Products_Model;

class AdministratorController extends BaseController
{
    public function AdminHomeView() {
        return view('AdministratorViews/adminHeader')
        . view('AdministratorViews/administratorHomeView')
        . view('templates/footer');
    } 

    public function ManageProducts(){
        return view('AdministratorViews/adminHeader')
        . view('AdministratorViews/adminManageProducts')
        . view('templates/footer');
    }

    public function ManageOrders(){
        return view('AdministratorViews/adminHeader')
        . view('AdministratorViews/adminManageProducts')
        . view('templates/footer');
    }

}
