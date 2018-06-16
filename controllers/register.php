<?php
class Register extends Controller {
	function __construct() {
		parent::__construct ();
	}
	
	function index() {
		
		$this->view->title='Register';
		$this->view->render ( 'register/index' );
	}
	
	
	function doRegister() {
		$this->model->doRegister();
		
	}
}