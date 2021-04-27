<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Decorados/Estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    
<?php
require_once('../BD/Conexion.php');

Class Modelo_Editar{

public function __construct(){
    $this->db=Conexion::conex();
    }

public function editar_datos($idinfo,$Tip,$Descr,$Nom,$Asign,$Estado){

          $sql2=mysqli_query($this->db,"UPDATE INFO_REQUERIMIENTO SET TIPO_MODULO_MODULO_IDTIPO_MODULO='$Tip',DESCRIPCION='$Descr' ,NOMBRE='$Nom' ,NOMBRE_ASIGN='$Asign' ,ESTADO_IDESTADO=$Estado WHERE IDINFO_REQUERIMIENTO=$idinfo");
        /*$sql2=mysqli_query($this->db,"UPDATE INFO_REQUERIMIENTO SET TIPO_MODULO_MODULO_IDTIPO_MODULO='$Tip',ESTADO_IDESTADO=$Estado,DESCRIPCION='$Descr',NOMBRE='$Nom',NOMBRE_ASIGN='$Asign' WHERE IDINFO_REQUERIMIENTO=$identificador;"); 
        echo $idinfo;
        echo "<br>";
        echo $Nom;
        echo "<br>";
        echo $Tip;
        echo "<br>";        
        echo $Descr;
        echo "<br>";
        echo $Asign;
        echo "<br>";
        echo $Estado;*/
    
        if (!$sql2) {
            echo "<center>FALLO AL MODIFICAR EL REQUERIMIENTO </center>";	
            echo "<br>";
            echo "<br>";
            echo "<center> <a href='../V/EditarReq.php'>VOLVER</a><center>";


    
    
        }else {
    
            echo "<center>REQUERIMIENTO MODIFICADO</center>";	
            echo "<br>";
            echo "<br>";
            echo "<center> <a href='../V/Interfaz.php'>CONTINUAR</a><center>";

                  


}

}
}
?>






</body>
</html>