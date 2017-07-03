<?php session_start();

  if (!isset($_SESSION["sesion_ok"])) 
  {
    ?>
    <script type="text/javascript">
      window.location="../../";
    </script>
    <?php
  }
  else
  {
    $id_usuario=$_SESSION["id_usuario"];
    $id_empleado=$_SESSION["id_empleado"];
    $nombre=$_SESSION["nombre"];
    $ap=$_SESSION["ap"];
    $am=$_SESSION["am"];
  }   
?>
<!-- <?php echo $nombre." ".$ap." ".$am; ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="shortcut icon" href="../../resources/img/logo-dipao.png"> 
	<link type="text/css" rel="stylesheet" href="../../resources/css/sweetalert.css"/>
	<link type="text/css" rel="stylesheet" href="../../resources/css/materialize.min.css"/>
	<link type="text/css" rel="stylesheet" href="../../resources/css/styles.css"/>
  <link type="text/css" rel="stylesheet" href="../../resources/css/jquery.dataTables.min.css"/>
  <link type="text/css" rel="stylesheet" href="../../resources/css/dataTables.material.min.css"/>


	<script type="text/javascript" src="../../resources/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script>
	<script type="text/javascript" src="../../resources/js/materialize.min.js"></script>
	<script type="text/javascript" src="../../resources/js/jquery.validate.min.js"></script> 
  <script type="text/javascript" src="../../resources/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../../resources/js/dataTables.material.min.js"></script> 

	<script type="text/javascript">
      $(document).ready(function(){
        $("#requi").show();
        $("#pedid").hide();
        $("#invent").hide();

        $("#requisiciones").click(function(){
          $("#requi").show();
          $("#pedid").hide();
          $("#invent").hide();
        });
        $("#pedidos").click(function(){
          $("#requi").hide();
          $("#pedid").show();
          $("#invent").hide();
        });
        $("#inventarios").click(function(){
          $("#requi").hide();
          $("#pedid").hide();
          $("#invent").show();
        });

      	$('.button-collapse').sideNav({
            menuWidth: 228, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
          }
        );
        $('.dropdown-button').dropdown({
            inDuration: 300,
            outDuration: 225,
            constrainWidth: false, // Does not change width of dropdown to that of the activator
            hover: false, // Activate on hover
            gutter: 0, // Spacing from edge
            belowOrigin: false, // Displays dropdown below the button
            alignment: 'left', // Displays dropdown with edge aligned to the left of button
            stopPropagation: false // Stops event propagation
          }
        );
        $(".press").on("click", function(){
          $(".press").removeClass("activa");
          $(this).addClass("activa");
        });  
        $("#btn_salir").click(function(){
          swal({
            title: "¿Estas seguro?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, estoy seguro",
            closeOnConfirm: false
          },
          function(){
            <?php
              // Si se desea destruir la sesión completamente, borre también la cookie de sesión.
              // Nota: ¡Esto destruirá la sesión, y no la información de la sesión!
              // if (ini_get("session.use_cookies")) {
              //     $params = session_get_cookie_params();
              //     setcookie(session_name(), '', time() - 42000,
              //         $params["path"], $params["domain"],
              //         $params["secure"], $params["httponly"]
              //     );
              // }

              // Finalmente, destruir la sesión.
              // session_destroy();
              ?>
            window.location="../../";
          });
        });
      });
  </script>

</head>
<body class="b-footer">
	  <nav>
    <div class="nav-wrapper" style="background-color: #0D163C; background-image: url(../../resources/img/navi2.png)">
      <a href="#!" class="brand-logo hide-on-med-and-up">DIPAO</a>
      <ul>
      <li><a href="#" data-activates="mobile-demo" class="button-collapse hov"><i class="material-icons">menu</i></a></li>
      </ul>
      <ul class="left hide-on-small-and-down">
         <li class="press activa"><a href="#" id="requisiciones" class="hov"><b><i class="material-icons right">shopping_cart</i>Requisición</b></a></li>
         <li class="press"><a href="#" id="pedidos" class="hov"><b><i class="material-icons right">add_shopping_cart</i>Pedidos</b></a></li>
         <li class="press"><a href="#" id="inventarios" class="hov"><b><i class="material-icons right">assignment</i>Inventario</b></a></li>
         <li class="press"><a href="#" class="hov"><b><i class="material-icons right">store</i>Reportes</b></a></li>
      </ul>
      <ul class="right">
        <li class="hide-on-small-and-down">
          <div class="chip">
            <img src="../../resources/img/mini.png" alt="Contact Person">
            <?php echo $nombre." ".$ap." ".$am; ?>
        </div>
        </li>
        <li>
          <a href="" class="dropdown-button hov tooltipped" data-activates='dropdown1' data-position="bottom" data-delay="50" data-tooltip="Configuraciones"><i class="material-icons">settings</i></a>
        </li>
        <ul id='dropdown1' class='dropdown-content'>
          <li><a href="#!" style="color: #dd7008;">Perfil</a></li>
          <li><a href="#!" style="color: #dd7008;">Otros</a></li>
          <li class="divider"></li>
          <li><a href="#" id="btn_salir" style="color: #dd7008;"><i class="material-icons">settings_power</i>Salir</a></li>         
          </ul>
      </ul>
      <ul class="side-nav" id="mobile-demo" style="opacity:.9;">
        <li class="hov1"><a class="black-text" href="#"><i class="material-icons right black-text">shopping_cart</i>Requisición</a></li>
        <li class="hov1"><a class="black-text" href="#"><i class="material-icons right black-text">add_shopping_cart</i>Pedidos</a></li>
        <li class="hov1"><a class="black-text" href="#"><i class="material-icons right black-text">assignment</i>Inventario</a></li>
      </ul>
    </div>
  </nav>
  
          
  
