<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
require_once('../BD/Conexion.php');
Class Modelo_Elimina{

    public function __construct(){
        $this->db=Conexion::conex();
        }

public function editarequ($editaid,$editaiden){

      $sql=mysqli_query($this->db,"UPDATE INFO_REQUERIMIENTO SET TIPO_MODULO_MODULO_IDTIPO_MODULO='$Tip',DESCRIPCION='$Descr' ,NOMBRE='$Nom' ,NOMBRE_ASIGN='$Asign' ,ESTADO_IDESTADO=$Estado WHERE IDINFO_REQUERIMIENTO=$editaid");
      
      if($sql==true) {
    
        echo "<center>REQUERIMIENTO ELIMINADO CORRECTAMENTE</center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/Interfaz.php'>CONTINUAR</a><center>";


    }else {

        echo "<center>UPS! HUBO UN ERROR </center>";	
		echo "<br>";
		echo "<br>";
		echo "<center> <a href='../V/Interfaz.php'>VOLVER</a><center>";

    }



}

}






?>





</body>
</html>