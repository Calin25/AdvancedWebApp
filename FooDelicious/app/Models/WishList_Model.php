<?php namespace App\Models;
use CodeIgniter\Model;

    class WishList_Model extends Model
    {
        protected $table = 'wishlist';
        protected $allowedFields = ['wishListID','produceCode','customerNumberFK'];

        public function getMyWishList($customerNumber) {
            return $this->select('produceCode')
                ->where(['customerNumberFK' => $customerNumber])
                ->findAll();
        }

        public function insertIntoWishList($produceCode, $customerNumber)
        {
            $existingWish = $this->where(['produceCode' => $produceCode, 'customerNumberFK' => $customerNumber])->first();

            if (!$existingWish) {
                
                $data = [
                    'produceCode' => $produceCode,
                    'customerNumberFK' => $customerNumber,
                ];

                return $this->insert($data);
            }

            return false;
        }
        
    }
?>