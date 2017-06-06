<?php
  include("../partials/head.php")
?>
<main>
  <nav class="nav-extended" style="background: #eaa110; background-image: url(../../resources/img/nav8.png);">
    <ul class="tabs tabs-transparent">
      <li class="tab"><a class="active" href="#test1"><b>Productos</b></a></li>
      <li class="tab"><a href="#test2"><b>Categorias</b></a></li>
      <li class="tab"><a href="#test3"><b>Equivalencias</b></a></li>
      <li class="tab"><a href="#test4"><b>Áreas</b></a></li>
      <li class="tab"><a href="#test5"><b>Proveedores</b></a></li>
    </ul>
  </nav>



<div id="test1">  <!-- Abre test 1 -->
<div class="row"> <!-- Abre row 1 -->

<!-- *****************************************************TABLA DE PRODUCTOS ******************************************************* -->

    <div class="col m10 l9 s12 offset-m1"  id="f_tabla"> <!-- Abre tabla productos -->
    <br>
          <!-- <h4 class="center">Plan de trabajo</h4> -->
        <table class="responsive row-border dt-head-center cell-border" width="100%" cellspacing="0" id="tabla_pro">
          <thead>
              <tr class="center">
                  <th class="center">Número</th>
                  <th class="center">Nombre</th>
                  <th class="center">Presentación</th>
                  <th class="center">Marca</th>
                  <th>Categoria</th>
                  <th>Subcategoria</th>

              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div> <!-- Cierra tabla productos -->

<!-- *****************************************************FORMULARIO DE PRODUCTO NUEVO ********************************************** -->

<div id="f_producto" style="margin-right:0%" class="col m8 l3 s12 offset-m2">

<div id="ag1" class="borde row" style="background-color: #0D163C; padding-top:3%; padding-bottom:3%"> <!-- Abre titulo de nuevo producto -->
        <label style="font-size: 1.2em; margin-left: 2%;">Nuevo producto</label>

</div> <!-- Cierra titulo de nuevo producto -->

<form id="agregar_p" class="form-horizontal"> <!-- Abrir formulario de insertar productos -->
    <div class="modal-body" id="pro1">

    <div id="categorias_nombre">

    <div class="row" id="cati">

            <div class="">

                <label style="margin-top:2.8%" class="col l3" for="sub">Categoria</label>
                <div class="col l7" id="combocat">

                </div>

                <div class="">

                    <a type="button" class="btn color_guinda col" id="bt_nueva_cat" style="margin-top:1.5%">
                    <i class="material-icons">add</i>
                    </a>
                    
                </div>

            </div>
            
    </div>
            
    <div class="row" id="sub">

            <div class="form-group">

                <label style="margin-top:2.8%" class="col l3" for="sub">Subcategoria</label>
                <div class="col l7" id="combosub">

                </div>

                <div class="">
                    
                </div>

            </div>
            
    </div>

    </div>

    <div id="no_categorias_nombre">

        <div class="row">

            <div class="form-group">

                <label style="margin-top:2.8%" class="col l3 " for="nombre">Nombre</label>
                <div class="col l7" id="combonombre">
                </div>

                <div class="">

                    <a type="button" id="bt_nuevo_nombre" class="btn color_guinda col" style="margin-top:1.5%">
                    <i class="material-icons">add</i>
                    </a>

                </div>

            </div>
            
        </div>

        <div class="row" id="n_marca">

            <div class="form-group">

                <label style="margin-top:2.8%" class="col l3" for="marca">Marca</label>
                <div class="col l7" id="combomar">

                </div>

                <div class="">

                    <button type="button" class="btn color_guinda col" id="bt_nueva_marca">
                    <i class="material-icons">add</i>
                    </button>
                    
                </div>

            </div>
            
        </div>



        <div class="row">

            <div class="form-group">

                <label style="margin-top:2.8%" class="col l3" for="pre">Presentación</label>
                <div class="col l7" id="combopre">

                </div>

                <div class="">

                    <button type="button" class="btn color_guinda col" id="bt_nueva_presentacion">
                    <i class="material-icons">add</i>
                    </button>
                    
                </div>

            </div>
            
        </div>

        <div class="row">

            <div class="form-group">

                <label style="margin-top:2.8%" class="col l3" for="pre">Proveedor</label>
                <div class="col l7" id="comboprov">

                </div>

            </div>
            
        </div>

        <div class="row">

            <div class="form-group">
                <!-- <p class="text-center text-danger">Por favor asigne este producto a un área ¡No saltar este paso!</p> -->
                <!-- <label class="text-left col-sm-2 col-sm-offset-1" for="sub">Áreas</label> -->
                <div class="col-md-9 col-md-offset-1">

                     <!-- <label class="checkbox-inline"><input type="checkbox" value="1" name="group1" id="paq">¿Este producto se compra por paquete?</label> -->
                     <p><input type="checkbox" id="paq" name="paq" value="1"/><label for="paq">¿Este producto se compra por paquete?</label></p>

                </div>

            </div>
            
        </div>

        <div class="row" id="equia">

            <div class="form-group">

                <label style="margin-top:2.8%" class="col l3 center" for="equi">Equivalencia</label>
                <div class="col l7" id="comboequi">

                </div>

                <div class="">

                    <button type="button" class="btn color_guinda col" id="bt_nueva_equivalencia" data-toggle="tooltip" data-placement="top" title="Agregar nueva equivalencia">
                    <i class="material-icons">add</i>
                    </button>

                </div>

            </div>
            
        </div>

    <div class="modal-footer row" id="pro_general">
               
        <button type="button" class="btn red col-md-3 col-md-offset-3" id="bt_cerrar_producto" style="color: white">Cancelar</button>
        <a type="button" class="btn red col-md-3" id="guardar_p" style="color: white">Siguiente</a>

    </div>

 </div>

 </div>

</form> <!-- Cerrar formulario de insertar productos -->
    
</div> <!-- Cerrar f_producto -->

<div id="f_area" style="margin-right:0%" class="col m8 l3 s12 offset-m2">
<div>

<div id="ag1" class="borde row" style="background-color: #0D163C; padding-top:3%; padding-bottom:3%"> <!-- Abre titulo de areas -->
        <label style="font-size: 1.2em; margin-left: 2%;">Nuevo producto</label>

</div> <!-- Cierra titulo de areas -->

<h6>Por favor asigne una(s) área(s) para el uso del producto</h6>

<form id="agregar_area">
    
    <div class="col l12" id="check_are"></div><br>

</form>
</div>
<div class="red_text" id="errorarea1"><p class="red-text">Debe seleccionar al menos un área</p>
    
</div>
    
    <div class="col l6" id="area_general">
           
    <!-- <button type="button" class="btn red col-md-3 col-md-offset-3" id="bt_cerrar_" style="color: white">Cancelar</button> -->
    <a type="button" class="btn red" id="bt_guardar_area" style="color: white; margin-top:2%;">Guardar</a>

    </div>

    
</div>

<!-- *************************************************FORMULARIO BASE************************************************************-->

<div id="f_base"> <!-- Abre base -->
    <div class="col m8 l3 s12 offset-m2" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C;">
            <a type="button" id="bt_agregar_producto" class="btn col right" style="background: #eaa110; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>
            
        </div> 

            
  
    <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
    </div>
    <div class="carousel-item teal white-text" href="#one!">
      <h2>Bienvenidos</h2>
      <p class="white-text">Sistema de pedidos y requisiciones remotas.</p>
      <p class="white-text"></p>

    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Módulo pedidos</h2>
      <p class="white-text">Mantenga pedidos en tiempo y forma.</p>
      <p class="white-text">Maneje proveedores</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Módulo reportes</h2>
      <p class="white-text">Mantenga a su alcance graficas sobre entradas, salidas y existencias.</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>¡Alertas!</h2>
      <p class="white-text">Alertas sobre stock y requisiciones en tiempo real.</p>
    </div>
  </div>
    </div>
</div>    <!-- cierra base -->

<!-- ************************************************* FORMULARIO MOSTRAR DATOS************************************************* -->

<div id="f_mostrar">  <!-- Abre mostrar datos -->

    <div id="m1" class="col m8 l3 s12 offset-m2" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C;">

            <a type="" id="bt_modificar_producto" class="btn col right" style="background: #D6E055; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">mode_edit</i>
            </a>

            <a type="" id="bt_eliminar_producto" class="btn col right" style="background: #88603F; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">delete</i>
            </a>
            <a type="" id="bt_cerrar_ver_producto" class="btn col right" style="background: #8810AF; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">close</i>
             </a>
            
        </div> 
    </div>

    <div style="margin-right:0%" class="col m8 l3 s12 offset-m2 card">

        <div class="col m6 l10 s12 offset-m1 offset-l1">
            <label class="black-text" for="nom_mo" style="font-size:1em;">Nombre: </label>
            <label type="text" class="" id="nom_mo" name="nom_mo" readonly="true" style="font-size:1em;"></label>
        </div>

        <div class="col m6 l10 s12 offset-m1 offset-l1">
            <label class="black-text" for="ar_mo" style="font-size:1em;">Área: </label>
            <label type="text" class="" id="ar_mo" name="ar_mo" readonly="true" style="font-size:1em;"></label>
        </div>

        <div class="col m6 l10 s12 offset-m1 offset-l1">
            <label class="black-text" for="equ_mo" style="font-size:1em;">Mayoreo: </label>
            <label type="text" class="" id="equ_mo" name="equ_mo" readonly="true" style="font-size:1em;"></label>
        </div>

        <div class="col m6 l10 s12 offset-m1 offset-l1">
            <label class="black-text" for="ex_mo" style="font-size:1em;">Existencia</label>
            <label type="text" class="" id="ex_mo" name="ex_mo" readonly="true" style="font-size:1em;"></label>
        </div>




    </div>

    
</div>  <!-- cierra mostrar datos -->

<!-- ***********************************************OCULTAR CATEGORIA ********************************************************** -->

<div id="f_nueva_categoria" class="col m8 l3 s12 offset-m2" style="">

    <form id="agregar_sub1" class="form-horizontal"> <!-- Abre formulario categorias nuevas -->
    <div class="modal-body" id="nueva_cat">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center"> Nueva Categoria/Subcategoria </h6>
            
            <div class="row">

                <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                    <input type="text" class="errornombre" id="n_cat" name="n_cat">
                    <label class="" for="nombre" style="font-size:1em">Nombre</label>

                </div>

                <div class="col m6 l10 s12 offset-m1 offset-l1">

                    <label class="" for="color" style="font-size:1em">Color</label>
                    <input type="color" class="" id="color" name="color">

                </div>

               
                <div class="col l9 m9 offset-l1">

                     <p><input type="checkbox" id="subcate" name="subcate" value="1"/><label for="subcate">Subcategoria</label></p>

                </div>
            </div>

            <div class="row" id="papa">

                <label style="font-size: 1em" class="col l2 offset-l1" for="combocat">Padre</label>
                <div class="col l8" id="combocat2" >

                </div>
            
            </div>

        </div><br>
        </div>


        <div class="modal-footer row" id="cat_general">
                   
            <button type="button" class="btn green col-md-3 col-md-offset-3" id="bt_cerrar_categoria" style="color: white">Cancelar</button>
            <a type="button" class="btn green col-md-3" id="bt_guardar_categoria" style="color: white">Guardar</a>

        </div>

        </div>
    </form>  <!-- Cierra formulario categorias nuevas -->
    
