<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */
class About extends Controller {
	function __construct() {
		parent::__construct ();
	}
	
	function index() {
		$this->view->title='About';
		$this->view->render ( 'about/index' );
	}
	
	function nsamba($myname='Name',$age='20',$sex='male'){
		
		$this->view->myname=$myname;
		$this->view->age=$age;
		$this->view->sex=$sex;
		$this->view->render ( "nsamba/index" );
		
	}
}