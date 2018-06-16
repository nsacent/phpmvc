<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */

class View {
	function __construct() {
		// echo "This is the View<br>";
	}
	
	/**
	 * The $noInclude doesnot include the header and footer if its true
	 * Otherwise the header and footer are included by default
	 *
	 * @param string $name        	
	 * @param boolean $noInclude        	
	 */
	public function render($name, $noInclude = false) {
		
		if ($noInclude) {
			
			require 'views/' . $name . '.php';
			
		} else {
			
			require 'views/header.php';
			
			require 'views/' . $name . '.php';
			
			require 'views/footer.php';
		}
	}
}