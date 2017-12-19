<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">

  </head>

  <body>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
<?php

$nombre=$_GET['nombre'];
$rut=$_GET['rut'];

if (isset($_POST['action'])){

  try{

  $dbServername = "localhost";

$dbUsername = "root";
$dbPassword = "";
$dbName = "encuestas";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);


$result=mysqli_query($conn,'SET NAMES utf8');


$servicio=$_POST['servicio'];
$calidad=$_POST['calidad'];
$probabilidad=$_POST['probabilidad'];
$comentarios1=$_POST['comentarios1'];
$comentarios2=$_POST['comentarios2'];
$comentarios3=$_POST['comentarios3'];

$sql="REPLACE into encuestas
(nombre,
rut,
servicio,
calidad,
probabilidad,
comentarios1,
comentarios2,
comentarios3)
values
(
'$nombre',
'$rut',
$servicio,
$calidad,
  $probabilidad,
'$comentarios1',
'$comentarios2',
'$comentarios3')";

$result =mysqli_query($conn,$sql);
if (!$result) {
    printf("Falló la conexión: %s\n", mysqli_error($conn));
    exit();
}
else{
  include("mail.php");
  header("exito.php");
}

}catch(Exception $e){
  print_R($e);
  die();
}


}




 ?>

<form method="post" action="encuesta.php">
    <div class="container">

          <div class="row">
            <h5>Nombre de la Empresa: <?php echo $nombre ?></h5>
          </div>



                    <div class="row">
                      <h5>RUT de la Empresa : <?php echo $rut ?></h5>
                    </div>



        <div class="row">
            <h5>1. En general ¿Se encuentra satisfecho con el servicio entregado por ATM SpA?</h5>
              <div class="col s12">
                <table class="striped">
                  <tr class="titulo">
                  <th>Insatisfecho</th>
                  <th>Satisfecho</th>
                  <th>Muy Satisfecho</th>
                </tr>


                  <tr>
                                  <td><input type="radio" name="servicio" value="0" id="type0" required/><label for="type0" ></label></td>
                                  <td><input type="radio" name="servicio" value="1" id="type1" /><label for="type1"></label></td>
                                  <td><input type="radio" name="servicio" value="2" id="type2" /><label for="type2"></label></td>
                  </tr>
                </table>



              </div>

            </div>
            <div class="row">
              <div class="input-field col s12">
                <label for="textarea1">Deje su comentario. Tiene 200 caracteres</label>
                <textarea id="textarea0"  name="comentarios1" class="materialize-textarea" maxlength="200" data-length="200"></textarea>

            </div>


        </div>

        <div class="row">
            <h5>2.¿Cómo calificaría la calidad de los productos entregados?</h5>
              <div class="col s12">
                <table class="striped">
                  <tr class="titulo">
                  <th>Malo(a)</th>
                  <th>Bueno</th>
                  <th>Excelente</th>
                </tr>

                       <td><input type="radio" name="calidad" value="0" id="type01" required /><label for="type01" ></label></td>
                        <td><input type="radio" name="calidad" value="1" id="type11" /><label for="type11"></label></td>
                        <td><input type="radio" name="calidad" value="2" id="type21" /><label for="type21"></label></td>


                  </tr>
                </table>


              </div>
              <div class="row">
                <div class="input-field col s12">
                  <label for="textarea1">Deje su comentario. Tiene 200 caracteres</label>
                  <textarea id="textarea1"  name="comentarios2" class="materialize-textarea" maxlength="200" data-length="200"></textarea>

              </div>

        </div>

                <div class="row">
                    <h5>3. Basándose en su experiencia reciente, ¿Cuál es la probabilidad de que vuelva a contratar nuestros servicios?</h5>
                      <div class="col s12">
                        <table class="striped">
                          <tr class="titulo">
                          <th>Nada probable</th>
                          <th>Probable</th>
                          <th>Muy Probable</th>
                        </tr>
                          <tr>
                              <td><input type="radio" name="probabilidad" value="0" id="type02" required/><label for="type02"></label></td>
                             <td><input type="radio" name="probabilidad" value="1" id="type12" /><label for="type12"></label></td>
                             <td><input type="radio" name="probabilidad" value="2" id="type22" /><label for="type22"></label></td>
                          </tr>
                        </table>


                      </div>


                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <label for="textarea1">Deje su comentario. Tiene 200 caracteres</label>
                    <textarea id="textarea2"  name="comentarios3" class="materialize-textarea" maxlength="200" data-length="200"></textarea>

                </div>



      <div class="row">
        <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
          <i class="material-icons right">send</i>
        </button>
      </div>

        </div>

</form>


  </body>
</html>
