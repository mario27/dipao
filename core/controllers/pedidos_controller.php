<?php session_start();

$acciones="";
	if(isset($_POST["act"]) || isset($_GET["act"]))
	{
		$acciones=isset($_POST["act"])?$_POST["act"]:$_GET["act"];

		require_once ("../BD/pedidos_model.php");
	}


	switch ($acciones) 
	{
		case 'get_all':
		$pedidos=new Pedidos();
		$valor=1;
		$data_productos=array('valor'=>$valor);
		print_r($pedidos->get_all($data_productos));

			
		break;

		case 'get_equivalencia':
		$pedidos=new Pedidos();
		$valor=2;
		$data_productos=array('valor'=>$valor);
		print_r($pedidos->get_all($data_productos));

		break;

		case 'get_pendientes':
		$pedidos=new Pedidos();
		$valor=3;
		$r=$_POST['r'];
		$data_productos=array('valor'=>$valor,'r'=>$r);
		print_r($pedidos->get_all($data_productos));

		break;

		case 'todo_ticketp':
		$pedidos=new Pedidos();
		$w=$_POST['w'];
		$valor=1;
		$data_productos=array('w'=>$w,'valor'=>$valor);
		print_r($pedidos->get($data_productos));

		break;

		case 'get_ticket':
		$pedidos=new Pedidos();
		$valor=4;
		$data_productos=array('valor'=>$valor);
		print_r($pedidos->get_all($data_productos));

		break;

		case 'editar_cantidad':
		$pedidos=new Pedidos();
		$e1=$_POST["e1"];
		$can=$_POST["can"];
		$valor=1;
		$data_productos=array('valor'=>$valor,'e1'=>$e1,'can'=>$can);
		print_r($pedidos->edit($data_productos));
		$data = $pedidos->mensaje;
				//print_r($data);
		?>
		<script type="text/javascript">
			Materialize.toast("<?php echo $data;?>",2000);
		</script>
		<?php

			
		break;

		case 'insertar_pedido':
		$pedidos=new Pedidos();
		$arr3=$_POST["arr3"];
		$id_usuario=$_SESSION["id_usuario"];
		$valor=1;
		$pedidos->arreglos($arr3,$valor,$id_usuario);
		var_dump($arr3);

			
		break;

		case 'autorizar_todo':
		$pedidos=new Pedidos();
		$a_uno=$_POST['a_uno'];
		$id_usuario=$_SESSION["id_usuario"];
		$valor=2;
		$pedidos->arreglos($a_uno,$valor,$id_usuario);
		$data = $pedidos->mensaje;
				//print_r($data);
		?>
		<script type="text/javascript">
			swal("<?php echo $data;?>");
		</script>
		<?php
		//var_dump($a_uno);
		
		break;

		case 'autorizar_varios':
		$pedidos=new Pedidos();
		$a_todo=$_POST['a_todo'];
		$id_usuario=$_SESSION["id_usuario"];
		$valor=3;
		$pedidos->arreglos($a_todo,$valor,$id_usuario);
		$data = $pedidos->mensaje;
				//print_r($data);
		?>
		<script type="text/javascript">
			swal("<?php echo $data;?>");
		</script>
		<?php
		//var_dump($a_uno);
		
		break;
		
		default:
			# code...
		break;
	}

?>