<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
     <link rel="stylesheet" href="../Decorados/Estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
<link rel="stylesheet" href="../Decorados/EstilosCrearReq.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>
<body>
<form action="../C/Controlador_Crear.php" method="post">

<div id="titl">
 <h1>Crear Nuevo Requerimiento</h1>   
</div>

<div id="nomreq">
<p>Nombre del Requerimiento</p>
<input type="text" name="nomrequ">
</div>

<div id="tipreq">
<p>Tipo del Requerimiento</p>

<select name='tiprequ' class='form-control'>
<option selected>Elija el Tipo de Requerimiento</option>
<?php
$conexion=mysqli_connect("localhost:3306", "root", "", "GestinTigo");
$sql=mysqli_query($conexion,"SELECT * FROM TIPO_MODULO");
while($fila= mysqli_fetch_array($sql)){

echo "<option value='$fila[0]'.>$fila[0]</option>";

}
    ?>
 </select>   
</div>

<div id="pers">
<p>Persona Encargada</p>
<input type="text" name="persencar">
</div>

<div id="numre">
<p>Numero de Requerimiento</p>
<input type="text" name="ident">
</div>
<div id="titl2">
<a class="" id=""  role="" aria-controls="">Descripcion del Requerimiento</a>     
</div>

<textarea class="" id="cuadro" rows="4" cols="80" placeholder="Escribe Aqui" name="descrequ"></textarea>

<br>
<br>
<div id="btn1">
<input type="Submit" class="btn btn-light" value="CREAR">    
</div>
<div id="btn2">
<a href="Interfaz.php"><button type="button" class="btn btn-light">REGRESAR</button</a>
</div>
<br>
<br>

</form>
</body>
</html>