<?php
require_once('../M/Modelo_Eliminareq.php');

$id=$_POST['elimid'];
$ident=$_POST['elimiden'];

$b=New Modelo_Elimina();
$b->eliminarequ($id,$ident);


?>