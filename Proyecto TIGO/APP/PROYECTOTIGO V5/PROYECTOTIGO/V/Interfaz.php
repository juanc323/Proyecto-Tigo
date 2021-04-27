<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimiento</title>
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
<link rel="stylesheet" href="../Decorados/EstilosInterfaz.css">

  </head>
<body>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

  <h1>PROYECTO TIGO</h1> 

  <div class="container">
    <div class="row">    
        <div class="col-lg-12 col-lg-12" >

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-12">
                  <?php 
	               $conexion=mysqli_connect("localhost:3306", "root", "", "GestinTigo");
                   ?>   
                   <?php

		              $sql="SELECT NOMBRE FROM PERSONA INNER JOIN USUARIO ON PERSONA.idPersona=USUARIO.Persona_idPersona WHERE USUARIO.idUsuario=2";
		             $result=mysqli_query($conexion,$sql);
		                while($mostrar=mysqli_fetch_row($result)){
                     ?>
                               
                     <h3 class="panel-title">Hola  <strong><?php echo $mostrar[0] ?></strong> </h3>
                     <?php 
	                    }
	                  ?>
                  </div>
                  <td>

                    <select class="form-select" aria-label="Default select example" name="filth1">
                         <option value="">Todos</option>
                         <option value="">Tipo</option>
                         <option value="">Nombre</option>
                    </select>
 
                      </td>
                   <td>
                     <select class="form-select" aria-label="Default select example" name="filth2">
                         <option selected>Filtrar Por</option>
                         <?php
                          $filt="SELECT idTipo_Modulo FROM TIPO_MODULO";
                          $result=mysqli_query($conexion,$filt);
                          while ($resultado=mysqli_fetch_row($result)) { 
                            ?>                         
                         <option><?php echo $resultado[0] ?></option>
                         <?php                    
                           }
                         ?>

                    </select>
                    <input type="Submit" value="filtrar">

                      </td>
                  <div class="col col-xs-6 text-right">
                    <a href="CrearReq.php"><button type="button" class="btn btn-success">Crear Nuevo Requerimiento</button></a>
                    <td><a class='btn btn-info' href="EliminarReq.php"><em class='fa fa-trash'></em></a></td>
                    <td><a class="btn btn-default" href="EditarReq.php"><em class="fa fa-pencil"></em></a></td>
                  </div>
                </div>
              </div>
              <div class="panel-body col-lg-12">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th >Nombre</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Acargo</th>
                        <th>Fecha Creacion</th>
                        <th >Estado</th>
                        <th>Opcion</th>
                        <th>Comentarios</th>

                    </tr> 
                  </thead>
                  <tbody>
                  <?php 

	               $conexion=mysqli_connect("localhost:3306", "root", "", "GestinTigo");
                 $porpagina=2;
                
                 if (isset($_GET['pagina'])) {

                    $pagina=$_GET['pagina'];


                 }else{
                     $pagina = 1;

                 }

                  
                  $empieza=($pagina -1) * $porpagina;
              

                 $sqlpgnd="SELECT * from INFO_REQUERIMIENTO INNER JOIN ESTADO ON ESTADO.IDESTADO=INFO_REQUERIMIENTO.ESTADO_IDESTADO  AND ESTADO.idEstado!=3 LIMIT $empieza, $porpagina";
                 $resultado= mysqli_query($conexion, $sqlpgnd);
                 
                   ?>

                   <?php 

                  $sql="SELECT * from INFO_REQUERIMIENTO INNER JOIN ESTADO ON ESTADO.IDESTADO=INFO_REQUERIMIENTO.ESTADO_IDESTADO AND ESTADO.idEstado!=3 ";
                 $result=mysqli_query($conexion,$sql);
		                while($mostrar=mysqli_fetch_array($resultado)){
		                 ?>
                     <tr>
                     <td class='hidden-xs'><?php echo $mostrar['Identificador'] ?></td>
                     <td><?php echo $mostrar['Nombre'] ?></td>
                     <td><?php echo $mostrar['Tipo_Modulo_Modulo_idTipo_Modulo'] ?></td>
                     <td><textarea name="" id="" cols="500" rows="3" readonly onmousedown="return false;"><?php echo $mostrar['Descripcion'] ?></textarea></td>
                     <td><?php echo $mostrar['Nombre_asign'] ?></td>
                     <td><?php echo $mostrar['FechaCreacion'] ?></td>
                     <td><?php echo $mostrar['Tipo_Modulo'] ?></td>


                     <form method="post" action="../C/Controlador_Eliminareq.php">
                       <input type="hidden" name="elimid" value="<?php echo $mostrar['idInfo_Requerimiento']?>">
                       <input type="hidden" name="elimiden" value="<?php echo $mostrar['Identificador']?>">
                         <label>
                          <td><input type="Submit" id="<?php echo $mostrar['idInfo_Requerimiento'] ?>" class='btn btn-info' value="Eliminar" class='fa fa-trash'></td> 
                               </label>
                                    </form>


                     <form method="post" action="../C/Controlador_Coment.php">
                       <input type="hidden" name="idident" value="<?php echo $mostrar['idInfo_Requerimiento']?>">
                         <label>
                          <td><input type="Submit" id="<?php echo $mostrar['idInfo_Requerimiento'] ?>" class='btn btn-light' value="Ver Comentarios"></td> 
                               </label>
                                    </form>

                            </tr>

	                  <?php 
	                    }    
                                
	                  ?>

        


                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                    <li><a href="#">Exportar Excel</a></li>
                    </ul>
                    <ul class="pagination hidden-xs pull-right">

                    <?php
  $query= "SELECT * from INFO_REQUERIMIENTO INNER JOIN ESTADO ON ESTADO.IDESTADO=INFO_REQUERIMIENTO.ESTADO_IDESTADO AND ESTADO.idEstado!=3";

  $resultado= mysqli_query($conexion,$query);
  $totalregistros=mysqli_num_rows($resultado);
  $totalpaginas=ceil($totalregistros / $porpagina);

  
  for($i=1;$i<=$totalpaginas;$i++){
      
         //echo "<li><a href='Interfaz.php?pagina=".$i."'>".$i."</a></li>";
         echo "<li class='page-item' active><a class='page-link' href='Interfaz.php?pagina=".$i."'>".$i."</a></li>";
        }   



                    ?>


                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div>
</div>
</div>
<div class="row">
<a href="Index.html"><button type="button" class="btn btn-light" id="regre">REGRESAR</button></a>
<a href="../Sesiones/Logout.php"><button type="button" class="btn btn-light" id="sesioncer">CERRAR SESION</button></a>
</div>

</body>
</html>