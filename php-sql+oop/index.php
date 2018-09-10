<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body style="padding:15px;">

    <h1>Programa para tiendas</h1>
    <hr>

    <?php

        $mysql = new mysqli("localhost", "developer", "Studium2018;", "boludatienda");

        $resultado = $mysql->query("SELECT * FROM clientes");

        #mysqli_result
        // print_r($resultado->fetch_all());
        // print_r($resultado->fetch_all(MYSQLI_ASSOC)); UTIL
        // print_r($resultado->fetch_assoc());
        // print_r($resultado->fetch_object());

        
        /*
        ** MÉTODO 1

        $tmp = $resultado->fetch_all(MYSQLI_ASSOC);

        foreach ($tmp as $fila) {
            echo "{$fila['nombre']} {$fila['apellidos']} ({$fila['edad']})<br>";
        }
        
        */

        /*
        ** MÉTODO 2

        while($fila = $resultado->fetch_assoc()){
            echo "{$fila['nombre']} {$fila['apellidos']} ({$fila['edad']})<br>";
        }

        */

        /*
        ** MÉTODO 3
        while($fila = $resultado->fetch_object()){
            echo "{$fila->nombre} {$fila->apellidos} ({$fila->edad})<br>";
        }

        */

        $tmp = $resultado->fetch_all(MYSQLI_ASSOC);

        echo "<table style='width:100%;'>";
        foreach ($tmp as $fila) {
            echo "<tr>
                        <td>{$fila['id_clientes']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>{$fila['apellidos']}</td>
                        <td>{$fila['provincia']}</td>
                        <td>{$fila['edad']}</td>
                        <td>{$fila['telefono']}</td>
                        <td>{$fila['email']}</td>
                    
                  </tr>";
        }

        echo "</table>";

    ?>
    
</body>
</html>