</div>

<!-- *****************************************************NUEVO NOMBRE*********************************************************** -->

<div id="f_nuevo_nombre" class="col m8 l3 s12 offset-m2" style="">
    <form id="agregar_n"> <!-- Abre formulario nuevo nombre -->
    <div class="modal-body" style="height:100%" id="nuevo_nombre">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center">Nuevo nombre</h6>
                     
                <div class="row">

                    <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                        <input type="text" id="nombrep" name="nombrep">
                        <label class="" for="nombrep" style="font-size:1em">Nombre</label>
                        <!-- <p class="errornombrep red-text"></p> -->

                    </div>

                    
                </div>
        </div>
        </div>

        <div class="modal-footer row" id="nom_general">
               
            <button type="button" class="btn blue col-md-3 col-md-offset-3" id="bt_cerrar_nombrep" style="color: white">Cancelar</button>
            <a type="button" class="btn blue col-md-3" id="bt_guardar_nombrep" style="color: white">Guardar</a>

        </div>
    </div>
    </form> <!-- Cierra formulario nuevo nombre -->
</div>

<!-- ****************************************************NUEVA EQUIVALENCIA****************************************************** -->

<div id="f_nueva_equivalencia" class="col m8 l3 s12 offset-m2" style="">
    <form id="agregar_e" class="form-horizontal"> <!-- Abre formulario nueva equivalencia -->
    <div class="modal-body" id="nueva_equi">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center">Nueva equivalencia</h6><br>

        <div class="row">
            
            <div class="col l8 offset-l1" id="combounidadg">

            </div>

            <div>

                <button type="button" id="bt_nueva_unidadg" class="btn col" >
                <i class="material-icons">add</i>
                </button>
                
            </div>

            <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                <input type="text" class="" id="cantidad" name="cantidad">
                <label class="" for="cantidad" style="font-size:90%">Cantidad</label>

            </div>

            <div class="col l8 offset-l1" id="combounidadm" name="combounidadm">

            </div>

            <div>

                <button type="button" id="bt_nueva_unidadm1" class="btn col" >
                <i class="material-icons">add</i>
                </button>
                
            </div>
        </div> <br>
        </div>
        </div>

        <div class="modal-footer row" id="equ_general">
               
            <button type="button" class="btn color_guinda col-md-3 col-md-offset-3" id="bt_cerrar_equivalencia" style="color: white">Cancelar</button>
            <a type="button" class="btn color_guinda col-md-3" id="bt_guardar_equivalencia" style="color: white">Guardar</a>

        </div>
   
    </div>      
    </form> <!-- Cierra formulario nueva equivalencia -->
</div>

<!-- ************************************************NUEVA PRESENTACION********************************************************* -->

<div id="f_nueva_presentacion" class="col m8 l3 s12 offset-m2" style="">
    <form id="agregar_pr" class="form-horizontal"> <!-- Abre formulario nueva presentacion -->
    <div class="modal-body" id="nueva_pre">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center">Nueva Presentación</h6><br>

        <div class="row">

            <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                <input type="text" class="" id="cantidad2" name="cantidad2">
                <label class="" for="cantidad2" style="font-size:90%">Cantidad</label>

            </div>

            <div class="col l8 offset-l1" id="combounidadm1" name="combounidadm1">

            </div>

            <div>

                <button type="button" id="bt_nueva_unidadm" class="btn col" >
                <i class="material-icons">add</i>
                </button>
                
            </div>
        </div> <br>
        </div>
        </div>

        <div class="modal-footer row" id="pre_general">
               
            <button type="button" class="btn yellow col-md-3 col-md-offset-3" id="bt_cerrar_presentacion" style="color: white">Cancelar</button>
            <a type="button" class="btn yellow col-md-3" id="bt_guardar_presentacion" style="color: white">Guardar</a>

        </div>

    </div>      
    </form> <!-- Cierra formulario nueva presentacion -->
</div>

<!-- ******************************************************NUEVA MARCA********************************************************* -->
<div id="f_nueva_marca" class="col m8 l3 s12 offset-m2" style="">
    <form id="agregar_ma">  <!-- Abrir formulario nueva marca -->
    <div class="modal-body" style="height:100%" id="nueva_marca">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center">Nueva marca</h6>
                     
                <div class="row">

                    <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                        <input type="text" id="marca" name="marca">
                        <label class="" for="marca" style="font-size:1em">Nombre</label>
                        <!-- <p class="errornombrep red-text"></p> -->

                    </div>

                    
                </div>
        </div>
        </div>

        <div class="modal-footer row" id="mar_general">
               
            <button type="button" class="btn purple col-md-3 col-md-offset-3" id="bt_cerrar_marca" style="color: white">Cancelar</button>
            <a type="button" class="btn purple col-md-3" id="bt_guardar_marca" style="color: white">Guardar</a>

        </div>
    </div>
    </form>  <!-- Cerrar formulario nueva marca -->
</div>

<!-- ****************************************************** NUEVA UNIDADM ********************************************************* -->

<div id="f_nueva_unidadm" class="col m8 l3 s12 offset-m2" style="">
    <form id="agregar_unidadm">  <!-- Abrir formulario nueva marca -->
    <div class="modal-body" style="height:100%" id="nueva_unidadm">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center">Nueva unidad minima</h6>
                     
                <div class="row">

                    <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                        <input type="text" id="n_unidadm" name="n_unidadm">
                        <label class="" for="n_unidadm" style="font-size:1em">Nombre</label>
                        <!-- <p class="errornombrep red-text"></p> -->

                    </div>

                    
                </div>
        </div>
        </div>

        <div class="modal-footer row" id="uni_general">
               
            <button type="button" class="btn purple col-md-3 col-md-offset-3" id="bt_cerrar_unidadm" style="color: white">Cancelar</button>
            <a type="button" class="btn purple col-md-3" id="bt_guardar_unidadm" style="color: white">Guardar</a>

        </div>
    </div>
    </form>  <!-- Cerrar formulario nueva marca -->
</div>

<div id="f_nueva_unidadg" class="col m8 l3 s12 offset-m2" style="">
    <form id="agregar_unidadg">  <!-- Abrir formulario nueva marca -->
    <div class="modal-body" style="height:100%" id="nueva_unidadm">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center">Nueva unidad general</h6>
                     
                <div class="row">

                    <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                        <input type="text" id="n_unidadg" name="n_unidadg">
                        <label class="" for="n_unidadg" style="font-size:1em">Nombre</label>
                        <!-- <p class="errornombrep red-text"></p> -->

                    </div>

                    
                </div>
        </div>
        </div>

        <div class="modal-footer row" id="uni_general">
               
            <button type="button" class="btn purple col-md-3 col-md-offset-3" id="bt_cerrar_unidadg" style="color: white">Cancelar</button>
            <a type="button" class="btn purple col-md-3" id="bt_guardar_unidadg" style="color: white">Guardar</a>

        </div>
    </div>
    </form>  <!-- Cerrar formulario nueva marca -->
</div>

</div> <!-- Cerrar row principal-->
</div> <!-- Cerrar test1 -->
<!-- ///"""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""""TEST 2""""""""""""""""""""""""""""""""""""""""""""""""""""""2 -->

<div id="test2">
    
    <div class="" style="">
    <div class="row">
    <div class="col m10 l9 s12 offset-m1"  id="t2">
    <br>
          <!-- <h4 class="center">Plan de trabajo</h4> -->
        <table class="responsive row-border dt-head-center" width="100%" cellspacing="0" id="tabla_cat">
          <thead>
              <tr class="center">
                  <th class="center">Número</th>
                  <th class="center">Categoria</th>
                  <th class="center">Subcategoria</th>
                 <!--  <th class="center">Marca</th>
                  <th>Categoria</th>
                  <th>Subcategoria</th> -->
                  <!-- <th>Medida</th> -->

              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<div class="">
    <div id="f_categoria" class="col m8 l3 s12 offset-m2 hide-on-med-and-down" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C; padding-top:3%; padding-bottom:3%">

            <label style="font-size: 1.2em; margin-left: 2%;">Nueva Categoria</label>            
        </div>

    <div id="">

    <form id="agregar_categoria" class="form-horizontal"> <!-- Abre formulario categorias nuevas -->
    <div class="modal-body" id="nueva_cat">

        <div class="" style="background: white">
        <div class="">
       
            <div class="row">

                <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                    <input type="text" class="errornombre" id="n_cat" name="n_cat">
                    <label class="" for="nombre" style="font-size:1em">Nombre</label>

                </div>

                <div class="col m6 l10 s12 offset-m1 offset-l1">

                    <label class="" for="color" style="font-size:1em">Color</label>
                    <input type="color" class="" id="color" name="color">

                </div>

               
                <div class="col l9 m9 offset-l1">

                     <p><input type="checkbox" id="subcateg" name="subcateg" value="1"/><label for="subcateg">Subcategoria</label></p>

                </div>
            </div>

            <div class="row" id="papag">

                <label style="font-size: 1em" class="col l2 offset-l1" for="combocatg">Padre</label>
                <div class="col l8" id="combocatg" >

                </div>
            
            </div>

        </div><br>
        </div>


        <div class="modal-footer row" id="cat_general">
                   
            <button type="button" class="btn green col-md-3 col-md-offset-3" id="bt_cerrar_categoriag" style="color: white">Cancelar</button>
            <a type="button" class="btn green col-md-3" id="bt_guardar_categoriag" style="color: white">Guardar</a>

        </div>

        </div>
    </form>  <!-- Cierra formulario categorias nuevas -->
    
</div> 

</div>

<div id="f_base1" class="col m8 l3 s12 offset-m2 hide-on-med-and-down" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C;">
            <a type="button" id="bt_agregar_categoriag" class="btn col right" style="background: #eaa110; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>
            
        </div>
         <div>

         <img class="responsive-img" src="../../resources/img/categorias.jpg" alt="">
            
        </div> 

</div>

</div>
</div>
</div>
</div>

<!-- ///////////////////////////////////////////////////////TEST 3 ///////////////////////////////////////////////////////////////// -->

