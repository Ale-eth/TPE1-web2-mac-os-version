<?php

// Mac OS
require_once 'app/model/category.model.php';
require_once 'app/view/category.view.php';
require_once 'app/helpers/auth.helper.php';

// Windows OS

class CategoryController{

    private $model;
    private $view;
    private $helper;

    public function __construct(){
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
        $this->helper = new AuthHelper();
    }

    public function showHome(){
        $this->view->showHome();
    }

    public function showCategories(){
        $categories = $this->model->getCategories();
        $this->view->showCategories($categories);
    }

    public function showCategory($id_category){

        if(!empty($id_category)){
            $array_products = $this->model->getCategory($id_category);
            $this->view->showProducts($array_products);
        }
        
    }


    // ABM category

    public function formAddCategory(){

        $this->helper->checkLoggedIn();

        $this->view->AddCategory();
    }

    public function addCategory(){

        $this->helper->checkLoggedIn();

        if(isset($_POST['nombre']) && isset($_POST['descripcion'])){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
    
            $id_category = $this->model->addCategory($nombre, $descripcion);
        }

        header("Location: " . BASE_URL); 

    }

    public function deleteCategory($id_category){
        $this->helper->checkLoggedIn();

        if(isset($id_category)){
            $this->model->deleteCategory($id_category);
        }

        header("Location: " . BASE_URL);

    }

    public function formModifyCategory($id_category){
        $this->helper->checkLoggedIn();

        if(isset($id_category)){
            $this->view->modifyCategory($id_category);
        }
        
    }

    public function modifyCategory(){

        $this->helper->checkLoggedIn();

        if(isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion'])){
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $id = $_POST['id'];
    
            $this->model->modifyCategory($id, $nombre, $descripcion);
        }

        header("Location: " . BASE_URL);
    }

}