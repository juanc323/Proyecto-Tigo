<?php

Class Conexion{

  public static function conex(){
    $conexion=new mysqli("localhost:3306", "root", "", "GestinTigo");
    $conexion->query("SET NAMES 'utf8'");
    return $conexion;
  }

}
?>