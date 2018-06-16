<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */


class Index extends Controller{
	function __construct(){
		parent::__construct();
		//echo "We are in Index";
		
	}
	
	function index() {
		$this->view->title='Home';
		$this->view->render('index/index');
	}
}