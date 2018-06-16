<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */
class Help extends Controller {
	function __construct() {
		parent::__construct ();
		// echo "This is help";
	}
	function index() {
		$this->view->title='Help';
		$this->view->render ( 'help/index' );
	}
	
	function other($name = "nsamba") {
		echo "<br>hello {$name} help me";
		
	}
}