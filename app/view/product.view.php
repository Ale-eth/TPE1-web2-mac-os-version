<?php

// Mac OS
require_once 'libs/Smarty.class.php';

// Windows OS


class ProductView{
    private $smarty;
    
    public function __construct(){
        $this->smarty = new Smarty();
    }

    public function showHome(){
        $this->smarty->display('templates\home.tpl');
    }

    // Show

    public function showAllProducts($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates\show\all-products.tpl');
    }

    public function showProduct($array_product){
        $this->smarty->assign('product', $array_product);
        $this->smarty->display('templates\show\product.tpl');
    }

    public function showCategories($categories){
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates\show\categories.tpl');
    }

    public function showProducts($array_products){
        $this->smarty->assign('products', $array_products);
        $this->smarty->display('templates\show\category.tpl');
    }

    // ABM product

    public function addProduct($categories){
        $this->smarty->assign('categories', $categories);
       $this->smarty->display('templates\forms\addp-form.tpl');
    }

    public function modifyProduct($id_product){
        $this->smarty->assign('id', $id_product);
        $this->smarty->display('templates\forms\modifyp-form.tpl');
    }

}