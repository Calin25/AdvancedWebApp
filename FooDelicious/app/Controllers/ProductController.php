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
                        . view('GeneralView/ProductViews/browseAllProducts')
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
                    return view('CustomerViews/customerHeader', $data)
                    . view('GeneralView/ProductViews/BakedGoodsProductsView')
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

                    return view('CustomerViews/customerHeader', $data)
                            . view('GeneralView/ProductViews/Eggs&DairyProductsView')
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
                    return view('CustomerViews/customerHeader', $data)
                        . view('GeneralView/ProductViews/BakedGoodsProductsView')
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

                    return view('CustomerViews/customerHeader', $data)
                        . view('GeneralView/ProductViews/fruitView')
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

                    return view('CustomerViews/customerHeader', $data)
                        . view('GeneralView/ProductViews/jamsViews')
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

                    return view('CustomerViews/customerHeader', $data)
                        . view('GeneralView/ProductViews/saladsView')
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

                    return view('CustomerViews/customerHeader', $data)
                        . view('GeneralView/ProductViews/vegView')
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
                    if($userType != "Administrator"){
                        return view('templates/HomeHeader', $productData)
                        . view('GeneralView/ProductViews/drillDownProduct')
                        . view('templates/footer');
                    break;
                    }
                    else{
                        return view('AdministratorViews/adminHeader', $productData)
                    . view('AdministratorViews/ManageProducts/drillDownProductAdmin')
                    . view('templates/footer');
                    }
            
                break;

                case 'Customer':
                    if($userType != "Customer"){
                        return view('templates/HomeHeader', $productData)
                        . view('GeneralView/ProductViews/drillDownProduct')
                        . view('templates/footer');
                    }else{
                        return view('CustomerViews/customerHeader', $productData)
                        . view('CustomerViews/customerDrillDown')
                        . view('templates/footer');
                    break;
                    }

                default:
                    return view('templates/HomeHeader', $productData)
                        . view('GeneralView/ProductViews/drillDownProduct')
                        . view('templates/footer');
                    break;
        }
	}

    public function editProduct($id) {

    }

    public function insertProduct(){
		
        $data = []; $msg = "";
        
        //load CI form helper
        helper(['form']);
        
        //if the user has submitted the form
        if ($this->request->getMethod() == 'post') {

            //set up the validation rules
            $rules = [ 	'produceCode' => 'required',
                        'description'  => 'required|min_length[5]',
                        'produceCode' => 'required',
                        'category' => 'required',
                        'supplier' => 'required',
                        'quantityInStock' => 'required|numeric',
                        'bulkBuyPrice' => 'required|numeric',
                        'bulkSalePrice' => 'required|numeric'
                    ];
            
            if(!$this->validate($rules))
                $data['validation'] = $this->validator;
            else {
                //form fields have passed validation

                //validate the image - correct file type & within max size
                $validateImg = $this->validate([
                    'file' => [ 'uploaded[file]',
                                'mime_in[file,image/jpg,image/jpeg,image/png,image/gif]',
                                'max_size[file,4096]', ]  ]);

                //if image not valid output message else do upload & resize & database insert
                if(!$validateImg) {
                    $msg .= "<br><br>Either file type or size (Max 4MB) not correct to create image.";
                    $msg .= "<br><br>Insert not done.";
                } else {

                    //upload file
                    $x_file = $this->request->getFile('file');
                    //the upload process may move the file to an intermediate location 
                    //& change the name, this ensures we use the original file name
                    $originalName = $x_file->getClientName();

                    //resize to our required full format and put in full folder
                    $image = \Config\Services::image()
                            ->withFile($x_file)
                            ->resize(345, 186, true, 'height')
                            ->save(FCPATH.'/assets/images/products/Full/'.$originalName);
                    $msg .= "<br><br>Upload done & image resized<br><br>";	
                    
                    //resize to thumb format and put in thumbs folder
                    $image = \Config\Services::image()
                            ->withFile($x_file)
                            ->resize(140, 76, true, 'height')
                            ->save(FCPATH.'/assets/images/products/thumbs/'.$originalName);
                    $msg .= "<br><br>image resized to thumbnail<br><br>";  
                    $model = new Products_Model;
        
                    //get values from post
                    $aProduct = [ 	'produceCode' => $_POST['produceCode'],
                                    'description'  => $_POST['description'],
                                    'category'  => $_POST['category'],
                                    'supplier'  => $_POST['supplier'],
                                    'quantityInStock'  => $_POST['quantityInStock'],
                                    'bulkBuyPrice'  => $_POST['bulkBuyPrice'],
                                    'bulkSalePrice'  => $_POST['bulkSalePrice'],
                                    'image'     => $originalName  ];

                    //check if insert to database is successful – display appropriate message
                    if ($model->save($aProduct)) {
                        $msg .= "<br><br>The insert to database has been successful<br><br>";
                    } else {
                        $msg .= "<br><br>Uh oh ... problem on insert to database<br><br>";
                    }
                }				
                //load the view to display the error / information message
                $data['message'] = $msg;
                return view('AdministratorViews/adminHeader')
                    . view('displayMessageView', $data)
                    . view('templates/footer');
            }
        }
        //load the insert author view
        return view('AdministratorViews/adminHeader', $data)
        . view('AdministratorViews/ManageProducts/insertNewProduct')
        . view('templates/footer');
    }

    public function UpdateProduct($id){

		$data = []; $msg = "";
		
		//load CI form helper
		helper(['form']);
		
		//load the author model
		$model = new Products_Model();

		//if the user has not submitted the form - load the initial form populated with data from the database
		if ($this->request->getMethod() != 'post') {
			
			$productData['product'] = $model->getProductByIDCategory($id);
			return view ('AdministratorViews/adminHeader', $productData)
				. view('AdministratorViews/ManageProducts/updateProduct')
				. view ('templates/footer');
				
		} else {
			//user has submitted the form so do validation & write to database

			//get values from post
			$aproduct = [ 	'produceCode'  => $_POST['produceCode'],
							'description' => $_POST['description'],
							'category'  => $_POST['category'],
							'supplier'  => $_POST['supplier'],
                            'quantityInStock'  => $_POST['quantityInStock'],
                            'bulkBuyPrice'  => $_POST['bulkBuyPrice'],
                            'bulkSalePrice'  => $_POST['bulkSalePrice']
                        ];

			//set up the validation rules
            $rules = [ 	'produceCode' => 'required',
                        'description'  => 'required|min_length[5]',
                        'produceCode' => 'required',
                        'category' => 'required',
                        'supplier' => 'required',
                        'quantityInStock' => 'required|numeric',
                        'bulkBuyPrice' => 'required|numeric',
                        'bulkSalePrice' => 'required|numeric'
                    ];
			
			if(!$this->validate($rules)) {
				//form fields have not passed validation - prepare errors for display
				$data['validation'] = $this->validator;
				
				//get original image name from hidden field in form - needed to reload the page to fix validation errors
				//$aproduct += ['prevImage'	=> $_POST['prevImage']];
				//$aproduct += ['image'		=> $_POST['prevImage']];
				
				//reload the update author view to allow user fix the validation errors
				//note - the errors are being passed in $data and the form data is being passed in $authorData
				$productData['product'] = $aproduct;
				return view ('AdministratorViews/adminHeader', $productData)
					. view('AdministratorViews/ManageProducts/updateProduct', $data)
					. view ('templates/footer');
				
            } else {
				//form fields have passed validation - continue with image validation & update database
				
				//validate the image - correct file type & within max size
				$validateImg = $this->validate([
					'file' => [ 'uploaded[file]',
								'mime_in[file,image/jpg,image/jpeg,image/png,image/gif]',
								'max_size[file,4096]', ] ]);

				//if image not valid output message else do upload & resize
				if(!$validateImg) {
					$msg .= "<br><br>Either file type or size (Max 4MB) not correct to create image.";
				} else {

					//upload file
					$x_file = $this->request->getFile('file');
					//the upload process may move the file to an intermediate location & change the name
					//this ensures we use the original file name
					$originalName = $x_file->getClientName();

					//resize to full format and put in full folder
					$image = \Config\Services::image()
						->withFile($x_file)
                        ->resize(240, 159, true, 'height')
                        ->save(FCPATH.'/assets/images/products/Full/'.$originalName);
					$msg .= "<br><br>Upload done & image resized<br><br>";
						
					//resize to thumb format and put in thumbs folder
					$image = \Config\Services::image()
                        ->withFile($x_file)
                        ->resize(80, 53, true, 'height')
                        ->save(FCPATH.'/assets/images/products/thumbs/'.$originalName);
					$msg .= "<br><br>image resized to thumbnail<br><br>";  
        
					//update details with new image name
					$aproduct += ['photo' => $originalName];

					//check if update to database is successful – display appropriate message
					if ($model->updateProduct($aproduct,$id))
						$msg .= "<br><br>The update to database has been successful<br><br>";
					else 
						$msg .= "<br><br>Uh oh ... problem on update to database<br><br>";
				}
				
				//load the view to display the message
				$data['message'] = $msg;
				return view('AdministratorViews/adminHeader')
					. view('displayMessageView', $data)
					. view('templates/footer');
			}
		}
	}

    public function searchProduct() {
        $model = new Products_Model();
        $search = $_POST['search'];
        $data['categoryProducts'] = $model->searchProduceDescription($search);
        $data['pager'] = $model->pager;

        $userType = session()->get('userType');
    
        switch($userType){
            case "Administrator":
                return view('AdministratorViews/adminHeader')
                    . view('GeneralView/userProductSearch', $data)
                    . view('templates/footer');
                break;
            case "Customer":
                return view('templates/HomeHeader', $data)
                    . view('GeneralView/userProductSearch', $data)
                    . view('templates/footer');
                break;
            default :
                return view('templates/HomeHeader', $data)
                    . view('GeneralView/userProductSearch', $data)
                    . view('templates/footer');
                break;
        }
        
    }
    
    
    
    

     
}