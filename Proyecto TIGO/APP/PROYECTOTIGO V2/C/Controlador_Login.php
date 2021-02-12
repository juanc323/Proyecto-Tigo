<?php
error_reporting(0);

require_once('../M/Modelo_Login.php');
require_once('../M/Modelo_User.php');

/*$Usuario=$_POST['Usuario'];
$Clave=$_POST['Clave'];

if ($Usuario=='' && $Clave=='') {
	echo'<br>';	
	echo'<br>';
	echo'<br>';	
	echo'<br>';
	echo "<center>Usuario No Valido, Por Favor Ingrese Un usuario valido </center>";
	echo'<br>';	
	echo'<br>';
	echo "<center>Clave No Valida, Por Favor Ingrese Una clave valida </center>";	
	echo "<br>";
	echo "<br>";
	echo "<center> <a href='../Inicio.html'>VOLVER</a> <center>";
}else {
	$Login= new Modelo_Login();
    $Login->Iniciar_Sesion($Usuario, $Clave);
}*/

$userSession = new UserSession();
$user = new Modelo_Login();



if(isset($_POST['Usuario']) && isset($_POST['Clave'])){
	
$userForm = $_POST['Usuario'];
$passForm = $_POST['Clave'];	
	
if($user->userExists($userForm, $passForm)){
		
	$userSession->setCurrentUser($userForm);
	$user->setUser($userForm);
	
	
	}else{

		echo'<br>';	
		echo'<br>';
		echo'<br>';	
		echo'<br>';
		echo "<center>Usuario No Valido, Por Favor Ingrese Un usuario valido </center>";
		echo'<br>';	
		echo'<br>';
		echo "<center>Clave No Valida, Por Favor Ingrese Una clave valida </center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../Inicio.html'>VOLVER</a> <center>";
	}
}	


?>