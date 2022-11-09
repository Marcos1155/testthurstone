<?php

include("conexion.php");

registrar($conexion);

function registrar($conexion){

    $fisicas = $_POST['fisicas'];
    $biologicas = $_POST['biologicas'];
    $computacional = $_POST['computacional'];
    $comercial = $_POST['comercial'];
    $ejecutiva = $_POST['ejecutiva'];
    $persuasivo = $_POST['persuasivo'];
    $linguistico = $_POST['linguistico'];
    $humanitario = $_POST['humanitario'];
    $artistica = $_POST['artistica'];
    $musical = $_POST['musical'];
    $idestudiante = $_POST['idestudiante'];
   

    $consulta = "INSERT INTO test(idtest, cienciasfisicasresultado, cienciasbiologicasresultado, computacionalresultado,
    comercialresultado, ejecutivaresultado, persuasivoresultado, linguisticoresultado, humanitariaresultado,musicalresultado,
    idestudiantetest)
    VALUES(null,'$fisicas','$biologicas','$computacional','$comercial','$ejecutiva',
    '$persuasivo','$linguistico','$humanitario','$artistica','$musical','$idestudiante')";

  mysqli_query($conexion, $consulta);
  mysqli_close($conexion);  
}
  

?>

