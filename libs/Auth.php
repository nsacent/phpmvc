<?php
/**
 * 
 */
class Auth{
    
    public static function handleLogin(){
        Session::init();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            Session::destroy();
            header('location: ' . URL .  'login');
            exit;
        }
    }
    
}