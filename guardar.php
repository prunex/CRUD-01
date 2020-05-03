<?php
    include "conexion.php";    

    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];

    //$sqlInsert = "INSERT INTO alumnos (nombre, paterno, materno) VALUES ('Paquito','Paco','Paquita')";
    $sqlInsert = "INSERT INTO alumnos (nombre, paterno, materno) VALUES ('$nombre', '$paterno', '$materno')";
    //echo $sqlInsert;
    
    
    $ins = $mysqli -> query($sqlInsert);
    if ($ins){
        echo "guardado";
    }else {
        echo "Errormessage:\n $mysqli->error";
    }

    //echo ($con -> query($sqlInsert)) ? "guardado" : "no guardado";
    //$mysqli -> close();
    
    $newURL = "http://localhost/PHP/CRUD-01/formulario.php";
    header('Location: '.$newURL);
?>