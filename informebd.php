<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>Datos Estudiante</title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
  <div id="informebd">

    <header>
      <div class="headerinformebd">
        <h1>Test Thurstone</h1>


      </div>

    </header>

    <main>
      <div class="instruccioninformebd">
        <h4>Instrucciones </h4>
        <form action="bdtest.php" method="post">
          <h4>Base de datos test thurstone</h4>
          <input type="submit" value="Base de datos test thurstone">
        </form>

        <form action="informebd.php" method="post">
          <h4>Base de datos Imformes</h4>
          <input type="submit" value="Base de datos Informe">
        </form>
      </div>
      <div class="datosinformebd">
        <h2>Base de Datos Test Thurstone</h2>
        <form action="bdtest.php" method="post">
          <input type="text" name="idtest" placeholder="Ingrese ID de Informe" required>
          <input type="submit" value="Enviar Informe">
          <table class="tabla1">
            <tr>
              <td>Id informe</td>
              <td>Test aplicado</td>
              <td>Recomendaciones</td>
              <td>Id test</td>


            </tr>
            <?php
          $consulta = "SELECT * from informe";
          $resultado = mysqli_query($conexion, $consulta);
          while ($mostrar = mysqli_fetch_array($resultado)) {

          ?>
            <tr>
              <td>
                <?php echo $mostrar['idinforme'] ?>
              </td>
              <td>
                <?php echo $mostrar['testaplicadoresultado'] ?>
              </td>
              <td>
                <?php echo $mostrar['recomendaciones'] ?>
              </td>
              <td>
                <?php echo $mostrar['idtestinforme'] ?>
              </td>

            </tr>
            <?php
          }
          mysqli_close($conexion);
          ?>


          </table>



      </div>

    </main>


    <footer>
      <div class="footerinformebd">
        <p class="parrafodatos">Todos los derechos reservados 2022</p>
      </div>

    </footer>

  </div>
</body>


</html>