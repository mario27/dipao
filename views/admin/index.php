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
    </ul>
  </nav>

  <!-- <div class="row" style="margin-top: 5px;">
    <div class="col s12 m8 l9 grey lighten-3" style="height: 100%;">
      <div id="test1" class="col s12">


        
      </div>
      <div id="test2" class="col s12">Opción 2</div>
      <div id="test3" class="col s12">Opción 3</div>
      <div id="test4" class="col s12">Opción 4</div>

    </div>
  </div> -->

  <div id="test1">
    
    <div class="" style="">
    <div class="row">
    <div class="col m10 l9 s12 offset-m1"  id="t">
    <br>
          <!-- <h4 class="center">Plan de trabajo</h4> -->
        <table class="responsive row-border dt-head-center" width="100%" cellspacing="0" id="tabla_pro">
          <thead>
              <tr class="center">
                  <th class="center">Número</th>
                  <th class="center">Nombre</th>
                  <th class="center">Presentación</th>
                  <th class="center">Marca</th>
                  <th>Categoria</th>
                  <th>Subcategoria</th>
                  <!-- <th>Medida</th> -->

              </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

<div class="">
    <div id="base" class="col m8 l3 s12 offset-m2 hide-on-med-and-down" style="">
        <div id="ag" class="borde row" style="background-color: #0D163C;">
            <a type="button" id="bt_pro" class="btn col right" style="background: #eaa110; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>
            <a type="button" id="bt_elim" class="btn col right" style="background: #D6E055; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>

            <a type="button" id="bt_modif" class="btn col right" style="background: #88603F; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">add</i>
            </a>
            
        </div> 

            
  
    <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      <!-- <a class="btn waves-effect white grey-text darken-text-2">button</a> -->
    </div>
    <div class="carousel-item red white-text" href="#one!">
      <h2>Bienvenidos</h2>
      <p class="white-text">Sistema de pedidos y requisiciones remotas.</p>
      <!-- <img class="responsive-img" src="../../resources/img/pizza.jpg" alt=""> -->

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
</div>

    <div id="nuevo_producto" style="margin-right:0%" class="col m8 l3 s12 offset-m2">
        <div id="ag1" class="borde row" style="background-color: #0D163C; padding-top:3%; padding-bottom:3%">
            <label style="font-size: 1.2em; margin-left: 2%;">Nuevo producto</label>
    
        </div>
        <br>


        <div id="div-forms" style="height:100%">
<!--************************************** FORMULARIO INSERTAR DATOS ************************************-->

        
        <form id="agregar_sub1" class="form-horizontal">
        <div class="modal-body" id="nueva_cat">

            <div class="card" style="background: white">
            <div class="card-block"><br>
            <h6 class="center"> Nueva Categoria/Subcategoria </h6>
                
                <div class="">
                <div class="row">

                <div class="form-group"> 
                    <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                        <input type="text" class="errornombre" id="n_cat" name="n_cat">
                        <label class="" for="nombre" style="font-size:1em">Nombre</label>

                    </div>

                </div> 

                    <div class="col l9 m9 offset-l1">

                         <p><input type="checkbox" id="subcate" name="subcate" value="1"/><label for="subcate">Subcategoria</label></p>

                    </div>
                </div>
                </div>

                <div class="row" id="papa">

                    <label style="font-size: 1em" class="col l2 offset-l1" for="combocat">Padre</label>
                    <div class="col l8" id="combocat2" >

                    </div>
                
                </div>
                </div><br>

            </div>
            </div>

                   
        </div>
        </form>



        <form id="agregar_n">
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
        </div>
        </form>


        <form id="agregar_e" class="form-horizontal">
        <div class="modal-body" id="nueva_equi">

            <div class="card" style="background: white">
            <div class="card-block"><br>
            <h6 class="center">Nueva equivalencia</h6><br>

            <div class="row">
                
                <div class="col l8 offset-l1" id="combounidadg">

                </div>

                <div>

                    <button type="button" id="nueva_unig" class="btn col" >
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

                    <button type="button" id="nueva_unim" class="btn col" >
                    <i class="material-icons">add</i>
                    </button>
                    
                </div>
            </div> <br>
            </div>
            </div>
       
        </div>      
        </form>


        <!-- <form id="agregar_pr" class="form-horizontal">
        <div class="modal-body" id="nueva_pre">
        <div class="row">

            <div class="card col-lg-10 col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-1" style="background: white">
            <div class="card-block">
            <h4 class="card-title">Nueva presentación</h4>
                
                <div class="form-group">
                
                    <label class="col-sm-2 col-sm-offset-1 text-left" for="nombre">Nombre</label>
                    <div class="col-sm-6">

                        <input type="text" class="form-control" id="n_nombre" placeholder="Nueva presentación">

                    </div>

                    <div class="col-sm-1">

                        <button type="button" id="cerrar_nuevo2" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="cerrar">
                        <span style="color: white" class="glyphicon glyphicon-remove text-center"></span>
                        </button>
                        
                    </div>

                    <div class="col-sm-1">

                        <button type="button" id="guardar_pre" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Guardar">
                        <span style="color: white" class="glyphicon glyphicon-ok text-center"></span>
                        </button>
                        
                    </div>

                </div>

            </div>
            </div>

        </div>           
        </div>
        </form> -->

        <form id="agregar_pr" class="form-horizontal">
        <div class="modal-body" id="nueva_pre">

            <div class="card" style="background: white">
            <div class="card-block"><br>
            <h6 class="center">Nueva equivalencia</h6><br>

            <div class="row">

                <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                    <input type="text" class="" id="cantidad2" name="cantidad2">
                    <label class="" for="cantidad2" style="font-size:90%">Cantidad</label>

                </div>

                <div class="col l8 offset-l1" id="combounidadm1" name="combounidadm1">

                </div>

                <div>

                    <button type="button" id="nueva_unim1" class="btn col" >
                    <i class="material-icons">add</i>
                    </button>
                    
                </div>
            </div> <br>
            </div>
            </div>
       
        </div>      
        </form>


