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

Class Modelo_Creacion{

public function __construct(){
    $this->db=Conexion::conex();
    }

public function Crear_Datos($nombre, $tipo,$acargo,$idreq,$descripcion){

date_default_timezone_set('America/Bogota');
$fecha=date("y-m-d H:i:s");

    $sql=mysqli_query($this->db,"INSERT INTO INFO_REQUERIMIENTO VALUES('','$tipo',1,'$fecha',1,'$descripcion','$nombre','$acargo',$idreq);");

    if ($sql==true) {
    
        echo "<center>REQUERIMIENTO CREADO</center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/Interfaz.php'>CONTINUAR</a><center>";


    }else {

        echo "<center>FALLO AL CREAR EL REQUERIMIENTO </center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/CrearReq.php'>VOLVER</a><center>";

    }



}

}

?>

</body>
</html>


