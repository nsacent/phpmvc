<?php

/**
 * Created on 7th August 2015
 * @author Paxton
 */

class Model{
	function __construct(){
		$this->db=new Database(DB_TYPE,DB_HOST,DB_NAME,DB_USER,DB_PASS); 
	}
}