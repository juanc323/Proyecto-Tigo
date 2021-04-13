<?php
include_once('../M/Modelo_Crear_Coment.php');

$coment=$_POST['comentario'];
$varidecoment=$_POST['idi'];

$y=New Modelo_CrearComent();
$y->crearcomentario($varidecoment,$coment);




?>