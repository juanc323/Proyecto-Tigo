<?php

require_once('../M/Modelo_Eliminar.php');

$num=$_POST['numreq'];

$eliminar= new Modelo_Eliminar();
$eliminar->eliminar_datos($num);




?>