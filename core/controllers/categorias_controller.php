<?php
	if(isset($_POST["action"])||isset($_GET["action"]))
	{
		require_once('../BD/categorias_model.php');
		$categoria=new categoria();
		$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];

		switch($action)
		{
			case 'categorias':
				$categoria=new categoria();
				$val=1;
				print_r($categoria->get_all($val));
			break;

			case 'sub-categorias':
				$dato_categoria=$_POST["dato"];
				$categoria=new categoria();
				$val=2;
				print_r($categoria->get_all($val,$dato_categoria));
			break;

			case 'productos':
				$dato_categoria=$_POST["dato_subcategoria"];
				$categoria=new categoria();
				$val=3;
				print_r($categoria->get_all($val,$dato_categoria));
			break;
			case 'equivalencia':
				$producto_id=$_POST["producto_id"];
				$categoria=new categoria();
				print_r($categoria->get($producto_id));
			break;
			case 'insertar_requi':
				$arr1=$_POST["arr1"];
				
				$categoria=new categoria();
				print_r($categoria->set($arr1));	
			break;
			default:
				echo "Creo que ha ocurrido un error";
			break;
	    }
    }
?>
