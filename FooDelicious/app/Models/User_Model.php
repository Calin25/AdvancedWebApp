<?php namespace App\Models;
use CodeIgniter\Model;

    //Model Class for User
    class User_Model extends Model
    {
        protected $table = 'users';
        protected $allowedFields = ['memberID', 'firstName', 'lastName', 'email', 'password','usertype'];

        public function getAllUsers() {
            return $this->findAll();
        }

        public function deleteUser($id) {
            $builder = $this->builder();
            $builder->delete(['memberID' => $id]);
            return $builder;
        }

        public function getUserByID($id) {
            return $this->asArray()
            ->where(['memberID' => $id])
            ->first();
        }

        public function getUserByEmail($email) {
            return $this->asArray()
            ->where(['email' => $email])
            ->first();
        }

        public function updateUser($newData, $id) {
            $builder = $this->builder();
                $builder->where('memberID', $id);
            $builder->update($newData);
                return $builder;
        }

       
            
    }
?>