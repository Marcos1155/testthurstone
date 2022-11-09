<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <script src="https://cdn.plot.ly/plotly-2.16.1.min.js"></script>
  <script src="plotly-2.16.1.min.js"></script>
  <script src="jquery-3.6.1.js"></script>
  <title>Informe Test</title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
  <div id="informe">

    <header>
      <div class="headerinforme">
        <h1>Test Thurstone</h1>
      </div>

    </header>

    <main>
      <div class="instruccioninforme">
        <h4>Instrucciones </h4>
      </div>
      <div class="datosinforme">
        <h2>Informe Test Thurstone</h2>
        <h3>Datos Del estudiante</h3>

        <?php

        $idtest = $_POST['idtest'];
        $consulta = "SELECT * from test,estudiante where idtest='$idtest' and idestudiante=idestudiantetest";
        $resultado = mysqli_query($conexion, $consulta);
        while ($mostrar = mysqli_fetch_array($resultado)) { ?>

        <table class="tabla1">
          <tr>
            <td><b>Id</b></td>
            <td><b>Fecha</b></td>
            <td><b>nombre</b></td>
            <td><b>Domicilio</b></td>
            <td><b>Edad</b></td>
            <td><b>Sexo</b></td>
            <td><b>Estado civil</b></td>

          </tr>
          <tr>
            <td>
              <?php echo $mostrar['idestudiante'] ?>
            </td>
            <td>
              <?php echo $mostrar['fecha'] ?>
            </td>
            <td>
              <?php echo $mostrar['nombre'] ?>
            </td>
            <td>
              <?php echo $mostrar['ciudaddomicilio'] ?>
            </td>
            <td>
              <?php echo $mostrar['edad'] ?>
            </td>
            <td>
              <?php echo $mostrar['sexo'] ?>
            </td>
            <td>
              <?php echo $mostrar['estadocivil'] ?>
            </td>

          </tr>
          <tr>
            <td><b>Nacionalidad</b></td>
            <td><b>Grado Academico</b></td>
            <td><b>Instituto graduacion</b></td>
            <td><b>Ubicacion instituto</b></td>
            <td><b>Año graduacion</b></td>
            <td><b>Carrera Matriculada</b></td>
            <td><b>Correo</b></td>

          </tr>
          <tr>
            <td>
              <?php echo $mostrar['nacionalidad'] ?>
            </td>
            <td>
              <?php echo $mostrar['gradoacademico'] ?>
            </td>
            <td>
              <?php echo $mostrar['institutosecundariograduacion'] ?>
            </td>
            <td>
              <?php echo $mostrar['ubicacioninstituto'] ?>
            </td>
            <td>
              <?php echo $mostrar['annograduacion'] ?>
            </td>
            <td>
              <?php echo $mostrar['carreramatriculada'] ?>
            </td>
            <td>
              <?php echo $mostrar['correo'] ?>
            </td>

          </tr>
        </table>

        <h3>Resultados del test</h3>

        <table class="tabla1">
          <tr>
            <td><b>ID test</b></td>
            <td><b>C. Fisicas</b></td>
            <td><b>C. Biologicas</b></td>
            <td><b>Computacional</b></td>
            <td><b>Comercial</b></td>
            <td><b>Ejecutiva</b></td>
            <td><b>Persuasivo</b></td>
            <td><b>Linguistico</b></td>
            <td><b>Humanitaria</b></td>
            <td><b>Artistica</b></td>
            <td><b>Musical</b></td>
          </tr>
          <tr>
            <td>
              <?php echo $mostrar['idtest'] ?>
            </td>
            <td>
              <?php echo $mostrar['cienciasfisicasresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['cienciasbiologicasresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['computacionalresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['comercialresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['ejecutivaresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['persuasivoresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['linguisticaresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['humanitariaresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['artisticaresultado'] ?>
            </td>
            <td>
              <?php echo $mostrar['musicalresultado'] ?>
            </td>
          </tr>
        </table>
        <form>
          <input style="display:none;" type="text" class="parametro" value="Fisica">
          <input style="display:none;" type="text" class="parametro" value="Biologica">
          <input style="display:none;" type="text" class="parametro" value="Computacional">
          <input style="display:none;" type="text" class="parametro" value="Comercial">
          <input style="display:none;" type="text" class="parametro" value="Ejecutiva">
          <input style="display:none;" type="text" class="parametro" value="Persuasivo">
          <input style="display:none;" type="text" class="parametro" value="Linguistico">
          <input style="display:none;" type="text" class="parametro" value="Humanitaria">
          <input style="display:none;" type="text" class="parametro" value="Artistica">
          <input style="display:none;" type="text" class="parametro" value="Musical">

          <input style="display:none;" type="text" class="valor"
            value="<?php echo $mostrar['cienciasfisicasresultado'] ?>">
          <input style="display:none;" type="text" class="valor"
            value="<?php echo $mostrar['cienciasbiologicasresultado'] ?>">
          <input style="display:none;" type="text" class="valor"
            value="<?php echo $mostrar['computacionalresultado'] ?>">
          <input style="display:none;" type="text" class="valor" value="<?php echo $mostrar['comercialresultado'] ?>">
          <input style="display:none;" type="text" class="valor" value="<?php echo $mostrar['ejecutivaresultado'] ?>">
          <input style="display:none;" type="text" class="valor" value="<?php echo $mostrar['persuasivoresultado'] ?>">
          <input style="display:none;" type="text" class="valor" value="<?php echo $mostrar['linguisticaresultado'] ?>">
          <input style="display:none;" type="text" class="valor" value="<?php echo $mostrar['humanitariaresultado'] ?>">
          <input style="display:none;" type="text" class="valor" value="<?php echo $mostrar['artisticaresultado'] ?>">
          <input style="display:none;" type="text" class="valor" value="<?php echo $mostrar['musicalresultado'] ?>">
          <h3>Grafico de Intereses test thurstone</h3>
          <button type="button" class="generargrafica">Generar Grafica</button>
        </form>
        <script src="grafica.js"></script>
      </div>

      <div class="areagrafica" id="grafica">


      </div>


      <div class="datosinforme2">
        <form action="guardarinforme.php" method="post">
          <h2>Evaluacion del Psicologo</h2>
          <b>Test aplicado resultado</b> <br>
          <input style="display:none;" type="text" name="idtest" value="<?php echo $mostrar['idtest'] ?>"><br>
          <textarea name="resultado" cols="50" rows="5" placeholder="Ingrese el resultado del test"></textarea> <br>
          <b>Recomendaciones</b> <br>
          <textarea name="recomendaciones" cols="50" rows="5" placeholder="Ingrese Su recomendacion"></textarea>
          <input type="submit" value="Enviar evaluacion">
        </form>

        <?php
        }
        mysqli_close($conexion);
        ?>
    </main>
  </div>

  <footer>
    <div class="footerinforme">
      <p class="parrafodatos">Todos los derechos reservados 2022</p>
    </div>

  </footer>

  </div>
</body>

</html>