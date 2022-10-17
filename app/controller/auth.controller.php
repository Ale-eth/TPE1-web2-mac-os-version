<?php
// Mac OS
require_once 'app/model/auth.model.php';
require_once 'app/view/auth.view.php';
require_once 'app/helpers/auth.helper.php';

class AuthController {
    private $view;
    private $model;
    private $helper;
    
    public function __construct() {
        $this->model = new AuthModel();
        $this->view = new AuthView();
        $this->helper = new AuthHelper();
    }

    public function formLogin(){
        $error = null;
        $this->view->formLogin($error);
    }

    public function validateLogin(){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $this->model->getUserByEmail($email);

        if ($user && password_verify($password, $user->password)) {
            $this->helper->login($email);
            header("Location: " . BASE_URL);
        } else {
           $this->view->formLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function logout(){
        $this->helper->logout();
    }




// Hasher
    public function hashpw(){
        $password = 'normal';
        $hash = password_hash($password, PASSWORD_DEFAULT);
        echo $hash;
   }

}