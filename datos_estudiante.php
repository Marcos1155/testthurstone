<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>Datos Estudiante</title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
  <div id="principaldatos">

    <header>
      <div class="headerdatos">
        <h1>Test Thurstone</h1>


      </div>

    </header>

    <main>
      <div class="instrucciondatos">
        <h2>Datos del estudiante</h2>
        <h4>Instrucciones </h4>
      </div>
      <div class="datosestudiante">
        <h2>Ingrese Sus datos</h2>

        <form class="formulario1" action="datosestudiante.php" method="post">
          <input type="text" name="fecha" placeholder="Fecha" required><br>
          <input type="text" name="nombres" placeholder="Nombres" required><br>
          <input type="text" name="ciudaddomicilio" placeholder="Ciudad de Domicilio" required><br>
          <input type="text" name="edad" placeholder="Edad" required><br>
          <input type="text" name="sexo" placeholder="Sexo" required><br>
          <input type="text" name="estadocivil" placeholder="Estado Civil" required><br>
          <input type="text" name="nacionalidad" placeholder="Nacionalidad" required><br>
          <input type="text" name="gradoacademico" placeholder="Grado Academico" required><br>
          <input type="text" name="institutograduacion" placeholder="Instituto de graduacion" required><br>
          <input type="text" name="ubicacioninstituto" placeholder="Ubicacion del instituto" required><br>
          <input type="text" name="annograduacion" placeholder="Año de graduacion" required><br>
          <input type="text" name="carreramatriculada" placeholder="Carrera Matriculada" required><br>
          <input type="text" name="correo" placeholder="Correo" required><br><br>

          <button type="submit" name="registrar">Registrar</button>
        </form>
      </div>

    </main>


    <footer>
      <div class="footerdatos">
        <p class="parrafodatos">Todos los derechos reservados 2022</p>
      </div>

    </footer>

  </div>
</body>


</html>