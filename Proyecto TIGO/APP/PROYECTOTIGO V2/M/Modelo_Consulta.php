<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
<?php

require_once('../BD/Conexion.php');

Class Consulta{


   public function __construct(){
    $this->db=Conexion::conex();
    }

   public function consultar(){

   $sql=mysqli_query($this->db,"SELECT * FROM INFO_MODULO");
   $result=mysqli_execute($sql);
   
      

      
      echo $result;
      echo 'zyyyyyy';


   
   }



   }




?>



</body>
</html>