<div id="test3">
    
    <div class="" style="">
    <div class="row">
    <div class="col m10 l9 s12 offset-m1"  id="t3">
    <br>
          <!-- <h4 class="center">Plan de trabajo</h4> -->
        <table class="responsive row-border dt-head-center" width="100%" cellspacing="0" id="tabla_equi">
          <thead>
              <tr class="center">
                  <th class="center">Número</th>
                  <th class="center">UnidadG</th>
                  <th class="center">Cantidad</th>
                  <th class="center">UnidadU</th>
                 <!--  <th class="center">Marca</th>
                  <th>Categoria</th>
                  <th>Subcategoria</th> -->
                  <!-- <th>Medida</th> -->

              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<div class="">
    <div id="f_base2" class="col m8 l3 s12 offset-m2" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C;">
            <a type="button" id="bt_agregar_equivalenciag" class="btn col right" style="background: #eaa110; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>
            
        </div>
         <div>

            <img class="responsive-img" src="../../resources/img/equivalencia.jpg" alt="">
            
        </div> 

    </div>

    <div id="f_nueva_equivalenciag" class="col m8 l3 s12 offset-m2" style="">

    <div id="ag2" class="borde row" style="background-color: #0D163C; padding-top:3%; padding-bottom:3%">

            <label style="font-size: 1.2em; margin-left: 2%;">Nueva equivalencia</label>            
    </div>

    <form id="agregar_eg" class="form-horizontal"> <!-- Abre formulario nueva equivalencia -->
    <div class="modal-body" id="nueva_equi">

        <div class="" style="background: white">
        <div class="">

        <div class="row">
            
            <div class="col l8 offset-l1" id="combounidadgg">

            </div>

            <div>

                <button type="button" id="bt_nueva_unidadgg" class="btn col" >
                <i class="material-icons">add</i>
                </button>
                
            </div>

            <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                <input type="text" class="" id="cantidad" name="cantidad">
                <label class="" for="cantidad" style="font-size:90%">Cantidad</label>

            </div>

            <div class="col l8 offset-l1" id="combounidadmg" name="combounidadmg">

            </div>

            <div>

                <button type="button" id="bt_nueva_unidadmg" class="btn col" >
                <i class="material-icons">add</i>
                </button>
                
            </div>
        </div> <br>
        </div>
        </div>

        <div class="modal-footer row" id="equ_general">
               
            <button type="button" class="btn color_guinda col-md-3 col-md-offset-3" id="bt_cerrar_equivalenciag" style="color: white">Cancelar</button>
            <a type="button" class="btn color_guinda col-md-3" id="bt_guardar_equivalenciag" style="color: white">Guardar</a>

        </div>
   
    </div>      
    </form> <!-- Cierra formulario nueva equivalencia -->
</div>

<div id="f_nueva_unidadgg" class="col m8 l3 s12 offset-m2" style="">
    <form id="agregar_unidadgg">  <!-- Abrir formulario nueva marca -->
    <div class="modal-body" style="height:100%" id="nueva_unidadm">

        <div class="card" style="background: white">
        <div class="card-block"><br>
        <h6 class="center">Nueva unidad general</h6>
                     
                <div class="row">

                    <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                        <input type="text" id="n_unidadg" name="n_unidadg">
                        <label class="" for="n_unidadg" style="font-size:1em">Nombre</label>
                        <!-- <p class="errornombrep red-text"></p> -->

                    </div>

                    
                </div>
        </div>
        </div>

        <div class="modal-footer row" id="uni_general">
               
            <button type="button" class="btn purple col-md-3 col-md-offset-3" id="bt_cerrar_unidadgg" style="color: white">Cancelar</button>
            <a type="button" class="btn purple col-md-3" id="bt_guardar_unidadgg" style="color: white">Guardar</a>

        </div>
    </div>
    </form>  <!-- Cerrar formulario nueva marca -->
</div>
</div>
</div>
</div>
</div>

<!-- /////////////////////////////////////////////////////TEST 4 /////////////////////////////////////////////////////// -->

<div id="test4">
    
    <div class="row">
    <div class="col m10 l9 s12 offset-m1"  id="t4">
    <br>
          <!-- <h4 class="center">Plan de trabajo</h4> -->
        <table class="responsive row-border dt-head-center" width="100%" cellspacing="0" id="tabla_ar">
          <thead>
              <tr class="center">
                  <th class="center">Número</th>
                  <th class="center">Nombre</th>
                  <!-- <th class="center">Cantidad</th>
                  <th class="center">UnidadU</th> -->
                 <!--  <th class="center">Marca</th>
                  <th>Categoria</th>
                  <th>Subcategoria</th> -->
                  <!-- <th>Medida</th> -->

              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<div class="">
    <div id="f_base3" class="col m8 l3 s12 offset-m2 hide-on-med-and-down" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C;">
            <a type="button" id="bt_agregar_areag" class="btn col right" style="background: #eaa110; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>
            
        </div>

        <div>

            <img class="responsive-img" src="../../resources/img/area.jpg" alt="">
            
        </div>  

    </div>

    <div id="f_nueva_areag" class="col m8 l3 s12 offset-m2">

        <div id="ag2" class="borde row" style="background-color: #0D163C; padding-top:3%; padding-bottom:3%">

            <label style="font-size: 1.2em; margin-left: 2%;">Nueva área</label>            
        </div>
    
        <form id="agregar_areag">  <!-- Abrir formulario nueva area -->
        <div class="modal-body" style="height:100%">

            <div class="" style="background: white">
            <div class="">
                         
                    <div class="row">

                        <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                            <input type="text" id="areag" name="areag">
                            <label class="" for="areag" style="font-size:1em">Nombre</label>
                            <!-- <p class="errornombrep red-text"></p> -->

                        </div>

                        
                    </div>
            </div>
            </div>

            <div class="modal-footer row" id="area_general">
                   
                <button type="button" class="btn purple col-md-3 col-md-offset-3" id="bt_cerrar_areag" style="color: white">Cancelar</button>
                <a type="button" class="btn purple col-md-3" id="bt_confirmar_area" style="color: white">Guardar</a>

            </div>
        </div>
        </form>  <!-- Cerrar formulario nueva area -->
    
    </div>

</div>
</div>

</div>

<div id="test5">
    
<div class="row">
    <div class="col m10 l9 s12 offset-m1"  id="t5">
    <br>
          
        <table class="responsive row-border dt-head-center" width="100%" cellspacing="0" id="tabla_prov">
          <thead>
              <tr class="center">
                  <th class="center">Número</th>
                  <th class="center">Nombre</th>
                  <th class="center">Teléfono</th>

              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div id="f_base6" class="col m8 l3 s12 offset-m2" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C;">
            <a type="button" id="bt_agregar_provedor" class="btn col right" style="background: #eaa110; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>
            
        </div> 

    </div>

    <div id="f_nuevo_provedor" class="col m8 l3 s12 offset-m2">

        <div id="ag2" class="borde row" style="background-color: #0D163C; padding-top:3%; padding-bottom:3%">

            <label style="font-size: 1.2em; margin-left: 2%;">Nuevo proveedor</label>            
        </div>
    
        <form id="agregar_provedor">  <!-- Abrir formulario nueva area -->
        <div class="modal-body" style="height:100%">

            <div class="" style="background: white">
            <div class="">
                         
                    <div class="row">

                        <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                            <input type="text" id="nombre_pro" name="nombre_pro">
                            <label class="" for="nombre_pro" style="font-size:1em">Nombre</label>
                            <!-- <p class="errornombrep red-text"></p> -->

                        </div>

                        <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                            <input type="text" id="rfc" name="rfc">
                            <label class="" for="rfc" style="font-size:1em">RFC</label>
                            <!-- <p class="errornombrep red-text"></p> -->

                        </div>

                        <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                            <input type="text" id="telefono" name="telefono">
                            <label class="" for="telefono" style="font-size:1em">Teléfono</label>
                            <!-- <p class="errornombrep red-text"></p> -->

                        </div>

                        <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                            <input type="text" id="correo" name="correo">
                            <label class="" for="correo" style="font-size:1em">Correo</label>
                            <!-- <p class="errornombrep red-text"></p> -->

                        </div>

                        
                    </div>
            </div>
            </div>

            <div class="modal-footer row" id="provedor_general">
                   
                <button type="button" class="btn purple col-md-3 col-md-offset-3" id="bt_cerrar_provedor" style="color: white">Cancelar</button>
                <a type="button" class="btn purple col-md-3" id="bt_confirmar_provedor" style="color: white">Guardar</a>

            </div>
        </div>
        </form>  <!-- Cerrar formulario nueva area -->
    
    </div>



</div>
</div>

 <div id="confirmar" class="modal bottom-sheet" style="width:50%; margin-left:25%;">

            <div id="ag2" class="row" style="background-color: #0D163C; padding-top:1%; padding-bottom:1%">

                <label style="font-size: 1.2em; margin-left:1%;">Permisos</label>            
            </div>

        <div class="modal-content">

        <form id="permisos">
        
            <div class="row">

                    <div class="col m6 l8 s12 offset-m1 offset-l2 input-field">

                        <input type="password" id="permiso" name="permiso">
                        <label class="" for="permiso" style="font-size:1em">Contraseña root</label>
                        <!-- <p class="errornombrep red-text"></p> -->

                    </div>

                    
            </div>
        </form>

            
        </div>

        <div class="modal-footer">
          <a id="bt_permiso" class="btn">Aceptar</a>
        </div>

    </div>
</main>

