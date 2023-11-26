<?php

namespace App\Controllers;
use App\Models\User_Model;
use App\Models\Products_Model;

class AdministratorController extends BaseController
{
    public function AdminHomeView() {
        helper("cookie");
        set_cookie("mycookie", "SWAD", 3600);

        if ($this->request->getCookie("mycookie")) {
            echo "Cookie set successfully!";
        } else {
            echo "Cookie setting failed!";
        }

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
