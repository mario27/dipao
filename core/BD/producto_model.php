<?php
require_once('conexion.php');
	class Productos extends DBAbstractModel{

public function get_all($valor="") 
{
	// $this->query="select *from equivalencia e,unidad_general ug,unidad_minima um,subcategorias c,productos p,presentacion pr,marcas m,nombre_productos n,asignar_areas asi,areas a,categorias cat where p.id_producto=asi.id_producto and p.id_nombrep=n.id_nombrep and p.id_marca=m.id_marca and p.id_presentacion=pr.id_presentacion and p.id_equivalencia=e.id_equivalencia and n.id_subcategoria=c.id_subcategoria and e.id_unidadg=ug.id_unidadg and e.id_unidadm=um.id_unidadm and asi.id_area=a.id_area and cat.id_categoria=c.id_categoria";

	// $this->query="select *from productos p,nombre_productos n,presentacion pr,unidad_minima um,marcas m,categorias c where p.id_nombrep=n.id_nombrep and pr.id_presentacion=p.id_presentacion and um.id_unidadm=pr.id_unidadm and m.id_marca=p.id_marca and n.id_categoria=c.id_categoria";

	if($valor==1)
	{
			// $this->query="select *from categorias c,subcategorias s,asignar_padre a, productos p, nombre_productos n,marcas m,presentacion pr,proveedores po,existe e,unidad_minima um where c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and p.id_nombrep=n.id_nombrep and n.id_asignarp=a.id_asignarp and m.id_marca=p.id_marca and p.id_presentacion=pr.id_presentacion and po.id_provedor=p.id_provedor and e.id_existe=p.id_existe and pr.id_unidadm=um.id_unidadm ";
			// return $this->get_results_from_query();
			// $this->query="select *from categorias c,subcategorias s,asignar_padre a, productos p, nombre_productos n,marcas m,presentacion pr,proveedores po,existe e,unidad_minima um, areas are,asignar_areas aa where are.id_area=aa.id_area and p.id_producto=aa.id_producto and c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and p.id_nombrep=n.id_nombrep and n.id_asignarp=a.id_asignarp and m.id_marca=p.id_marca and p.id_presentacion=pr.id_presentacion and po.id_provedor=p.id_provedor and e.id_existe=p.id_existe and pr.id_unidadm=um.id_unidadm ";
			// return$this->get_results_from_query();

			$this->query="select *from categorias c,subcategorias s,asignar_padre a, productos p, nombre_productos n,marcas m,presentacion pr,proveedores po,existe e,unidad_minimap um, areas are,asignar_areas aa,existencia ex where ex.id_producto=p.id_producto and are.id_area=aa.id_area and p.id_producto=aa.id_producto and c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and p.id_nombrep=n.id_nombrep and n.id_asignarp=a.id_asignarp and m.id_marca=p.id_marca and p.id_presentacion=pr.id_presentacion and po.id_provedor=p.id_provedor and e.id_existe=p.id_existe and pr.id_unidadmp=um.id_unidadmp group by p.id_producto";
			return$this->get_results_from_query();

	}
	if($valor==2)
	{
		$this->query="select *from categorias c,subcategorias s,asignar_padre a where c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria";
		return $this->get_results_from_query();
	}
		if($valor==3)
	{
		$this->query="select e.id_equivalencia,ug.des_unidadg,e.cantidad,um.des_unidadm from equivalencia e, unidad_general ug,unidad_minima um where e.id_unidadg=ug.id_unidadg and e.id_unidadm=um.id_unidadm ";
		return $this->get_results_from_query();
	}
	if($valor==4)
	{
		$this->query="select *from areas";
		return $this->get_results_from_query();
	}
	if($valor==5)
	{
		$this->query="select *from proveedores";
		return $this->get_results_from_query();
	}
	if($valor==6)
	{
		$this->query="select *from categorias";
		return $this->get_results_from_query();
	}

	
}
public function get($valor="") 
{
	if($valor==1)
	{
		$this->query="select *from categorias where id_categoria not in(select id_categoria from subcategorias)";
		return $this->get_results_from_query();

	}
	if($valor==2)
	{
		$this->query="select *from equivalencia e,unidad_general ug,unidad_minima um where e.id_unidadg=ug.id_unidadg and e.id_unidadm=um.id_unidadm";
		return $this->get_results_from_query();

	}
	if($valor==3)
	{
		$this->query="select *from nombre_productos";
		return $this->get_results_from_query();

	}
	if($valor==4)
	{
		$this->query="select p.id_presentacion,p.cantidad,um.id_unidadmp,um.des_unidadmp from presentacion p,unidad_minimap um where p.id_unidadmp=um.id_unidadmp";
		return $this->get_results_from_query();
	}
	if($valor==5)
	{
		$this->query="select *from areas";
		return $this->get_results_from_query();
	}
	if($valor==6)
	{
		$this->query="select *from unidad_general";
		return $this->get_results_from_query();
	}
	if($valor==7)
	{
		$this->query="select *from unidad_minimap";
		return $this->get_results_from_query();
	}
	if($valor==8)
	{
		$this->query="select *from marcas";
		return $this->get_results_from_query();
	}
	if($valor==9)
	{
		$this->query="select *from subcategorias";
		return $this->get_results_from_query();
	}
	if($valor==10)
	{
		$this->query="select max(id_producto) from productos";
		return $this->get_results_from_query();
	}

	if($valor==11)
	{
		$this->query="select *from  categorias";
		return $this->get_results_from_query();
	}
	if($valor==12)
	{
		$this->query="select *from  proveedores";
		return $this->get_results_from_query();
	}
	if($valor==13)
	{
		$this->query="select id_subcategoria from subcategorias where des_subcategoria='Generales'";
		return $this->get_results_from_query();
	}
	if($valor==14)
	{
		$this->query="select *from areas";
		return $this->get_results_from_query();
	}
	if($valor==15)
	{
		$this->query="select id_existe from existe where des_existe='si'";
		return $this->get_results_from_query();
	}

	if($valor==16)
	{
		$this->query="select id_existe from existe where des_existe='no'";
		return $this->get_results_from_query();
	}
	if($valor==17)
	{
		$this->query="select id_marca from marcas where des_marca='Ninguna'";
		return $this->get_results_from_query();
	}
	if($valor==18)
	{
		$this->query="select *from unidad_minima";
		return $this->get_results_from_query();
	}


	
}
//////////////////////////////////////////////////////////////////////////////////////////////////////

// public function set($data_pass=array()) 
//     {	
//     	if(array_key_exists('name', $data_pass)) {
//     		foreach ($data_pass as $campo => $value): 
// 	        	$$campo = $value;
// 	        endforeach;
//     		$this->query = "SELECT *from usuarios WHERE nombre='".$nom."'";
//     		$this->get_results_from_query();
// 			if(count($this->rows) != 1) {
// 		        $this->query="call insertar_usuario('".$name."','".$ap."','".$am."',".$area.",".$puesto.",".$tipo.",'".$nom."','".$pass."')";
// 		        $this->execute_single_query();
// 		        $this->mensaje = 'Usuario agregado exitosamente';
// 	    	}
// 	    	else
// 	    	{
// 	    		$this->mensaje = 'El usuario ya existe';
// 	    	}
// 		}
// 	    else
// 	    {
// 	    	$this->mensaje = 'No se ha agregado el usuario';
// 	    }
//     }


/////////////////////////////////////////////////////////////////////////////////////////////////////

public function set($data_algo=array()) 
{ 
	foreach ($data_algo as $campo => $value): 
			$$campo = $value;
	endforeach;	

	if($valor==7)
	{
		if(array_key_exists('nom', $data_algo) && array_key_exists('mar', $data_algo))
		{

			$this->query="select id_producto from productos where id_nombrep='".$nom."' and id_marca='".$mar."' and id_presentacion='".$pre."'";
			$this->get_results_from_query();
			if(count($this->rows) != 1)
			{

				$this->query="call insertar_producto('".$nom."','".$mar."', '".$equi."','".$pre."','".$pro."','".$exi."')";
				$this->execute_single_query();
				$this->mensaje='Producto insertado correctamente';

			}
			else
			{
				$this->mensaje=2;
			}
		}
	}
	if($valor==6)
	{
		
		//$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
	}
	if($valor==10)
	{
		//"select n.id_nombrep,n.des_nombrep from nombre_productos n,asignar_padre a,categorias c, subcategorias s where n.id_asignarp=a.id_asignarp and a.id_categoria=c.id_categoria and a.id_subcategoria=s.id_subcategoria and s.id_subcategoria='".$con1."', and c.id_categoria='".$con2."'"
		// $this->query="select *from nombre_productos where id_subcategoria='".$con1."'";
		$this->query="select n.id_nombrep,n.des_nombrep from nombre_productos n,asignar_padre a,categorias c, subcategorias s where n.id_asignarp=a.id_asignarp and a.id_categoria=c.id_categoria and a.id_subcategoria=s.id_subcategoria and s.id_subcategoria='".$con1."'";
		return $this->get_results_from_query();
	}
	if($valor==11)
	{
		$this->query="insert_into asignar_areas values(0,'".$va1."')";
		return $this->get_results_from_query();
	}
	if($valor==12)
	{
		// $this->query="select c.id_categoria,c.des_categoria from categorias c,subcategorias s,asignar_padre a where c.id_categoria=s.id_categoria and a.id_subcategoria=s.id_subcategoria and a.id_categoria='".$con1."'";
		$this->query="select s.id_subcategoria, s.des_subcategoria,s.color from categorias c,subcategorias s,asignar_padre a where c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and c.id_categoria='".$con1."'";
		return $this->get_results_from_query();
	}
	if($valor==14)
	{
		$this->query="select ug.des_unidadg,e.cantidad,um.des_unidadm from equivalencia e, unidad_general ug,unidad_minima um,productos p ,asignar_equi ae where e.id_unidadg=ug.id_unidadg and e.id_unidadm=um.id_unidadm and ae.id_equivalencia=e.id_equivalencia and ae.id_producto=p.id_producto and p.id_producto='".$e1."'";
		return $this->get_results_from_query();
	}
	if($valor==15)
	{
		$this->query="select n.id_nombrep,n.des_nombrep from nombre_productos n,asignar_padre a,categorias c, subcategorias s where n.id_asignarp=a.id_asignarp and a.id_categoria=c.id_categoria and a.id_subcategoria=s.id_subcategoria and c.id_categoria='".$con1."'";
		return $this->get_results_from_query();
	}

	if($valor==16)
	{
		$this->query="call insertar_subcategoria('".$va1."','".$nombre_cat."','".$cat_padre."','".$color."')";
		$this->execute_single_query();
	}

	if($valor==17)
	{
		$this->query="insert into categorias values(0,'".$nombre_cat."','".$color."')";
		$this->execute_single_query();
	}
	if($valor==18)
	{
		// $this->query="call insertar_nombre('".$cat."','".$s."','".$nombre."')";
		// $this->execute_single_query();

		if(array_key_exists('nombre', $data_algo))
		{
			
			$this->query = "select *from nombre_productos where des_nombrep='".$nombre."'";
			$this->get_results_from_query();

			if(count($this->rows) != 1)
			{
				$this->query="call insertar_nombre('".$cat."','".$s."','".$nombre."')";
				$this->execute_single_query();
				$this->mensaje = 'Nombre agregado exitosamente';

			}
			else
			{
				$this->mensaje= 'El nombre ya existe';
			}
		

		}
		else
		{
			$this->mensaje='No se ha ejecutado la petición';
		}
	}
	if($valor==19)
	{
		$this->query="insert into marcas values(0,'".$nom."')";
		$this->execute_single_query();
	}
	if($valor==20)
	{
		$this->query="insert into presentacion values(0,'".$cant."','".$uni."')";
		$this->execute_single_query();
	}
	if($valor==21)
	{
		$this->query="insert into unidad_minimap values(0,'".$nom."')";
		$this->execute_single_query();
	}
	if($valor==22)
	{
		$this->query="insert into equivalencia values(0,'".$sel1."','".$cant."','".$sel2."')";
		$this->execute_single_query();
	}
	if($valor==23)
	{
		$this->query="insert into unidad_general values(0,'".$nom."')";
		$this->execute_single_query();
	}
	if($valor==25)
	{
		$this->query="select a.id_area,a.des_area from productos p, areas a, asignar_areas asi where a.id_area=asi.id_area and p.id_producto=asi.id_producto and p.id_producto='".$e1."'";
		return $this->get_results_from_query();
	}
	if($valor==26)
	{
		$this->query="insert into areas values(0,'".$nom."')";
		$this->execute_single_query();
	}
	if($valor==27)
	{
		$this->query="insert into proveedores values(0,'".$nom."','".$rfc."','".$tel."','".$cor."')";
		$this->execute_single_query();
	}
	if($valor==28)
	{
		$this->query="insert into unidad_minima values(0,'".$nom."')";
		$this->execute_single_query();
	}
	if($valor==29)
	{
		$this->query="select *from productos p, categorias c, subcategorias s,asignar_padre a, nombre_productos n where a.id_categoria=c.id_categoria and a.id_subcategoria=s.id_subcategoria and n.id_asignarp=a.id_asignarp and n.id_nombrep=p.id_nombrep and p.id_producto='".$id_cambio."'";
		return $this->get_results_from_query();
	}
	if($valor==30)
	{
		$this->query="select e.id_equivalencia from equivalencia e, asignar_equi aq, productos p where p.id_producto=aq.id_producto and e.id_equivalencia=aq.id_equivalencia and p.id_producto='".$id_cambio."'";
		return $this->get_results_from_query();
	}
	if($valor==31)
	{
		$this->query="select n.id_nombrep,n.des_nombrep from nombre_productos n,asignar_padre a,categorias c, subcategorias s where n.id_asignarp=a.id_asignarp and a.id_categoria=c.id_categoria and a.id_subcategoria=s.id_subcategoria and s.id_subcategoria='".$con1."' and c.id_categoria='".$con2."'";
		return $this->get_results_from_query();
	}
	if($valor==32)
	{
		$this->query="select c.id_categoria,c.des_categoria,c.color colc,s.id_subcategoria, s.des_subcategoria,s.color cols from categorias c,subcategorias s,asignar_padre a where c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria";
		return $this->get_results_from_query();
	}
	
	
}

public function arreglos($arreglo_areas=array(), $val="")
{
	if($val==24)
	{
		foreach ($arreglo_areas as list($area2)):
			$this->query="call insertar_area('".$area2."')";
			$this->execute_single_query();
			$this->mensaje='Producto agregado correctamente';
		endforeach;
	}

}

public function edit($data_edicion=array()) 
{
	foreach ($data_edicion as $campo => $value): 
			$$campo = $value;
	endforeach;	

	if($valor==1)
	{
		$this->query="call modificar_producto1('".$id."','".$nom."','".$marm."','".$eq6."','".$pre."','".$pro."','".$bandera_m."')";
		$this->execute_single_query();
	}
	
}


public function delete($data_array=array()) 
{
	foreach ($data_array as $campo => $value): 
			$$campo = $value;
	endforeach;	

	if($valor==1)
	{
		$this->query="call cerrar_insertar('".$exi."')";
		$this->execute_single_query();
		$this->mensaje='Se ha abandonado la acción';

	}

}

function __construct()
{
	//echo "este es el primer metodo";

}

function __destruct() {
unset($this);

	//echo "se ha terminado todo";
}
}
?>