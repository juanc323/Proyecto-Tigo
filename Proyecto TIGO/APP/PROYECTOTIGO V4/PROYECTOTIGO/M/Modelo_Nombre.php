<?php
include_once('../M/Modelo_Login.php');
include_once('../M/Modelo_User.php');

$conexion=mysqli_connect("localhost:3306", "root", "", "GestinTigo");
$userSession = new UserSession();
$User= new Modelo_Login();

$username=htmlspecialchars($_SESSION['usu']);
$result=mysqli_query($conexion,"SELECT NOMBRE FROM PERSONA INNER JOIN USUARIO ON PERSONA.idPersona=USUARIO.Persona_idPersona WHERE USUARIO.Usuario='$username'");
while ($mostrar=mysqli_fetch_row($result)){
echo $row_name=$mostrar[0];

}   

?>