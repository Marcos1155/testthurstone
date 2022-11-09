<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>Datos Estudiante</title>
    
    <link rel="stylesheet" type="text/css" href="estilos.css"/>
  </head>

  <body>
   <div id="dbtest">

    <header>
      <div class="headerdbtest">
      <h1>Test Thurstone</h1>
      

      </div>

    </header>

    <main>
      <div class="instrucciondbtest">
       
      <form action="bdtest.php" method="post">
        <h4>Base de datos test thurstone</h4>
          <input type="submit" value="Base de datos test thurstone">
          </form>
          
          <form action="informebd.php" method="post">
            <h4>Base de datos Imformes</h4>
          <input type="submit" value="Base de datos Informe">
          </form>
      </div>
      <div class= "datosdbtest">
        <h2>Base de Datos Test Thurstone</h2>
        <form action="informe.php" method="post">
        <input type="text" name="idtest" placeholder="Ingrese ID Test" required>
          <input type="submit" value="Iniciar Informe">
        <table class="tabla1">
          <tr>
            <td>ID test</td>
            <td>C. Fisicas</td>
            <td>C. Biologicas</td>
            <td>Computacional</td>
            <td>Comercial</td>
            <td>Ejecutiva</td>
            <td>Persuasivo</td>
            <td>Linguistico</td>
            <td>Humanitaria</td>
            <td>Artistica</td>
            <td>Musical</td>
            
          </tr>
          <?php
          $consulta = "SELECT * from test";
          $resultado = mysqli_query($conexion, $consulta);
          while ($mostrar = mysqli_fetch_array($resultado)) {

          ?>
          <tr>
            <td><?php echo $mostrar['idtest'] ?></td>
            <td><?php echo $mostrar['cienciasfisicasresultado'] ?></td>
            <td><?php echo $mostrar['cienciasbiologicasresultado'] ?></td>
            <td><?php echo $mostrar['computacionalresultado'] ?></td>
            <td><?php echo $mostrar['comercialresultado'] ?></td>
            <td><?php echo $mostrar['ejecutivaresultado'] ?></td>
            <td><?php echo $mostrar['persuasivoresultado'] ?></td>
            <td><?php echo $mostrar['linguisticaresultado'] ?></td>
            <td><?php echo $mostrar['humanitariaresultado'] ?></td>
            <td><?php echo $mostrar['artisticaresultado'] ?></td>
            <td><?php echo $mostrar['musicalresultado'] ?></td>
            
          </tr>
          <?php
          }
          mysqli_close($conexion);
          ?>


        </table>


     
      </div>

    </main>


<footer>
<div class="footerbdtest">
         <p class="parrafodatos">Todos los derechos reservados 2022</p> 
        </div>

</footer>

</div> 
  </body>


</html>
