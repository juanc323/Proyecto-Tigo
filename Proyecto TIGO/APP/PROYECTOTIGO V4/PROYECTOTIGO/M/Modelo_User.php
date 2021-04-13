<?php
class UserSession{
	
	public function __construct(){
		session_start();
	}
	
	public function setCurrentUser($usu){
		$_SESSION['usu'] = $usu;
	}
	
	public function getCurrentUser(){
		return $_SESSION['usu'];
	}

	public function closeSession(){
		session_unset();
		session_destroy();
	}
}
?>