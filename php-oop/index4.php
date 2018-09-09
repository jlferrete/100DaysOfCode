<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Curso PHP OOP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body style="padding:15px;">
<h3>Curso PHP OOP Clase 4</h3>

<?php

    class Cliente {
        private $id_cliente;
        public $nombre;
        public $apellidos;
        public $email;
        public $telefono;

        public function __construct($id_cliente=false){

            if($id_cliente != false){
                
                $this->carga_usuario($id_cliente);
            }
        }

        function crea_usuario($nombre, $apellidos, $email, $telefono){
            //Insertamos los datos en la BD...

            $this->id_cliente   =21;
            $this->nombre       =$nombre;
            $this->apellidos    =$apellidos;
            $this->email        =$email;
            $this->telefono     =$telefono;

            echo "Se ha creado correctamente el usuario <strong>{$nombre}.' '{$apellidos}</strong>";
        }

        private function carga_usuario($id_cliente){
            //Carga los datos de la BD...

            $this->id_cliente   =$id_cliente;
            $this->nombre       ="José Luis";
            $this->apellidos    ="Ferrete";
            $this->email        ="JoséLuis@Ferrete.com";
            $this->telefono     ="555111222";

        }

        function compra($producto, $precio){
            // Lo guardamos en la BD...

            echo "El usuario {$this->nombre} {$this->apellidos} ha comprado el producto {$producto} por {$precio}€.";
        }

        function devolucion($id_compra){
            // Se conecta a la BD...
        
            echo "Se ha devuelto el dinero de la compra {$id_compra} al usuario";
            
        }

        function __destruct(){

        }
    
    };

    $usuario = new Cliente(13);


    var_dump($usuario);

    


?>
    
</body>
</html>