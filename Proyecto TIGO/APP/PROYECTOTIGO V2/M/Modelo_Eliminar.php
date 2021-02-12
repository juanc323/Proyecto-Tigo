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

Class Modelo_Eliminar{

public function __construct(){
    $this->db=Conexion::conex();
    }

public function eliminar_datos($num){


    $sql=mysqli_query($this->db,"UPDATE INFO_REQUERIMIENTO INNER JOIN ESTADO ON INFO_REQUERIMIENTO.ESTADO_IDESTADO= ESTADO.IDESTADO AND IDENTIFICADOR ='$num' SET INFO_REQUERIMIENTO.ESTADO_IDESTADO= 3;");

    if ($sql==true) {
    
        echo "<center>REQUERIMIENTO ELIMINADO CORRECTAMENTE</center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/Interfaz.php'>CONTINUAR</a><center>";


    }else {

        echo "<center>UPS! HUBO UN ERROR </center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/CrearReq.php'>VOLVER</a><center>";

    }



}

}

?>

</body>
</html>