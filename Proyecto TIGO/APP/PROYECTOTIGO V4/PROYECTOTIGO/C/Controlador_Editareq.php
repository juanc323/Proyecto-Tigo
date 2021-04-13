<?php
require_once('../M/Modelo_Editareq.php');

$editaid=$_POST['editid'];
$editaiden=$_POST['editiden'];

$u=New Modelo_Edita();
$u->editarequ($editaid,$editaiden);

?>