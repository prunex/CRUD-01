<?php include "conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="guardar.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre del Alumno"> <br>
        <input type="text" name="paterno" placeholder="Apellido paterno"> <br>
        <input type="text" name="materno" placeholder="Apellido materno"> <br>
        <input type="submit" value="Guardar">
    </form>
    
    <br>

    <table border="1">
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno</th>
        <?php
            include "conexion.php";
            $sqlSelect = $mysqli -> query("SELECT * FROM alumnos");
            while($fila = $sqlSelect -> fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['paterno'] ?></td>
            <td><?php echo $fila['materno'] ?></td>
            <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>"> Editar </a></td>
            <td><a href="borrar.php?id=<?php echo $fila['id'] ?>"> Borrar </a></td>
        </tr>
        <?php } ?>
    </table> 
</body>
</html>