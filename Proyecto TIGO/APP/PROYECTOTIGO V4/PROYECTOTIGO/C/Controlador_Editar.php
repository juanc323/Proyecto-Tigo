<?php
require_once('../M/Modelo_Editar.php');

$idinfo=$_POST['ident'];
$Nom=$_POST['nombre'];
$Tip=$_POST['tipo'];
$Descr=$_POST['des'];
$Asign=$_POST['asign'];
$Estado=$_POST['est'];
$identi=$_POST['identificador'];

$modificar= New Modelo_Editar();
$modificar->editar_datos($idinfo,$Tip,$Descr,$Nom,$Asign,$Estado);



?>