<!--         <form id="agregar_ar" class="form-horizontal">
        <div class="modal-body" id="nueva_area">
        <div class="row">

            <div class="card col-lg-10 col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-1" style="background: white">
            <div class="card-block">
            <h4 class="card-title">Nueva área</h4>
                    
                <div class="form-group">
                    
                    <label class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1 col-xs-4 col-xs-offset-4 text-left" for="nombre">Nombre</label>
                    <div class="col-lg-6">

                        <input type="text" class="form-control" id="n_nombre" placeholder="Nueva área">

                    </div>

                    <div class="col-lg-1">

                        <button type="button" id="cerrar_nuevo3" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="cerrar">
                        <span style="color: white" class="glyphicon glyphicon-remove text-center"></span>
                        </button>
                        
                    </div>

                    <div class="col-lg-1">

                        <button type="button" id="guardar_area" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Guardar">
                        <span style="color: white" class="glyphicon glyphicon-ok text-center"></span>
                        </button>
                        
                    </div>

                </div>

            </div>
            </div>

        </div> 
        </div>   
        </form> -->



        <form id="agregar_ma">
        <div class="modal-body" style="height:100%" id="nueva_marca">

            <div class="card" style="background: white">
            <div class="card-block"><br>
            <h6 class="center">Nueva marca</h6>
                         
                    <div class="row">

                        <div class="col m6 l10 s12 offset-m1 offset-l1 input-field">

                            <input type="text" id="marca" name="nombrep">
                            <label class="" for="marca" style="font-size:1em">Nombre</label>
                            <!-- <p class="errornombrep red-text"></p> -->

                        </div>

                        
                    </div>
            </div>
            </div>
        </div>
        </form>

        
