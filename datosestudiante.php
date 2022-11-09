<?php

include("conexion.php");

registrar($conexion);

function registrar($conexion)
{

  $fecha = $_POST['fecha'];
  $nombre = $_POST['nombres'];
  $ciudaddomicilio = $_POST['ciudaddomicilio'];
  $edad = $_POST['edad'];
  $sexo = $_POST['sexo'];
  $estadocivil = $_POST['estadocivil'];
  $nacionalidad = $_POST['nacionalidad'];
  $gradoacademico = $_POST['gradoacademico'];
  $institutosecundariograduacion = $_POST['institutograduacion'];
  $ubicacioninstituto = $_POST['ubicacioninstituto'];
  $annograduacion = $_POST['annograduacion'];
  $carreramatriculada = $_POST['carreramatriculada'];
  $correo = $_POST['correo'];

  $consulta = "INSERT INTO estudiante(idestudiante, fecha, nombre, ciudaddomicilio, edad, sexo, estadocivil, nacionalidad,
    gradoacademico, institutosecundariograduacion,
    ubicacioninstituto, annograduacion, carreramatriculada, correo)
    VALUES(null,'$fecha','$nombre','$ciudaddomicilio','$edad','$sexo','$estadocivil','$nacionalidad','$gradoacademico',
    '$institutosecundariograduacion','$ubicacioninstituto','$annograduacion','$carreramatriculada','$correo')";

  mysqli_query($conexion, $consulta);



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>Test Thurstone</title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
  <div id="principalenvio">
    <header>
      <div class="headerenvio">
        <h1>Test thurstone</h1>
      </div>

    </header>

    <main>

      <div class="izquierdaenvio">
        <h2>Registro </h2>
        <h2>Se ha registrado exitosamente</h2><br>
        <p>Sus datos se muestran al lado de la pantalla<br>
          Compruebe que sus datos si sus datos estan <br>
          correctos, si quiere modificarlos pulse el boton<br>
          ingresar datos nuevamente
        </p>
      </div>

      <div class="derechaenvio">

        <h2>Datos Ingresados</h2>
        <ol>
          <?php

  $datosingresados = "SELECT idestudiante, fecha, nombre, ciudaddomicilio, edad, sexo, estadocivil, nacionalidad,
      gradoacademico, institutosecundariograduacion, ubicacioninstituto, annograduacion, carreramatriculada,correo 
      from estudiante where nombre='$nombre'";
  $resultado = mysqli_query($conexion, $datosingresados);

  while ($mostrar = mysqli_fetch_array($resultado)) {
      ?>

          <li>Fecha:
            <?php echo $mostrar['fecha'] ?>
          </li>
          <li>Nombre:
            <?php echo $mostrar['nombre'] ?>
          </li>
          <li>Ciudad Domicilio:
            <?php echo $mostrar['ciudaddomicilio'] ?>
          </li>
          <li>Edad:
            <?php echo $mostrar['edad'] ?>
          </li>
          <li>Sexo:
            <?php echo $mostrar['sexo'] ?>
          </li>
          <li>Estado Civil:
            <?php echo $mostrar['estadocivil'] ?>
          </li>
          <li>Nacionalidad:
            <?php echo $mostrar['nacionalidad'] ?>
          </li>
          <li>Grado Academico:
            <?php echo $mostrar['gradoacademico'] ?>
          </li>
          <li>Instituto de graduacion:
            <?php echo $mostrar['institutosecundariograduacion'] ?>
          </li>
          <li>Ubicacion del instituto:
            <?php echo $mostrar['ubicacioninstituto'] ?>
          </li>
          <li>Año de Graduacion:
            <?php echo $mostrar['annograduacion'] ?>
          </li>
          <li>Carrera Matriculada:
            <?php echo $mostrar['carreramatriculada'] ?>
          </li>
          <li>Correo:
            <?php echo $mostrar['correo'] ?>
          </li>


          <form action="test.php" method="post">
            <input style="display:none;" type="text" name="idestudiante" value="<?php echo $mostrar['idestudiante'] ?>">
            <br>
            <button type="submit" name="iniciartest">Iniciar Test</button>
          </form>
          <?php
  }
  mysqli_close($conexion);
}
          ?>
        </ol>

      </div>

    </main>

    <footer>
      <div class="footerenvio">
        <p class="parrafoenvio">Todos los derechos reservados 2022</p>
      </div>
    </footer>

  </div>
</body>


</html>