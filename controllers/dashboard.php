<?php
class Dashboard extends  Controller{
	
	public function __construct(){
		parent::__construct();
		Auth::handleLogin();
	}
	
	function index(){
		$this->view->title='Dashboard';
		$this->view->render('dashboard/index');
	}
	
	function logout(){
		Session::destroy();
		header('location: ' . URL .  'login');
		exit;
	}
	
	
} 