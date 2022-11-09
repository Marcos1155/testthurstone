<?php

include("conexion.php");



    $usuario = $_POST['usuario'];
    $contrasenna = $_POST['contrasenna'];

    session_start();

    $_SESSION['usuario']=$usuario;


    $consulta = "SELECT * from administrador where nombreusuario='$usuario' 
    and contrasenna='$contrasenna'";

    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_num_rows($resultado);


    if ($filas) {
        echo "<script>alert('Datos correctos');
        location.href ='bdtest.php';
        </script>";
       
    } else {
        echo "<script>alert('Datos incorrectos');
        location.href ='inicio.php';
        </script>";
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);

?>

