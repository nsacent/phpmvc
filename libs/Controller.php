<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */

class Controller {
	function __construct() {
		//echo  "main controller<br>";
		$this->view =new View();
	}
	
	public function loadModel($name){
		$path='models/'.$name.'_model.php';
		
		if(file_exists($path)){
			require $path;
			$modelName=$name.'Model';
			$this->model=new $modelName();
		}
	}
}