<!--*********************************** FORMULARIO INSERTAR PRODUCTO **************************************-->
   
    
        <form id="agregar_p" class="form-horizontal">
        <div class="modal-body" id="pro1">

        <div class="row">

                <div class="">

                    <label style="margin-top:2.8%" class="col l3" for="sub">Categoria</label>
                    <div class="col l7" id="combocat">

                    </div>

                    <div class="">

                        <a type="button" class="btn color_guinda col" id="bt_cat" style="margin-top:1.5%">
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

            <div class="row">

                <div class="form-group">

                    <label style="margin-top:2.8%" class="col l3 " for="nombre">Nombre</label>
                    <div class="col l7" id="combonombre">
                    </div>

                    <div class="">

                        <a type="button" id="nuevo" class="btn color_guinda col" style="margin-top:1.5%">
                        <i class="material-icons">add</i>
                        </a>

                    </div>

                </div>
                
            </div>

            <div class="row">

                <div class="form-group">

                    <label style="margin-top:2.8%" class="col l3" for="marca">Marca</label>
                    <div class="col l7" id="combomar">

                    </div>

                    <div class="">

                        <button type="button" class="btn color_guinda col" id="nuevo4">
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

                        <button type="button" class="btn color_guinda col" id="nuevo2">
                        <i class="material-icons">add</i>
                        </button>
                        
                    </div>

                </div>
                
            </div>


            <div class="row">

                <div class="form-group">

                    <label style="margin-top:2.8%" class="col l3" for="nombre">Área</label>
                    <div class="col l9 " id="comboarea">

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

                        <button type="button" class="btn color_guinda col" id="nuevo1" data-toggle="tooltip" data-placement="top" title="Agregar nueva equivalencia">
                        <i class="material-icons">add</i>
                        </button>

                    </div>

                </div>
                
            </div>


        </div>  

    <!--Guardado de cambios de producto general  -->
        <div class="modal-footer row" id="pro_general">
                   
            <button type="button" class="btn red col-md-3 col-md-offset-3" id="cerrar_pro1" style="color: white">Cancelar</button>
            <a type="button" class="btn red col-md-3" id="guardar_p" style="color: white">Guardar</a>

        </div>

    <!-- Guardado de cambios de nueva categoria -->

        <div class="modal-footer row" id="cat_general">
                   
            <button type="button" class="btn green col-md-3 col-md-offset-3" id="cerrar_categoria" style="color: white">Cancelar</button>
            <a type="button" class="btn green col-md-3" id="guardar_sub1" style="color: white">Guardar</a>

        </div>
    <!-- Guardado de cambios de nuevo nombre -->
        <div class="modal-footer row" id="nom_general">
                   
            <button type="button" class="btn blue col-md-3 col-md-offset-3" id="cerrar_nombrep" style="color: white">Cancelar</button>
            <a type="button" class="btn blue col-md-3" id="guardar_nombrep" style="color: white">Guardar</a>

        </div>
    <!--  Guardado de cambios nueva marca -->

        <div class="modal-footer row" id="mar_general">
                   
            <button type="button" class="btn purple col-md-3 col-md-offset-3" id="cerrar_nuevo4" style="color: white">Cancelar</button>
            <a type="button" class="btn purple col-md-3" id="guardar_marca" style="color: white">Guardar</a>

        </div>
    <!-- Guardado de cambios nueva equivalencia -->
        <div class="modal-footer row" id="equ_general">
                   
            <button type="button" class="btn color_guinda col-md-3 col-md-offset-3" id="cerrar_nuevo1" style="color: white">Cancelar</button>
            <a type="button" class="btn color_guinda col-md-3" id="guardar_equi" style="color: white">Guardar</a>

        </div>

         <div class="modal-footer row" id="pre_general">
                   
            <button type="button" class="btn yellow col-md-3 col-md-offset-3" id="cerrar_nuevo2" style="color: white">Cancelar</button>
            <a type="button" class="btn yellow col-md-3" id="guardar_pre" style="color: white">Guardar</a>

        </div>
        </form>
                    
    </div>

<!--     <div id="check_areas" class="modal-body">
    <form id="asignar_a">
        <div class="row">

                <div class="form-group">
                    <p class="text-center text-danger">Por favor asigne este producto a un área ¡No saltar este paso!</p>
                    <label class="text-left col-sm-2 col-sm-offset-1" for="sub">Áreas</label>
                    <div class="col-sm-9">

                         <label class="checkbox-inline"><input type="checkbox" value="1" name="group1" id="areas1">Cocina</label>
                         <label class="checkbox-inline"><input type="checkbox" value="2" name="group1" id="areas2">Bar</label>
                         <label class="checkbox-inline"><input type="checkbox" value="3" name="group1" id="areas3">Pizzeria</label>
                         <label class="checkbox-inline"><input type="checkbox" value="4" name="group1" id="areas4">Comedor</label>

                    </div>

                </div>
                
        </div>

         <div class="modal-footer row">
                   
            <button type="button" class="btn color_guinda col-lg-2 col-lg-offset-4" id="" style="color: white">Cancelar</button>
            <a type="button" class="btn color_guinda col-lg-2" id="a_area" style="color: white">Guardar</a>

        </div>
    </form>
    </div> -->
    <div class="visible-lg visible-md">
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
    </div>

      </div>
    </div>
    </div>


