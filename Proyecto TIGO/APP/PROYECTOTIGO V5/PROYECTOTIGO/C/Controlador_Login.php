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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../Decorados/Estilosinicio.css">
</head>
<body>

	<div class="escrib">
		<h2>Usuario o clave NO VALIDO, Por Favor Vuelva a Intentar</h2>
		<button onclick="location.href='../Inicio.html'" id="back">VOLVER</button>
	</div>

</body>
</html>
<?php	
}
}
?>	