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
			$valor=1;
			print_r($productos->get_all($valor));

			break;

			case 'get_all_cat':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=2;
			print_r($productos->get_all($valor));

			break;

			case 'get_all_equi':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=3;
			print_r($productos->get_all($valor));

			break;

			case 'get_all_ar':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=4;
			print_r($productos->get_all($valor));

			break;

			case 'get_marca_v':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=17;
			print_r($productos->get($valor));

			break;

			case 'get_all_prov':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=5;
			print_r($productos->get_all($valor));

			break;

			case 'get_pro':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=10;
			print_r($productos->get($valor));

			break;

			case 'get_areas':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=14;
			print_r($productos->get($valor));

			break;
			case 'select_gene':

			$productos=new Productos();
			//return $actividades->get_all();
			$valor=13;
			print_r($productos->get($valor));

			break;

			case 'equivalencia':

				$productos=new Productos();
				$valor=14;
				$e1=$_POST['e1'];
				$data_nombres= array('e1'=>$e1,'valor'=>$valor);
				print_r($productos->set($data_nombres));
							

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

			case 'asignar_subcategoria':

			$productos=new Productos();
			$valor=16;
			$va1=$_POST['va1'];
			$nombre_cat=$_POST['nombre_cat'];
			$cat_padre=$_POST['cat_padre'];
			$color=$_POST['color'];
			$data_cat= array('va1'=>$va1,'nombre_cat'=>$nombre_cat,'cat_padre'=>$cat_padre,'valor'=>$valor,'color'=>$color);
			$productos->set($data_cat);
			

			break;

			case 'asignar_categoria':

			$productos=new Productos();
			$valor=17;
			$nombre_cat=$_POST['nombre_cat'];
			$color=$_POST['color'];
			$data_cat= array('nombre_cat'=>$nombre_cat,'valor'=>$valor,'color'=>$color);
			$productos->set($data_cat);
			

			break;



			case 'select_prov':

				$productos=new Productos();
				$valor=12;
				print_r($productos->get($valor));
							

			break;
			case 'select_area':
				$productos=new Productos();
				$valor=5;
				print_r($productos->get($valor));
				# code...
			break;
			case 'existe':
				$productos=new Productos();
				$valor=15;
				print_r($productos->get($valor));
				# code...
			break;

			case 'no_existe':
				$productos=new Productos();
				$valor=16;
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

			case 'select_nom1':

				$productos=new Productos();
				$valor=15;
				$con1=$_POST['con1'];
				$data_noms= array('con1'=>$con1,'valor'=>$valor);
				print_r($productos->set($data_noms));
				

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


			// case 'asignar_area':

			// 				$productos=new Productos();
			// 				$valor=11;
			// 				$va1=$_POST['va1'];
			// 				$data_areas= array('va1'=>$va1,'valor'=>$valor);
			// 				$productos->set($data_areas);
							

			// break;

			// case 'asignar_categorias':

			// 	$productos=new Productos();
			// 	$valor=14;
			// 	$va1=$_POST['va1'];
			// 	$n=$_POST['n'];
			// 	$s=$_POST['s'];
			// 	$data_cat= array('va1'=>$va1,'s'=>$s,'n'=>$n,'valor'=>$valor);
			// 	$productos->set($data_cat);
				

			// break;

			case 'insertar_producto':

				$productos=new Productos();
				//$proyecto=$_SESSION["Proyecto"];

				$nom=$_POST["nom"];
				$mar=$_POST['mar'];
				$pre=$_POST['pre'];
				$equi=$_POST["equi"];
				$pro=$_POST['pro'];
				$exi=$_POST['exi'];
				$valor=7;
				$data_pro= array('nom'=>$nom,'mar'=>$mar,'pre'=>$pre,'equi'=>$equi,'valor'=>$valor,'pro'=>$pro,'exi'=>$exi);
		    	$productos->set($data_pro);//retorna el archivo de conexion
			
			break;

			case 'insertar_nuevon':
				$productos=new Productos();

				$nombre=$_POST['nombre'];
				$s=$_POST['s'];
				$cat=$_POST['cat'];
				$valor=18;
				$data_nombres=array('nombre'=>$nombre,'valor'=>$valor,'s'=>$s,'nombre'=>$nombre,'cat'=>$cat);
				$productos->set($data_nombres);
			break;

			case 'insertar_marca':
				$productos=new Productos();

				$nom=$_POST['nom'];
				$valor=19;
				$data_nombres=array('nom'=>$nom,'valor'=>$valor);
				$productos->set($data_nombres);
			break;

			case 'insertar_presentacion':
				$productos=new Productos();

				$cant=$_POST['cant'];
				$uni=$_POST['uni'];
				$valor=20;
				$data_pre=array('cant'=>$cant,'valor'=>$valor,'uni'=>$uni);
				$productos->set($data_pre);
			break;

			case 'insertar_unidadm':
				$productos=new Productos();

				$nom=$_POST['nom'];
				$valor=21;
				$data_uni=array('nom'=>$nom,'valor'=>$valor);
				$productos->set($data_uni);
			break;
			case 'insertar_unidadg':
				$productos=new Productos();

				$nom=$_POST['nom'];
				$valor=23;
				$data_uni=array('nom'=>$nom,'valor'=>$valor);
				$productos->set($data_uni);
			break;

			case 'insertar_equivalencia':
				$productos=new Productos();

				$sel1=$_POST['sel1'];
				$sel2=$_POST['sel2'];
				$cant=$_POST['cant'];
				$valor=22;
				$data_equi=array('sel1'=>$sel1,'valor'=>$valor,'sel2'=>$sel2,'cant'=>$cant);
				$productos->set($data_equi);
			break;

			
			case 'insertar_area':
				$productos=new Productos();

				$arreglo_areas=$_POST['arreglo_areas'];
				$val=24;
				//$data_equi=array('sel1'=>$sel1,'valor'=>$valor,'sel2'=>$sel2,'cant'=>$cant);
				$productos->arreglos($arreglo_areas,$val);
			break;
			case 'area':

				$productos=new Productos();
				$valor=25;
				$e1=$_POST['e1'];
				$data_nombres= array('e1'=>$e1,'valor'=>$valor);
				print_r($productos->set($data_nombres));
							

			break;

			case 'insertar_areag':

				$productos=new Productos();
				$valor=26;
				$nom=$_POST['nom'];
				$data_nombres= array('nom'=>$nom,'valor'=>$valor);
				print_r($productos->set($data_nombres));
							

			break;

			case 'insertar_provedor':

				$productos=new Productos();
				$valor=27;
				$nom=$_POST['nom'];
				$rfc=$_POST['rfc'];
				$tel=$_POST['tel'];
				$cor=$_POST['cor'];
				$data_provedor= array('nom'=>$nom,'rfc'=>$rfc,'tel'=>$tel,'cor'=>$cor,'valor'=>$valor);
				print_r($productos->set($data_provedor));
							

			break;

			
			
			
			default:
				//echo "esta mal esto";
			break;

			
		}
	

	
?>