</div>
<div class="modal fade" id="producto-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
<div class="modal-dialog" role="document">
<div class="modal-content">

    <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </button>
    </div>

    

</div>
</div>
</div>
</main>

<script type="text/javascript">
$(document).ready(function(){

//############################################ INICIALIZACIÓN DE COMPONENTES ###############################//
    // $('input[type="text"]').tooltipster({ //find more options on the tooltipster page
    // trigger: 'custom', // default is 'hover' which is no good here
    // position: 'top',
    // animation: 'grow',
    // onlyOne: false,
    // triggerClose: {
    //     click: true,
    //     scroll: true
    // }
    // });

    // $('.tooltip').tooltipster({
    // contentCloning: true
    // });
$('.carousel').carousel();

  $('.carousel.carousel-slider').carousel({fullWidth: true,Default: 200});
        

    $('select').material_select();


    //$("#div-forms").hide();
    $("#nuevo_nombre").hide();
    $("#cat_general").hide();
    $("#nueva_equi").hide();
    $("#nueva_pre").hide();
    $("#nueva_area").hide();
    $("#nueva_marca").hide();
    $("#nueva_cat").hide();
    $("#subcategorias").hide();
    $("#productos").hide();
    $("#equia").hide();
    $("#sub").hide();
    $('#nuevo_producto').hide();
    $("#papa").hide();
    $("#nom_general").hide();
    $("#mar_general").hide();
    $("#equ_general").hide();
    $("#pre_general").hide();
    $('[data-toggle="tooltip"]').tooltip();
    $("#bt_elim").hide();
    $("#bt_modif").hide();


    //************************************* MOSTRAR Y ESCONDER *******************************************//
    $("#cerrar_pro1").click(function(event){
        $("#pro1").hide();
        $("#pro_general").hide();
        $("#ag1").hide();
        $("#base").show();


    });

    $("#bt_cat").click(function(event){
        // $("#subcategorias").show();
        // $("#categorias").hide();
        $("#pro1").hide();
        $("#pro_general").hide();
        $("#nueva_cat").show();
        $("#cat_general").show();
    });
    $("#bt_sub").click(function(event){
        //$("#productos").show();
        $("#subcategorias").hide();
        //$("#categorias").hide();
    });
    $("#bt_pro").click(function(event){
      $("#base").hide();  
      $('#nuevo_producto').show();
    });

    $("#nuevo").click(function(event){
        $("#pro1").hide();
        $("#cat_general").hide();
        $("#pro_general").hide();
        $("#nuevo_nombre").show();
        $("#nom_general").show();
        //alert("hola");
    });
    $("#cerrar_nombrep").click(function(event){
        //$('input[type="text"]').tooltipster('close');
        $("#nuevo_nombre").hide();
        $("#nom_general").hide();
        $("#pro_general").show();
        $("#pro1").show();

    });

    $("#cerrar_nuevop1").click(function(event){
        //$('input[type="text"]').tooltipster('close');
        $("#nuevo_nombre").hide();
    });

    $("#nuevo1").click(function(event){
        $("#pro1").hide();
        $("#pro_general").hide();
        $("#equ_general").show();
        $("#nueva_equi").show();
    });
    $("#cerrar_nuevo1").click(function(event){
        $("#nueva_equi").hide();
        $("#equ_general").hide();
        $("#pro1").show();
        $("#pro_general").show();
        
    });

    $("#nuevo2").click(function(event){
        $("#pro1").hide();
        $("#pro_general").hide();
        $("#nueva_pre").show();
        $("#pre_general").show();
    });
    $("#cerrar_nuevo2").click(function(event){
        $("#nueva_pre").hide();
        $("#pre_general").hide();
        $("#pro1").show();
        $("#pro_general").show();
    });

    $("#nuevo3").click(function(event){
        $("#nueva_area").show();
    });
    $("#cerrar_nuevo3").click(function(event){
        $("#nueva_area").hide();
    });
    $("#nuevo4").click(function(event){
        $("#pro_general").hide();
        $("#pro1").hide();
        $("#nueva_marca").show();
        $("#mar_general").show();
    });
    $("#cerrar_nuevo4").click(function(event){
        $("#nueva_marca").hide();
        $("#mar_general").hide();
        $("#pro1").show();
        $("#pro_general").show();
    });
    $("#cerrar_categoria").click(function(event){
        $("#cat_general").hide();
        $("#nueva_cat").hide();
        $("#pro1").show();
        $("#pro_general").show();

    });

 //*************************************** BOTONES DE ENVIO **********************************************//
 
 $("#guardar_nombrep").click(function(event){
    $("#agregar_n").submit();

 });

 $("#guardar_nombrep1").click(function(event){
    $("#agregar_n").submit();
 });

 $("#guardar_equi").click(function(event){
    $("#agregar_e").submit();
 });
 $("#a_area").click(function(event){
    $("#asignar_a").submit();
 });
 $("#guardar_p").click(function(event){
    $("#agregar_p").submit();

});
 $("#guardar_sub1").click(function(event){
    //var va1=$("input[name='subcate']:checked").val();
    //alert(va1);
        //completo();
        $("#agregar_sub1").submit();
        //alert("Sucategoria");
 });
 $("#guardar_marca").click(function(event){
        $("#nueva_marca").hide();
        $("#mar_general").hide();
        $("#pro1").show();
        $("#pro_general").show();
 });


//*********************************** SECCIÓN DE COMBOS ***************************************************//
//************************************* COMBO NOMBRES *****************************************************//

var datos_nombre=null;
     $.get('../../core/controllers/producto_controller.php',{act:"select_nombres"},function(res){
       datos_nombre=JSON.parse(res);
      
       var html_combos='<select name="nombres" style="display:" id="nombres" class="browser-default">';

       html_combos+='<option disabled selected>Seleccionar</option>';
         for(var i=0;i<datos_nombre.length;i++)
           {
             var dat_nombre=datos_nombre[i];
             html_combos+='<option value="'+dat_nombre['id_nombrep']+'">'+dat_nombre['des_nombrep']+'</option>';
           }  
           html_combos+='</select>';

         $('#combonombre').html(html_combos);
         $('#nombres').material_select();

       });

//*************************************** COMBO EQUIVA *************************************************//

var datos_gen=null;
    $.get('../../core/controllers/producto_controller.php',{act:"select_gen1"},function(request){
      datos_gen=JSON.parse(request);
      
      var html_combo='<select name="sel_general2" id="sel_general2"  data-error=".errorsel_general2" class="browser-default">';

      html_combo+='<option disabled selected >Seleccionar</option>';
        for(var i=0;i<datos_gen.length;i++)
          {
            var dat_gen=datos_gen[i];
           
            html_combo+='<option value="'+dat_gen['id_equivalencia']+'">'+dat_gen['des_unidadg']+' de '+dat_gen['cantidad']+' '+dat_gen['des_unidadm']+'</option>';
          }  
          html_combo+='</select><div class="errorsel_general2 text-danger" style="font-size:80%"></div>';

        $('#comboequi').html(html_combo);
        $('#sel_general2').material_select();
      });
//************************************* COMBO PRESENTACION *********************************************//

var datos_gen=null;
    $.get('../../core/controllers/producto_controller.php',{act:"select_pre"},function(request){
      datos_gen=JSON.parse(request);
      
      var html_combo='<select name="sel_pre" id="sel_pre"  data-error=".errorsel_pre" class="browser-default">';

      html_combo+='<option disabled selected >Seleccionar</option>';
        for(var i=0;i<datos_gen.length;i++)
          {
            var dat_gen=datos_gen[i];
           
            html_combo+='<option value="'+dat_gen['id_presentacion']+'">'+dat_gen['des_presentacion']+'</option>';
          }  
          html_combo+='</select><div class="errorsel_pre text-danger" style="font-size:80%"></div>';

        $('#combopre').html(html_combo);
        $('#sel_pre').material_select();
      });
//**************************************** COMBO AREA **************************************************//

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_area"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select multiple name="sel_area" id="sel_area" data-error=".errorsel_area" class="colores_select" style="font-size:70%">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option class="" style="color:black; font-size:70%" value="'+dat_gen['id_area']+'">'+dat_gen['des_area']+'</option>';
    }
 
    html_combo+='</select>';
    $("#comboarea").html(html_combo);
    $('#sel_area').material_select();

});

