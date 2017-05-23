<?php session_start();

	if(isset($_POST["action"])||isset($_GET["action"]))
	{
		require_once('../BD/usuarios_model.php');
		$usua=new Usuario();

		$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];
		switch ($action) {
			case 'sesion':
				$usrname=$_POST["usrname"];
				$psw=$_POST["psw"];

				if ($usua->get_all($usrname,$psw))
				{
					$usua->get($usrname,$psw);
					if ($usua->id_tipou==1) 
					{
						require_once('../BD/empleados_model.php');
						$empleados=new Empleado();
						$datos_empleados=$empleados->get($usua->id_empleado);
						$datos_empleados=$datos_empleados[0];
						// $_SESSION["sesion_ok"]=true;

						// $_SESSION["id_cliente"]=$datos_clientes["id_cliente"];
						// $_SESSION["nombre_c"]=$datos_clientes["nombre_c"];
						// $_SESSION["ap_cliente"]=$datos_empleados["apaterno"];
						// $_SESSION["am_cliente"]=$datos_empleados["amaterno"];
						?>
							<script type="text/javascript">
								Materialize.toast("Bienvenido",1500,'',function(){
									window.location="views/admin";
								});
							</script>
						<?php
					}
					if ($usua->id_tipou==3) 
					{
						require_once('../BD/empleados_model.php');
						$empleados=new Empleado();
						$datos_empleados=$empleados->get($usua->id_empleado);
						$datos_empleados=$datos_empleados[0];
						$_SESSION["sesion_ok"]=true;

						$_SESSION["id_empleado"]=$datos_empleados["id_empleado"];
						$_SESSION["nombre"]=$datos_empleados["nombre"];
						$_SESSION["ap"]=$datos_empleados["ap"];
						$_SESSION["am"]=$datos_empleados["am"];
						?>
							<script type="text/javascript">
								Materialize.toast("Bienvenido",1500,'',function(){
									window.location="views/requisiciones";
								});
							</script>
						<?php
					}
				} 
				else
				{
					?>
						<script type="text/javascript">
							Materialize.toast("Datos ingresados no encontrados",1500);
						</script>
					<?php
				}
			break;
			default:
				echo "Creo que ha ocurrido un error";
			break;
		
		}
	}
	else
	{
		echo "Error";
	}
?>