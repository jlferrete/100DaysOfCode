<?php 

include 'config/class.conexion.php';

class Agenda{

	protected $nombre;
	protected $domicilio;
	protected $telefono;
	protected $comentarios;
	protected $id;

	public function __construct($nom, $dom, $tel, $com, $id = ''){
		$db = new Conexion();

		$this->nombre = $db->real_escape_string($nom);
		$this->domicilio = $db->real_escape_string($dom);
		$this->telefono = $db->real_escape_string($tel);
		$this->comentarios = $db->real_escape_string($com);
		$this->id = $db->real_escape_string($id);
	}

	static function ningunDato(){
		return new self('', '', '', '', '');
	} 

	static function soloId($id){
		return new self('','','','', $id);
	}

	public function insert(){

		$db = new Conexion();

		$sql = "INSERT INTO `contactos`(`nombre`, `domicilio`, `telefono`, `comentarios`) VALUES ('$this->nombre', '$this->domicilio', '$this->telefono', '$this->comentarios')";

		$db->query($sql) ? header("location: index.php?res=insertado") : header("location: index.php?res=error");

	}

	public function update(){

		$db = new Conexion();

		$sql = "UPDATE `contactos` SET `nombre`='$this->nombre',`domicilio`='$this->domicilio',`telefono`=$this->telefono,`comentarios`='$this->comentarios' WHERE `id` = $this->id";
		
		$db->query($sql) ? header("location: index.php?res=editado") : header("location: index.php?res=error");

		
	}

    public function delete(){

        $db = new Conexion();

        $sql = "DELETE FROM `contactos` WHERE `id` = $this->id";

        $db->query($sql) ? header("location: index.php?res=eliminado") : header("location: index.php?res=error");


    }

	public function selectId(){
		$db = new Conexion();

		$sql = "SELECT * FROM `contactos` WHERE `id` = $this->id";

		$result = $db->query($sql);

		return $result;
	}

	public function select(){

		$db = new Conexion();

		$sql = "SELECT * FROM `contactos`";

		$result = $db->query($sql);

		return $result;

	}


}

 ?>