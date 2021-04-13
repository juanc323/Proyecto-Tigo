<?php

require_once('../M/Modelo_Filtros.php');

$filtro=$_POST['filth'];

$filtros=New Filtros();
$filtros->filtros_consul($filtro);

?>