<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="shortcut icon" href="resources/img/candado.png"> 
	<link type="text/css" rel="stylesheet" href="../../resources/css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="../../resources/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../../resources/css/side.css"/>
	<link type="text/css" rel="stylesheet" href="../../resources/css/styles.css"/>
  	<script type="text/javascript" src="../../resources/js/jquery-2.2.3.min.js"></script>
  	<script type="text/javascript" src="../../resources/js/bootstrap.js"></script>
  	<script type="text/javascript" src="../../resources/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="../../resources/js/jquery.validate.min.js"></script>
  	<script type="text/javascript">
	$(document).ready(function(){
		$(".menu-toggle ,.overlay").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });
	});
	</script>
</head>
<body>
	<div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand menu-toggle">
                    <a href="#">
                       Dipao
                    </a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-compressed"></span>Productos</a>
                </li>
                 <li>
                    <a href="#"><span class="glyphicon glyphicon-copy"></span>Pedidos</a>
                </li>

                <li>
                    <a href="#"><span class="glyphicon glyphicon-tasks"></span>Reportes</a>
                </li>
            </ul>
        </div>

        <div id="page-content-wrapper">
        	<nav class="navbar navbar-default navbar-material-indigo">
	            <div class="container-fluid">
	              <div class="navbar-header">
	                
	                <a  id="menu-toggle" class="menu-toggle navbar-brand" href="#">
	                    <span class="toggle-bar"></span>
	                    <span class="toggle-bar"></span>
	                    <span class="toggle-bar"></span>
	                </a>
	                <a  class="menu-toggle navbar-brand" href="#">
	                    Productos
	                </a>
	              </div>                 
	            </div>
          	</nav>

        <!-- /#page-content-wrapper -->
        <!-- <div class="overlay"></div> -->

