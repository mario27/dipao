<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Inicio de Sesión</title>
  <link rel="shortcut icon" href="resources/img/fondo-dipao.png">
  <!-- <link type="text/css" rel="stylesheet" href="resources/css/materialize.css"/> -->
  <link type="text/css" rel="stylesheet" href="resources/css/materialize.min.css"/>
  <link type="text/css" rel="stylesheet" href="resources/css/styles.css"/>
    <script type="text/javascript" src="resources/js/jquery-2.2.3.min.js"></script>
    <!-- <script type="text/javascript" src="resources/js/materialize.js"></script> -->
    <script type="text/javascript" src="resources/js/materialize.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.validate.min.js"></script>
    <style>
      .card-header{
        background-color: #0D163C; 
        background-image: url(resources/img/nav01.png);
        color:white !important;
        text-align: center;
      }
      .card-header2{
        background-color: #0D163C; 
        color:white !important;
        text-align: center;
      }
    </style>
</head>
<body>
<div style="display:none" id="cont_request"></div>
  <div class="row">
    <div id="login" class="col s12 m8 offset-m2 l6 offset-l3" style="padding: 80px 8%;">
      <div class="card z-depth-5">
        <div class="card-content white-text card-header" style="padding: 5px 5px;">
          <h5><b><i class="material-icons">lock</i> Inicio</b></h5> 
        </div>  
        <div class="card-action">
        <div style="top: 1px; right: 0px; position: absolute;">
            <a href="#" id="btn_adduser" class="tooltipped btn-floating purple" data-delay="50" data-tooltip="Agregar usuarios" style="margin-right: 3px; color: green;"><i class="material-icons">settings</i></a>
        </div>
          <form id="form_login">
            <div class="row" novalidate="novalidate">
              <div class="input-field col s12">
                <i class="material-icons prefix">perm_identity</i>
                <input type="text" id="usrname" name="usrname" placeholder="Ingresa tu usuario">
                <label for="usrname">Usuario</label>
              </div>
              <div class="input-field col s12">
                <i class="material-icons prefix">visibility</i>
                <input type="password" id="psw" name="psw" placeholder="Ingresa tu contraseña">
                <label for="psw">Contraseña</label>
              </div>
              <div class="input-field col s12">
                <a class="btn btn-block" id="enviar" style="background: #eaa110; background-image: url(resources/img/nav8.png);"><b><i class="material-icons">power_settings_new</i> Iniciar</b></a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div id="register" class="col s12 m8 offset-m2 l6 offset-l3" style="padding: 8px 8%;">
      <div class="card z-depth-5">
        <div class="card-content white-text card-header2" style="padding: 5px 5px;">
          <h5><b><i class="material-icons">perm_identity</i> Agregar usuario</b></h5> 
        </div>  
        <div class="card-action">
          <form id="form_register">
            <div class="row">
              <div class="input-field col s12">
                <input type="text" id="inp_name" name="inp_name" placeholder="Ingresa tu nombre">
                <label for="inp_name" style="width: 300px; color:green;">Nombre</label>
              </div>
              
              <div class="input-field col s6">
                <input type="text" id="inp_ap" name="inp_ap" placeholder="Ingresa apellido paterno">
                <label for="inp_ap" style="width: 300px; color:green;">Ap. Paterno</label>
              </div>

              <div class="input-field col s6">
                <input type="text" id="inp_am" name="inp_am" placeholder="Ingresa apellido materno">
                <label for="inp_am" style="width: 300px; color:green;">Ap. Materno</label>
              </div>
              
              <div class="col s6" style="margin-bottom: 10px;">
                <div id="select_area"></div>
              </div>
              
              <div class="col s6" style="margin-bottom: 10px;">
                <div id="select_puesto"></div>     
              </div>
              
              <div class="col s12" style="margin-bottom: 10px;">
                 <label>Tipo de usuario</label>
                 <p>
                  <input value="3" name="tipo" type="radio" id="test1" checked />
                  <label for="test1">Normal</label>
                
                  <input value="1" name="tipo" type="radio" id="test2" />
                  <label for="test2">Administrador</label>
                </p>
              </div>

              <div class="input-field col s6">
                <input type="text" id="inp_user" name="inp_user" placeholder="Ingresa nombre de usuario">
                <label for="inp_user" style="width: 200px; color:green;">Nombre de usuario</label>
              </div>

              <div class="input-field col s6">
                <input type="password" id="inp_psw" name="inp_psw" placeholder="Ingresa tu contraseña">
                <label for="inp_psw" style="width: 200px; color:green;">Contraseña</label>
              </div>
              <div class="input-field col s6">
                <input type="password" id="inp_psw_confirm" name="inp_psw_confirm" placeholder="Confirma tu contraseña">
                <label for="inp_psw_confirm" style="width: 200px; color:green;">Cofirma contraseña</label>
              </div>

              <div class="input-field col s12 center">
                <a class="btn" id="btn_cancelar" style="background: #eaa110;">Cancelar</a>
                <a class="btn" id="btn_aceptar" style="background: #eaa110;">Aceptar</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="pr"></div>
