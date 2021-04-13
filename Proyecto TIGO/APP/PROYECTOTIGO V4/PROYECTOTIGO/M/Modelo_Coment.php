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
<form action="../V/Crear_Coment.php" method="post">


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
 <center><h1>COMENTARIOS</h1></center>   
 <div class="container">
    <div class="row">
        <div class="col-lg-12 col-lg-12" >
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                 <div class="row">
                 <?php
                require_once('../BD/Conexion.php'); 
    Class Modelo_Interfaz{

      public function __construct(){
           $this->db=Conexion::conex();
              }

        public function Interfaz($varide){
            
           $sql1="SELECT IDENTIFICADOR FROM INFO_REQUERIMIENTO WHERE IDINFO_REQUERIMIENTO=$varide";
            $result=mysqli_query($this->db,$sql1);
            while ($mostrar=mysqli_fetch_row($result)) {
            ?>  
                <h3 class="panel-title">Requerimiento No.<?php echo $mostrar[0] ?></h3>
                  <div class="col col-xs-6 text-right">
                     <a><button type="Submit" value="<?php echo $mostrar[0] ?> " name="idin" class="btn btn-sm btn-primary btn-create">Crear Nuevo Comentario</button></a>
                  </div>
            <?php          
            }
             ?>
                 
                 <div class="panel-body col-lg-12">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Fecha De Creacion</th>
                        <th>Comentarios</th>


                    </tr> 
                    </thead>
                  <tbody>
                  <?php 
                  $sql2="SELECT * FROM COMENTARIO WHERE INFO_REQUERIMIENTO_IDINFO_REQUERIMIENTO=$varide";
                 $result=mysqli_query($this->db,$sql2);
		                while($mostrar=mysqli_fetch_array($result)){
                      $x=$varide;
		                 ?>
                     <tr>
                     
                     <td><?php echo $mostrar['FechaCreacionComentario'] ?></td>                     
                     <td><textarea name="" id="" cols="500" rows="3" readonly onmousedown="return false;"><?php echo $mostrar['Comentario'] ?></textarea></td>

                            </tr>

	                  <?php 
	                    }             
                    ?>
                    </tbody>
                    </table>
                    <center><a href="../V/Interfaz.php"><button type="button" class="btn btn-primary">REGRESAR</button</a> </center>
                    </div>



      
    
    
    
    <?php
     }
    }
     ?> 
     
     </form>   
</body>
</html>