<script type="text/javascript">
$(document).ready(function(){

//############################################ INICIALIZACIÓN DE VARIABLES GLOBALES ######################################//
var ht="";
var e1=0;
var s=null;
var es=0;
var che=0;
var ari="";
var ban1=0;
var verdura=0;
var mar14=0;
var arreglo=[];
var p1=0;
//############################################ INICIALIZACIÓN DE COMPONENTES ###############################//

$('.carousel').carousel();
$('.carousel.carousel-slider').carousel({fullWidth: true,Default: 200});
$('.modal').modal();

// ########################################## ELEMENTOS ESCONDIDOS ##############################################//
        

    $("#f_producto").hide();
    $("#f_mostrar").hide();
    $("#f_nueva_categoria").hide();
    $("#f_nueva_equivalencia").hide();
    $("#f_nuevo_nombre").hide();
    $("#f_nueva_marca").hide();
    $("#f_nueva_presentacion").hide();
    $("#f_nueva_unidadm").hide();
    $("#f_nueva_unidadg").hide();
    $("#errorarea1").hide();
    $("#f_area").hide();
    $("#f_categoria").hide();
    $("#f_nueva_equivalenciag").hide();
    $("#f_nueva_unidadgg").hide();
    $("#f_nueva_areag").hide();
    $("#f_nuevo_provedor").hide();


    $("#papa").hide();
    $("#equia").hide();
    $("#sub").hide();
    $("#papag").hide();


//********************************************* MOSTRAR Y ESCONDER *******************************************//

    $("#bt_agregar_producto").click(function(event){

        $("#f_base").hide();
        $("#f_producto").show();
        ban1=1;

    });
    $("#bt_agregar_categoriag").click(function(event){

        $("#f_base1").hide();
        $("#f_categoria").show();
        ban1=1;

    });
    $("#bt_agregar_equivalenciag").click(function(event){

        $("#f_base2").hide();
        $("#f_nueva_equivalenciag").show();
        ban1=1;

    });
    $("#bt_agregar_areag").click(function(event){

        $("#f_nueva_areag").show();
        $("#f_base3").hide();

    });
    $("#bt_agregar_provedor").click(function(event){

        $("#f_nuevo_provedor").show();
        $("#f_base6").hide();

    });

    $("#bt_nueva_cat").click(function(event){

        $("#f_base").hide();
        $("#f_producto").hide();
        $("#f_nueva_categoria").show();

    });

    $("#bt_nuevo_nombre").click(function(event){

        $("#f_base").hide();
        $("#no_categorias_nombre").hide();
        $("#f_nuevo_nombre").show();

    });

    $("#bt_nueva_marca").click(function(event){

        $("#f_base").hide();
        $("#f_producto").hide();
        $("#f_nueva_marca").show();

    });
    $("#bt_nueva_equivalencia").click(function(event){

        $("#f_base").hide();
        $("#f_producto").hide();
        $("#f_nueva_equivalencia").show();

    });

    $("#bt_nueva_presentacion").click(function(event){
        es=1;
        $("#f_base").hide();
        $("#f_producto").hide();
        $("#f_nueva_presentacion").show();

    });
    $("#bt_nueva_unidadm").click(function(event){
        $("#f_nueva_unidadm").show();
        $("#f_nueva_presentacion").hide();

    });

    $("#bt_nueva_unidadm1").click(function(event){
        es=2;
        $("#f_nueva_unidadm").show();
        $("#f_nueva_equivalencia").hide();

    });

    $("#bt_nueva_unidadg").click(function(event){
        $("#f_nueva_unidadg").show();
        $("#f_nueva_equivalencia").hide();

    });
    $("#bt_nueva_unidadgg").click(function(event){
        $("#f_nueva_unidadgg").show();
        $("#f_nueva_equivalenciag").hide();

    });

    $("#bt_cerrar_producto").click(function(event){

        $("#f_base").show();
        $("#f_producto").hide();
        ban1=0;

    });

    $("#bt_cerrar_ver_producto").click(function(event){
        $("#f_mostrar").hide();
        $("#f_base").show();

    });

    $("#bt_cerrar_categoria").click(function(event){
        $("#f_producto").show();
        $("#f_nueva_categoria").hide();

    });

    $("#bt_cerrar_nombrep").click(function(event){
        $("#no_categorias_nombre").show();
        $("#f_nuevo_nombre").hide();

    });

    $("#bt_cerrar_equivalencia").click(function(event){
        $("#f_producto").show();
        $("#f_nueva_equivalencia").hide();

    });

    $("#bt_cerrar_presentacion").click(function(event){
        $("#f_producto").show();
        $("#f_nueva_presentacion").hide();

    });

    $("#bt_cerrar_marca").click(function(event){
        $("#f_producto").show();
        $("#f_nueva_marca").hide();

    });
    $("#bt_cerrar_unidadm").click(function(event){

        if(es==1)
        {
            $("#f_nueva_presentacion").show();
            $("#f_nueva_unidadm").hide();

        }
        if(es==2)
        {
            $("#f_nueva_equivalencia").show();
            $("#f_nueva_unidadm").hide();
        }

    });
    $("#bt_cerrar_unidadg").click(function(event){
        $("#f_nueva_equivalencia").show();
        $("#f_nueva_unidadg").hide();

    });
    $("#bt_cerrar_categoriag").click(function(event){
        $("#f_base1").show();
        $("#f_categoria").hide();

    });
    $("#bt_cerrar_equivalenciag").click(function(event){
        $("#f_base2").show();
        $("#f_nueva_equivalenciag").hide();

    });
    $("#bt_cerrar_unidadgg").click(function(event){
        $("#f_nueva_equivalenciag").show();
        $("#f_nueva_unidadgg").hide();

    });

    $("#bt_cerrar_provedor").click(function(event){
        $("#f_base6").show();
        $("#agregar_provedor")[0].reset();
        $("#f_nuevo_provedor").hide();
        //$("$agregar_provedor")[0].reset();

    });
    $("#bt_confirmar_area").click(function(event){

        p1=1;
         $('#confirmar').modal('open');
         

    });
    $("#bt_cerrar_areag").click(function(event){
        $("#f_nueva_areag").hide();
        $("#f_base3").show();

    });
    $("#bt_confirmar_provedor").click(function(event){

         p1=2;
         $('#confirmar').modal('open');

    });


 //*************************************** BOTONES DE ENVIO **********************************************//
 
 $("#bt_guardar_nombrep").click(function(event){

    var validator = $( "#agregar_p" ).validate();
    validator.element( "#sel_cat" );

    if($('#sel_cat').valid())
      {
        $('#sel_cat').removeClass('invalid').addClass('success');

            var vali = $( "#agregar_p" ).validate();
            vali.element( "#sel_sub" );

            if($('#sel_sub').valid())
            {
                $('#sel_sub').removeClass('invalid').addClass('success');
                $("#agregar_n").submit(); 

            }
            else
            {
                $('#sel_sub').removeClass('sucess').addClass('invalid');
                //alert("no puedes");
            }

  
      }
      else
      {
        $('#sel_cat').removeClass('sucess').addClass('invalid');
        //alert("no listo");
      }

 });

 $("#bt_guardar_equivalencia").click(function(event){
    $("#agregar_e").submit();
 });
  $("#bt_guardar_equivalenciag").click(function(event){
    $("#agregar_eg").submit();
 });
 $("#bt_guardar_area").click(function(event){

    if(che>0)
    {
        $("#agregar_area").submit();
    }
    else
    {
        $("#errorarea1").show();
    }

 });
 $("#guardar_p").click(function(event){
    var s1=$("#sel_area").val();
    // $("#f_producto").hide();
    // $("#f_area").show();
    $("#agregar_p").submit();

});
 $("#bt_guardar_categoria").click(function(event){

    $("#agregar_sub1").submit();
        
 });
 $("#bt_guardar_marca").click(function(event){

    $("#agregar_ma").submit();

 });
 $("#bt_guardar_presentacion").click(function(event){
    $("#agregar_pr").submit();

 });
 $("#bt_guardar_unidadm").click(function(event){
    $("#agregar_unidadm").submit();

 });

  $("#bt_guardar_unidadg").click(function(event){
    $("#agregar_unidadg").submit();

 });
 $("#bt_guardar_categoriag").click(function(event){

    $("#agregar_categoria").submit();
        
 });
$("#bt_guardar_unidadgg").click(function(event){
    $("#agregar_unidadgg").submit();

 });

$("#bt_permiso").click(function(event){

    $("#permisos").submit();

});





//*********************************** SECCIÓN DE COMBOS ***************************************************//
//************************************* COMBO NOMBRES *****************************************************//
c_nombre();
function c_nombre()
{

var datos_nombre=null;
     $.get('../../core/controllers/producto_controller.php',{act:"select_nombres"},function(res){
       datos_nombre=JSON.parse(res);
      
       var html_combos='<select name="nombres" style="display:" id="nombres" class="browser-default" data-error=".errornombres">';

       html_combos+='<option disabled selected>Seleccionar</option>';
         for(var i=0;i<datos_nombre.length;i++)
           {
             var dat_nombre=datos_nombre[i];
             html_combos+='<option value="'+dat_nombre['id_nombrep']+'">'+dat_nombre['des_nombrep']+'</option>';
           }  
           html_combos+='</select><div class="errornombres red-text" style="font-size:80%"></div>';

         $('#combonombre').html(html_combos);
         $('#nombres').material_select();

       });
}
//*************************************** COMBO EQUIVA *************************************************//
c_equivalencia();
function c_equivalencia()
{

var datos_gen=null;
    $.get('../../core/controllers/producto_controller.php',{act:"select_gen1"},function(request){
      datos_gen=JSON.parse(request);
      
      var html_combo='<select name="sel_general2" id="sel_general2"  data-error=".errorsel_general2" class="browser-default">';

      html_combo+='<option disabled selected>Seleccionar</option>';
        for(var i=0;i<datos_gen.length;i++)
          {
            var dat_gen=datos_gen[i];
           
            html_combo+='<option value="'+dat_gen['id_equivalencia']+'">'+dat_gen['des_unidadg']+' de '+dat_gen['cantidad']+' '+dat_gen['des_unidadm']+'</option>';
          }  
          html_combo+='</select><div class="errorsel_general2 red-text" style="font-size:80%"></div>';

        $('#comboequi').html(html_combo);
        $('#sel_general2').material_select();
      });
}
//************************************* COMBO PRESENTACION *********************************************//
c_presentacion();
function c_presentacion()
{


var datos_gen=null;
    $.get('../../core/controllers/producto_controller.php',{act:"select_pre"},function(request){
      datos_gen=JSON.parse(request);
      
      var html_combo='<select name="sel_pre" id="sel_pre"  data-error=".errorsel_pre" class="browser-default">';

      html_combo+='<option disabled selected >Seleccionar</option>';
        for(var i=0;i<datos_gen.length;i++)
          {
            var dat_gen=datos_gen[i];
           
            html_combo+='<option value="'+dat_gen['id_presentacion']+'">'+dat_gen['cantidad']+' '+dat_gen['des_unidadm']+'</option>';
          }  
          html_combo+='</select><div class="errorsel_pre red-text" style="font-size:80%"></div>';

        $('#combopre').html(html_combo);
        $('#sel_pre').material_select();
      });
}
//**************************************** COMBO AREA **************************************************//
c_area();
function c_area()
{

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_area"},function(request){
    datos_gen=JSON.parse(request);
    var html_combo="";
    // var html_combo='<select name="sel_area" id="sel_area" data-error=".errorsel_area">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_area']+'">'+dat_gen['des_area']+'</option>';
    }
 
    // html_combo+='</select><div class="errorsel_area red-text "></div><br>';

    $("#sel_area").html(html_combo);
    $('#sel_area').material_select();

});
}

