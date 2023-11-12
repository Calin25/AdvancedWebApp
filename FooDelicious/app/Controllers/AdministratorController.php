<?php

namespace App\Controllers;
use App\Models\User_Model;

class Home extends BaseController
{
    
    public function index() {

        return view('templates/HomeHeader')
        . view('home')
        . view('templates/footer');
    } 

    public function AdminHomeView() {
        return view('AdministratorViews/adminHeader')
        . view('AdministratorViews/administratorHomeView')
        . view('templates/footer');
    } 

    
    

}
