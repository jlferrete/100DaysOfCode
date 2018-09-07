<?php

include 'class.agenda.php';
/* include 'config/class.conexion.php';

$db = new Conexion(); */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi agenda</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required="required">
        <input type="text" name="domicilio" placeholder="Calle y número" required="required">
        <input type="text" name="telefono" placeholder="Teléfono" required="required">
        <textarea name="comentarios" required="required">Comentarios</textarea>
        <input type="hidden" name="accion" value="insert">
        <input type="submit" name="submit" " value="submit">
    </form>

    <?php include 'tabla.php';  ?>
    
</body>
</html>