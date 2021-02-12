<?php
require_once('../M/Modelo_Editar.php');
$idinfor=$_POST['idinfo'];
$identificador=$_POST['ident'];
$Nom=$_POST['nomb'];
$Tip=$_POST['tipo'];
$Descr=$_POST['des'];
$Asign=$_POST['asign'];
$Estado=$_POST['est'];


$modificar= New Modelo_Editar();
$modificar->editar_datos($identificador,$Nom, $Tip, $Descr, $Asign, $Estado, $idinfor );


?>