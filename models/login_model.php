<?php
class LoginModel extends Model{
	
	function __construct(){
		parent::__construct();
		//echo md5('nsacent');
	}
	
	public function doLogin(){
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		$sth=$this->db->prepare( "SELECT id FROM users WHERE username= ? AND password = md5(?) " );
		$sth->execute(array(
			0=>$username,
			1=>$password	
		));
		
		//$data=$sth->fetchAll();
		//print_r($data);
		$count=$sth->rowCount();
		
		if ($count>0){
			//login
			Session::init();
			Session::set('loggedIn', true);
			header('location:' . URL .  'dashboard');
		}else {
			header('location:' . URL .  'login');
		}
	}
}