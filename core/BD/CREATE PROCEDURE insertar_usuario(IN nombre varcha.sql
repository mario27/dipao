CREATE PROCEDURE insertar_usuario(IN nombre varchar(50), IN ap varchar(50), IN am varchar(50), IN area INT, IN puesto INT,IN tipo INT,IN nom varchar(50),IN pas varchar(100))
begin

declare numero int;

insert into empleados values(0,nombre,ap,am,area,puesto);

SELECT MAX(id_empleado)into numero FROM empleados;

insert into usuarios values(0,nom,pas,tipo,numero);

end;
//


