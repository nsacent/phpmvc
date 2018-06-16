<?php
class RegisterModel extends Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function doRegister(){
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$data=array(
		'id'=>null,
		'username'=>$username,
		'password'=>md5($password)
		);
		
		$this->db->insert(' users ',$data);
		
		header('location:' . URL .  'login');
	}
}