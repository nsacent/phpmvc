<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */


class Error  extends Controller{
	function __construct(){
		parent::__construct();
		//echo "This is an error<br>";
		
		//$this->view->msg="This page doesnt exist!"; 
	}
	
	function index() {
		
		$this->view->title='404 Error';
		$this->view->render ( 'error/index');
	}
}