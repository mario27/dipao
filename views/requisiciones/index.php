<?php
  include("../partials/head.php")
?>
<!--***NAV****************************************************************************************************************** -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
		Dipao
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>

      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--***CONTAINER************************************************************************************************************ -->
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-lg-6">
			<div class="well" style="padding: 10px; margin-bottom: 10px;">
				<form>
					<div id="the-basics">
  						<input class="typeahead form-control" type="text" placeholder="Productos">
					</div>
				</form>
			</div>

			<div class="panel panel-default">
			  <div class="panel-heading">
			    <div class="row">
				<div class="col-xs-12">
					<div id="categorias"></div>
					<div class='divider'></div>
					<div id="subcategorias"></div>
				</div>
			</div>
			  </div>
			  <div class="panel-body">
        <div class="row">
			    <div id="productos"></div>
        </div>
         <!--  <div class="row">
            <a href="#">
              <div class="col-xs-2 element-item">
                <h3 class="name">Bismuth</h3>
                <p class="symbol">Bi</p>
                <p class="number badge">8</p>
                <p class="weight">208.980</p>
              </div>
            </a>
          </div>  --> 
			  </div>
			</div>

		</div>
		<div class="col-xs-12 col-lg-6">
			<div class="well">
        <div class="row center">
          <div class="col-xs-3 col-sm-2 col-md-1 col-lg-2" style="margin: -1px -1px -1px -1px; height: 90px; border: solid red 1px;"></div>
          <div class="col-xs-3 col-sm-2 col-md-1 col-lg-2" style="margin: -1px -1px -1px -1px; height: 90px; border: solid red 1px;"></div>
          <div class="col-xs-3 col-sm-2 col-md-1 col-lg-2" style="margin: -1px -1px -1px -1px; height: 90px; border: solid red 1px;"></div>
          <div class="col-xs-3 col-sm-2 col-md-1 col-lg-2" style="margin: -1px -1px -1px -1px; height: 90px; border: solid red 1px;"></div>
          <div class="col-xs-3 col-sm-2 col-md-1 col-lg-2" style="margin: -1px -1px -1px -1px; height: 90px; border: solid red 1px;"></div>
          <div class="col-xs-3 col-sm-2 col-md-1 col-lg-2" style="margin: -1px -1px -1px -1px; height: 90px; border: solid red 1px;"></div>
          <!-- <div class="col-xs-1" style="height: 50px; border: solid red 1px;"></div>
          <div class="col-xs-1" style="height: 50px; border: solid red 1px;"></div>
          <div class="col-xs-1" style="height: 50px; border: solid red 1px;"></div>
          <div class="col-xs-1" style="height: 50px; border: solid red 1px;"></div>
          <div class="col-xs-1" style="height: 50px; border: solid red 1px;"></div>
          <div class="col-xs-1" style="height: 50px; border: solid red 1px;"></div> -->
        </div>
			</div>
		</div>
	</div>
</div>
<!--********************************************************************************************************************* -->

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
			        	html+="<a class='btn btn-default btn-lg btn-margen' id='btn-subcategoria' data-id='"+item.id_subcategoria+"'>"+item.des_subcategoria+"</a>";
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
              html+="<a class='btn btn-primary btn-lg'>"+item.des_nombrep+" <span class='badge'>"+item.existencia+"</span></a>";
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
          var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
              var matches, substringRegex;

              // an array that will be populated with substring matches
              matches = [];

              // regex used to determine if a string contains the substring `q`
              substrRegex = new RegExp(q, 'i');

              // iterate through the pool of strings and for any string that
              // contains the substring `q`, add it to the `matches` array
              $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {
                  matches.push(str);
                }
              });

              cb(matches);
            };
          };

          var states = ['Leche', 'Agua', 'Cafe', 'Jugos', 'Arroz'];

          $('#the-basics .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
          },
          {
            name: 'states',
            source: substringMatcher(states)
          });
        });
// ***FUNCIONES***************************************************************************************************************
        function categorias()
        {
        	$.get("../../core/controllers/categorias_controller.php",{action:"categorias"},function(res){
              res = JSON.parse(res);
              var html="";
              $.each(res, function(i, item)
              {
                html+="<a class='btn btn-default btn-lg btn-margen' id='btn-categoria' data-id='"+item.id_categoria+"'>"+item.des_categoria+"</a>";
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
