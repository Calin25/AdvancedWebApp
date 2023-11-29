<?php namespace App\Models;
use CodeIgniter\Model;

    class Orders_Model extends Model
    {
        protected $table = 'orders';
        protected $allowedFields = ['orderNumber', 'orderDate', 'requiredDate', 'shippedDate', 'status','comments','customerNumber'];

        
        public function getOrders($customerNumber) {
            return $this->asArray()
            ->where(['customerNumber' => $customerNumber])
            ->first();
        }
          
        public function insertOrder() {
            return $this->findAll();
        }

        public function updateOrder($newData, $orderNum) {
            $builder = $this->builder();
                $builder->where('orderNumber', $orderNum);
            $builder->update($newData);
                return $builder;
        }



        
    }
?>