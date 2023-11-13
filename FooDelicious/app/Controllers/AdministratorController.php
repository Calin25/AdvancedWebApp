<?php

namespace App\Controllers;
use App\Models\User_Model;

class AdministratorController extends BaseController
{
    public function AdminHomeView() {
        return view('AdministratorViews/adminHeader')
        . view('AdministratorViews/administratorHomeView')
        . view('templates/footer');
    } 

    
    

}