//**************************************** COMBO UNIDADG **********************************************//

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

    html_combo+='</select><div class="errorsel_unidadg text-danger" style="font-size:80%"></div>';
    $("#combounidadg").html(html_combo);
    $('#sel_unidadg').material_select();


});
//**************************************** COMBO UNIDADM **********************************************//

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

    html_combo+='</select><div class="errorsel_unidadg text-danger" style="font-size:80%"></div>';
    $("#combounidadm").html(html_combo);
    $('#sel_unidadm').material_select();


});

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

    html_combo+='</select><div class="errorsel_unidadg text-danger" style="font-size:80%"></div>';
    $("#combounidadm1").html(html_combo);
    $('#sel_unidadm1').material_select();

    });
//***************************************** COMBO MARCA ***********************************************//
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

    html_combo+='</select><div class="errorsel_mar text-danger" style="font-size:80%"></div>';
    $("#combomar").html(html_combo);
    $('#sel_mar').material_select();


});
//*****************************************COMBO SUBCATEGORIA******************************************//
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

    html_combo+='</select><div class="errorsel_sub text-danger" style="font-size:80%"></div>';
    $("#combosub").html(html_combo);
    $('#sel_sub').material_select();


});

$("#combosub").change(function()
{
  //$("#boton_item").prop("disabled",false);
  $("#div-forms").show();
  
  var con1=$("#sel_sub").val();
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
         
           html_combos+='</select><div class="errornombres text-danger" style="font-size:80%"></div>';

         $('#combonombre').html(html_combos);
         $('#nombres').material_select();

       });


 }

});

