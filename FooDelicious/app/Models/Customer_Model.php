<?php namespace App\Models;
use CodeIgniter\Model;

    //Model Class for User
    class Customer_Model extends Model
    {
        protected $table = 'customers';
        protected $allowedFields = ['customerNumber', 'customerName', 'contactLastName', 'contactFirstName', 'phone','addressLine1','addressLine2','city','postalCode','country','creditLimit','email','password'];

        public function getAllCustomers() {
            return $this->findAll();
        }

        public function delCustomer($id) {
            $builder = $this->builder();
            $builder->delete(['customerNumber' => $id]);
            return $builder;
        }

        public function getCustomerbyID($id) {
            return $this->asArray()
            ->where(['customerNumber' => $id])
            ->first();
        }

        public function getCustomerbyEmail($email) {
            return $this->asArray()
            ->where(['email' => $email])
            ->first();
        }

        public function updatedCustomer($newData, $id) {
            $builder = $this->builder();
                $builder->where('customerNumber', $id);
            $builder->update($newData);
                return $builder;
        }

        public function getAllOrders($id) {
            $builder = $this->builder();
                $builder->where('customerNumber', $id);
                return $builder;
        }
            
    }
?>