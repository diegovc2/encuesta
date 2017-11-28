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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

  $dbServername = "localhost";

$dbUsername = "root";
$dbPassword = "";
$dbName = "encuestas";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//mysql_set_charset('utf8');
$result=mysqli_query($conn,'SET NAMES utf8');


}



 ?>

<form action="encuesta.php">
    <div class="container">

          <div class="row">
            <h5>Nombre de la Empresa</h5>
<input name="nombre" type="text" id="nombre" required/>
          </div>



                    <div class="row">
                      <h5>RUT de la Empresa</h5>
          <input name="rut" type="text" id="rut" required/>
                    </div>



        <div class="row">
            <h5>1. En general ¿Se encuentra satisfecho con el servicio entregado por ATM SpA?</h5>
              <div class="col s12">
                <table class="striped">
                  <tr class="titulo">
                  <th>Muy Insatisfecho</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Muy Satisfecho</th>
                </tr>
                <tr>
                  <td>0</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  </tr>

                  <tr>
                                  <td><input type="radio" name="servicio" value="0" id="type0" /><label for="type0" required></label></td>
                                  <td><input type="radio" name="servicio" value="1" id="type1" /><label for="type1"></label></td>
                                  <td><input type="radio" name="servicio" value="2" id="type2" /><label for="type2"></label></td>
                                  <td><input type="radio" name="servicio" value="3" id="type3" /><label for="type3"></label></td>
                                  <td><input type="radio" name="servicio" value="4" id="type4" /><label for="type4"></label></td>
                                  <td><input type="radio" name="servicio" value="5" id="type5" /><label for="type5"></label></td>
                                  <td><input type="radio" name="servicio" value="6" id="type6" /><label for="type6"></label></td>
                                  <td><input type="radio" name="servicio" value="7" id="type7" /><label for="type7"></label></td>

                  </tr>
                </table>



              </div>


        </div>

        <div class="row">
            <h5>2.¿Cómo calificaría la calidad de los productos entregados?</h5>
              <div class="col s12">
                <table class="striped">
                  <tr class="titulo">
                  <th>Malo(a)</th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Excelente</th>
                </tr>
                <tr>
                  <td>0</td>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                  </tr>
                  <tr>
                       <td><input type="radio" name="calidad" value="0" id="type01" /><label for="type01" required></label></td>
                        <td><input type="radio" name="calidad" value="1" id="type11" /><label for="type11"></label></td>
                        <td><input type="radio" name="calidad" value="2" id="type21" /><label for="type21"></label></td>
                        <td><input type="radio" name="calidad" value="3" id="type31" /><label for="type31"></label></td>
                        <td><input type="radio" name="calidad" value="4" id="type41" /><label for="type41"></label></td>
                        <td><input type="radio" name="calidad" value="5" id="type51" /><label for="type51"></label></td>
                        <td><input type="radio" name="calidad" value="6" id="type61" /><label for="type61"></label></td>
                        <td><input type="radio" name="calidad" value="7" id="type71" /><label for="type71"></label></td>

                  </tr>
                </table>


              </div>


        </div>

                <div class="row">
                    <h5>3. Basándose en su experiencia reciente, ¿Cuál es la probabilidad de que vuelva a contratar nuestros servicios?</h5>
                      <div class="col s12">
                        <table class="striped">
                          <tr class="titulo">
                          <th>Nada probable</th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th>Muy Probable</th>
                        </tr>
                        <tr>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                          </tr>
                          <tr>
                              <td><input type="radio" name="probabilidad" value="0" id="type02" required/><label for="type02"></label></td>
                             <td><input type="radio" name="probabilidad" value="1" id="type12" /><label for="type12"></label></td>
                             <td><input type="radio" name="probabilidad" value="2" id="type22" /><label for="type22"></label></td>
                             <td><input type="radio" name="probabilidad" value="3" id="type32" /><label for="type32"></label></td>
                             <td><input type="radio" name="probabilidad" value="4" id="type42" /><label for="type42"></label></td>
                             <td><input type="radio" name="probabilidad" value="5" id="type52" /><label for="type52"></label></td>
                             <td><input type="radio" name="probabilidad" value="6" id="type62" /><label for="type62"></label></td>
                             <td><input type="radio" name="probabilidad" value="7" id="type72" /><label for="type72"></label></td>

                          </tr>
                        </table>


                      </div>


                </div>

                <div class="row">
                  <h1>Comentarios</h1>
                  <div class="input-field col s12">
                    <label for="textarea1">Tiene 200 caracteres</label>
                    <textarea id="textarea1" class="materialize-textarea" data-length="200"></textarea>

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
