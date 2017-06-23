<?php
require_once('conexion.php');
	class Usuario extends DBAbstractModel {

	public function get($usrname=''){
		$this->query = "select contrasena from usuarios where nombre='".$usrname."'";
		$this->get_results_from_query();	
		foreach ($this->rows[0] as $key => $value) {
			$this->$key=$value;
		}
	}

	public function get_all($usrname='',$has=''){
		$this->query = "SELECT *from usuarios WHERE nombre='".$usrname."' and contrasena='".$has."'";
		$this->get_results_from_query();
		foreach ($this->rows[0] as $key => $value) {
			$this->$key=$value;
		}
	}

	public function set($data_pass=array()) 
    {	
    	if(array_key_exists('name', $data_pass)) {
    		foreach ($data_pass as $campo => $value): 
	        	$$campo = $value;
	        endforeach;
    		$this->query = "SELECT *from usuarios WHERE nombre='".$nom."'";
    		$this->get_results_from_query();
			if(count($this->rows) != 1) {
		        $this->query="call insertar_usuario('".$name."','".$ap."','".$am."',".$area.",".$puesto.",".$tipo.",'".$nom."','".$pass."')";
		        $this->execute_single_query();
		        $this->mensaje = 'Usuario agregado exitosamente';
	    	}
	    	else
	    	{
	    		$this->mensaje = 'El usuario ya existe';
	    	}
		}
	    else
	    {
	    	$this->mensaje = 'No se ha agregado el usuario';
	    }
    }

    public function edit() 
    {
        $this->query="select contrasena from usuarios u, tipo_usuario t where t.id_tipou=u.id_tipou and des_tipou='Root'";
        return $this->get_results_from_query();
    
    }

    public function arreglos() {

    }

	public function delete() {
	}

	function __construct()
	{

	}

	function __destruct() {
		unset($this);
	}

	}
?>