//**************************************** COMBO UNIDADG **********************************************//
c_unidadg();
function c_unidadg()
{

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_unidadg"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_unidadg" id="sel_unidadg" data-error=".errorsel_unidadg" class="browser-default tooltip1">';
    html_combo+='<option disabled selected>Unidad general</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_unidadg']+'">'+dat_gen['des_unidadg']+'</option>';
    }

    html_combo+='</select><div class="errorsel_unidadg red-text" style="font-size:80%"></div>';
    $("#combounidadg").html(html_combo);
    $("#combounidadgg").html(html_combo);
    $('#sel_unidadg').material_select();


});
}
//**************************************** COMBO UNIDADM **********************************************//
c_unidadm();
function c_unidadm()
{

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_unidadm"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_unidadm" id="sel_unidadm" data-error=".errorsel_unidadm" class="browser-default tooltip1">';
    html_combo+='<option disabled selected>Unidad minima</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_unidadm']+'">'+dat_gen['des_unidadm']+'</option>';
    }

    html_combo+='</select><div class="errorsel_unidadg red-text" style="font-size:80%"></div>';
    $("#combounidadm").html(html_combo);
    $('#sel_unidadm').material_select();


});
}
c_unidadm1();
function c_unidadm1 ()
{

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_unidadm"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_unidadm1" id="sel_unidadm1" data-error=".errorsel_unidadm1" class="browser-default">';
    html_combo+='<option disabled selected>Unidad</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_unidadm']+'">'+dat_gen['des_unidadm']+'</option>';
    }

    html_combo+='</select><div class="errorsel_unidadm1 red-text"></div>';
    $("#combounidadm1").html(html_combo);
    $("#combounidadmg").html(html_combo);
    $('#sel_unidadm1').material_select();

    });
}
//***************************************** COMBO MARCA ***********************************************//
c_marca();
function c_marca ()
{

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_marca"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_mar" id="sel_mar" data-error=".errorsel_mar" class="browser-default">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_marca']+'">'+dat_gen['des_marca']+'</option>';
    }

    html_combo+='</select><div class="errorsel_mar red-text" style="font-size:80%"></div>';
    $("#combomar").html(html_combo);
    $('#sel_mar').material_select();


});
}
//*****************************************COMBO SUBCATEGORIA******************************************//
c_subcategoria();

function c_subcategoria()
{
var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_sub"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_sub" id="sel_sub" data-error=".errorsel_sub" class="browser-default">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_subcategoria']+'">'+dat_gen['des_subcategoria']+'</option>';
    }

    html_combo+='</select><div class="errorsel_sub red-text" style="font-size:80%"></div>';
    $("#combosub").html(html_combo);
    $('#sel_sub').material_select();


});
}

$("#combosub").change(function()
{
  //$("#boton_item").prop("disabled",false);
  //$("#div-forms").show();
  //var s=$("#sel_sub").val();
  var con1=$("#sel_sub").val();
  s=con1;
  llena_nombre(); 

 //var datos_e=null;
 function llena_nombre()
 {

         var datos_e=null;
           $.post('../../core/controllers/producto_controller.php',{con1:con1,act:"select_nom"},function(res){
            datos_e=JSON.parse(res);

                var html_combos='<select name="nombres" style="display:" id="nombres" data-error=".errornombres" class="browser-default">';

       html_combos+='<option disabled selected>Seleccionar</option>';

       if(datos_e[0]==undefined)
       {
        
        html_combos+='<option selected>No hay datos para mostrar</option>';

       }
       else
       {

        for(var i=0;i<datos_e.length;i++)
           {
             var dat_e=datos_e[i];
             html_combos+='<option value="'+dat_e['id_nombrep']+'">'+dat_e['des_nombrep']+'</option>';
           }  

       }
         
           html_combos+='</select><div class="errornombres red-text" style="font-size:80%"></div>';

         $('#combonombre').html(html_combos);
         $('#nombres').material_select();

       });


 }

});

//******************************************* Combo Categoria********************************************//
c_categoria();

function c_categoria()
{


var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_cat"},function(request){
    datos_gen=JSON.parse(request);



    var html_combo='<select name="sel_cat" id="sel_cat" data-error=".errorsel_cat" class="browser-default">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {

        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_categoria']+'">'+dat_gen['des_categoria']+'</option>';
        if(dat_gen['des_categoria']=='Verduras')
        {
            verdura=dat_gen['id_categoria'];
            //console.log("ed"+verdura);
        }
        
    }

    html_combo+='</select><div class="errorsel_cat red-text" style="font-size:80%"></div>';
    $("#combocat").html(html_combo);
    $('#sel_cat').material_select();


});
}

$("#combocat").change(function()
{
  //$("#boton_item").prop("disabled",false);
  $("#sub").hide();
  var con1=$("#sel_cat").val();
  console.log(con1); 

  if(con1==verdura)
  {
    //alert("estas son verduras");
    $("#n_marca").hide();
    mar14=1;


  }
  else
  {
    $("#n_marca").show();
  }
 
 //var datos_e=null;
     var datos_e=null;
           $.post('../../core/controllers/producto_controller.php',{con1:con1,act:"select_sub1"},function(res){
            datos_e=JSON.parse(res);
            //var dat1=datos_e[0].des_subcategoria;
            //console.log(dat1);

        var html_combos='<select name="sel_sub" style="display:" id="sel_sub" data-error=".errorsel_sub" class="browser-default">';

       html_combos+='<option disabled selected>Seleccionar</option>';

       if(datos_e[0]==undefined)
       {

        //$("#sub").hide();
        //$("#sub").show();
        ///pero si des_subcategoria == generales entonces solo muestralos sin poner una subcategoria.
        //html_combos+='<option selected>No hay datos para mostrar</option>';
        //var s=1;
        var datos_g=null;
        $.get('../../core/controllers/producto_controller.php',{act:"select_gene"},function(request){

            datos_g=JSON.parse(request);
            s=datos_g[0].id_subcategoria;
            alert("esta es categoria"+s);

        });


       }
       else
       {


        $("#sub").show();


        for(var i=0;i<datos_e.length;i++)
           {
             var dat_e=datos_e[i];
             html_combos+='<option value="'+dat_e['id_subcategoria']+'">'+dat_e['des_subcategoria']+'</option>';
           }  

    
        }
         
           html_combos+='</select><div class="errorsel_sub red-text" style="font-size:80%"></div>';

         $('#combosub').html(html_combos);
         $('#sel_sub').material_select();

       });

    var datos_e=null;
           $.post('../../core/controllers/producto_controller.php',{con1:con1,act:"select_nom1"},function(res){
            datos_e=JSON.parse(res);

                var html_combos='<select name="nombres" style="display:" id="nombres" data-error=".errornombres" class="browser-default">';

       html_combos+='<option disabled selected>Seleccionar</option>';

       if(datos_e[0]==undefined)
       {
        
        html_combos+='<option disabled selected>No hay datos para mostrar</option>';

       }
       else
       {

        for(var i=0;i<datos_e.length;i++)
           {
             var dat_e=datos_e[i];
             html_combos+='<option value="'+dat_e['id_nombrep']+'">'+dat_e['des_nombrep']+'</option>';
           }  

       }
         
           html_combos+='</select><div class="errornombres red-text" style="font-size:80%"></div>';

         $('#combonombre').html(html_combos);
         $('#nombres').material_select();

       });



});

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_cat"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_cat1" id="sel_cat1" data-error=".errorsel_cat1" class="browser-default">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_categoria']+'">'+dat_gen['des_categoria']+'</option>';
    }

    html_combo+='</select><div class="errorsel_cat1 red-text" style="font-size:90%"></div>';
    $("#combocat2").html(html_combo);
    $("#combocatg").html(html_combo);
    $("#sel_cat1").material_select();

});

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_prov"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_prov" id="sel_prov" data-error=".errorsel_prov" class="browser-default">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_provedor']+'">'+dat_gen['nombre']+'</option>';
    }

    html_combo+='</select><div class="errorsel_prov red-text" style="font-size:90%"></div>';
    $("#comboprov").html(html_combo);
    $("#sel_prov").material_select();


});




//###################################### SECCIÓN DE VALIDACIONES Y ENVIO #################################//

//******************************************* REGLAS DE VALIDACIÓN ***************************************//

jQuery.validator.addMethod("formato", function(value, element) {
return this.optional(element) || /(^[0-9]+[^0]+([.][0-9]+)?$)|(^[1-9]+[0-9]*$)/.test(value);}, "El número debe ser mayor a 0");
jQuery.validator.addMethod("rfc", function(value, element) {
return this.optional(element) || /^([A-Z]{4})([0-9]{6})$/i.test(value);}, "Revise formato de RFC");

jQuery.validator.addMethod("correo", function(value, element) {return this.optional(element) || /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/.test(value);}, "Revise formato de correo");

jQuery.validator.addMethod('telefono',function(value,element){
return this.optional(element)||/^((\d{10})|(\d{12})|(\d{13}))$/i.test(value);},"Número telefónico inválido");


//*********************************************** VALIDACIÓN DE FORMULARIOS *************************************************//

$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_n")
      .find("label[for='" + element.attr("id") + "']")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

     var cat=$("#sel_cat").val();
     var nombre=$("#agregar_n #nombrep").val();

   $.post('../../core/controllers/producto_controller.php',{cat:cat,s:s,nombre:nombre,act:"insertar_nuevon"},function(request)
    {
        Materialize.toast('Datos ingresados', 1500);
        $("#no_categorias_nombre").show();
        //$("#sub").hide();
        $("#f_nuevo_nombre").hide();
        //c_categoria();
        c_nombre();
        $("#agregar_n #nombrep").val('');
        
    });

  }
});

$("#agregar_n").validate
({
    ignore:[],
    rules:
    {
        nombrep: 
        {
            required:true,
            minlength: 5
        }


    },
    messages:
    {
        nombrep:
        {
            required: "Escribe un nuevo nombre",
            minlength: "minimo 5 digitos"
        }

    },

});

$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_pr")
      .find("label[for='" + element.attr("id") + "'] , select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

    alert("Presentaion insertada");

     var cant=$("#agregar_pr #cantidad2").val();
     var uni=$("#agregar_pr #sel_unidadm1").val();
     

   $.post('../../core/controllers/producto_controller.php',{cant:cant,uni:uni,act:"insertar_presentacion"},function(request)
    {
        Materialize.toast('Datos ingresados', 1500);
        $("#f_producto").show();
        $("#f_nueva_presentacion").hide();
        // c_categoria();
        c_presentacion();
        c_unidadm1();
        $("#agregar_pr #cantidad2").val('');
        
    });

  
}
});

$("#agregar_pr").validate
({
    ignore:[],
    rules:
    {
        cantidad2: 
        {
            required:true,
            formato: true
        },
        sel_unidadm1:
        {
            required:true
        }


    },
    messages:
    {
        cantidad2:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        },
        sel_unidadm1:
        {
            required: "<p class='red-text' style='font-size: 80%'>Seleccionar unidad de medida</p>"
        }

    },

});

