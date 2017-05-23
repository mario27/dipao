<?php
  include("../partials/head2.php")
?>
<!--***TABS***************************************************************************************************************** -->
<main>
  <nav class="nav-extended" style="background: #eaa110; background-image: url(../../resources/img/nav8.png);">
    <ul class="tabs tabs-transparent">
      <li class="tab"><a class="active" href="#test1"><b>Opción 1</b></a></li>
      <li class="tab"><a href="#test2"><b>Opción 2</b></a></li>
      <li class="tab"><a href="#test3"><b>Opción 3</b></a></li>
      <li class="tab"><a href="#test4"><b>Opción 4</b></a></li>
    </ul>
  </nav>

  <div class="row" style="padding-top: 5px">
    <div class="col s12 m8 l9 grey lighten-3">
      <div id="test1">
        <div class="row">
          <div class="col s12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-12">
                    <h5>Categorias</h5>
                    <div id="categorias"></div>
                    <h5>Subcategorias</h5>
                    <div id="subcategorias"></div>
                  </div>
                </div>
              </div>
              <div class="panel-body">
              <div class="row">
                <h5>Productos</h5>
                <div id="productos"></div>
              </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
      <div id="test2" class="col s12">Opción 2</div>
      <div id="test3" class="col s12">Opción 3</div>
      <div id="test4" class="col s12">Opción 4</div>
    </div>
    <div class="col s12 m4 l3 grey lighten-2">
      aAS
    </div>
  </div>
</main>


  <script type="text/javascript">
    $(document).ready(function(){
      $("#btn-producto").click(function(event)
      {
        alert("asd");
      });
// **********************LLAMAR FUNCIONES********************************************************************************
      categorias();
// **********************FIN*********************************************************************************************
      $(document).on("click", "#btn-categoria", function () {
          var html="";
          $("#productos").html(html);

          var dato=$(this).data("id");

          $.post("../../core/controllers/categorias_controller.php",{dato:dato,action:"sub-categorias"},function(res){
              res = JSON.parse(res);
              html="";
              $.each(res, function(i, item)
              {
                html+="<a class='btn btn-large' id='btn-subcategoria' data-id='"+item.id_subcategoria+"'>"+item.des_subcategoria+"</a>";
              });
              $("#subcategorias").html(html);
          });
        });
      
// **********************************************************************************************************************
        $(document).on("click", "#btn-subcategoria",function () {

          var dato_subcategoria=$(this).data("id");

          $.post("../../core/controllers/categorias_controller.php",{dato_subcategoria:dato_subcategoria,action:"productos"},function(res) {
            res = JSON.parse(res);
            var html="";
            $.each(res, function(i,item,)
            {
              html+="<a class='btn btn-large'>"+item.des_nombrep+" <span class='badge'>"+item.existencia+"</span></a>";
              // html+="<a href='#' id='btn-producto'><div class='col-xs-2 element-item'><h3 class='name'>"+item.des_nombrep+"</h3><p class='symbol'>"+item.existencia+"</p></div></a>";
            //   <a href="#">
            //   <div class="col-xs-2 element-item">
            //     <h3 class="name">Bismuth</h3>
            //     <p class="symbol">Bi</p>
            //     <p class="number badge">8</p>
            //     <p class="weight">208.980</p>
            //   </div>
            // </a>
            });
            $("#productos").html(html);
          });
        });
// **********************************************************************************************************************

        });
// ***FUNCIONES***************************************************************************************************************
        function categorias()
        {
          $.get("../../core/controllers/categorias_controller.php",{action:"categorias"},function(res){
              res = JSON.parse(res);
              var html="";
              $.each(res, function(i, item)
              {
                html+="<a class='btn btn-large orange' id='btn-categoria' data-id='"+item.id_categoria+"'>"+item.des_categoria+"</a>";
              });

              $("#categorias").html(html);

            });
        }
// ***************************************************************************************************************************

// ***************************************************************************************************************************
    </script>

<?php
  include("../partials/footer.php")
?>
