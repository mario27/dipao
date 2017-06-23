<?php session_start();

	if(isset($_POST["action"])||isset($_GET["action"]))
	{
		require_once('../BD/usuarios_model.php');

		$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];
		switch ($action) {
			case 'sesion':
				$user=new Usuario();
				$usrname=$_POST["usrname"];
				$psw=$_POST["psw"];
				
				$user->get($usrname);
				$has=$user->contrasena;
				// echo $has;
				if(password_verify($psw,$has))
				{
					$u=new Usuario();
					$u->get_all($usrname,$has);
					if($u->id_tipou==1)
					{
						?>
							<script type="text/javascript">
								Materialize.toast("Bienvenido",1500,'',function(){
									window.location="views/admin";
								});
							</script>
						<?php
					}
					if($u->id_tipou==3)
					{
						require_once('../BD/empleados_model.php');
						$empleados=new Empleado();
						$datos_empleados=$empleados->get($u->id_empleado);
						$datos_empleados=$datos_empleados[0];
						$_SESSION["sesion_ok"]=true;
						$_SESSION["id_usuario"]=$u->id_usuario;
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
			case 'sel_area':
				require_once('../BD/empleados_model.php');
				$areas=new Empleado();
				$val=1;
				print_r($areas->get_all($val));		
			break;
			case 'sel_puesto':
				require_once('../BD/empleados_model.php');
				$areas=new Empleado();
				$val=2;
				print_r($areas->get_all($val));		
			break;

			case 'insert_user':
			$usuario=new Usuario();
			$name=$_POST['name'];
			$ap=$_POST['ap'];			
			$am=$_POST['am'];
			$area=$_POST['area'];
			$puesto=$_POST['puesto'];
			$tipo=$_POST['tipo'];

			$con=$_POST['psw'];
			$nom=$_POST['user'];

			$pass = password_hash($con, PASSWORD_BCRYPT);
			$data_pass= array(
				'name'=>$name,
				'ap'=>$ap,
				'am'=>$am,
				'area'=>$area,
				'puesto'=>$puesto,
				'tipo'=>$tipo,
				'nom'=>$nom,
				'pass'=>$pass
				);
			print_r($usuario->set($data_pass));
			$data = $usuario->mensaje;

			?>
				<script type="text/javascript">
					Materialize.toast("<?php echo $data; ?>",2000,'',function(){
						window.location="";
					});
				</script>
			<?php
			break;
			
			case 'regresar_usuario':
			$usuario=new Usuario();
			$con1=$_POST['con1'];

			$f=$usua->edit();
			$x=json_decode($f, true);
			$con2=$x[0]['contrasena'];

			if(password_verify($con1, $con2)) 
			{
			    print_r(1);
			} 
			else 
			{
			    print_r(2);
			    //print_r($con2); 
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