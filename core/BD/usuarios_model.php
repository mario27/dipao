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
	public function set($data_pass=array()) 
    {

            foreach ($data_pass as $campo => $value): 
            $$campo = $value;
            endforeach;

        $this->query="insert into usuarios values(0,'".$nom."','".$pass."',2,3)";
        $this->execute_single_query();

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