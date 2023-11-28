<?php namespace App\Models;
use CodeIgniter\Model;

    class Products_Model extends Model
    {
        protected $table = 'products';
        protected $allowedFields = ['produceCode', 'description', 'category', 'supplier', 'quantityInStock','bulkBuyPrice','bulkSalePrice','photo'];

        public function getAllProducts() {
            return $this->findAll();
        }

        public function delProduct($categoryCode) {
            $builder = $this->builder();
            $builder->delete(['produceCode' => $categoryCode]);
            return $builder;
        }

        public function getProductByIDCategory($categoryCode) {
            return $this->asArray()
            ->where(['produceCode' => $categoryCode])
            ->first();
        }


        public function updateProduct($newData, $categoryCode) {
            $builder = $this->builder();
                $builder->where('produceCode', $categoryCode);
            $builder->update($newData);
                return $builder;
        }

        

        public function searchProduceDescription($search)
        {
            $search = '%'.$search .'%';

            
            echo "Search Term: $search<br>";
        
            $result = $this->asArray()
                ->like('description', $search)
                ->findAll();
    
        
            return $result;
        }
        
        
            
    }
?>