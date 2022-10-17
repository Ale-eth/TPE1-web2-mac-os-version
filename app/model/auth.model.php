<?php

class AuthModel{
    private $db;

    public function __construct(){
        // Mac OS
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2_tiendaderopa;charset=utf8', 'root', 'admin2022');
        // Windows
        
    }

    public function getUserByEmail($email){

        $query = $this->db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $query->execute([$email]);

        $user = $query->fetch(PDO::FETCH_OBJ);

        return $user;
    }

}
