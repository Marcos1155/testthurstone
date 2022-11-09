<?php

include("conexion.php");


registrar($conexion);

function registrar($conexion)
{

    $idtest = $_POST['idtest'];
    $resultado = $_POST['resultado'];
    $recomendaciones = $_POST['recomendaciones'];


    $consulta = "INSERT INTO informe(idinforme, testaplicadoresultado, recomendaciones,idtestinforme)
    VALUES(null,'$resultado','$recomendaciones','$idtest')";

    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    echo "<script>alert('El informe se ha guardado en la base de datos informe');
    location.href ='bdtest.php';
    </script>";


}


















?>