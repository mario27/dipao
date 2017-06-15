<?php
require_once('conexion.php');
class categoria extends DBAbstractModel
{
################################# MÉTODOS ##################################
    public function get($producto_id='')
    {
        $this->query="select a_e.id_producto,u_g.des_unidadg,e.cantidad,u_m.des_unidadm from asignar_equi a_e,equivalencia e,unidad_general u_g,unidad_minima u_m where a_e.id_equivalencia=e.id_equivalencia and e.id_unidadg=u_g.id_unidadg and e.id_unidadm=u_m.id_unidadm and a_e.id_producto='".$producto_id."'";
        return $this->get_results_from_query();
    }
    public function get_all($val='',$dato_categoria='')
    {
        if($val==1)
        {
            $this->query="select *from categorias";
            return $this->get_results_from_query();
        }
        if($val==2)
        {
            $this->query="select s.id_subcategoria,s.des_subcategoria,s.color from categorias c,subcategorias s,asignar_padre a where a.id_categoria=c.id_categoria and a.id_subcategoria=s.id_subcategoria and a.id_categoria='".$dato_categoria."'";
            return $this->get_results_from_query();
        }
        if($val==3)
        {
            $this->query="select p.id_producto,n_p.des_nombrep,m.des_marca,ps.cantidad,u_m.des_unidadmp,p.id_existe,ex.existenciag,ex.existenciam,p.existencia from productos p,nombre_productos n_p,asignar_padre a,categorias c,subcategorias s,marcas m,presentacion ps,unidad_minimap u_m,existencia ex where p.id_marca=m.id_marca and p.id_presentacion=ps.id_presentacion and ps.id_unidadmp=u_m.id_unidadmp and n_p.id_nombrep=p.id_nombrep and n_p.id_asignarp=a.id_asignarp and c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and p.id_producto=ex.id_producto and s.id_subcategoria='".$dato_categoria."'";
            return $this->get_results_from_query();
        }
    }
    public function set($arr1=array())
    {
        foreach ($arr1 as list($id_prod,$canti,$id_user,$id_unid)):
            $this->query="insert into requisiciones values(0,'".$id_prod."','".$canti."','".$id_unid."','".$id_user."',CURRENT_TIMESTAMP,1)";
            $this->execute_single_query();
        endforeach;
    }
    public function edit()
    {

    }
     public function delete()
    {

    }

    # Método constructor
    function __construct()
    {

    }
    function __destruct()
    {
        unset($this);
    }
}
?>