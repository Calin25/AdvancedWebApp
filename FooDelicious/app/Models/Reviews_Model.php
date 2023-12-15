<?php namespace App\Models;
use CodeIgniter\Model;

    class Reviews_Model extends Model
    {
        protected $table = 'reviews';
        protected $allowedFields = ['reviewID','customerReview','stars','date','customerNumber','produceCode'];

        public function getMyReviews($customerNumber){
           
            return $this->select('products.category, reviews.stars,products.supplier,products.description,reviews.customerReview,reviews.date')
            ->join('products', 'products.produceCode = reviews.produceCode')
            ->where(['customerNumber' => $customerNumber])
            ->findAll();

        }


        
    }
?>