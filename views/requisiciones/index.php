<?php
  include("../partials/head2.php")
?>
<!--***TABS***************************************************************************************************************** -->
<main>
  <nav class="nav-extended" style="background: #eaa110; background-image: url(../../resources/img/nav8.png);">
    <ul class="tabs tabs-transparent">
      <li class="tab"><a class="active" href="#test1"><b>Nueva</b></a></li>
      <li class="tab"><a href="#test2"><b>Estado</b></a></li>
      <li class="tab"><a href="#test3"><b>Historial</b></a></li>
    </ul>
  </nav>
  <div class="row" style="padding-top: 5px">
    <div class="col s12 m8 l9 grey lighten-3">
      <div id="test1">
        <div class="row">
         <div class="col s12 m12 l12" style="padding: 0px 5px 0px 5px">
          <div class="card horizontal" style="margin-bottom: 1px;">
            <div class="green" style="width: 22px;">
              <span style=" writing-mode: vertical-lr; transform: rotate(180deg);">Categorias</span>
            </div>
            <div class="card-stacked">
              <div class="card-content" id="card_categorias" style="padding: 15px;">
                <div id="categorias"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m12 l12" style="padding: 0px 5px 0px 5px">
          <div class="card horizontal" style="margin-bottom: 1px;">
            <div class="blue" style="width: 22px;">
              <span style=" writing-mode: vertical-lr; transform: rotate(180deg);">Subcategorias</span>
            </div>
            <div class="card-stacked">
              <div class="card-content" id="card_subcategorias" style="padding: 15px;">
                <div id="subcategorias"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12 m12 l12" style="padding: 0px 5px 0px 5px">
          <div class="card horizontal" style="margin-bottom: 1px;">
            <div class="red" style="width: 22px;">
              <span style=" writing-mode: vertical-lr; transform: rotate(180deg);">Productos</span>
            </div>
            <div class="card-stacked">
              <div class="card-content" style="padding: 15px;">
                <div id="productos"></div>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      <div id="test2" class="col s12">Opción 2</div>
      <div id="test3" class="col s12">Opción 3</div>
    </div>
    <div class="col s12 m4 l3 grey lighten-2" style="padding: 5px;">
      <div class="row" style="margin-bottom: 0px;">
        <div class="col s12">
          <div id="ag" class="borde row" style="background-color: #0D163C;">
              <a type="" id="btn_enviar" class="btn col right" style="background: #D6E055; margin-top:2%; margin-bottom:2%; margin-right:2%">
                  <i class="material-icons">send</i>
              </a>
              <a type="" id="btn_cerrar" class="btn col right" style="background: #8810AF; margin-top:2%; margin-bottom:2%; margin-right:2%">
                  <i class="material-icons">close</i>
               </a>
          </div> 
        </div>
      </div>
      <table class="bordered centered striped" id="tabla_prod">
        <tbody>

        </tbody>
        <!-- <thead>
          <tr>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
          </tr>
        </thead> -->
      </table>
      <div id="botones"></div>
    </div>
  </div>

  <div id="modal1" class="modal bottom-sheet" style="width: 50%; margin-left: 25%;">
    <div class="modal-content">
      <table class="bordered striped centered" id="tabla_detalles">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Existencia</th>
            <th>Cantidad</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <div id="detalles_producto"></div>
          </tr>
        </tbody>
      </table>
      
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat">Cerrar</a>
    </div>
  </div>
