<?php namespace App\Models;
use CodeIgniter\Model;

    class Orders_Model extends Model
    {
        protected $table = 'orders';
        protected $allowedFields = ['orderNumber', 'orderDate', 'requiredDate', 'shippedDate', 'status','comments','customerNumber'];

        
        public function getOrders($customerNumber) {
            return $this->select('o.*, od.productCode, od.quantityOrdered, od.priceEach')
                ->from('orderdetails od')
                ->join('orders o', 'o.orderNumber = od.orderNumber')
                ->where(['o.customerNumber' => $customerNumber])
                ->findAll();
        }
        

        public function getAllOrders() {
            return $this->select('orderNumber,orderDate, requiredDate, shippedDate, status, comments,customerNumber')
                ->findAll();
        }

        public function getOrderByOrderNumber($orderNum) {
            return $this->asArray()
            ->where(['orderNumber' => $orderNum])
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