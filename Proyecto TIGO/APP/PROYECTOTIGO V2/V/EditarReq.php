<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Decorados/Estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
<center><h1>Editar Requerimiento</h1></center>  
<br>
<br>

<div class="form-group">
  <label class="col-md-4 control-label" for="sistema"></label>
  <div class="col-md-4">
  <?php
  
$conexion=mysqli_connect("localhost:3306", "root", "", "GestinTigo");

$sql=mysqli_query($conexion,'SELECT * from INFO_REQUERIMIENTO INNER JOIN ESTADO ON ESTADO.IDESTADO=INFO_REQUERIMIENTO.ESTADO_IDESTADO AND ESTADO.idEstado!=3');


$numReg = mysqli_num_rows($sql);

if ($numReg>0) {
?>
<select id='marcas' name='numeroreq' class='form-control'>
<option selected>Elija el Requerimiento a Modificar</option>";


<?php
while($fila= mysqli_fetch_array($sql)){

echo "<option value='$fila[8]'.>$fila[8]</option>";

}
    ?>
 </select>   
<br><br>
<?php
 } else {
     echo "<center><h3>No Hay Requerimientos</h3></center>";
 }
 ?></div>
</div>
<br>
<br>
<input type="Submit" value="Confirmar" name="submit">
</form>



<form action="../C/Controlador_Editar.php" method="POST">
<?php
if (isset($_POST['submit'])) {

$num=$_POST['numeroreq']; 
$identificador=mysqli_query($conexion,'SELECT IDENTIFICADOR from INFO_REQUERIMIENTO INNER JOIN ESTADO ON ESTADO.IDESTADO=INFO_REQUERIMIENTO.ESTADO_IDESTADO AND ESTADO.idEstado!=3');


if ($identificador=$num) {
    $datos=mysqli_query($conexion,"SELECT * from INFO_REQUERIMIENTO INNER JOIN ESTADO ON ESTADO.IDESTADO=INFO_REQUERIMIENTO.ESTADO_IDESTADO AND ESTADO.idEstado!=3 AND IDENTIFICADOR='$num'");

    while ($campo=mysqli_fetch_array($datos)) 
    {
    ?>               <input type="hidden"  value="<?php echo $campo['idInfo_Requerimiento'] ?>" name="idinfo">
                    <center><input type="text" value="<?php echo $campo['Identificador'] ?>" readonly name="ident" ></center>  
                     <center> <input type="text" value="<?php echo $campo['Nombre'] ?>" name="nomb"></center> 
                     <center><input type="text" autocomplete="on" value="<?php echo $campo['Tipo_Modulo_Modulo_idTipo_Modulo'] ?>" name="tipo"></center>
                     <center><textarea name="des" id="" cols="50" rows="3" autocomplete="on" placeholder="<?php echo $campo['Descripcion']?>"></textarea></center>
                     <center><input type="text" autocomplete="on" value="<?php echo $campo['Nombre_asign'] ?>" name="asign">
                     <center><input type="text"autocomplete="on" value="<?php echo $campo['Tipo_Modulo'] ?>" name="est">
                     <br>
                     <br>
                     <input type="Submit" class="btn btn-primary" value="Editar"> 
                     <br>
                     <br>

    <?php    
        }
} else {
    echo 'NO SE PUDO ENCONTRAR DATOS DEL REQUERIMIENTO';
}

}
?>

<div id="btn2">
<a href="Interfaz.php"><button type="button" class="btn btn-primary">REGRESAR</button</a>
</div>
</form>
</body>
</html>


