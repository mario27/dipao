<?php 
	require_once('conexion.php');
	Class Pedidos extends DBAbstractModel
	{

		//select *from categorias c,subcategorias s,asignar_padre a, productos p, nombre_productos n,marcas m,presentacion pr,proveedores po,existe e,unidad_minimap um, areas are,asignar_areas aa,existencia ex where ex.id_producto=p.id_producto and are.id_area=aa.id_area and p.id_producto=aa.id_producto and c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and p.id_nombrep=n.id_nombrep and n.id_asignarp=a.id_asignarp and m.id_marca=p.id_marca and p.id_presentacion=pr.id_presentacion and po.id_provedor=p.id_provedor and e.id_existe=p.id_existe and pr.id_unidadmp=um.id_unidadmp and p.id_producto not in(select id_producto from pedido pe, estados es where pe.id_estado=es.id_estado and des_estado="Pedido") group by p.id_producto //

		//select *from categorias c,subcategorias s,asignar_padre a, productos p, nombre_productos n,marcas m,presentacion pr,proveedores po,existe e,unidad_minimap um, areas are,asignar_areas aa,existencia ex where ex.id_producto=p.id_producto and are.id_area=aa.id_area and p.id_producto=aa.id_producto and c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and p.id_nombrep=n.id_nombrep and n.id_asignarp=a.id_asignarp and m.id_marca=p.id_marca and p.id_presentacion=pr.id_presentacion and po.id_provedor=p.id_provedor and e.id_existe=p.id_existe and pr.id_unidadmp=um.id_unidadmp group by p.id_producto//

		//select t.id_ticketp,t.fecha from ticket_pedido t,productos p,estados es,pedido pe where pe.id_producto=p.id_producto and pe.id_estado=es.id_estado and pe.id_ticketp=t.id_ticketp and es.des_estado='pedido' group by t.fecha//

		public function get_all($data_algo=array())
		{
			foreach ($data_algo as $campo => $value):
				$$campo = $value;
			endforeach;

			if($valor==1)
			{
				$this->query="select *from categorias c,subcategorias s,asignar_padre a, productos p, nombre_productos n,marcas m,presentacion pr,proveedores po,existe e,unidad_minimap um, areas are,asignar_areas aa,existencia ex where ex.id_producto=p.id_producto and are.id_area=aa.id_area and p.id_producto=aa.id_producto and c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and p.id_nombrep=n.id_nombrep and n.id_asignarp=a.id_asignarp and m.id_marca=p.id_marca and p.id_presentacion=pr.id_presentacion and po.id_provedor=p.id_provedor and e.id_existe=p.id_existe and pr.id_unidadmp=um.id_unidadmp and p.id_producto not in(select id_producto from pedido pe, estados es where pe.id_estado=es.id_estado and des_estado='Pedido') group by p.id_producto";
				return $this->get_results_from_query();
			}
			if($valor==2)
			{
				$this->query="select p.id_producto,e.id_equivalencia,ug.des_unidadg,um.des_unidadm,e.cantidad from productos p,equivalencia e,unidad_minima um,unidad_general ug,asignar_equi aq where e.id_unidadm=um.id_unidadm and e.id_unidadg=ug.id_unidadg and e.id_equivalencia=aq.id_equivalencia and p.id_producto=aq.id_producto";
				return $this->get_results_from_query();
			}
			if($valor==3)
			{
				// $this->query="select p.id_producto,po.nombre,ex.des_existe,pe.cantidad_p,n.des_nombrep,pe.id_pedido,t.id_ticketp,t.fecha,a.des_area,po.id_provedor from usuarios us,empleados e,areas a,ticket_pedido t,productos p,estados es,pedido pe, nombre_productos n,existe ex,proveedores po where pe.id_producto=p.id_producto and pe.id_estado=es.id_estado and pe.id_ticketp=t.id_ticketp and e.id_area=a.id_area and e.id_empleado=us.id_empleado and t.id_usuario=us.id_usuario and p.id_nombrep=n.id_nombrep and p.id_existe=ex.id_existe and po.id_provedor=p.id_provedor and es.des_estado='pedido'";

				$this->query="select p.id_producto,po.nombre,ex.des_existe,pe.cantidad_p,n.des_nombrep,pe.id_pedido,t.id_ticketp,t.fecha,a.des_area,po.id_provedor from usuarios us,empleados e,areas a,ticket_pedido t,productos p,estados es,pedido pe, nombre_productos n,existe ex,proveedores po where pe.id_producto=p.id_producto and pe.id_estado=es.id_estado and pe.id_ticketp=t.id_ticketp and e.id_area=a.id_area and e.id_empleado=us.id_empleado and t.id_usuario=us.id_usuario and p.id_nombrep=n.id_nombrep and p.id_existe=ex.id_existe and po.id_provedor=p.id_provedor and es.des_estado='pedido' and t.id_ticketp='".$r."'";

				return $this->get_results_from_query();

			}
			if($valor==4)
			{
				$this->query="select t.id_ticketp,t.fecha,a.des_area from usuarios us,empleados e,areas a,ticket_pedido t,productos p,estados es,pedido pe where pe.id_producto=p.id_producto and pe.id_estado=es.id_estado and pe.id_ticketp=t.id_ticketp and e.id_area=a.id_area and e.id_empleado=us.id_empleado and t.id_usuario=us.id_usuario and es.des_estado='pedido' group by t.fecha";
				return $this->get_results_from_query();
			}

		}
		public function get($data_algo=array())
		{

			foreach ($data_algo as $campo => $value):
				$$campo = $value;
			endforeach;

			if($valor==1)
			{
				$this->query="select *from pedido where id_ticketp='".$w."' and id_estado=1";
				return $this->get_results_from_query();
			}

		}
		public function set()
		{

		}
		public function edit($data_algo=array())
		{
			foreach ($data_algo as $campo => $value):
				$$campo = $value;
			endforeach;

			if($valor==1)
			{
				$this->query="update pedido set cantidad_p='".$can."' where id_producto='".$e1."'";
				$this->execute_single_query();
				$this->mensaje='El registro se ha modificado';
			}

		}
		public function delete()
		{

		}
		public function arreglos($data_algo=array(),$valor="",$id_usuario="")
		{
			if($valor==1)
			{

				// $this->query="insert into ticket_pedido values(0,current_timestamp,'".$id_usuario."')";
				// $this->execute_single_query();

				foreach ($data_algo as list($id_producto,$cantidad)):

					$this->query="call insertar_pedido('".$id_producto."','".$cantidad."','".$id_usuario."')";
					$this->execute_single_query();
					
				endforeach;
			}
			if($valor==2)
			{
				//var_dump($data_algo);

				foreach ($data_algo as $id_ticketp):

					//echo $id_ticketp;

					$this->query="update pedido set id_estado=5 where id_ticketp='".$id_ticketp."' and id_estado=1";
					$this->execute_single_query();
					
				endforeach;
				$this->mensaje='Se ha ejecutado correctamente';

			}
			if($valor==3)
			{
				//var_dump($data_algo);

				foreach ($data_algo as list($id_producto,$id_ticketp)):

					$this->query="update pedido set id_estado=5 where id_producto='".$id_producto."' and id_ticketp='".$id_ticketp."' and id_estado=1";
					$this->execute_single_query();
					
				endforeach;
				$this->mensaje='Se ha ejecutado correctamente';

			}

		}

		public function arreglos1($data_algo=array(),$valor="",$id_usuario="")
		{



		}



	function __construct()
	{

	}

	function __destruct() 
	{

	unset($this);

	}



	}
 ?>