</main>


  <script type="text/javascript">
    $(document).ready(function(){
      var id_user=<?php echo $id_usuario; ?>;
      var n=[];
      var array=[];
      var array_registro=[];
      var cont=0; 
      var cant_paq=0;
      $('#btn_enviar').attr('disabled', true);
      $('#btn_cerrar').attr('disabled', true);
      $('.modal').modal();
//*LLAMAR-FUNCION-CATEGORIA*********************************************************************************************
      categorias();
//*FUNCION-CATEGORIA****************************************************************************************************
        function categorias()
        {
          $.get("../../core/controllers/categorias_controller.php",{action:"categorias"},function(res){
            res = JSON.parse(res);
            var html="";
            
            $.each(res, function(i, item)
            {
              html+="<a class='btn btn-large black-text cate' id='btn-categoria' data-color='"+item.color+"' data-id='"+item.id_categoria+"' style='width: 206px; margin: 2px 2px 2px 2px; padding-left: 1px; padding-right: 1px; background:"+item.color+"'>"+item.des_categoria+"</a>";
            });
            $("#categorias").html(html);
          });
        }
//*SUB-CATEGORIAS*******************************************************************************************************
      $("#card_categorias").on("click", "a#btn-categoria", function () {
          var html="";
          $("#productos").html(html);
          var dato=$(this).data("id");
          var color=$(this).data("color");

          $.post("../../core/controllers/categorias_controller.php",{dato:dato,action:"sub-categorias"},function(res){
              res = JSON.parse(res);
              html="";
              if (res=="")
              {
                html+="<h6>Sin datos</h6>";
              }
              else
              {
                $.each(res, function(i, item)
                {
                  html+="<a class='btn btn-large' id='btn-subcategoria' data-id='"+item.id_subcategoria+"' style='background:"+color+"; width: 206px; margin: 2px 2px 2px 2px; padding-left: 1px; padding-right: 1px;'>"+item.des_subcategoria+"</a>";
                });
              }
              $("#subcategorias").html(html);
          });
        });
      
//*PRODUCTOS************************************************************************************************************
      $("#card_subcategorias").on("click", "a#btn-subcategoria",function () {

        var dato_subcategoria=$(this).data("id");

        $.post("../../core/controllers/categorias_controller.php",{dato_subcategoria:dato_subcategoria,action:"productos"},function(res) {
          res = JSON.parse(res);
          var html="";

          if (res=="") 
          {
            html="<h6>Sin datos</h6>";
          }
          else
          {
            $.each(res, function(i,item,)
            {
              html+="<a href='#' id='btn-producto' data-id="+item.id_producto+" data-existenciam="+item.existenciam+" data-existenciag="+item.existenciag+" data-existenciatotal="+item.existencia+" data-nombre='"+item.des_nombrep+"' data-marca='"+item.des_marca+"' data-paq='"+item.id_existe+"'><div class='element-item'><h3 class='name'>"+item.des_nombrep+"</h3><p class='symbol'>"+item.des_marca+"</p><p class='weight'>"+item.cantidad+" "+item.des_unidadmp+"</p></div></a>";
            });
          }
          $("#productos").html(html);
        });
      });
//*TABLA-PRODUCTOS-SELECCIONADOS****************************************************************************************
      $("#productos").on("click","a#btn-producto",function(event){
        var html="";
        var hp="";

        var data_id_producto=$(this).data("id");
        var nombre=$(this).data("nombre");
        var marca=$(this).data("marca");
        
        var exis=$(this).data("existenciam");
        var exisg=$(this).data("existenciag"); 
        var exist=$(this).data("existenciatotal"); 
        
        var paquete=$(this).data("paq");

        $('#btn_enviar').attr('disabled', false);
        $('#btn_cerrar').attr('disabled', false);

        if (paquete==1) 
        {
          $.post("../../core/controllers/categorias_controller.php",{producto_id:data_id_producto,action:"equivalencia"},function(res){
            res = JSON.parse(res);
            console.log(res);
            html="";
            $.each(res, function(i, item)
            {
              cant_paq=item.cantidad;
            });
          });
        }

        //la variable exis contiene la existencia del producto seleccionado
        // alert(nombre);
        
        //la variable(arreglo) n[data_id_producto] contiene el valor inicial de los productos que se solicitaran.
        n[data_id_producto]=0;//arreglo que obtiene el data-id de cada producto seleccionado de la tabla, esto forma una variable n con la posicion del data-id. n[1,2,5,...dependiendo del data-id]

        // console.log[array];

        //identificar si el nombre del producto se encuentra en el arreglo, si si se encuentra arroja la posicion de este, y si no lo encuentra arroja un -1. En el caso de que arroje un -1 significa que no se encontro y se procede a crear el elemnto html para agregarlo a la tabla. 
        if(($.inArray(data_id_producto, array))<0)//se crea la fila y se agrega a la tabla
        {
          cont++;//se crea un contador para identificar las filas agregadas a la tabla y se incrementa cada vez que se selecciona el producto.
          
          if (n[data_id_producto]>exist)
          {
            alert("La existencia de este producto llego a 0");  
          }
          else
          {
            n[data_id_producto]=n[data_id_producto]+1;
          } 


          array.push(data_id_producto);//se agrega el nombre del producto seleccionado al arreglo

          // alert(cont);
          html+="<tr id='fila"+cont+"' class='fila'>";
          html+="<td style='padding:5px 0px; width:1px;'><a href='#' class='btn green' data-id='"+data_id_producto+"' id='id_menos' style='padding-right:5px; padding-left:5px; padding-top:0px;'><i class='material-icons'>remove</i></a></td>";

          html+="<td style='padding:5px 0px; width:1px;'><input readonly='true' type='text' value='"+n[data_id_producto]+"' id='valor"+data_id_producto+"' style='text-align: center; width: 32px; height: 27px; margin-bottom: 0px;'></td>";
          
          html+="<td style='padding:5px 0px; width:1px;'><a href='#' class='btn green' data-id='"+data_id_producto+"' data-tot='"+exis+"' data-exisg='"+exisg+"' data-exist='"+exist+"' id='id_mas' style='padding-right:5px; padding-left:5px; padding-top:0px;'><i class='material-icons'>add</i></a></td>";

          html+="<td class='celda' id='celda1"+data_id_producto+"' data-id='"+data_id_producto+"' data-nn='"+nombre+"' data-marca='"+marca+"' data-existencia='"+exis+"' style='padding:0px; padding-left:3px; text-align:left; line-height: 15px;'><label for='name'>"+nombre+" "+marca+"</label></td>";

          if (paquete==1) 
          {
            html+="<td class='celda1' id='celda2"+data_id_producto+"' style='padding:5px 0px; width:1px;'><input name='group"+data_id_producto+"' type='checkbox' class='filled-in checkbox-color checar' value='1' data-idd='"+data_id_producto+"' data-eg='"+exisg+"' data-em='"+exist+"' id='check_"+data_id_producto+"' /><label for='check_"+data_id_producto+"' style='height:15px;'></label></td>";
          }
          else{
            html+="<td class='celda1' id='celda2"+data_id_producto+"' style='padding:5px 0px; width:30px;'></td>";
          }

          html+="<td style='padding:5px 0px; width:1px;'><a href='#' class='btn red' data-id='"+data_id_producto+"' data-contador='"+cont+"' data-nom='"+nombre+"' id='elimina' style='padding-right:5px; padding-left:5px; padding-top:0px;'><i class='material-icons'>close</i></a></td>";
          html+="</tr>";
          console.log(array);

        }
        else//solo se incrementa el valor de producto a pedir ya que la fila ya existe
        {
          //la variable valor_ayuda contiene el nombre del id agragado al input del total de producto 
          var valor_ayuda="#valor"+data_id_producto;
          // alert(nombre+" ya existe")
           // var valor_ayuda="#valor"+data_id_producto;
          n[data_id_producto]=parseInt($(valor_ayuda).val());//se obtiene el valor del input que tiene la cantidad de producto seleccionado.
          console.log(n[data_id_producto]);
          n[data_id_producto]+=1;
          var va1=$("input[name='group"+data_id_producto+"']:checked").val();
          if(va1!=1)
          {
            if(n[data_id_producto]>exist)
            {
              alert("La existencia de este producto llego a 0"); 
            }
            else
            {
              $(valor_ayuda).val(n[data_id_producto]);
            }
          }
          else
          {
            if(n[data_id_producto]>exisg)
            {
              alert("La existencia de este producto llego a 0"); 
            }
            else
            {
              $(valor_ayuda).val(n[data_id_producto]);
            }
          }

        } 

        $("#tabla_prod tbody").append(html);//agregar fragmentos de codigo al documento html 
        // $('#tabla_prod').DataTable(); 
      });
//*CHECK-BOX************************************************************************************************************
      $("#tabla_prod tbody").on("change","input.checar",function(event){
        var eg1=$(this).data("eg");
        var em1=$(this).data("em");
        var dd=$(this).data("idd");

        var val1="#valor"+dd;
        var check="#check_"+dd;

        var v2=$(val1).val();

        if (!this.checked) 
        {
          // alert("Se desmarco");
          if (em1<v2) 
          {
            $(check).prop("checked",true);
          }
        } 
        else
        {
            if(eg1>=v2)
            {
              // alert("siiii ");
            }
            else
            {
              // alert(check);
              $(check).prop("checked",false);
            }
        }

      });
//*BOTON-SUSTRACCION*************************************************************************************************
      $("#tabla_prod tbody").on("click","a#id_menos",function(event){  
        var d=$(this).data("id");
        var st="#valor"+d;
        var v1=$(st).val();
        n[d]=v1-1;

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
      $("#tabla_prod tbody").on("click","a#id_mas",function(event){
        var da=$(this).data("id");
        var to=$(this).data("tot");
        var exisg=$(this).data("exisg");
        var exist=$(this).data("exist");
        var sd="#valor"+da;

        var tota=cant_paq*$(sd).val();
        // alert(tota);

        var checke="#check_"+da;

        n[da]=parseInt($(sd).val());
        console.log(n[da]);
        n[da]=n[da]+1;

        var va1=$("input[name='group"+da+"']:checked").val();
        if(va1!=1)
        {
          if (n[da]>exist) 
          {
            alert("La existencia de este producto llego a 0");  
          }
          else
          { 
            $(sd).val(n[da]);
            console.log(n[da]);
          }
        }
        else
        { 
          // if(tota>exist)
          // {
          //   alert("error "+tota)
          // }
          if (n[da]>exisg) 
          {
            alert("La existencia de este producto llego a 0");  
          }
          else
          { 
            $(sd).val(n[da]);
            console.log(n[da]);
          }
        }

        
          
      });
//*BOTON-ELIMINAR*******************************************************************************************************
      $("#tabla_prod tbody").on("click","a#elimina",function(event){
        var data_producto=$(this).data("id");
        var conta=$(this).data("contador");
        var nn=$(this).data("nom");
        var ayuda_fila="#fila"+conta;
        // alert(data_producto);

        var posicion_producto=$.inArray(data_producto, array);
        // alert(posicion_producto);
        // alert(array.splice(posicion_producto,1));
        array.splice(posicion_producto,1);//elimina el producto del arreglo

        $(ayuda_fila).remove();//elimina la fila de la tabla
        // array.removeItem(nn);
        console.log(array);  
        if(array.length == 0)
        {
          $('#btn_enviar').attr('disabled', true);
          $('#btn_cerrar').attr('disabled', true);
        }
      });
//*DETALLES-PRODUCTO***************************************************************************************************
      $("#tabla_prod tbody").on("click","td.celda",function(event){
        var id_p=$(this).data("id");
        var nombre_p=$(this).data("nn");
        var marca=$(this).data("marca");
        var existencia=$(this).data("existencia");
        var consulta="#valor"+id_p;
        var html="";
        cant_prod=$(consulta).val();

        var celda_ayuda="celda1"+id_p;
        var celda_ayuda2="celda2"+id_p;

        // alert(cons);
        if($("#"+celda_ayuda).hasClass("seleccionada"))
        {
          $("#"+celda_ayuda).removeClass("seleccionada");
          $("#"+celda_ayuda2).removeClass("seleccionada");
        }
        else
        {
          $("td.celda").removeClass("seleccionada");
          $("td.celda1").removeClass("seleccionada");
          $("#"+celda_ayuda).addClass("seleccionada");
          $("#"+celda_ayuda2).addClass("seleccionada");
        }
        console.log(id_p+" "+nombre_p+" "+cant_prod);
        
        html+="<td>"+nombre_p+"</td>";
        html+="<td>"+marca+"</td>";
        html+="<td>"+existencia+"</td>";
        html+="<td>"+cant_prod+"</td>";

        $("#tabla_detalles tbody tr").html(html);

        $('#modal1').modal('open');
      }); 
//*CERRAR-TODO********************************************************************************************************
      $("#btn_cerrar").click(function(){
        swal({
          title: "¿Estas seguro?",
          text: "Se cancelaran todos los productos cargados a esta lista",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Si, estoy seguro",
          closeOnConfirm: true
        },
        function(){
          array.length=0;
          console.log(array);
          $(".fila").remove();
          $('#btn_enviar').attr('disabled', true);
          $('#btn_cerrar').attr('disabled', true);
        });
      });
//*ENVIAR-REQUI********************************************************************************************************
      $("#btn_enviar").click(function(){
         swal({
          title: "¿Estas seguro?",
          text: "Ya cargaste todos los productos que necesitas",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Si, estoy seguro",
          closeOnConfirm: true
        },
        function(){
          array_registro1=[];
          arr=[];
          arr1=[];
          va2=0;

          for(var i=0;i<array.length;i++)
          {
            var valor_ayuda="#valor"+array[i];
            arr.push($(valor_ayuda).val());
          }

          for(var j=0;j<array.length;j++)
          {
            var conn="#check_"+array[j];
            if($(conn).prop('checked')){va2=1;}else{va2=0;}
            array_registro1.push(va2);
          }


          for(var k=0;k<array.length;k++)
          {
            array_registro.push(array[k]);
            array_registro.push(arr[k]);
            array_registro.push(id_user,array_registro1[k]);

            arr1.push(array_registro);
            array_registro=[];
            // console.log(arr1);
          }

          console.log(arr1);
                  
          $.post('../../core/controllers/categorias_controller.php',{arr1:arr1,action:"insertar_requi"},function(request)
          {
            Materialize.toast("Registro Exitoso",2500);
          });
          array.length=0;
          console.log(array);
          $(".fila").remove();
          $('#btn_enviar').attr('disabled', true);
          $('#btn_cerrar').attr('disabled', true);
        });
      });
//*********************************************************************************************************************
    });
  </script>

<?php
  include("../partials/footer.php")
?>