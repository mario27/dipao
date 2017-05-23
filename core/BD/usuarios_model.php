<?php
require_once('conexion.php');
	class Usuario extends DBAbstractModel {

	public function get($usrname='',$psw=''){
		$this->query = "SELECT *from usuarios WHERE nombre='".$usrname."' and contrasena='".$psw."'";
		$this->get_results_from_query();
		foreach ($this->rows[0] as $key => $value) {
			$this->$key=$value;
		}
	}

	public function get_all($usrname='',$psw='') {
		if($usrname != '' && $psw != ''):
		$this->query = "SELECT *from usuarios WHERE nombre='".$usrname."' and contrasena='".$psw."'";
		$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1)
			return true;
		return false;
	}
	public function set() {

	}

	public function edit() {
	
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