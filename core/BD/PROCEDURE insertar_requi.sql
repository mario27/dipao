CREATE PROCEDURE insertar_requi(IN xid_producto INT, IN xcantidad double, IN xid_usuario INT, IN xcheck INT)
begin
	declare compra_caja int;
	declare id_ticket int;
	declare id_requi int;
	declare xexistenciag double;
	declare xexistenciam double;
	declare xexistencia double;
	declare equivalencia double;
	declare unidadg int;
	declare unidadm int;
	declare operacion double;
	declare total double;
	declare tot double;
	declare opg double;
	declare opm double;
	declare ope double;

	select id_existe into compra_caja from productos where id_producto=xid_producto;

	SELECT max(id_ticketr) into id_ticket FROM ticket_requi;
	insert into requisiciones values(0,xid_producto,xcantidad,xid_usuario,CURRENT_TIMESTAMP,1,id_ticket);
	select max(id_requisicion) into id_requi from requisiciones;

	select existenciag into xexistenciag from existencia where id_producto=xid_producto;
	select existenciam into xexistenciam from existencia where id_producto=xid_producto;
	select existencia into xexistencia from productos where id_producto=xid_producto; 
	select e.cantidad into equivalencia from productos p,equivalencia e,asignar_equi a where e.id_equivalencia=a.id_equivalencia and p.id_producto=a.id_producto and p.id_producto=xid_producto;

	if(compra_caja=1 and xcheck=1) then 
		select e.id_unidadg into unidadg from productos p,equivalencia e,asignar_equi a,unidad_general u where u.id_unidadg=e.id_unidadg and e.id_equivalencia=a.id_equivalencia and p.id_producto=a.id_producto and p.id_producto=xid_producto;
		insert into asignar_general values(0,id_requi,unidadg);	
		update existencia set existenciag=(xexistenciag-xcantidad) where id_producto=xid_producto; 
		update productos set existencia=(xexistencia-(equivalencia*xcantidad)) where id_producto=xid_producto;
	end if;
	if(compra_caja=1 and xcheck=0) then
		select e.id_unidadm into unidadm from productos p,equivalencia e,asignar_equi a,unidad_minima u where u.id_unidadm=e.id_unidadm and e.id_equivalencia=a.id_equivalencia and p.id_producto=a.id_producto and p.id_producto=xid_producto;
		insert asignar_minima values(0,id_requi,unidadm);
		if(xcantidad>xexistenciam) then
			set operacion=(equivalencia*xexistenciag)+xexistenciam;
			set total=(operacion-xcantidad)/equivalencia;
			set tot=operacion-xcantidad;
			update existencia set existenciag=(floor(total)) where id_producto=xid_producto;
			update existencia set existenciam=(mod(tot,equivalencia)) where id_producto=xid_producto;
			update productos set existencia=(operacion-xcantidad) where id_producto=xid_producto; 
		else
			set opm=xexistenciam-xcantidad;
			update existencia set existenciam=opm where id_producto=xid_producto;
			set ope=xexistencia-xcantidad;	
			update productos set existencia=ope where id_producto=xid_producto;	
		end if;
	end if;
	if(compra_caja=2 and xcheck=0) then
		update existencia set existenciam=(xexistenciam-xcantidad) where id_producto=xid_producto;
		update productos set existencia=(xexistencia-xcantidad) where id_producto=xid_producto;
	end if;


end;
//
