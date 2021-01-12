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
Class Modelo_Login{

	public function __construct(){
        $this->db=Conexion::conex();
        }

  public function Iniciar_Sesion($Usuario,$Clave){
	 $enc=md5($Clave);
     $sql=mysqli_query($this->db,"SELECT Usuario,Clave FROM PERSONA INNER JOIN USUARIO ON PERSONA.idPersona = USUARIO.Persona_idPersona WHERE Usuario = '$Usuario' AND Clave = '$enc'");

     $fila=mysqli_fetch_array($sql);
      $array_usu = $fila[0];
      $array_cont = $fila[1];


   if ($Usuario == $array_usu && $enc == $array_cont){

	session_start();
    $_SESSION['Usuario']=$u;
	header('location:../V/Index.html'); 


   }

   else if($Usuario != $array_usu && $enc != $array_cont){
	

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

}
?>



	
</body>
</html>

