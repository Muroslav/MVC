<?php
class AuthController{
	

	public function login(){

	}

	public function logout(){
		unset($_SESSION['login']);

	}

	// public function register(){

	// 	//$login  = $_POST['login'];
	// 	//$password = $_POST['password'];
	// 	require_once '/../model/authlog.php';

	// 	$loginClass = new Login;
	// 	$loginClass->addLog();




	// }
}