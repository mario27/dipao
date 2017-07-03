<?php
  include("../partials/head2.php")
?>
<main>
<div id="m"></div>
<!--HTML //////////////////////////////////////////////////////////////////////////////////////////// -->
<nav class="nav-extended" style="background: #eaa110; background-image: url(../../resources/img/nav8.png);">
    <ul class="tabs tabs-transparent">
      <li class="tab"><a class="active" href="#test1"><b>Generar</b></a></li>
 <!--      <li class="tab"><a href="#test2"><b>Autorizar</b></a></li>
      <li class="tab"><a href="#test3"><b>Entradas</b></a></li>
      <li class="tab"><a href="#test4"><b>Historial</b></a></li> -->
      <!-- <li class="tab"><a href="#test5"><b>Proveedores</b></a></li> -->
    </ul>
</nav>
<!-- TEST 1 ////////////////////////////////////////////////////////////////////////////////////////////////-->
<div id="test1">

<div class="row">

	<div class="col l9 m7 s12" id="t1">

		<table class="responsive row-border dt-head-center cell-border" width="100%" cellspacing="0" id="tabla_pedido">
			<thead>
				<tr>
					<th class="center">Nombre</th>
					<th class="center">Presentación</th>
					<th class="center">Marca</th>
					<th class="center">Paquetes</th>
					<th class="center">Existencia granel</th>
					<th class="center">Existencia unitaria</th>
					<th>Categoria</th>
					<th>Subcategoria</th>
          <th>Proveedor</th>

				</tr>
			</thead>

			<tbody>
				
			</tbody>
		</table>
		
	</div>

	<div class="col l3 m5 s12" id="panel1">

      <div class="row" style="margin-bottom: 0px;">
      <div class="col s12">
        <div id="ag" class="borde row" style="background-color: #0D163C;">
            <a type="" id="btn_guardar_pedido" class="btn col right" style="background: #D6E055; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">send</i>
            </a>
            <a type="" id="btn_cerrar_pedido" class="btn col right" style="background: #8810AF; margin-top:2%; margin-bottom:2%; margin-right:2%">
                <i class="material-icons">close</i>
             </a>
        </div> 
      </div>
    </div>

		<table class="bordered centered striped" id="tabla_rpedido"><br>
			<tbody>
				
			</tbody>
		</table>
		
	</div>

</div>
	
</div>

<!-- TEST 2  ////////////////////////////////////////////////////////////////////////////////////////////7-->

</main>

