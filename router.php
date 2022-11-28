<?php
require_once 'app/controller/product.controller.php';
require_once 'app/controller/category.controller.php';
require_once 'app/controller/auth.controller.php';



define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

// leo el parametro accion
$action = 'home'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];  // action => about/juan
}
// $action = string(4) "home"

// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo = array(1) { [0]=> string(4) "home" } 

session_start();


$productController = new ProductController();
$categoryController = new CategoryController();
$authController = new AuthController();


switch ($params[0]) {
    case 'home':
        $productController->showHome();
        break;
    case 'productos-todos':
        $productController->showAllProducts();  //productos-todos                                       => [productos-todos]  
        break;
    case 'categorias':
        if(!empty($params[1])){
            $categoryController->showCategory($params[1]);
        }else{
            $categoryController->showCategories();   //categorias                                           => [categorias]
        }
        break;
    case 'producto':
        $productController->showProduct($params[1]);   //producto/*id_producto*                      => [producto/*id_producto*]
        break;

// ABM Product
    case 'add-product':
        $productController->addProduct(); 
        break;
    case 'delete-product':
        $productController->deleteProduct($params[1]); 
        break;
    case 'modify-product':
        $productController->modifyProduct(); 
    case 'form-add-product':
        $productController->formAddProduct(); 
        break;    
    case 'form-modify-product':
        $productController->formModifyProduct($params[1]); 
        break;

// ABM Category  

    case 'add-category':
        $categoryController->addCategory();  
        break;
    case 'delete-category':
        $categoryController->deleteCategory($params[1]);
        break;
    case 'modify-category':
        $categoryController->modifyCategory(); 
        break; 
    case 'form-add-category':
        $categoryController->formAddCategory();
        break;    
    case 'form-modify-category':
        $categoryController->formModifyCategory($params[1]); 
        break;

// Login Logout

    case 'login':
        $authController->formLogin();  
        break;
    case 'validate':
        $authController->validateLogin();  
        break;
    case 'logout':
        $authController->logout();  
        break;


// Password hasher, solo para TEST
    case 'hasher':
        $authController->hashpw();
        break;


default:
showHome();
break;
}