<?php
require_once('conexion.php');
class categoria extends DBAbstractModel
{
################################# MÉTODOS ##################################
    public function get()
    {

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
            $this->query="select p.id_producto,n_p.des_nombrep,p.existencia from productos p,nombre_productos n_p,asignar_padre a,categorias c,subcategorias s where n_p.id_nombrep=p.id_nombrep and n_p.id_asignarp=a.id_asignarp and c.id_categoria=a.id_categoria and s.id_subcategoria=a.id_subcategoria and s.id_subcategoria='".$dato_categoria."'";
            return $this->get_results_from_query();
        }
    }
    public function set()
    {

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
