<?php namespace App\Models;
use CodeIgniter\Model;

    class Orders_Model extends Model
    {
        protected $table = 'orders';
        protected $allowedFields = ['orderNumber', 'orderDate', 'requiredDate', 'shippedDate', 'status','comments','customerNumber'];

            
    }
?>