</body>
  <script type="text/javascript">
    $(document).ready(function(){
      function pre(){
        var html='<div class="preloader-background"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-red-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div>';
          $('#pr').html(html);
      }
      function areas()
      {
        $.get('core/controllers/usuarios_controller.php',{action:"sel_area"},function(res){
          datos=JSON.parse(res);

          var html='<label for="area">Area</label><select name="area" id="area" class="browser-default">';

          html+='<option disabled selected>Seleccionar</option>';
          $.each(datos, function(i, item)
            {
              html+='<option value="'+item.id_area+'">'+item.des_area+'</option>';
            });  
          html+='</select>';

          $('#select_area').html(html);
          $('#area').material_select();

        });
      }
      function puestos()
      {
        $.get('core/controllers/usuarios_controller.php',{action:"sel_puesto"},function(res){
          datos=JSON.parse(res);

          var html=' <label for="puesto">Puesto</label><select name="puesto" id="puesto" class="browser-default">';

          html+='<option disabled selected>Seleccionar</option>';
          $.each(datos, function(i, item)
            {
              html+='<option value="'+item.id_puesto+'">'+item.des_puesto+'</option>';
            });  
          html+='</select>';

          $('#select_puesto').html(html);
          $('#puesto').material_select();
        });
      }

      $("#register").hide();

      $("#enviar").click(function(event)
      {
        $("#form_login").submit();
      });

      $("#form_login").validate({
        rules:{
          usrname: {
            required: true,
            rangelength: [3, 10]
          },
          psw: {
            required: true,
            rangelength: [4, 8]
          }
        },
        errorClass: 'invalid',
        validClass: "valid",
        errorPlacement: function (error, element) {
          $(element)
            .closest("form")
            .find("label[for='" + element.attr("id") + "']")
            .attr('data-error', error.text());
        },
        submitHandler: function (form) {
          var usrname=$("#form_login #usrname").val();
          var psw=$("#form_login #psw").val();

          $.post('core/controllers/usuarios_controller.php',{usrname:usrname,psw:psw,action:"sesion"},function(request){
              $("#cont_request").html(request); 
          });
          pre();
          $('.preloader-background').delay(3000).fadeOut('slow');
  
          $('.preloader-wrapper')
            .delay(3000)
            .fadeOut(); 
        }
      });

      $("#btn_adduser").click(function(event)
      {
        $("#login").hide();
        $("#register").show();
        areas();
        puestos();
      });
      $("#btn_cancelar").click(function(event)
      {   
        window.location="";
      });
      $("#btn_aceptar").click(function(event)
      {
        $("#form_register").submit();
      });
      jQuery.validator.addMethod("lettersonly", function(value, element)
      {return this.optional(element) || /^[ Ááéíóúñüàèü ÁÉÍÓÚÑÜÀÈ a-zA-Z\s]+$/.test(value);}, "Sólo letras");
      $("#form_register").validate({
        rules:{
          inp_name: {
            required: true,
            minlength: 3,
            lettersonly: true 
          },
          inp_ap: {
            required: true,
            lettersonly: true 
          },
          inp_am: {
            required: true,
            lettersonly: true 
          },
          area: {
            required: true
          },
          puesto:{
            required: true
          },
          inp_user:{
            required: true,
            minlength: 4
          },
          inp_psw : {
            required: true,
            rangelength: [4, 8]
          },
          inp_psw_confirm:{
            required: true,
            equalTo:"#inp_psw"
          }            
        },
        errorClass: 'invalid',
        validClass: "valid",
        errorPlacement: function (error, element) {
          $(element)
            .closest("form")
            .find("label[for='" + element.attr("id") + "']")
            .attr('data-error', error.text());
        },
        submitHandler: function (form) {
      // alert("ok");
          var name=$("#form_register #inp_name").val();
          var ap=$("#form_register #inp_ap").val();
          var am=$("#form_register #inp_am").val();
          var area=$("#form_register #area").val();
          var puesto=$("#form_register #puesto").val();
          var tipo=$('input:radio[name=tipo]:checked').val();
          var user=$("#form_register #inp_user").val();
          var psw=$("#form_register #inp_psw_confirm").val();

          $.post('core/controllers/usuarios_controller.php',{name:name,ap:ap,am:am,area:area,puesto:puesto,tipo:tipo,user:user,psw:psw,action:"insert_user"},function(request){
               $("#cont_request").html(request);
          });
        }
      });
    });
  </script>
</html>
