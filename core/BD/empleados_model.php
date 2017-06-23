<?php
require_once('conexion.php');
	class Empleado extends DBAbstractModel {

	public function get($id_empleado='') {
		$this->query="SELECT *FROM empleados WHERE id_empleado='".$id_empleado."'";
		$this->get_results_from_query();
		return $this->rows;
	}
	public function get_all($val='')
	{
		if ($val==1) {
			$this->query="select *from areas";
        	return $this->get_results_from_query();
		}
		if ($val==2) {
			$this->query="select *from puestos";
        	return $this->get_results_from_query();
		}
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