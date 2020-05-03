<?php
    include "conexion.php";
    $id = $_REQUEST['id'];
    $sqlDelete = "DELETE FROM alumnos WHERE id = $id";
    //var_dump($sqlDelete);
    $del = $mysqli -> query($sqlDelete);
    
    $formURL = "http://localhost/PHP/CRUD-01/formulario.php";
    if($del){
        header("Location: ".$formURL);
    }
    
?>