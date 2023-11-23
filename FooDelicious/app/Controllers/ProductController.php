<?php

namespace App\Controllers;
use App\Models\Products_Model;

class ProductController extends BaseController
{

    public function deleteProduct($categoryCode) {
		$msg = "";
   		$model = new Products_Model;

		if ($model->delProduct($categoryCode)) {
			$msg .= "<br><br>The delete from the database has been successful<br><br>";
		}
		else {
			$msg .= "<br><br>Uh oh ... problem on delete from the database<br><br>";
		}
				
		//load the view to display the message
		$data['message'] = $msg;
		return view('AdministratorViews/adminHeader')
            . view('displayMessageView', $data)
            . view('templates/footer');
	}

    public function BrowseProducts(){
        return view('templates/HomeHeader')
        . view('GeneralView/BrowseProductsView')
        . view('templates/footer');
    }
    
    //General Functions
    public function ListAllProducts()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');

        $data =   
                [ 'produceCode' => $model->paginate(10),
                    'pager'  => $model->pager ];
       
        switch($userType){
                case 'Administrator':

                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/browseAllProductsAdminView')
                    . view('templates/footer');
                break;

                case 'Customer':

                    return view('CustomerViews/customerHeader', $data)
                        . view('CustomerViews/customerBrowseProducts')
                        . view('templates/footer');
                    break;

                default:
                
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/browseAllProducts')
                        . view('templates/footer');
                    break;
        }
        
    }

    public function ListOfBakedGoods()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');
        $categoryCode = 'Baked Goods';

        $categoryProducts = $model->where('category',$categoryCode)->paginate(7);
        $data =   
                [ 'categoryProducts' => $categoryProducts,
                    'pager'  => $model->pager ];

        switch($userType){
                case 'Administrator':
                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/BakedGoodsProductsView')
                    . view('templates/footer');

                break;

                case 'Customer':
                    return view('templates/HomeHeader', $data)
                        . view('CustomerViews/browseAllProducts')
                        . view('templates/footer');
                    break;

                default:
                        
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/BakedGoodsProductsView')
                        . view('templates/footer');
                    break;
        }
    }

    public function ListOfEggsDairyView()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');
        $categoryCode = 'Eggs & Dairy';

        $categoryProducts = $model->where('category',$categoryCode)->paginate(7);
        $data =   
                [ 'categoryProducts' => $categoryProducts,
                    'pager'  => $model->pager ];
       
        switch($userType){
                case 'Administrator':

                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/Eggs&DairyProductsView')
                    . view('templates/footer');
                break;

                case 'Customer':

                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/browseAllProducts')
                        . view('templates/footer');
                    break;

                default:
                
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/Eggs&DairyProductsView')
                        . view('templates/footer');
                    break;
        }
    }
    public function ListOfExoticFruits()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');
        $categoryCode = 'Exotic Fruit';

        $categoryProducts = $model->where('category',$categoryCode)->paginate(7);
        $data =   
                [ 'categoryProducts' => $categoryProducts,
                    'pager'  => $model->pager ];

        switch($userType){
                case 'Administrator':
                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/exoticFruitsView')
                    . view('templates/footer');

                break;

                case 'Customer':
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/browseAllProducts')
                        . view('templates/footer');
                    break;

                default:
                        
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/BakedGoodsProductsView')
                        . view('templates/footer');
                    break;
        }
    }

    public function ListofFruits()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');
        $categoryCode = 'Fruit';

        $categoryProducts = $model->where('category',$categoryCode)->paginate(7);
        $data =   
                [ 'categoryProducts' => $categoryProducts,
                    'pager'  => $model->pager ];
       
        switch($userType){
                case 'Administrator':

                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/fruitView')
                    . view('templates/footer');
                break;

                case 'Customer':

                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/browseAllProducts')
                        . view('templates/footer');
                    break;

                default:
                
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/fruitView')
                        . view('templates/footer');
                    break;
        }
    }

    public function ListOfJams()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');
        $categoryCode = 'Jams and Preserves';

        $categoryProducts = $model->where('category',$categoryCode)->paginate(7);
        $data =   
                [ 'categoryProducts' => $categoryProducts,
                    'pager'  => $model->pager ];
       
        switch($userType){
                case 'Administrator':

                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/jamsViews')
                    . view('templates/footer');
                break;

                case 'Customer':

                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/browseAllProducts')
                        . view('templates/footer');
                    break;

                default:
                
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/jamsViews')
                        . view('templates/footer');
                    break;
        }
    }

    public function ListOfSalads()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');
        $categoryCode = 'Salads';

        $categoryProducts = $model->where('category',$categoryCode)->paginate(7);
        $data =   
                [ 'categoryProducts' => $categoryProducts,
                    'pager'  => $model->pager ];
       
        switch($userType){
                case 'Administrator':

                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/saladsView')
                    . view('templates/footer');
                break;

                case 'Customer':

                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/browseAllProducts')
                        . view('templates/footer');
                    break;

                default:
                
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/saladsView')
                        . view('templates/footer');
                    break;
        }
    }

    public function ListOfVeg()
    {
        $model = new Products_Model();
        $userType = session()->get('userType');
        $categoryCode = 'Vegetables';

        $categoryProducts = $model->where('category',$categoryCode)->paginate(7);
        $data =   
                [ 'categoryProducts' => $categoryProducts,
                    'pager'  => $model->pager ];
       
        switch($userType){
                case 'Administrator':

                return view('AdministratorViews/adminHeader', $data)
                    . view('AdministratorViews/ManageProducts/vegView')
                    . view('templates/footer');
                break;

                case 'Customer':

                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/browseAllProducts')
                        . view('templates/footer');
                    break;

                default:
                
                    return view('templates/HomeHeader', $data)
                        . view('GeneralView/ProductViews/vegView')
                        . view('templates/footer');
                    break;
        }
    }

    public function drillDownProducts($id) { 
        $model = new Products_Model();
        $userType = session()->get('userType');
        $productData['product'] = $model->getProductByIDCategory($id);
       
        switch($userType){
                case 'Administrator':

                return view('AdministratorViews/adminHeader', $productData)
                    . view('AdministratorViews/ManageProducts/drillDownProductAdmin')
                    . view('templates/footer');
                break;

                case 'Customer':

                    return view('CustomerViews/customerHeader', $productData)
                        . view('CustomerViews/customerDrillDown')
                        . view('templates/footer');
                    break;

                default:
                
                    return view('templates/HomeHeader', $productData)
                        . view('GeneralView/ProductViews/drillDownProduct')
                        . view('templates/footer');
                    break;
        }
	}

     
}