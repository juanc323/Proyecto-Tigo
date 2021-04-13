<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Decorados/Estilos.css">
</head>
<body>

<?php
require_once('../BD/Conexion.php');
Class Modelo_CrearComent{

    public function __construct(){
        $this->db=Conexion::conex();
        }

public function crearcomentario($varidecoment,$coment){

    date_default_timezone_set('America/Bogota');
    $fecha=date("y-m-d H:i:s");
    $sql1=mysqli_query($this->db,"SELECT IDINFO_REQUERIMIENTO FROM INFO_REQUERIMIENTO WHERE IDENTIFICADOR='$varidecoment'");
    $infoiden1=mysqli_fetch_row($sql1);
    $infoiden=$infoiden1[0];
    $sql2=mysqli_query($this->db,"INSERT INTO COMENTARIO VALUES('','',$infoiden,'$coment','$fecha');");


    if ($sql2==true) {
    
        echo "<center>COMENTARIO CREADO</center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/Interfaz.php'>CONTINUAR</a><center>";


    }else {

        echo "<center>FALLO AL CREAR EL COMENTARIO </center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/Crear_Coment.php'>VOLVER</a><center>";

    }





}
}
?>

</body>
</html>