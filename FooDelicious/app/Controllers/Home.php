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

    public function MemberHomeView() {
        return view('MemberViews/MemberHeader')
        . view('MemberViews/MemberHomeView')
        . view('templates/footer');
    } 

    public function logout(){

        $session = \Config\Services::session();
        $session->destroy();
        sleep(2);
        return view('templates/HomeHeader')
            . view('home')
            . view('templates/footer');

    }

    public function register() {
        $data = [];
        $msg = "";

            if ($this->request->getMethod() == 'post') {
            $model = new User_Model;
            helper(['form']);

            $validation = \Config\Services::validation();

            // Set validation rules
            $validation->setRules([
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password1' => 'required|min_length[6]',
                'password2' => 'required|matches[password1]',
            ]);
            $newUser = ['firstName' => $_POST['firstname'],
            'lastName' => $_POST['lastname'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password1'], PASSWORD_DEFAULT),
            'usertype' => 'Member'];
            
            if($model->save($newUser)){
                $msg = "<br><br>Successfully Registered<br><br>";
            }else{
                $msg = "<br><br>Registration Not Successfull<br><br>";
            }

            $data['message'] = $msg;
            return view('templates/HomeHeader')
            . view('displayMessageView',$data)
            . view('logIn',$data)   
            . view('templates/footer');
        }

        return view('templates/HomeHeader')
        . view('register')
        . view('templates/footer');
    } 

    public function logIn()
    {
        $model = new User_Model;
        $msg = "";
        helper(['form']);
    
        if ($this->request->getMethod() == 'post') {
    
            $validation = \Config\Services::validation();
    
            $validation->setRules([
                'email' => 'required|valid_email',
                'password' => 'required',
            ]);
    
            if ($validation->withRequest($this->request)->run()) {
                $email = $_POST['email'];
                $password = $_POST['password'];
    
                $user = $model->getUserByEmail($email);
    
                if (password_verify($password, $user['password'])) {
                    $msg = "Login successful";
                    $usertype = $user['usertype'];
                    switch ($usertype) {
                        case 'Administrator':
                            return view('AdministratorViews/adminHeader')
                            . view('AdministratorViews/administratorHomeView')
                            . view('templates/footer');
                            break;
                        case 'Member':
                            return view('MemberViews/MemberHeader')
                            . view('MemberViews/MemberHomeView')
                            . view('templates/footer');
                            break;
                        default:
                           
                    }
                } 
            } else {
                
                $msg = "Incorrect email or password";
            }
        }
    
        $data['message'] = $msg;
    
        return view('templates/HomeHeader')
            . view('displayMessageView',$data)
            . view('logIn', $data)
            . view('templates/footer');
    }
    
    
    
    
    
    

}
