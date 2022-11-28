<?php

class CategoryModel{
    private $db;

    public function __construct(){
        // Mac OS
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tiendaderopa;charset=utf8', 'root', 'admin2022');
        // Windows
        
    }


    public function getCategories(){

        $query = $this->db->prepare("SELECT * FROM categoria");
        $query->execute();

        $categories = $query->fetchAll(PDO::FETCH_OBJ);


        return $categories;
    }

    public function getCategory($id_category){

        $query = $this->db->prepare("SELECT * FROM producto WHERE id_categoriaFK = ?");
        $query->execute([$id_category]);

        $products = $query->fetchAll(PDO::FETCH_OBJ);

        $idcatprod = $products[0]->id_categoriaFK;

        $query = $this->db->prepare("SELECT * FROM categoria WHERE id_categoria = ?");
        $query->execute([$id_category]);

        $category = $query->fetchAll(PDO::FETCH_OBJ);

        
        $array_products = new ArrayObject(array($products, $category));
        
        return $array_products;
    }


    // AMB category

    public function addCategory($nombre, $descripcion){

        $query = $this->db->prepare("INSERT INTO categoria (nombre, descripcion) VALUES (?, ?)");
        $query->execute([$nombre, $descripcion]);

        return $this->db->lastInsertId();
    }

    public function deleteCategory($id_category){

        $query = $this->db->prepare('DELETE FROM categoria WHERE id_categoria = ?');
        $query->execute([$id_category]);
    }

    public function modifyCategory($id_category, $nombre, $descripcion){
        $query = $this->db->prepare("UPDATE `categoria` SET `nombre` = ?, `descripcion` = ? WHERE `categoria`.`id_categoria` = ?");
        $query->execute([$nombre, $descripcion, $id_category]);
    }

}