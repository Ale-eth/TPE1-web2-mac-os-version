<?php

// Mac OS
require_once 'libs/Smarty.class.php';

// Windows OS


class CategoryView{
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showHome(){
        $this->smarty->display('templates\home.tpl');
    }

    // Show

    public function showCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates\show\categories.tpl');
    }

    public function showProducts($array_products){
        $this->smarty->assign('products', $array_products);
        $this->smarty->display('templates\show\category.tpl');
    }


    // ABM category

    public function addCategory(){
        $this->smarty->display('templates\forms\addc-form.tpl');
     }

     public function modifyCategory($id_category){
        $this->smarty->assign('id', $id_category);
        $this->smarty->display('templates\forms\modifyc-form.tpl');
    }

}