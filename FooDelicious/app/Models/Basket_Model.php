<?php namespace App\Models;
use CodeIgniter\Model;
use App\Models\Products_Model;

    class Basket_Model extends Model
    {
        public function insertIntoBasket($produceCode, $customerNumber)
        {
            $session = session();
            $basketData = $session->get('BasketData') ?? [];

            $productData = (new Products_Model())->getProductByIDCategory($produceCode['produceCode']);

                $basketItem = [
                    'produceCode' => $productData['produceCode'],
                    'customerNumber' => $customerNumber,
                    'quantity' => 1,
                    'description' => $productData['description'],
                    'category' => $productData['category'],
                    'supplier' => $productData['supplier'],
                    'quantityInStock' => $productData['quantityInStock'],
                    'bulkBuyPrice' => $productData['bulkBuyPrice'],
                    'bulkSalePrice' => $productData['bulkSalePrice'],
                    'photo' => $productData['photo'],
                ];

                $basketData[] = $basketItem;

            $session->set('BasketData', $basketData);
            return $basketData;

        }

        public function viewBasket()
        {
            $session = session();
            return $session->get('BasketData') ?? [];
        }
    }
?>