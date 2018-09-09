<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Curso PHP OOP Clase 6</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body style="padding:15px;">
<h3>Curso PHP OOP Clase 6</h3>

<?php

    #JSON
    // json_encode();

    Class Prueba {
        public $nombre = "Jose Luis";
        public $telefono = 666555666;
        public $casado = true;
        public $edad_hijos = array(5, 2, 1);

    }

    $clase06 = new Prueba;

    var_dump($clase06);

    $json = json_encode($clase06);

    // $obj = json_decode($json);
    // var_dump($obj);
    // echo $obj->nombre;

    $array = json_decode($json, true);

    foreach ($array as $key => $value) {
        
        if(gettype($value) != "array"){
            echo "{$key}: {$value}<br>";
        }
    }

?>
    
</body>
</html>