$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_unidadm")
      .find("label[for='" + element.attr("id") + "'] , select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

    //alert("Presentaion insertada");

     var nom=$("#agregar_unidadm #n_unidadm").val();
     

   $.post('../../core/controllers/producto_controller.php',{nom:nom,act:"insertar_unidadm"},function(request)
    {
        Materialize.toast('Datos ingresados', 1500);
        if(es==1)
        {

            $("#f_nueva_presentacion").show();
            $("#f_nueva_unidadm").hide();
            c_unidadm1();
            $("#agregar_unidadm #n_unidadm").val('');
        }
        if(es==2)
        {
            $("#f_nueva_equivalencia").show();
            $("#f_nueva_unidadm").hide();
            c_unidadm();
            $("#agregar_unidadm #n_unidadm").val('');
        }
        
    });

  
}
});

$("#agregar_unidadm").validate
({
    ignore:[],
    rules:
    {
        n_unidadm: 
        {
            required:true,
        },


    },
    messages:
    {
        n_unidadm:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        }

    },

});

$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_unidadg")
      .find("label[for='" + element.attr("id") + "'] , select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

    //alert("Presentaion insertada");

     var nom=$("#agregar_unidadg #n_unidadg").val();
     

   $.post('../../core/controllers/producto_controller.php',{nom:nom,act:"insertar_unidadg"},function(request)
    {
        Materialize.toast('Datos ingresados', 1500);
        $("#f_nueva_equivalencia").show();
        $("#f_nueva_unidadg").hide();
        c_unidadg();
        $("#agregar_unidadg #n_unidadg").val('');
        
    });

  
}
});

$("#agregar_unidadg").validate
({
    ignore:[],
    rules:
    {
        n_unidadg: 
        {
            required:true,
        },


    },
    messages:
    {
        n_unidadg:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        }

    },

});

$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_unidadgg")
      .find("label[for='" + element.attr("id") + "'] , select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

    //alert("Presentaion insertada");

     var nom=$("#agregar_unidadgg #n_unidadg").val();
     

   $.post('../../core/controllers/producto_controller.php',{nom:nom,act:"insertar_unidadg"},function(request)
    {
        Materialize.toast('Datos ingresados', 1500);
        $("#f_nueva_equivalenciag").show();
        $("#f_nueva_unidadgg").hide();
        c_unidadg();
        $("#agregar_unidadgg #n_unidadg").val('');
        
    });

  
}
});

$("#agregar_unidadgg").validate
({
    ignore:[],
    rules:
    {
        n_unidadg: 
        {
            required:true,
        },


    },
    messages:
    {
        n_unidadg:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        }

    },

});


$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_areag")
      .find("label[for='" + element.attr("id") + "'] , select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

     var nom=$("#agregar_areag #areag").val();

alert("listo para enviar");
     

   $.post('../../core/controllers/producto_controller.php',{nom:nom,act:"insertar_areag"},function(request)
    {
        // Materialize.toast('Datos ingresados', 1500);
        // $("#f_nueva_equivalenciag").show();
        // $("#f_nueva_unidadgg").hide();
        // c_unidadg();
        // $("#agregar_unidadgg #n_unidadg").val('');
        
    });

  
}
});

$("#agregar_areag").validate
({
    ignore:[],
    rules:
    {
        areag: 
        {
            required:true,
        },


    },
    messages:
    {
        areag:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        }

    },

});

$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_provedor")
      .find("label[for='" + element.attr("id") + "'] , select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

     var nom=$("#agregar_provedor #nombre_pro").val();
     var rfc=$("#agregar_provedor #rfc").val();
     var tel=$("#agregar_provedor #telefono").val();
     var cor=$("#agregar_provedor #correo").val();

//alert("listo para enviar");
     

   $.post('../../core/controllers/producto_controller.php',{nom:nom,rfc:rfc,tel:tel,cor:cor,act:"insertar_provedor"},function(request)
    {
        Materialize.toast('Datos ingresados', 1500);
        $("#f_base6").show();
        $("$agregar_provedor")[0].reset();
        $("#f_nuevo_provedor").hide();

    });

  
}
});

$("#agregar_provedor").validate
({
    ignore:[],
    rules:
    {
        nombre_pro: 
        {
            required:true,
        },
        rfc: 
        {
            required:true,
            rfc:true
        },
        telefono: 
        {
            required:true,
            telefono:true,

        },
        correo: 
        {
            required:true,
            correo:true,

        },



    },
    messages:
    {
        nombre_pro:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        },
        rfc:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        },
        correo:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        },
        telefono:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        }

    },

});


$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("permisos")
      .find("label[for='" + element.attr("id") + "'] , select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {

     var con1=$("#permisos #permiso").val();

    $.post('../../core/controllers/usuarios_controller.php',{con1:con1,action:"regresar_usuario"},function(res){
      console.log(res);
      if(res==1)
      {

        if(p1==1)
        {
            $("#permisos #permiso").val('');   
            $('#confirmar').modal('close');
            $("#agregar_areag").submit();

        }
        else
        {
            //alert("estas validando provedor");
            $("#permisos #permiso").val('');
            $("#confirmar").modal('close');
            $("#agregar_provedor").submit();
        }
        
        
      }
      else
      {
        alert("contraseña no valida");
      }
      // var f=JSON.parse(res);
      // console.log(f);
      // w=f[0].contrasena;
      // alert(w);

    });

  
}
});

$("#permisos").validate
({
    ignore:[],
    rules:
    {
        permiso: 
        {
            required:true,
        },


    },
    messages:
    {
        permiso:
        {
            required: "<p class='red-text' style='font-size: 80%'>Este campo debe llenarse</p>"
        }

    },

});





$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_ma")
      .find("label[for='" + element.attr("id") + "']")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {
    console.log('form ok');


   var nom=$("#agregar_ma #marca").val();
   //   var nombre=$("#agregar_n #nombrep").val();

   $.post('../../core/controllers/producto_controller.php',{nom:nom,act:"insertar_marca"},function(request)
    {
        Materialize.toast('Datos ingresados', 1500);
        $("#f_producto").show();
        $("#marca").val('');
        $("#f_nueva_marca").hide();
        c_marca();
    });

  }
});

$("#agregar_ma").validate
({
    ignore:[],
    rules:
    {
        marca: 
        {
            required:true,
        }

    },
    messages:
    {
        marca:
        {
            required: "<p class='red-text' style='font-size:80%'>Escribe un nombre</p>",
        }
    },

});

$("#agregar_e").validate
({
    ignore:[],
    rules:
    {
        sel_unidadg: 
        {
            required:true
            
        },
        sel_unidadm:
        {
            required:true
        },
        cantidad:
        {
            required:true,
            formato:true
        },
    },
    messages:
    {
        sel_unidadg:
        {
            required: "Seleccione una unidad"
        },
        sel_unidadm:
        {
            required: "Seleccione una unidad"
        },
        cantidad:
        {
            required: "<p class='red-text' style='font-size: 80%'>Debe llenarse este campo</p>"
        },
    },

     highlight: function(element) {
    $(element).closest('.form-group').addClass('invalid');
    },
    // unhighlight: function(element, errorClass, validClass) {
    //     $(element).removeClass(errorClass).addClass(validClass).tooltipster('close');
    // },
    unhighlight: function(element) {
    $(element).closest('.form-group').removeClass('invalid');
    },

    errorElement:'p',
    errorPlacement:function(error,element)
    {
        var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }       
    },
    submitHandler:function(form)
    { 
        alert("yei");

        var sel1=$('#agregar_e #sel_unidadg').val();
        var sel2=$("#agregar_e #sel_unidadm").val();
        var cant=$("#agregar_e #cantidad").val();

        $.post('../../core/controllers/producto_controller.php',{sel1:sel1,sel2:sel2,cant:cant,act:"insertar_equivalencia"},function(request)
        {
            Materialize.toast('Datos ingresados',1500);
            $("#f_nueva_equivalencia").hide();
            c_equivalencia();
            $("#agregar_e #cantidad").val('');
            $("#f_producto").show();


        });

    }
});

$("#agregar_eg").validate
({
    ignore:[],
    rules:
    {
        sel_unidadg: 
        {
            required:true
            
        },
        sel_unidadm:
        {
            required:true
        },
        cantidad:
        {
            required:true,
            formato:true
        },
    },
    messages:
    {
        sel_unidadg:
        {
            required: "Seleccione una unidad"
        },
        sel_unidadm:
        {
            required: "Seleccione una unidad"
        },
        cantidad:
        {
            required: "<p class='red-text' style='font-size: 80%'>Debe llenarse este campo</p>"
        },
    },

     highlight: function(element) {
    $(element).closest('.form-group').addClass('invalid');
    },
    // unhighlight: function(element, errorClass, validClass) {
    //     $(element).removeClass(errorClass).addClass(validClass).tooltipster('close');
    // },
    unhighlight: function(element) {
    $(element).closest('.form-group').removeClass('invalid');
    },

    errorElement:'p',
    errorPlacement:function(error,element)
    {
        var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }       
    },
    submitHandler:function(form)
    { 
        alert("yei");

        var sel1=$('#agregar_eg #sel_unidadg').val();
        var sel2=$("#agregar_eg #sel_unidadm").val();
        var cant=$("#agregar_eg #cantidad").val();

        $.post('../../core/controllers/producto_controller.php',{sel1:sel1,sel2:sel2,cant:cant,act:"insertar_equivalencia"},function(request)
        {
            Materialize.toast('Datos ingresados',1500);
            $("#f_nueva_equivalenciag").hide();
            c_equivalencia();
            $("#agregar_eg #cantidad").val('');
            $("#f_base2").show();


        });

    }
});

