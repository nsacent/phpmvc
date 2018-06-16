<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */
class Login extends Controller {
	function __construct() {
		parent::__construct ();
		// echo "This is an error<br>";
		
		// $this->view->msg="This page doesnt exist!";
	}
	
	function index() {
		//require 'models/login_model.php';
		//$model=new LoginModel();
		$this->view->title='Login';
		$this->view->render ( 'login/index' );
	}
	
	function doLogin(){
		$this->model->doLogin();
	}
}