<?php namespace App\Models;
use CodeIgniter\Model;

    class WishList_Model extends Model
    {
        protected $table = 'wishlist';
        protected $allowedFields = ['wishListID','produceCode','customerNumberFK'];

        public function insertIntoWishList(){
            
        }

        public function getMyWishList($customerNumber) {
            return $this->select('produceCode')
                ->where(['customerNumber' => $customerNumber])
                ->findAll();
        }
        
    }
?>