//******************************************* Combo Categoria********************************************//

var datos_gen=null;
$.get('../../core/controllers/producto_controller.php',{act:"select_cat"},function(request){
    datos_gen=JSON.parse(request);

    var html_combo='<select name="sel_cat" id="sel_cat" data-error=".errorsel_cat" class="browser-default">';
    html_combo+='<option disabled selected>Seleccionar</option>';

    for(var i=0;i<datos_gen.length;i++)
    {
        var dat_gen=datos_gen[i];
        html_combo+='<option value="'+dat_gen['id_categoria']+'">'+dat_gen['des_categoria']+'</option>';
    }

    html_combo+='</select><div class="errorsel_cat text-danger" style="font-size:80%"></div>';
    $("#combocat").html(html_combo);
    $('#sel_cat').material_select();


});

$("#combocat").change(function()
{
  //$("#boton_item").prop("disabled",false);
  
  var con1=$("#sel_cat").val();
  console.log(con1); 
 
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
        $("#sub").show();
        ///pero si des_subcategoria == generales entonces solo muestralos sin poner una subcategoria.
        html_combos+='<option selected>No hay datos para mostrar</option>';

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
         
           html_combos+='</select><div class="errorsel_sub text-danger" style="font-size:80%"></div>';

         $('#combosub').html(html_combos);
         $('#sel_sub').material_select();

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

    html_combo+='</select><div class="errorsel_cat1" style="font-size:90%"></div>';
    $("#combocat2").html(html_combo);
    $("#sel_cat1").material_select();


});




//###################################### SECCIÓN DE VALIDACIONES Y ENVIO #################################//

//******************************************* REGLAS DE VALIDACIÓN ***************************************//

jQuery.validator.addMethod("formato", function(value, element) {
                     return this.optional(element) || /(^[0-9]+[^0]+([.][0-9]+)?$)|(^[1-9]+[0-9]*$)/.test(value);}, "El número debe ser mayor a 0");


