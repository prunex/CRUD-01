<?php

    // Variables
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $DBname= "curso";

    // Create connection
    $mysqli = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sqlUseDB = "USE $DBname";

    if (!($mysqli -> query($sqlUseDB))){
        echo "Errormessage:\n $mysqli->error";
    }





    // $DBname= "curso";
    // $sqlCreateDB = "CREATE DATABASE ".$DBname;
    // $sqlCreateTable = "CREATE TABLE curso.alumnos (
    //     id INT NOT NULL AUTO_INCREMENT,
    //     nombre VARCHAR(200) NOT NULL ,
    //     paterno VARCHAR(200) NOT NULL , 
    //     materno VARCHAR(200) NOT NULL , 
    //     PRIMARY KEY (id)) ENGINE = InnoDB;";


    // // Create database   
    // if ($conn->query($sqlCreateTable) === TRUE) {
    //     echo "Query finalized successfully";
    // } else {
    //     echo "Error finalizating query: </br>" . $conn->error;
    // }

    // $conn->close();
?>