<script type="text/javascript">
$(document).ready(function(){

$(document).click(function(){

    //alert("has pulsado en botón");


    if(camb==1)
    {
      alert("todo va a quedar igual");
      camb=0;

           var can=$("#"+es).val();

           $.post('../../core/controllers/pedidos_controller.php',{e1:e1,can:can,act:"editar_cantidad"},function(res){
             //swal("se ha ejecutado");
             $("#m").html(res);

           });

    }

    //$(document).unbind("click");

})

  $('.collapsible').collapsible();

//MARCADO DE LI DEL NAV ///////////////////////////////////////////////////////////////////////////////////
var li_p=1;

if(li_p==1)
{
	$("#li_req").removeClass('activa');
	$("#li_ped").addClass('activa');
}

//INICIALIZACIÓN DE VARIABLES ///////////////////////////////////////////////////////////////////////////

var datos=null;
var arr=[];
var arr1=[];
var arr2=[];
var arr3=[];
var n=[];
var cont=0;
var arrt=[];
var arrt1=[];
var r=0;
var a_todo=[];
var a_uno=[];
var man=0;
var q;
var ye;
var valo1;
var t;
var a_todo1=[];
var camb=0;

//INICIALIZACIÓN DE COMPONENTES ///////////////////////////////////////////////////////////////////////////

$('#btn_guardar_pedido').attr('disabled', true);
$('#btn_cerrar_pedido').attr('disabled', true);
$('#bt_guardar_autorizacion').attr('disabled', true);
$('#bt_cerrar_autorizacion').attr('disabled', true);

//COMPONENTES OCULTOS ////////////////////////////////////////////////////////

$("#tp2").hide();
//BOTONES MOSTRAR-OCULTAR //////////////////////////////////////////////////////

$("#btn_cerrar_pedido").click(function(){
  arr.length=0;
  arr1.length=0;
  arr2.length=0;
  arr3.length=0;

  console.log(arr);
  $(".fila").remove();
  $('#btn_guardar_pedido').attr('disabled', true);
  $('#btn_cerrar_pedido').attr('disabled', true);
});

$("#bt_cerrar_autorizacion").click(function(event){

  //alert(man);
  if(man==1)
  {
          swal({
          title: "¿Desea continuar?",
          text: "Usted esta a punto de eliminar todo un pedido",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Continuar",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){

            if (isConfirm)
            {
                console.log("se elimino");
            }
          else
            {


            }

        });
  }
  if(man==2)
  {
          swal({
          title: "¿Desea continuar?",
          text: "Usted esta a punto de eliminar items de un pedido",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Continuar",
          closeOnConfirm: true,
          closeOnCancel: true
        },
        function(isConfirm){

            if (isConfirm)
            {
                console.log("se elimino");
            }
          else
            {


            }

        });

  }

})
//BOTONES DE ENVIO ///////////////////////////////////////////////////////////////////////////////////////

$("#btn_guardar_pedido").click(function(event){

  for(i=0;i<arr.length;i++)
  {
    var valor_ayuda1="#valor"+arr[i];
    var v=parseInt($(valor_ayuda1).val());
    console.log(v);
    arr2.push(arr[i]);
    arr2.push(v);
    console.log(arr2)
    arr3.push(arr2);
    arr2=[];
  }
  console.log(arr3);

  $.post('../../core/controllers/pedidos_controller.php',{arr3:arr3,act:"insertar_pedido"},function(res){

    swal("Se ha insertado el pedido");
    //location.reload();
    t_get_productos();
    arr.length=0;
    arr1.length=0;
    arr2.length=0;
    arr3.length=0;

    console.log(arr);
    $(".fila").remove();
    $('#btn_guardar_pedido').attr('disabled', true);
    $('#btn_cerrar_pedido').attr('disabled', true);
    llenar_ticket();

  });

});

$("#bt_guardar_autorizacion").click(function(event){

  //alert(man);
  if(man==1)
  {
    
    $.post('../../core/controllers/pedidos_controller.php',{a_uno:a_uno,act:"autorizar_todo"},function(res)
    {
      $("#m").html(res);
      llenar_ticket();
      $("#tp2").hide();
      $("#info").show();

    });
    
  }
  if(man==2)
  {
    console.log(a_todo);
    $.post('../../core/controllers/pedidos_controller.php',{a_todo:a_todo,act:"autorizar_varios"},function(res)
    {
      $("#m").html(res);
      llenar_ticket();
      $("#tp2").hide();
      $("#info").show();

    });

  }

});
//TABLAS DE DATOS /////////////////////////////////////////////////////////


t_get_productos();
function t_get_productos()
{

$.get("../../core/controllers/pedidos_controller.php",{act:"get_all"},function(res){

datos=JSON.parse(res);
var html="";
var html1="";
console.log(datos);

$.get('../../core/controllers/pedidos_controller.php',{act:"get_equivalencia"},function(res){
	var datos1=JSON.parse(res);
	console.log(datos1);


$.each(datos, function(i, item)
{
	console.log("a que hora");
        
    html+="<tr data-id='"+item.id_producto+"' data-nom='"+item.des_nombrep+"' data-ar='"+item.des_area+"' data-ex='"+item.existenciam+"' data-exg='"+item.existenciag+"' class='agregar group-item-"+item.des_categoria+"' data-group='"+item.des_categoria+"' data-mar='"+item.des_marca+"'>";
    html+="<td class='center' id='nombre"+i+"'>"+item.des_nombrep+"</td>";
    html+="<td class='center' id='fecha_in"+i+"'>"+item.cantidad+' '+item.des_unidadmp+"</td>";
    html+="<td class='center' id='fecha_in"+i+"'>"+item.des_marca+"</td>";
    //console.log(item.des_existe);
    if(item.des_existe=='no')
    {
    	html+="<td class='center' id='fecha_in"+i+"'>No asignado</td>";
    	html+="<td class='center' id='fecha_in"+i+"'>No asignado</td>";
    }
    else
    {
    	$.each(datos1, function(j,item1){
    		//console.log("j"+j);

    		if(item.id_producto==item1.id_producto)
    		{
    			var cad=item1.des_unidadg+" de "+item1.cantidad+" "+item1.des_unidadm;
    			//console.log("va a agregarse"+cad);
    			html+="<td class='center' id='fecha_in"+i+"'>"+cad+"</td>";
    			html+="<td class='center' id='ca"+i+"'><input class='center cambio' id='cam"+item.id_producto+"' value='"+item.existenciag+"' data-nom='cam"+item.id_producto+"' data-id='"+item.id_producto+"' style='border-bottom: 0px solid white;'></input></td>";
    		}

    	});
    }
    
    html+="<td class='center' id='fecha_in"+i+"'>"+item.existenciam+"</td>";
    html+="<td class='group' id='fecha_in"+i+"'>"+item.des_categoria+"</td>";
    html+="<td class='group' id='fecha_in"+i+"'>"+item.des_subcategoria+"</td>";
    html+="<td class='group' id='fecha_in"+i+"'>"+item.nombre+"</td>";

      
});


$("#tabla_pedido").dataTable().fnDestroy();


                  
$("#tabla_pedido tbody").empty().append(html);
var table = $('#tabla_pedido').DataTable({
	fixedHeader: true,

    "columnDefs": 
    [
        { "visible": false, "targets": 6 },
        { "visible": false, "targets": 7}
        // { "visible": false, "targets": 8}
    ],

    "displayLength": 10,
    order: [[6, "asc"], [7, "asc"],[0,"asc"]],

    "drawCallback": function ( settings ){
	    var api = this.api();
	    var rows = api.rows( {page:'current'} ).nodes();
	    var last=null;

	    api.column(6, {page:'current'} ).data().each( function ( group, i) 
	    {
	        if ( last !== group ) 
	        {
	            $(rows).eq( i ).before(
	                '<tr class="group orange" style="font-size:1.5em;"><td colspan="8" class="" style="background: #A9FD7C">'+group+'</td></tr>'
	            );
	            last = group;
	        }
	    });


	    api.column(7, {page:'current'} ).data().each( function ( group, i ) 
	    {
	        if ( last !== group ) 
	        {
	            $(rows).eq( i ).before(
	                '<tr class="group style="font-size:1em"><td colspan="8">'+group+'</td></tr>'
	            );
	            last = group;
	        }
	    });

    }
}) 


$('#tabla_pedido tbody').on( 'click', 'tr', function() 
{
    if ($(this).hasClass('selected')) 
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

//CAMBIAR LO QUE HAY EN TABLA //////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////////////////////////////

});

});

}

$("#tabla_pedido tbody").on("click","tr.agregar",function(event){

	data_id_producto=$(this).data("id");
	nombre=$(this).data("nom");
	marca=$(this).data("mar");
	var html1="";
	n[data_id_producto]=0;

	if(($.inArray(data_id_producto, arr))<0)
	{

		$('#btn_guardar_pedido').attr('disabled', false);
    $('#btn_cerrar_pedido').attr('disabled', false);
		cont++;
		n[data_id_producto]=n[data_id_producto]+1;

	  arr.push(data_id_producto);

	      html1+="<tr id='fila"+cont+"' class='fila'>";
        html1+="<td style='padding:0px; width:1px;'><a href='#' data-id='"+data_id_producto+"' class='btn green' id='id_menos' style='padding-right:5px; padding-left:5px; padding-top:0px;'><i class='material-icons'>remove</i></a></td>";

        html1+="<td style='padding:0px; width:1px;'><input readonly='true' type='text' value='"+n[data_id_producto]+"' id='valor"+data_id_producto+"' style='text-align: center; width: 32px; height: 27px; margin-bottom: 0px;'></td>";
          
        html1+="<td style='padding:0px; width:1px;'><a href='#' data-id='"+data_id_producto+"' class='btn green' id='id_mas' style='padding-right:5px; padding-left:5px; padding-top:0px;'><i class='material-icons'>add</i></a></td>";

        html1+="<td class='celda' id='celda1"+data_id_producto+"' style='padding:0px; padding-left:3px; text-align:left; line-height: 15px;'><label for='name'>"+nombre+" "+marca+"</label></td>";

        html1+="<td style='padding:0px; width:1px;'><a href='#' data-contador='"+cont+"' class='btn red' data-id='"+data_id_producto+"' id='elimina' style='padding-right:5px; padding-left:5px; padding-top:0px;'><i class='material-icons'>close</i></a></td>";
        html1+="</tr>";

        $("#tabla_rpedido tbody").append(html1);
        var valor_ayuda="#valor"+data_id_producto;
        n[data_id_producto]=parseInt($(valor_ayuda).val());
        //console.log(n[data_id_producto]);
        //alert(n[data_id_producto]);
        //arr1.push(n[data_id_producto]);
        //console.log(arr1);

     }
     else
     {
     	
	      var valor_ayuda="#valor"+data_id_producto;
	      n[data_id_producto]=parseInt($(valor_ayuda).val());//se obtiene el valor del input que tiene la
        //console.log(n[data_id_producto]);
        //var posicion_producto3=$.inArray(n[data_id_producto], arr1);
        //console.log(posicion_producto3); 
	      n[data_id_producto]+=1;
        //alert(n[data_id_producto]);
	      $(valor_ayuda).val(n[data_id_producto]);

        //arr1.splice(posicion_producto3,1, n[data_id_producto]);
        //console.log(arr1);


     }

});


//*BOTON-SUSTRACCION*************************************************************************************************
      $("#tabla_rpedido tbody").on("click","a#id_menos",function(event){  
        var d=$(this).data("id");
        var st="#valor"+d;
        n[d]=parseInt($(st).val());

        //console.log(n[d]);
        //var posicion_producto2=$.inArray(n[d], arr1);
        //console.log(posicion_producto2);
        //alert(v1);
        n[d]=n[d]-1;

        //arr1.splice(posicion_producto2,1, n[d]);
        //console.log(arr1);


        if (n[d]==0)  
        {
          alert("No permitido");   
        }
        else
        {
          $(st).val(n[d]);
        }
      });
//*BOTON-ADICION*******************************************************************************************************
      $("#tabla_rpedido tbody").on("click","a#id_mas",function(event){
        var da=$(this).data("id");
        var to=$(this).data("tot");
        var exisg=$(this).data("exisg");
        var sd="#valor"+da;
        //alert(sd);

        n[da]=parseInt($(sd).val());
        //console.log(n[da]);
        //var posicion_producto1=$.inArray(n[da], arr1);
        //console.log(posicion_producto1);
        n[da]=n[da]+1;
        //alert(n[da]);
        //arr1.splice(posicion_producto1,1, n[da]);
        //console.log(arr1);

         $(sd).val(n[da]);
         //console.log(n[da]);
          
      });
//*BOTON-ELIMINAR*******************************************************************************************************
      $("#tabla_rpedido tbody").on("click","a#elimina",function(event){
        var data_producto=$(this).data("id");
        var conta=$(this).data("contador");
        var nn=$(this).data("nom");
        var ayuda_fila="#fila"+conta;
        var posicion_producto=$.inArray(data_producto, arr);
        arr.splice(posicion_producto,1);

        $(ayuda_fila).remove();
        console.log(arr);  
        if(arr.length == 0)
        {
          $('#btn_guardar_pedido').attr('disabled', true);
          $('#btn_cerrar_pedido').attr('disabled', true);
        }
      });


///TABLA DE TEST2/////////////////////////////////////////////////////////////////////////////////

function aleatorio(inferior,superior){
   numPosibilidades = superior - inferior
   aleat = Math.random() * numPosibilidades
   aleat = Math.floor(aleat)
   return parseInt(inferior) + aleat
} 

function dame_color_aleatorio(){
   hexadecimal = new Array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F")
   color_aleatorio = "#";
   for (i=0;i<6;i++){
      posarray = aleatorio(0,hexadecimal.length)
      color_aleatorio += hexadecimal[posarray]
   }
}
dame_color_aleatorio();

document.getElementById("tit").setAttribute("style","background:" + color_aleatorio); 


var datito2;
var datito3;
var arri=[];
/////

llenar_ticket();

function llenar_ticket()
{

$.ajax({
          data:  {act:"get_ticket"},
          url:   '../../core/controllers/pedidos_controller.php',
          type:  'get',
          beforeSend: function () {
          },
          success:  function (data2) {


                  datito4=JSON.parse(data2);
                  var html="";
                  var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

                  $.each(datito4, function(i, item){
                    var f=new Date(item.fecha);

                     html+='<p class="col l2" style="margin-top: 4%"><input data-id="'+item.id_ticketp+'" type="checkbox" class="uno" id="fil'+item.id_ticketp+'" /><label for="fil'+item.id_ticketp+'"></label></p><a class="collection-item ver row" style="padding-bottom: 2px;" data-id="'+item.id_ticketp+'">'+f.getUTCDate()+" de "+meses[f.getUTCMonth()]+" de "+f.getUTCFullYear()+" "+item.des_area+'</a>';

                  });

                   $("#tabla_fechas").html(html);
                }
});
}

$("#tabla_fechas").on("click","a.ver",function(event){

  r=$(this).data("id");
  llenar(r);


});

function format2 ( data ) {
  //console.log("esto es lo que lega: "+data);
  valo1=data[0];
  //console.log(n[valo1]);
    //console.log(valo1);
    //console.log(n[valo1]);
    n[valo1]+='</table>'
    //console.log(n[valo1]);
    return n[valo1];
}

var table = $('#tabla_pendientes').DataTable();
function llenar(r)
{

arrt1=[];
arrt=[];
a_uno=[];

if(a_uno.length == 0)
{
  $('input.uno').attr('disabled', false);
}

arrt1=[];
arrt=[];

  $.ajax({
          data:  {r:r,act:"get_pendientes"},
          url:   '../../core/controllers/pedidos_controller.php',
          type:  'post',
          beforeSend: function () {

          },
          success:  function (data) {

                  datito2=JSON.parse(data);
                  var html="";


            $.ajax({
              data:  {act:"get_equivalencia"},
              url:   '../../core/controllers/pedidos_controller.php',
              type:  'get',
              beforeSend: function () {

              },
              success:  function (data1) {
                //console.log("HASTA AQUI TERMINA LA PETICION DE EQUIVALENCIAS");


                  datito3=JSON.parse(data1);
                  var html="";

                  $.each(datito2, function(i, item){


                        if(($.inArray(item.id_provedor, arrt1))<0)
                        {
                            arrt1.push(item.id_provedor);
                            //arri=[];
                            

                          html+="<tr class='ac' style='background: #BBFAD0'>";
                          html+="<td class='center'>"+item.id_provedor+"</td>";
                          html+="<td class='center' id='nombre"+i+"'>"+item.nombre+"</td></tr>";


                        }

                        if(($.inArray(item.id_provedor, arrt))<0)
                        {
                            
                            n[item.id_provedor]="";
                            arrt.push(item.id_provedor);
                            n[item.id_provedor]+='<table class="dt-head-center compact" width="100%" cellspacing="0">';
                            n[item.id_provedor]+='<tr class="lo">';
                            // n[item.id_categoria]+='<td class="center">'+x+'</td>';
                            n[item.id_provedor]+='<td class="col l4 m4 "><i class="material-icons black-text">subdirectory_arrow_right</i>'+item.des_nombrep+'</td>';
                            n[item.id_provedor]+='<td class=" col l3 m3"><input class="cambioo center" id="cam'+item.id_producto+'" value="'+item.cantidad_p+'" data-nom="cam'+item.id_producto+'" data-id="'+item.id_producto+'" style="border-bottom: 0px solid white"></input></td>';

                            // <input class='center cambio' id='cam"+item.id_producto+"' value='"+item.existenciag+"' data-nom='cam"+item.id_producto+"' data-id='"+item.id_producto+"' style='border-bottom: 0px solid white;'></input>
                           


                            if(item.des_existe=='no')
                            {
                              n[item.id_provedor]+='<td class="col l4 m4 center">Unidad(s)</td>';
                              
                            }
                            else
                            {
                              $.each(datito3, function(z,item1){
                                //console.log("z"+z);

                                if(item.id_producto==item1.id_producto)
                                {
                                  var cad=item1.des_unidadg+" de "+item1.cantidad+" "+item1.des_unidadm;
                                  //console.log("va a agregarse"+cad);
                                  n[item.id_provedor]+='<td class="col l4 m4">'+cad+'</td>';
                                }

                              });
                            }
                            n[item.id_provedor]+='<td class="col l1 m1 center"><p><input type="checkbox" class="todo" data-id="'+item.id_producto+'" data-t="'+item.id_ticketp+'" id="fil'+item.id_producto+'" /><label for="fil'+item.id_producto+'"></label></p></td>';
                            n[item.id_provedor]+='</tr>';
                            
                        }
                        else
                        {
                            n[item.id_provedor]+='<tr class="lo">';

                            // n[item.id_categoria]+='<td class="center">'+x+'</td>';
                            n[item.id_provedor]+='<td class="col l4 m4"><i class="material-icons black-text">subdirectory_arrow_right</i>'+item.des_nombrep+'</td>';
                             n[item.id_provedor]+='<td class=" col l3 m3"><input class="cambioo center" id="cam'+item.id_producto+'" value="'+item.cantidad_p+'" data-nom="cam'+item.id_producto+'" data-id="'+item.id_producto+'" style="border-bottom: 0px solid white"></input></td>';
                            if(item.des_existe=='no')
                            {
                              n[item.id_provedor]+='<td class="col l4 m4">Unidad(s)</td>';
                              
                            }
                            else
                            {
                              $.each(datito3, function(z,item1){

                                if(item.id_producto==item1.id_producto)
                                {
                                  var cad=item1.des_unidadg+" de "+item1.cantidad+" "+item1.des_unidadm;

                                  n[item.id_provedor]+='<td class="col l4 m4">'+cad+'</td>';
                                }

                              });
                            }
                           n[item.id_provedor]+='<td class="col l1 m1 center"><p><input type="checkbox" class="todo" data-id="'+item.id_producto+'" data-t="'+item.id_ticketp+'" id="fil'+item.id_producto+'" /><label for="fil'+item.id_producto+'"></label></p></td>';
                            n[item.id_provedor]+='</tr>';

                        }
                      

                  });
                  
                  
                  $("#tabla_pendientes").html(html);

                  $("#tp2").show();
                  $("#info").hide();
                  $("#tabla_pendientes").dataTable().fnDestroy();
                  var table = $('#tabla_pendientes').DataTable({
               
                  // order: [[0, "asc"]],
                  "columnDefs": [
                    { "visible": false, "targets": 0 },
                    ]
        
                  });


                  $('#tabla_pendientes tbody').on('click','tr.ac', function (){

                    var tr = $(this).closest('tr');
                    var row = table.row( tr );

                    if ( row.child.isShown() ) {
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( format2(row.data())).show();
                        tr.addClass('shown');
                    }
                 }); 
                    
              }

            });
                 
                
          }

  });
}

$("#tabla_fechas").on("change","input.uno",function(event){
  q=$(this).data("id");
  man=1;

  //alert("el ticket esta seleccionado");
  if (!this.checked)
  {
    var posi=$.inArray(q,a_uno);
    console.log(posi);
    a_uno.splice(posi,1);
    console.log(a_uno);
    if(a_uno.length == 0)
    {
      $('input.todo').attr('disabled', false);
      // $('#bt_guardar_autorizacion').attr('disabled', true);
      // $('#bt_cerrar_autorizacion').attr('disabled', true);
    }
    if(a_todo==0 && a_uno==0)
    {
      $('#bt_guardar_autorizacion').attr('disabled', true);
      $('#bt_cerrar_autorizacion').attr('disabled', true);
    }

  }
  else
  {
    a_uno.push(q);
    console.log(a_uno);
    $("input.todo").attr("disabled",true);
    $('#bt_guardar_autorizacion').attr('disabled', false);
    $('#bt_cerrar_autorizacion').attr('disabled', false);

  }


});

$("#tabla_pendientes").on("change","input.todo",function(event){
  ye=$(this).data("id");
  t=$(this).data("t");
  man=2;

  //alert("el ticket esta seleccionado");
  if (!this.checked)
  {
    var posi1=$.inArray(ye, a_todo);
    console.log(posi1);
    a_todo.splice(posi1,1);
    console.log(a_todo);
    if(a_todo.length == 0)
    {
      $('input.uno').attr('disabled', false);
    }
    if(a_todo==0 && a_uno==0)
    {
        $('#bt_guardar_autorizacion').attr('disabled', true);
        $('#bt_cerrar_autorizacion').attr('disabled', true);
    }
  }
  else
  {
    a_todo1.push(ye);
    a_todo1.push(t);
    a_todo.push(a_todo1);
    console.log(a_todo);
    a_todo1=[];
    $("input.uno").attr("disabled",true);
    $('#bt_guardar_autorizacion').attr('disabled', false);
    $('#bt_cerrar_autorizacion').attr('disabled', false);
    alert(t);

  }


});


$("#tabla_pendientes").on("change","input.cambioo",function(event){

camb=1;
 e1=$(this).data("id");
 es=$(this).data("nom");


});


// t_get_pendientes();
// function t_get_pendientes()
// {

// var html="";
// var html1="";

// $.get('../../core/controllers/pedidos_controller.php',{act:"get_pendientes"},function(res){
//   var datos1=JSON.parse(res);
//   console.log(datos1);


// $.each(datos1, function(i, item)
// {
//   // html+="<tr>"
//   // html+="<td class='center'>"+(i+1)+"</td>";
//   // html+="<td class='center' id='fecha_in"+i+"'>"+item.fecha+"</td>";
//   // html+="<td class='group' id='fecha_in"+i+"'>"+item.des_area+"</td>";
//   // html+="</tr>" 

//   html+='<li>';
//       html+='<div class="collapsible-header striped"><i class="material-icons">receipt</i>'+item.fecha+'</div>';
//       html+='<div class="collapsible-body"><span></span></div>'
//   html+='</li>';  
// });

// $("#tickets ").empty().append(html);


// // $("#tabla_pendientes").dataTable().fnDestroy();


                  
// // $("#tabla_pendientes tbody").empty().append(html);
// // var table = $('#tabla_pendientes').DataTable({
// //   fixedHeader: true,

// //     "columnDefs": 
// //     [
// //         { "visible": false, "targets": 2 }
// //     ],

// //     "displayLength": 10,
// //     order: [[2, "asc"],[0,"asc"]],

// //     "drawCallback": function ( settings ){
// //       var api = this.api();
// //       var rows = api.rows( {page:'current'} ).nodes();
// //       var last=null;
// //       //var coli=$(this).data("color");
// //       api.column(2, {page:'current'} ).data().each( function ( group, i) 
// //       {
// //           if ( last !== group ) 
// //           {
// //               $(rows).eq( i ).before(
// //                   '<tr class="group orange" style="font-size:1.5em;"><td colspan="3" class="" style="background: #A9FD7C">'+group+'</td></tr>'
// //               );
// //               last = group;
// //           }
// //       });

// //     }
// // }) 


// // $('#tabla_pendientes tbody').on( 'click', 'tr', function() 
// // {
// //     if ($(this).hasClass('selected')) 
// //     {
// //         $(this).removeClass('selected');
// //     }
// //     else 
// //     {
// //         $('tr.selected').removeClass('selected');
// //         $(this).addClass('selected');
// //         ari="";
// //     }
// // });


// });


// }


});
  </script>