//******************************************** FROMALARIOS **********************************************//

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
    console.log('form ok');
    $("#nuevo_nombre").hide();
    $("#nom_general").hide();
    $("#pro1").show();
    $("#pro_general").show();

     // var va1=$("input[name='group1']:checked").val();
     // var n=$("#agregar_sub1 #n_cat").val();
     // var s=$("#agregar_sub1 #sel_cat1").val();

   // $.post('../../core/controller/producto_controller.php',{va1:va1,n:n,s:s,act:"asignar_categorias"},function(request)
   //  {

   //  });

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
        },
    },
    messages:
    {
        nombrep:
        {
            required: "Escribe un nuevo nombre",
            minlength: "minimo 5 digitos"
        },
    },

    // highlight: function(element) {
    // $(element).closest('.form-group').addClass('has-error');
    // },
   
    // unhighlight: function(element) {
    // $(element).closest('.form-group').removeClass('has-error');
    // },

    // errorElement:'div',
    // errorPlacement:function(error,element)
    // {
    //     var placement=$(element).data("error");
    //     if(placement)
    //     {
    //         $(placement).append(error);
    //     }
    //     else 
    //     {
    //         error.insertAfter(element);
    //     }       
    // },
    // submitHandler:function(form)
    // { 
    //     var nom=$('#agregar_n #nombrep').val();
    //     var subi=$("#sel_sub").val();
    //     console.log(subi);

    //     $.post('../../core/controller/producto_controller.php',{nom:nom,subi:subi,act:"insertar_nuevon"},function(request)
    //     {

    //     });

    // }
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
        // lala:
        // {
        //     required:true
        // },
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
        // lala:
        // {
        //     required:true
        // },
        cantidad:
        {
            required: "Debe llenarse este campo"
        },
    },
    // errorPlacement: function(error, element) {
    //         var ele = $(element),
    //             err = $(error),
    //             msg = err.text();
    //         if (msg != null && msg !== "") {
    //             ele.tooltipster('content', msg);
    //             ele.tooltipster('open'); //open only if the error message is not blank. By default jquery-validate will return a label with no actual text in it so we have to check the innerHTML.
    //         }
    //     },
     highlight: function(element) {
    $(element).closest('.form-group').addClass('has-error');
    },
    // unhighlight: function(element, errorClass, validClass) {
    //     $(element).removeClass(errorClass).addClass(validClass).tooltipster('close');
    // },
    unhighlight: function(element) {
    $(element).closest('.form-group').removeClass('has-error');
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
        // var nom=$('#agregar_n #nombrep').val();

        // $.post('../../core/controller/producto_controller.php',{nom:nom,act:"insertar_nuevon"},function(request)
        // {
        //     $('#agregar_n #nombrep').val("");
        //     alert("se ha insertado");

        // });

    }
});

$("#agregar_p").validate
({
    ignore:[],
    rules:
    {
        nombres: 
        {
            required:true
            
        },
        sel_mar:
        {
            required:true
        },
        sel_pre:
        {
            required:true,
        },
        sel_general2:
        {
            required: true,
        },
    },
    messages:
    {
        nombres:
        {
            required: "Seleccione un nombre"
        },
        sel_mar:
        {
            required: "Seleccione una marca"
        },
        sel_pre:
        {
            required: "Debe selecccionar una presentación"
        },
        sel_general2:
        {
            required: "Debe seleccionar una medida"
        },
    },
    // errorPlacement: function(error, element) {
    //         var ele = $(element),
    //             err = $(error),
    //             msg = err.text();
    //         if (msg != null && msg !== "") {
    //             ele.tooltipster('content', msg);
    //             ele.tooltipster('open'); //open only if the error message is not blank. By default jquery-validate will return a label with no actual text in it so we have to check the innerHTML.
    //         }
    //     },
     highlight: function(element) {
    $(element).closest('.form-group').addClass('has-error');
    },
    // unhighlight: function(element, errorClass, validClass) {
    //     $(element).removeClass(errorClass).addClass(validClass).tooltipster('close');
    // },
    unhighlight: function(element) {
    $(element).closest('.form-group').removeClass('has-error');
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
        //alert("yei");
        var nom=$('#agregar_p #nombres').val();
        var mar=$('#agregar_p #sel_mar').val();
        var equi=$('#agregar_p #sel_general2').val();
        var pre=$('#agregar_p #sel_pre').val();

        $.post('../../core/controllers/producto_controller.php',{nom:nom,mar:mar,equi:equi,pre:pre,act:"insertar_producto"},function(request)
        {
            $("#div-forms").hide();
            $("#div_sub").hide();
            $("#check_areas").show();

        });

    }
});

