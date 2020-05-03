<?php
    include "conexion.php";
    var_dump( $_POST );
    $id         = $_POST["id"];
    $nombre     = $_POST["nombre"];
    $paterno    = $_POST["paterno"];
    $materno    = $_POST["materno"];

    $sqlUpdate  = "UPDATE alumnos SET nombre = '$nombre', paterno = '$paterno', materno = '$paterno' WHERE id = $id";
    echo $sqlUpdate;

    $up = $mysqli -> query($sqlUpdate);


 
    $formURL = "http://localhost/PHP/CRUD-01/formulario.php";
    $actURL = "http://localhost/PHP/CRUD-01/actualizar.php?id=$id";
   
    if ($up){
        header("Location: ".$formURL);
    }else{
        header("Location: ".$actURL);
    }
?>