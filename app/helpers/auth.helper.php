<?php

class AuthHelper {

    public function login($email){
        session_start();
        $_SESSION['USER_EMAIL'] = $email;
        $_SESSION['IS_LOGGED'] = true;
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL . 'home');
    }
}
