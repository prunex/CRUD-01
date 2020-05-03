<?php 
    include "conexion.php";
    $id = $_REQUEST['id'];
    if ( is_numeric($_REQUEST['id']) ) {
        $sqlSelect = "SELECT * FROM alumnos WHERE id = $id";
        //echo $sqlSelect;

        $sel = $mysqli -> query($sqlSelect);
        // echo $sel;

        // if (!($mysqli -> query($sqlSelect))){
        //     echo "Errormessage:\n $mysqli->error";
        // }else{echo "done";}

        if ($sel){
            $fila = $sel -> fetch_assoc();
            //echo $fila[0], $fila[1], $fila[2];
            //echo sizeof($fila);
            //var_dump($fila);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $fila['id'] ?>"> <br>
        <input type="text" name="nombre" value="<?php echo $fila['nombre'] ?>"> <br>
        <input type="text" name="paterno" value="<?php echo $fila['paterno'] ?>"> <br>
        <input type="text" name="materno" value="<?php echo $fila['materno'] ?>"> <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>