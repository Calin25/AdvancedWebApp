<?php namespace App\Models;
use CodeIgniter\Model;

    class Basket_Model extends Model
    {
        protected $table = 'wishlist';
        protected $allowedFields = ['wishListID','produceCode','customerNumberFK'];

        public function getBasket($customerNumber) {
            return $this->select('produceCode')
                ->where(['customerNumberFK' => $customerNumber])
                ->findAll();
        }

        public function addToBasket($produceCode)
        {
            $existingWish = $this->where(['produceCode' => $produceCode])->first();

            if (!$existingWish) {
                
                $data = [
                    'produceCode' => $produceCode,
                ];

                return $data;
                
            }

            return false;
        }
        
    }
?>