<?php namespace App\Models;
use CodeIgniter\Model;

    //Model Class for User
    class Administrator_Model extends Model
    {
        protected $table = 'administrator';
        protected $allowedFields = ['adminId', 'firstName', 'lastName', 'email', 'password','usertype'];

        public function getAllUsers() {
            return $this->findAll();
        }

        public function deleteUser($id) {
            $builder = $this->builder();
            $builder->delete(['adminId' => $id]);
            return $builder;
        }

        public function getUserByID($id) {
            return $this->asArray()
            ->where(['adminId' => $id])
            ->first();
        }

        public function getUserByEmail($email) {
            return $this->asArray()
            ->where(['email' => $email])
            ->first();
        }

        public function updateUser($newData, $id) {
            $builder = $this->builder();
                $builder->where('adminId', $id);
            $builder->update($newData);
                return $builder;
        }

       
            
    }
?>