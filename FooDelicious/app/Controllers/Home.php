<?php

namespace App\Controllers;
use App\Models\Administrator_Model;
use App\Models\Customer_Model;

class Home extends BaseController
{
    
    public function index() {

        return view('templates/HomeHeader')
        . view('home')
        . view('templates/footer');
    } 

    //Log out function - End Session
    public function logout(){

        $session = \Config\Services::session();
        $session->destroy();
        sleep(2);
        return view('templates/HomeHeader')
            . view('home')
            . view('templates/footer');

    }

    //Register New Customer function
    public function register() {
        $data = [];
        $msg = "";

            if ($this->request->getMethod() == 'post') {
            $model = new Customer_Model;
            helper(['form']);

            $validation = \Config\Services::validation();

            // Set validation rules
            $validation->setRules([
                'firstname' => 'required',
                'lastname' => 'required',
                'addressLine1' => 'required',
                'addressLine2' => 'required',
                'city' => 'required',
                'country' => 'required',
                'postcode' => 'required',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password1' => 'required|min_length[6]',
                'password2' => 'required|matches[password1]',
            ]);
            $newUser = [
            'customerName' => $_POST['companyName'],
            'contactFirstName' => $_POST['firstname'],
            'contactLastName' => $_POST['lastname'],
            'phone' => $_POST['phone'],
            'addressLine1' => $_POST['addressLine1'],
            'addressLine2' => $_POST['addressLine2'],
            'city' => $_POST['city'],
            'country' => $_POST['country'],
            'postalCode' => $_POST['postCode'],
            'email' => $_POST['email'],
            'creditLimit' => 0,
            'password' => password_hash($_POST['password1'], PASSWORD_DEFAULT)];
            
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

    //Log in for Admin or Customer - If successfull, switch statement used to redirect to appropriate controllers & views
    public function logIn(){
        $session = session();
        
        $msg = "";
        helper(['form']);

        if ($this->request->getMethod() == 'post') {

            $validation = \Config\Services::validation();

            $validation->setRules([
                'email' => 'required|valid_email',
                'password' => 'required',
                'userCheck' => 'required'
            ]);
            $userCheck = $_POST['userCheck'];

            switch($userCheck) {
                case 'Administrator':
                    if ($validation->withRequest($this->request)->run()) {
                        $userModel = new Administrator_Model;
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        
                        $user = $userModel->getUserByEmail($email);
        
                        if (!empty($user) && password_verify($password, $user['password'])) {
                            $msg = "Login successful";
                            
                            if ($userCheck == 'Administrator') {
                                // Set session data for administrator
                                $session->set('userType', 'Administrator');
        
                                return redirect()->to(base_url('/AdminHomeView'));
                            }
                        } else {
                            $msg = "Incorrect email or password";
                        }
                    }
                    break;

                case 'Customer':
                    $userModel = new Customer_Model;
                    $email = $_POST['email'];
                    $password = $_POST['password'];

                    $user = $userModel->getCustomerbyEmail($email);

                    if (!empty($user) && password_verify($password, $user['password'])) {
                        $msg = "Login successful";
                        
                        if ($userCheck == 'Customer') {
                            // Set session data for customer
                            $session->set('userType', 'Customer');

                            return redirect()->to(base_url('/CustomerHomeView'));
                        }
                    } else {
                        $msg = "Incorrect email or password";
                    }
                    break;
            }
        }

        $data['message'] = $msg;

        return view('templates/HomeHeader')
            . view('displayMessageView', $data)
            . view('logIn', $data)
            . view('templates/footer');
    }     
}
    
        
    
    