$("#agregar_p").validate
({
    rules:
    {
        nombres: 
        {
            required:true
            
        },
        sel_cat:
        {
            required:true
        },
        sel_mar:
        {
            required:true
        },
        sel_pre:
        {
            required:true
        },
        sel_prov:
        {
            required:true
        },
        sel_area: 
        {
            required:true
        },
        sel_general2:
        {
            required: true
        },
        sel_sub:
        {
            required:true
        }
    },
    messages:
    {
        nombres:
        {
            required: "Seleccione un nombre"
        },
        sel_cat:
        {
            required:"Selecciona categoria"
        },
        sel_mar:
        {
            required: "Seleccione una marca"
        },
        sel_pre:
        {
            required: "Selecccionar una presentación"
        },
        sel_general2:
        {
            required: "Seleccionar una medida"
        },
        sel_area: 
        {
            required: "Seleccionar una area"
        },
        sel_prov:
        {
            required: "Seleccionar un proveedor"
        },
        sel_sub:
        {
            required: "Seleccionar subcategoria"
        }
        

    },

    errorElement:'div',
    errorPlacement:function(error,element)
    {
        var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(error);
        }       
    },
    submitHandler:function(form)
    { 
        var equi=0;
        var exi1=0;
        var exi=0;
        var df=0;
        var mar=0;
        var g2=0;
        var nom=$('#agregar_p #nombres').val();
        var pre=$('#agregar_p #sel_pre').val();
        var pro=$('#agregar_p #sel_prov').val();
        var va1=$("input[name='paq']:checked").val();

        if(va1==1)
        {
            equi=$('#agregar_p #sel_general2').val();
            $.post('../../core/controllers/producto_controller.php',{act:"existe"},function(rest){
                var dat=JSON.parse(rest);
                exi1=dat[0].id_existe;
                exi=parseInt(exi1);
               

            });

        }
        else
        {
            equi=0;
            $.post('../../core/controllers/producto_controller.php',{act:"no_existe"},function(rest){
                var dat=JSON.parse(rest);
                exi1=dat[0].id_existe;
                exi=parseInt(exi1);
                
            });
        }

        if(mar14==1)
        {
            var mar=$('#agregar_p #sel_mar').val();

            $.post('../../core/controllers/producto_controller.php',{act:"get_marca_v"},function(resq){
                df=JSON.parse(resq);
                var g1=df[0].id_marca;
                g2=parseInt(g1);
                mar=g2;
                console.log("esta es la marca"+g1);
                alert(mar);

                 $.post('../../core/controllers/producto_controller.php',{exi:exi,nom:nom,mar:mar,equi:equi,pre:pre,pro,pro,act:"insertar_producto"},function(request)
                {
                    alert("datos insertados");
                    $("#f_producto").hide();
                    $("#f_area").show();
                    // $("#div-forms").hide();
                    // $("#div_sub").hide();
                    // $("#check_areas").show();

                });

            });
        }
        else
        {
            mar=$('#agregar_p #sel_mar').val();
            alert(mar);

                $.post('../../core/controllers/producto_controller.php',{exi:exi,nom:nom,mar:mar,equi:equi,pre:pre,pro,pro,act:"insertar_producto"},function(request)
                {
                    alert("datos insertados");
                    $("#f_producto").hide();
                    $("#f_area").show();
                    // $("#div-forms").hide();
                    // $("#div_sub").hide();
                    // $("#check_areas").show();

                });
        }
        


    }
});

$("#agregar_area").validate({
    ignore:[],
    rules:
    {
        'grupo2[]': { 
            required: true,
            minlength: 2
        }
    },
    messages:
    {
        'grupo3[]':
        {
            required: "seleccione un área"
        }
    },

    submitHandler:function(form)
    { 
        alert("listo para enviar"+arreglo_areas);
      //   // var va1=$("input[name='group1']:checked").val();
      //   // alert(va1);

        $.post('../../core/controllers/producto_controller.php',{arreglo_areas:arreglo_areas,act:"insertar_area"},function(request)
        {
            Materialize.toast('Datos ingresados',2000);
            //llenar_tabla_prodcutos();
            $("#f_area").hide();
            $("#agregar_p")[0].reset();
            $("#f_base").show();
            t_get_productos();

        });


    }
});



$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_sub1")
      .find("label[for='" + element.attr("id") + "']" || "select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {
    console.log('form ok');

    var va1=$("input[name='subcate']:checked").val();
    var nombre_cat=$("#agregar_sub1 #n_cat").val();
    var cat_padre=$("#agregar_sub1 #sel_cat1").val();
    var color=$("#agregar_sub1 #color").val();
     if(va1==1)
     {
        
         $.post('../../core/controllers/producto_controller.php',{va1:va1,nombre_cat:nombre_cat,cat_padre:cat_padre,color:color,act:"asignar_subcategoria"},function(request)
            {
                Materialize.toast('Datos ingresados', 1500);
                $("#f_producto").show();
                c_categoria();
                c_subcategoria();
                $("#agregar_sub1 #n_cat").val('');
                $("#agregar_sub1 #color").val('');
               
            });
     }
     else
     {

         $.post('../../core/controllers/producto_controller.php',{nombre_cat:nombre_cat,color:color,act:"asignar_categoria"},function(request)
            {
               Materialize.toast('Datos ingresados', 1500);
                c_categoria();
                c_subcategoria();
                $("#f_producto").show();
                $("#agregar_sub1 #n_cat").val('');
                $("#agregar_sub1 #color").val('');

            });
     }

  }
});

$("#agregar_sub1").validate
({
    rules:
    {
        n_cat: 
        {
            required:true
        },
        sel_cat1: 
        { 
            required: true
        },
        
    },
    messages:
    {
        sel_cat1:
        {
            required: "<div class='red-text'>Seleccione una categoria padre</div>",
        },
        n_cat: "<div class='red-text .errornombre' style='font-size:90%'>Escriba un nombre</div>",
    },

});

///*********************************************FORMULARIO CATEGORIAS GENERAL ***************************************************//

$.validator.setDefaults({
  errorClass: 'invalid',
  validClass: "valid",
  errorElement:'div',
  errorPlacement: function(error, element) {
    $(element)
      .closest("agregar_categoria")
      .find("label[for='" + element.attr("id") + "']" || "select")
      .attr('data-error', error.text());


    var placement=$(element).data("error");
        if(placement)
        {
            $(placement).append(error);
        }
        else 
        {
            error.insertAfter(element);
        }   
  },
  submitHandler: function(form) {
    console.log('form ok');

    var va1=$("input[name='subcateg']:checked").val();
    var nombre_cat=$("#agregar_categoria #n_cat").val();
    var cat_padre=$("#agregar_categoria #sel_cat1").val();
    var color=$("#agregar_categoria #color").val();
     if(va1==1)
     {
        
         $.post('../../core/controllers/producto_controller.php',{va1:va1,nombre_cat:nombre_cat,cat_padre:cat_padre,color:color,act:"asignar_subcategoria"},function(request)
            {
                Materialize.toast('Datos ingresados', 1500);
                // $("#f_producto").show();
                // c_categoria();
                // c_subcategoria();
                // $("#agregar_categoria #n_cat").val('');
                // $("#agregar_categoria #color").val('');
               
            });
     }
     else
     {

         $.post('../../core/controllers/producto_controller.php',{nombre_cat:nombre_cat,color:color,act:"asignar_categoria"},function(request)
            {
               Materialize.toast('Datos ingresados', 1500);
               $("#f_categoria").hide();
               $("#f_base1").show();
                // c_categoria();
                // c_subcategoria();
                // $("#f_producto").show();
                // $("#agregar_categoria #n_cat").val('');
                // $("#agregar_categoria #color").val('');

            });
     }

  }
});

$("#agregar_categoria").validate
({
    rules:
    {
        n_cat: 
        {
            required:true
        },
        sel_cat1: 
        { 
            required: true
        },
        
    },
    messages:
    {
        sel_cat1:
        {
            required: "<div class='red-text'>Seleccione una categoria padre</div>",
        },
        n_cat: "<div class='red-text .errornombre' style='font-size:90%'>Escriba un nombre</div>",
    },

});

//****************************************** Elemento Check **********************************************//

$("#paq").change(function()
    {
        if (!this.checked) 
        {
            //alert("esta deschecado");
            $("#equia").hide();
            //$("#direccion").val("");
        }
        else
        {
            $("#equia").show();
          // var datos_e=null;
          //  $.post('../../core/controller/proyectos_controller.php',{cl:cl,act:"select_direccion"},function(res){

          //       console.log(res);
          //       datos_e=JSON.parse(res);
          //       var nombrec=datos_e[0].direccion;
          //       console.log(nombrec);

          //       $("#direccion").val(nombrec);

          //    });
         
        }

    });

$("#subcate").change(function()
    {
        if (!this.checked) 
        {
            $("#papa").hide();
            
        }
        else
        {
            $("#papa").show();
         
        }

});
$("#subcateg").change(function()
    {
        if (!this.checked) 
        {
            $("#papag").hide();
            
        }
        else
        {
            $("#papag").show();
         
        }

});
//******************************************Llenado de datos**********************************************//

$.get("../../core/controllers/producto_controller.php",{act:"get_areas"},function(res){

    var datos_a=JSON.parse(res);
    console.log(datos_a);

    var c="";
    $.each(datos_a, function(i, item){

        // c+='<p class="col l6"><input type="checkbox" id="test'+i+'" class="area1" data-area="'+item.id_area+'" /><label for="test">'+item.des_area+'</p>';
        c+="<p class='col l6'><input name='grupo1[]' data-area='"+item.id_area+"' data-error='.errorarea' class='area1' type='checkbox' id='tes"+i+"'/><label for='tes"+i+"'>"+item.des_area+"</label></p>"

    });
    $("#check_are").empty().append(c);
});

var arreglo_areas= [];

$("#check_are").on("change","input.area1",function(event){

    var area2=$(this).data("area"); /*sacar el valor del texto con el data id*/
    //alert(che);
     if (!this.checked) 
        {
            if(che < 1)
            {
                che=che-1;
                $("#errorarea1").show();
                
            }
            else
            {
                che=che-1;
                $("#errorarea1").hide();
                
            }
            
        }
        else
        {
            che=che+1;
            $("#errorarea1").hide();
         
        }
    //alert("este check es: "+area2);
    arreglo_areas.push(area2);
    console.log(arreglo_areas);
});
t_get_productos();
function t_get_productos()

