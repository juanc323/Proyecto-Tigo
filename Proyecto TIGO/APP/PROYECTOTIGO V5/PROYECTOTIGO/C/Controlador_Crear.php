<?php

require_once('../M/Modelo_Crear.php');

$nombre=$_POST['nomrequ'];
$tipo=$_POST['tiprequ'];
$acargo=$_POST['persencar'];
$idreq=$_POST['ident'];
$descripcion=$_POST['descrequ'];

$Crear= new Modelo_Creacion();
$Crear->Crear_Datos($nombre, $tipo,$acargo,$idreq,$descripcion);


?>