<?php namespace App\Models;
use CodeIgniter\Model;

    class Basket_Model extends Model
    {
        public function insertIntoBasket($produceCode, $customerNumber)
        {
            $session = session();
            $basketData = $session->get('BasketData') ?? [];

            $existingProductKey = array_search(['produceCode' => $produceCode, 'customerNumber' => $customerNumber], $basketData);

            if ($existingProductKey !== false) {
                $basketData[$existingProductKey]['quantity'] += 1;
            } else {
                $model = new Products_Model();
                $productData = $model->getProductByIDCategory($produceCode);

                $newProduct = [
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
                    // Add other fields as needed
                ];

                $basketData[] = $newProduct;
            }

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