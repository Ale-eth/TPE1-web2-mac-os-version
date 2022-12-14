<?php

// Mac OS
require_once 'app/model/product.model.php';
require_once 'app/view/product.view.php';
require_once 'app/helpers/auth.helper.php';

// Windows OS

class ProductController{

    private $model;
    private $view;
    private $helper;


    public function __construct(){
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->helper = new AuthHelper();

        if(session_status() != PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    public function showHome(){
        $this->view->showHome();
    }

    public function showAllProducts(){
        $products = $this->model->getAllProducts();
        $this->view->showAllProducts($products);
    }

    public function showProduct($id_product){

        if(isset($id_product)){
            $product = $this->model->getProduct($id_product);
            $this->view->showProduct($product);
        }
    }


    // ABM product

    public function formAddProduct(){

        $this->helper->checkLoggedIn();

        $categories = $this->model->formAddProduct();
        $this->view->addProduct($categories);
    }

    public function addProduct(){

        $this->helper->checkLoggedIn();

        if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['categoria'])){
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $categoria = $_POST['categoria'];
            $descripcion = $_POST['descripcion'];
    
            $id_producto = $this->model->addProduct($nombre, $precio, $categoria, $descripcion);
        }

        header("Location: " . BASE_URL); 

    }

    public function deleteProduct($id_product){

        $this->helper->isLogged();

        if(isset($id_product)){
            $this->model->deleteProduct($id_product);
        }

        header("Location: " . BASE_URL);

    }

    public function formModifyProduct($id_product){

        $this->helper->isLogged();

        if(isset($id_product)){
            $this->view->modifyProduct($id_product);
        }
        
    }

    public function modifyProduct(){

        $this->helper->isLogged();

        if(isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['categoria'])){
            $nombre = $_POST['nombre'];
            $precio = $_POST['precio'];
            $categoria = $_POST['categoria'];
            $descripcion = $_POST['descripcion'];
            $id = $_POST['id'];
    
            $this->model->modifyProduct($id, $nombre, $precio, $categoria, $descripcion);
        }

        header("Location: " . BASE_URL);
    }

}