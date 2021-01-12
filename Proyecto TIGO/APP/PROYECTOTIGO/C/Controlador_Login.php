<?php
error_reporting(0);

require_once('../M/Modelo_Login.php');

$Usuario=$_POST['Usuario'];
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
}




?>