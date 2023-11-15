<?php namespace App\Models;
use CodeIgniter\Model;

    //Model Class for User
    class Products_Model extends Model
    {
        protected $table = 'products';
        protected $allowedFields = ['produceCode', 'description', 'category', 'supplier', 'quantityInStock','bulkBuyPrice','bulkSalePrice','photo'];

        public function getAllProducts() {
            return $this->findAll();
        }

        public function delProduct($categoryCode) {
            $builder = $this->builder();
            $builder->delete(['category' => $categoryCode]);
            return $builder;
        }

        public function getProductByProduceCode($pID) {
            return $this->asArray()
            ->where(['produceCode' => $pID])
            ->first();
        }

        public function getProductByIDCategory($categoryCode) {
            return $this->asArray()
            ->where(['category' => $categoryCode])
            ->first();
        }


        public function updateProduct($newData, $categoryCode) {
            $builder = $this->builder();
                $builder->where('category', $categoryCode);
            $builder->update($newData);
                return $builder;
        }
            
    }
?>