$("#asignar_a").validate
({
    ignore:[],
    rules:
    {
        'group1': { required: true, minlength: 1 }
    },
    messages:
    {
        'group1':
        {
            required: "seleccione un área",
        },
    },

    highlight: function(element) {
    $(element).closest('.form-group').addClass('has-error');
    },
   
    unhighlight: function(element) {
    $(element).closest('.form-group').removeClass('has-error');
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
            error.insertAfter(element);
        }       
    },
    submitHandler:function(form)
    { 

        // var va1=$("input[name='group1']:checked").val();
        // alert(va1);

        // $.post('../../core/controller/producto_controller.php',{va1:va1,act:"asignar_area"},function(request)
        // {

        // });
        $.get("../../core/controllers/producto_controller.php",{act:"get_pro"},
        function(res){
            var datos=JSON.parse(res);
            var ar=datos[i].id_producto;
            alert(ar);

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

     var va1=$("input[name='group1']:checked").val();
     var n=$("#agregar_sub1 #n_cat").val();
     var s=$("#agregar_sub1 #sel_cat1").val();

   // $.post('../../core/controller/producto_controller.php',{va1:va1,n:n,s:s,act:"asignar_categorias"},function(request)
   //  {

   //  });

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

    // highlight: function(element) {
    // $(element).closest('agregar_sub1').addClass('has-error');
    // },
   
    // unhighlight: function(element) {
    // $(element).closest('agregar_sub1').removeClass('has-error');
    // },

    // errorElement:'div',
    // errorPlacement:function(error,element)
    // {
    //     var placement=$(element).data("error");
    //     if(placement)
    //     {
    //         $(placement).append(error);
    //     }
    //     else 
    //     {
    //         error.insertAfter(element);
    //     }       
    // },
    // submitHandler:function(form)
    // { 

    //     var va1=$("input[name='group1']:checked").val();
    //     var n=$("#agregar_sub1 #n_cat").val();
    //     var s=$("#agregar_sub1 #sel_cat1").val();
    //     if(va1==1)
    //     {
    //         // $.post('../../core/controller/producto_controller.php',{va1:va1,n:n,s:s,act:"asignar_categorias"},function(request)
    //         // {

    //         // });

    //     }
    //     else
    //     {

    //     }
    //     // alert(va1);

        
    //   //   $.get("../../core/controller/producto_controller.php",{act:"get_pro"},
    //   //   function(res){
    //   //       var datos=JSON.parse(res);
    //   //       var ar=datos[i].id_producto;
    //   //       alert(ar);

    //   // });

    // }
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
            //alert("esta deschecado");
            $("#papa").hide();
            //$("#direccion").val("");
        }
        else
        {
            $("#papa").show();
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
//******************************************Llenado de datos**********************************************//

$.get("../../core/controllers/producto_controller.php",{act:"get_all"},
      function(res){
        var datos=JSON.parse(res);
        console.log(datos);
        var html="";
        var html1="";

        $.each(datos, function(i, item){
          
           $("#c1").show();
           $("#c2").show();
                  html+="<tr>";
                  html+="<td class='center'>"+(i+1)+"</td>";
                  html+="<td class='center' id='nombre"+i+"'>"+item.des_nombrep+"</td>";
                  html+="<td class='center' id='fecha_in"+i+"'>"+item.cantidad+' '+item.des_unidadm+"</td>";
                  html+="<td class='center' id='fecha_in"+i+"'>"+item.des_marca+"</td>";
                  html+="<td class='group' id='fecha_in"+i+"'>"+item.des_categoria+"</td>";
                  html+="<td class='group' id='fecha_in"+i+"'>"+item.des_subcategoria+"</td>";
                  // html+="<td class='center' id='fecha_fin"+i+"'>"+item.des_unidadg+' de '+item.cantidad+' '+item.des_unidadm+"</td>";
                  html+="</tr>";
      
          });
                  
      
            $("#tabla_pro tbody").empty().append(html);
            var table = $('#tabla_pro').DataTable({
                "columnDefs": [
            { "visible": false, "targets": 4 },
            { "visible": false, "targets": 5}
            ],
        // "order": [[ 2, 'asc' ]],
        "displayLength": 25,
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
               
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(4, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group orange" style="font-size:1.5em;"><td colspan="6" class="orange">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );

            api.column(5, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group style="font-size:1em"><td colspan="6">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );
 
    // Order by the grouping
    $('#tabla_pro tbody').on( 'click', 'tr.group', function () {
        var currentOrder = table.order()[0];
        if ( currentOrder[0] === 4 && currentOrder[1] === 'asc' ) {
            table.order( [ 4, 'desc' ] ).draw();
        }
        else {
            table.order( [ 4, 'asc' ] ).draw();
        }
    } );
} );

      // var f = new Date();
      // var fechita=(f.getFullYear() + "-" + (f.getMonth()+ 1) + "-" + f.getDate());
      // console.log(fechita);
      // var meses= f.getMonth()+1;
      // console.log(meses);
      
      // });

    
});
    
</script>

<?php
  include("../partials/footer.php")
?>
