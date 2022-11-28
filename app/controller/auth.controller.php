<?php
// Mac OS
require_once 'app/model/auth.model.php';
require_once 'app/view/auth.view.php';
require_once 'app/helpers/auth.helper.php';

class AuthController {
    private $view;
    private $model;
    private $helper;

    public function __construct(){
        $this->model = new AuthModel();
        $this->view = new AuthView();
        $this->helper = new AuthHelper();
    }

    public function showFormLogin(){
        $this->view->showFormLogin();
    }

    public function formLogin(){
        $error = null;
        $this->view->formLogin($error);
    }

    public function validateLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        // busco el usuario por email
        $user = $this->model->getUserByEmail($email);
        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($password, $user->password)) {
            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;
            header("Location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un error
            $this->view->showFormLogin("El usuario o la contraseña no existe.");
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

    public function checkLogged(){
        //$this->helper->checkLoggedIn();
        if(!isset($_SESSION['IS_LOGGED'])){
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }


// Hasher
    private function hashpw(){
        $password = 'normal';
        $hash = password_hash($password, PASSWORD_DEFAULT);
        echo $hash;
   }

}