{


$.get("../../core/controllers/producto_controller.php",{act:"get_all"},function(res){
    
    var datos=JSON.parse(res);
    var html="";
    var html1="";

        $("#tabla_pro").dataTable().fnDestroy();

        $.each(datos, function(i, item)
        {
        
            html+="<tr data-id='"+item.id_producto+"' data-nom='"+item.des_nombrep+"' data-ar='"+item.des_area+"' data-ex='"+item.existenciam+"' data-exg='"+item.existenciag+"' class='ver group-item-"+item.des_categoria+"' data-group='"+item.des_categoria+"'>";
            html+="<td class='center'>"+(i+1)+"</td>";
            html+="<td class='center' id='nombre"+i+"'>"+item.des_nombrep+"</td>";
            html+="<td class='center' id='fecha_in"+i+"'>"+item.cantidad+' '+item.des_unidadm+"</td>";
            html+="<td class='center' id='fecha_in"+i+"'>"+item.des_marca+"</td>";
            html+="<td class='group' id='fecha_in"+i+"'>"+item.des_categoria+"</td>";
            html+="<td class='group' id='fecha_in"+i+"'>"+item.des_subcategoria+"</td>";
      
        });
                  
        $("#tabla_pro tbody").empty().append(html);
        var table = $('#tabla_pro').DataTable({

        "columnDefs": 
        [
            { "visible": false, "targets": 4 },
            { "visible": false, "targets": 5}
        ],
        "displayLength": 10,
        order: [[4, "asc"], [5, "asc"],[1,"asc"]],
   
        "drawCallback": function ( settings ) {
        var api = this.api();
        var rows = api.rows( {page:'current'} ).nodes();
        var last=null;
 
        api.column(4, {page:'current'} ).data().each( function ( group, i ) 
        {
            // if(($.inArray(group,arreglo))<0)
            // {
            //     var posicion=$.inArray(group,arreglo);
            //     //alert("diferentes");
            //     var rowData = api.row(i).data();
            //     //alert(rowData);
            //     $(rows).eq( i).before(
            //         '<tr class="group orange" style="font-size:1.5em;"><td colspan="6" class="" style="background: #40E099">'+group+'</td></tr>'
            //     );
            //     arreglo.push(group);
            // }
            // else
            // {
            //     var posicion=$.inArray(group,arreglo);
                
            //     // $(rows).eq( posicion).before(
            //     //     '<tr class="group orange" style="font-size:1.5em;"><td colspan="6" class="" style="background: #40E099">'+group+'</td></tr>'
            //     // );
            // }
            if ( last !== group ) 
            {
                $(rows).eq( i ).before(
                    '<tr class="group orange" style="font-size:1.5em;"><td colspan="6" class="" style="background: #40E099">'+group+'</td></tr>'
                );
                last = group;
            }
        });


        api.column(5, {page:'current'} ).data().each( function ( group, i ) 
        {
            if ( last !== group ) 
            {
                $(rows).eq( i ).before(
                    '<tr class="group style="font-size:1em"><td colspan="6">'+group+'</td></tr>'
                );
                last = group;
            }
        });
        }
        }) 


        $('#tabla_pro tbody').on( 'click', 'tr', function() 
        {
            if ( $(this).hasClass('selected') ) 
            {
                $(this).removeClass('selected');
            }
            else 
            {
                $('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                ari="";
            }
        });

        // $('#tabla_pro tbody').on( 'click', 'tr.group', function () 
        // {
        //     var currentOrder = table.order()[0];
        //     if ( currentOrder[0] === 4 && currentOrder[1] === 'asc' ) 
        //     {
        //         table.order( [ 4, 'desc' ] ).draw();
        //     }
        //     else 
        //     {
        //         table.order( [ 4, 'asc' ] ).draw();
        //     }
        // });
});


}
$("#tabla_pro tbody").on("click","tr.ver",function(event){
    e1=$(this).data("id"); /*sacar el valor del texto con el data id*/
    var nom=$(this).data("nom");
    var ar=$(this).data("ar");
    var ex=$(this).data("ex");
    var exg=$(this).data("exg");

        // alert(id);

    $.post('../../core/controllers/producto_controller.php',{e1:e1,act:"area"},function(res1){
        console.log(res1);
        var datos_z=JSON.parse(res1);

        $.each(datos_z, function(i, item){

            ari+=item.des_area+" | ";
            console.log(ari);

        });

    });


    $.post('../../core/controllers/producto_controller.php',{e1:e1,act:"equivalencia"},function(res){

        console.log(res);
        datos_e=JSON.parse(res);

            
        if(datos_e[0]==undefined)
        {
            $("#nom_mo").text(nom);
            $("#ar_mo").text(ari);
            $("#equ_mo").text("No asignado");

            if(ex==0)
            {
                $("#ex_mo").text("No hay existencias");
            }
            else
            {
                $("#ex_mo").text(ex);
            }

            $("#f_base").hide();
            $("#f_producto").hide();
            $("#f_mostrar").show();          
                   
        }
        else
        {
            var eq1=datos_e[0].des_unidadg;
            var eq2=datos_e[0].cantidad;
            var eq3=datos_e[0].des_unidadm;
            //alert(eq1+" de "+eq2+" "+eq3);
            var equival=eq1+" de "+eq2+" "+eq3;

            $("#nom_mo").text(nom);
            $("#ar_mo").text(ari);
            $("#equ_mo").text(equival);

            if(ex==0)
            {
                if(exg==0)
                {
                    $("#ex_mo").text("No hay existencias");
                }
                else
                {
                    $("#ex_mo").text(exg+" "+eq1)
                }
            }
            else
            {
                if(exg==0)
                {
                    $("#ex_mo").text(ex+" "+eq3);
                }
                else
                {
                    $("#ex_mo").text(ex+" "+eq3+" y "+exg+" "+eq1)
                }

            }

        }


    });

            $("#f_base").hide();
            $("#f_producto").hide();
            $("#f_mostrar").show();
            
           
});
$("#bt_elim1").click(function(event)
{
    var mensaje = confirm("Si elimina este registro no podra revertir la acción ¿Desea continuar?");
    if(mensaje)
    {
        var elim=e1;
        console.log(elim);
         //  $.post('../../core/controllers/producto_controller.php',{elim:elim,act:"borrar_producto"},function(request){
         //  Materialize.toast('Se ha eliminado ',2000);

         //  location.reload();
         
         // });                 
    }
});



////////////////////////////////////////////////////TABLA CATEGORIAS//////////////////////////////////////////////////

$.get("../../core/controllers/producto_controller.php",{act:"get_all_cat"},
      function(res){
        var datos=JSON.parse(res);
        console.log(datos);
        var html="";
        var html1="";
        $("#tabla_cat").dataTable().fnDestroy();

        $.each(datos, function(i, item){
          
           $("#c1").show();
           $("#c2").show();
                  html+="<tr>";
                  html+="<td class='center'>"+(i+1)+"</td>";
                  html+="<td class='center group' id='nombre"+i+"'>"+item.des_categoria+"</td>";
                  html+="<td class='center ' id='nombre"+i+"'>"+item.des_subcategoria+"</td>";
                  // html+="<td class='center' id='fecha_fin"+i+"'>"+item.des_unidadg+' de '+item.cantidad+' '+item.des_unidadm+"</td>";
                  html+="</tr>";
      
          });
                  
      
            $("#tabla_cat tbody").empty().append(html);
            var table = $('#tabla_cat').DataTable({
                "columnDefs": [
            { "visible": false, "targets": 1 }
            ],
        // "order": [[ 2, 'asc' ]],
        "displayLength": 10,
                // lengthMenu: [
                //     [ 10, 25, 50, -1 ],
                //     [ '10 filas', '25 filas', '50 filas', 'Todas las filas' ]
                // ],
                // buttons:[
                // {
                //      extend:'pageLength',
                //      titleAttr: 'Mostrar filas',
                //      text: '<i class="material-icons green-text">view_list</i>'
                // },
                // {
                //  extend:'colvis',
                //  titleAttr:'Columnas',
                //      text:'<i class="material-icons orange-text">view_column</i>'
                // },
                // {     
                //      extend: 'print',
                //      titleAttr: 'Imprimir',
                //      text: '<i class="material-icons blue-text">print</i>',
                //      title: 'cslzon',
                //      exportOptions: {
                //      columns: [ 0, ':visible' ]
                //  }
                // },
                
                // ],
               order: [[1, "asc"]],
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(1, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group orange" style="font-size:1.5em;"><td colspan="3" class="" style="background: #D69459">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#tabla_cat tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 1 && currentOrder[1] === 'asc' ) {
            table.order( [ 1, 'desc' ] ).draw();
        }
        else {
            table.order( [ 1, 'asc' ] ).draw();
        }
    } );
} );

///////////////////////////////////////////////////TABLA EQUIVALENCIAS ////////////////////////////////////////////////////////

$.get("../../core/controllers/producto_controller.php",{act:"get_all_equi"},
      function(res){
        var datos=JSON.parse(res);
        console.log(datos);
        var html="";
        var html1="";
        $("#tabla_equi").dataTable().fnDestroy();

        $.each(datos, function(i, item){
          
           $("#c1").show();
           $("#c2").show();
                  html+="<tr>";
                  html+="<td class='center'>"+(i+1)+"</td>";
                  html+="<td class='center group' id='nombre"+i+"'>"+item.des_unidadg+"</td>";
                  html+="<td class='center ' id='nombre"+i+"'>"+item.cantidad+"</td>";
                  html+="<td class='center ' id='nombre"+i+"'>"+item.des_unidadm+"</td>";
                  // html+="<td class='center' id='fecha_fin"+i+"'>"+item.des_unidadg+' de '+item.cantidad+' '+item.des_unidadm+"</td>";
                  html+="</tr>";
      
          });
                  
      
            $("#tabla_equi tbody").empty().append(html);
            var table = $('#tabla_equi').DataTable({
                "columnDefs": [
            { "visible": false, "targets": 1 }
            ],
        "displayLength": 5,
               
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(1, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group orange" style="font-size:1.5em;"><td colspan="3" class="orange">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#tabla_equi tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 1 && currentOrder[1] === 'asc' ) {
            table.order( [ 1, 'desc' ] ).draw();
        }
        else {
            table.order( [ 1, 'asc' ] ).draw();
        }
    } );
} );

/////////////////////////////////////////////// Tabla areas /////////////////////////////////////////////////////////////

$.get("../../core/controllers/producto_controller.php",{act:"get_all_ar"},
      function(res){
        var datos=JSON.parse(res);
        console.log(datos);
        var html="";
        var html1="";
        $("#tabla_ar").dataTable().fnDestroy();

        $.each(datos, function(i, item){
          
           $("#c1").show();
           $("#c2").show();
                  html+="<tr>";
                  html+="<td class='center'>"+(i+1)+"</td>";
                  html+="<td class='center' id='nombre"+i+"'>"+item.des_area+"</td>";
                  // html+="<td class='center' id='fecha_fin"+i+"'>"+item.des_unidadg+' de '+item.cantidad+' '+item.des_unidadm+"</td>";
                  html+="</tr>";
      
          });
                  
      
            $("#tabla_ar tbody").empty().append(html);
            var table = $('#tabla_ar').DataTable({
            //     "columnDefs": [
            // { "visible": false, "targets": 1 }
            // ],
        "displayLength": 10

    } );
 
} );

$.get("../../core/controllers/producto_controller.php",{act:"get_all_prov"},
      function(res){
        var datos=JSON.parse(res);
        console.log(datos);
        var html="";
        var html1="";
        $("#tabla_prov").dataTable().fnDestroy();

        $.each(datos, function(i, item){
          
                  html+="<tr>";
                  html+="<td class='center'>"+(i+1)+"</td>";
                  html+="<td class='center' id='nombre"+i+"'>"+item.nombre+"</td>";
                  html+="<td class='center' id='nombre"+i+"'>"+item.telefono+"</td>";
                  // html+="<td class='center' id='fecha_fin"+i+"'>"+item.des_unidadg+' de '+item.cantidad+' '+item.des_unidadm+"</td>";
                  html+="</tr>";
      
          });
                  
      
            $("#tabla_prov tbody").empty().append(html);
            var table = $('#tabla_prov').DataTable({
            //     "columnDefs": [
            // { "visible": false, "targets": 1 }
            // ],
        "displayLength": 10

    } );
 
} );

});
    
</script>

<?php
  include("../partials/footer.php")
?>
