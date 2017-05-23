<?php
require_once('conexion.php');
	class Empleado extends DBAbstractModel {

	public function get($id_empleado='') {
		$this->query="SELECT *FROM empleados WHERE id_empleado='".$id_empleado."'";
		$this->get_results_from_query();
		return $this->rows;
	}
	public function get_all(){

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