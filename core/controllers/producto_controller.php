<?php session_start();

	$acciones="";
	if(isset($_POST["act"]) || isset($_GET["act"]))
	{
		$acciones=isset($_POST["act"])?$_POST["act"]:$_GET["act"];

		require_once ("../BD/producto_model.php");
	}

 
		switch ($acciones) { 
			case 'get_all':

			$productos=new Productos();
			//return $actividades->get_all();
			print_r($productos->get_all());

			break;

			case 'get_pro':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=10;
			print_r($productos->get($valor));

			break;

			case 'borrar_empleado':
			$productos=new Productos();

			$id_empleado=$_POST["elim"];
			$productos->delete($id_empleado);
			break;

			case 'select_gen':

							$productos=new Productos();
							$valor=1;
							print_r($productos->get($valor));
							

			break;

			case 'select_pre':

							$productos=new Productos();
							$valor=4;
							print_r($productos->get($valor));
							

			break;

			case 'select_area':
				$productos=new Productos();
				$valor=5;
				print_r($productos->get($valor));
				# code...
			break;
			case 'select_gen1':

							$productos=new Productos();
							$valor=2;
							print_r($productos->get($valor));
							

			break;

			case 'select_unidadg':
				$productos=new Productos();
				$valor=6;
				print_r($productos->get($valor));
				# code...
			break;

			case 'select_unidadm':
				$productos=new Productos();
				$valor=7;
				print_r($productos->get($valor));
				# code...
			break;

			case 'select_marca':
				$productos=new Productos();
				$valor=8;
				print_r($productos->get($valor));
				# code...
			break;

			case 'select_sub':
				$productos=new Productos();
				$valor=9;
				print_r($productos->get($valor));
				# code...
			break;


			case 'select_sub1':

				$productos=new Productos();
				$valor=12;
				$con1=$_POST['con1'];
				$data_subs= array('con1'=>$con1,'valor'=>$valor);
				print_r($productos->set($data_subs));
				

			break;

			case 'select_cat':
				$productos=new Productos();
				$valor=11;
				print_r($productos->get($valor));
				# code...
			break;

			case 'select_nombres':

							$productos=new Productos();
							$valor=3;
							print_r($productos->get($valor));
							

			break;

			case 'select_nom':

							$productos=new Productos();
							$valor=10;
							$con1=$_POST['con1'];
							$data_nombres= array('con1'=>$con1,'valor'=>$valor);
							print_r($productos->set($data_nombres));
							

			break;

			case 'asignar_area':

							$productos=new Productos();
							$valor=11;
							$va1=$_POST['va1'];
							$data_areas= array('va1'=>$va1,'valor'=>$valor);
							$productos->set($data_areas);
							

			break;

			case 'asignar_categorias':

				$productos=new Productos();
				$valor=14;
				$va1=$_POST['va1'];
				$n=$_POST['n'];
				$s=$_POST['s'];
				$data_cat= array('va1'=>$va1,'s'=>$s,'n'=>$n,'valor'=>$valor);
				$productos->set($data_cat);
				

			break;

			case 'insertar_producto':

				$productos=new Productos();
				//$proyecto=$_SESSION["Proyecto"];

				$nom=$_POST["nom"];
				$mar=$_POST['mar'];
				$pre=$_POST['pre'];
				$equi=$_POST["equi"];
				$valor=7;
				$data_pro= array('nom'=>$nom,'mar'=>$mar,'pre'=>$pre,'equi'=>$equi,'valor'=>$valor);
		    	$productos->set($data_pro);//retorna el archivo de conexion
			
			break;

			case 'insertar_nuevon':
				$productos=new Productos();

				$nom=$_POST["nom"];
				$subi=$_POST["subi"];
				$valor=6;
				$data_nombres=array('nom'=>$nom,'valor'=>$valor,'subi'=>$subi);
				$productos->set($data_nombres);
				break;
			
			
			
			default:
				//echo "esta mal esto";
			break;

			
		}
	

	
?>