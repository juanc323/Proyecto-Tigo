<?php

Class Conexion{

 public static function conex(){
    $conexion=mysqli_connect("localhost:3306", "root", "", "GestinTigo");
    $conexion->query("SET NAMES 'utf8'");
    return $conexion;
    //mysqli_set_charset($conexion, "utf8");

    /*if ($conexion== true) {
      echo 'Conexion Correcta';
    }else {
      echo 'Conexion perdida';
    }*/
  }

 }

?>