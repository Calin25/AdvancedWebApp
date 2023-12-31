<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

//General
$routes->match(['get', 'post'], 'logIn', 'Home::logIn');
$routes->match(['get', 'post'], 'register', 'Home::register');
$routes->get('logout', 'Home::logout');
$routes->get('acceptCookies', 'Home::acceptCookies');
$routes->get('displayCookieData', 'Home::displayCookieData');

//Products 
$routes->get('deleteProduct/(:any)', 'ProductController::deleteProduct/$1');
$routes->get('BrowseProducts', 'ProductController::BrowseProducts');
$routes->get('ListOfBakedGoods', 'ProductController::ListOfBakedGoods');
$routes->get('ListOfEggsDairyView', 'ProductController::ListOfEggsDairyView');
$routes->get('ListOfExoticFruits', 'ProductController::ListOfExoticFruits');
$routes->get('ListofFruits', 'ProductController::ListofFruits');
$routes->get('ListOfJams', 'ProductController::ListOfJams');
$routes->get('ListOfSalads', 'ProductController::ListOfSalads');
$routes->get('ListOfVeg', 'ProductController::ListOfVeg');
$routes->get('ListAllProducts', 'ProductController::ListAllProducts');
$routes->get('drillDownProducts/(:any)', 'ProductController::drillDownProducts/$1');

//Administrator searchProduct
$routes->get('AdminHomeView', 'AdministratorController::AdminHomeView');
$routes->get('ManageProducts', 'AdministratorController::ManageProducts');
$routes->match(['get', 'post'], 'insertProduct', 'ProductController::insertProduct');
$routes->match(['get', 'post'], 'UpdateProduct/(:any)', 'ProductController::UpdateProduct/$1');

$routes->match(['get', 'post'], 'searchProduct', 'ProductController::searchProduct');

//Orders drillDownProducts amendOrder
$routes->get('ViewMyOrders', 'OrderController::ViewMyOrders');
$routes->get('ViewAllOrders', 'OrderController::ViewAllOrders');
$routes->get('drillDownOrder/(:any)', 'OrderController::drillDownOrder/$1');
$routes->match(['get', 'post'], 'AmendOrder/(:any)', 'OrderController::AmendOrder/$1');

//WishList
$routes->get('ViewMyWishList', 'WishListController::ViewMyWishList');
$routes->get('InsertIntoWishList/(:any)', 'WishListController::InsertIntoWishList/$1');
$routes->get('drilDownProductWishList/(:any)', 'WishListController::drilDownProductWishList/$1');

$routes->get('deleteFromWishlist/(:any)', 'WishListController::deleteFromWishlist/$1');

//Customer
$routes->get('CustomerHomeView', 'CustomerController::CustomerHomeView');
$routes->get('CustomerBrowseProducts', 'CustomerController::CustomerBrowseProducts');

//basket insertIntoBasket drillDownProductsBasket
$routes->get('insertIntoBasket/(:any)', 'BasketController::insertIntoBasket/$1');
$routes->get('viewBasket', 'BasketController::viewBasket');
$routes->get('drillDownProductsBasket/(:any)', 'BasketController::drillDownProductsBasket/$1');
$routes->get('removeFromBasket/(:any)', 'BasketController::removeFromBasket/$1');

//ViewMyWishList addReview viewAllReviews
$routes->get('ViewMyReviews', 'ReviewsController::ViewMyReviews');
$routes->get('viewAllReviews', 'ReviewsController::viewAllReviews');
$routes->match(['get', 'post'], 'AddReview/(:any)', 'OrderController::AddReview/$1');






/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
