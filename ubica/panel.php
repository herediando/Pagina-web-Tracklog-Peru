<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Tracklog - Ubica tu Secorista</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="../img/icono.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->

  <script src="../lib/jquery/jquery.min.js"></script>
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script><!--UP-->
  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">

  <!-- =======================================================
    Propiedad de: 	Tracklog, S.A. 
    Departamento: 	Desarrollo
    Autor: 			jh

  ======================================================= -->
</head>

<body>
<div class="nav-menu-container" align="right">
    
     <!-- 
      <span class="fa fa-phone" aria-hidden="true"></span>014081073
      <span class="fa fa-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">ventas@trackog.pe</a>
    -->
  </div>
	  <!-- Header -->
  <header id="header">

    <div class="container">

      <div id="logo" class="pull-left">
        <a href="../index.php"><img src="../img/logos/loggo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          
              <li><a href="ubica" target="_blank"><i class="fa fa-address-card"></i>  Ubica a tu sectorista</a></li>
              <li><a href="http://190.12.73.84/" target="_blank"><i class="fa fa-user"></i>  Localizador</a></li>
              <li><a href="http://trackloggps.com/pages/fprincipal/acceso/login.php" target="_blank"><i class="fa fa-user"></i>  Nueva Web</a></li>
              <li><a href="http://190.12.73.86/distracktl/" target="_blank"><i class="fa fa-user"></i>  Distrack</a></li>
        </ul>
      </nav>
       <nav class="navbar navbar-inverse pull-right d-none d-lg-inline">
        <!--<a href="#"><i class="fa fa-twitter"></i></a>  <a href="#"><i class="fa fa-linkedin"></i></a> >-->
        <a class="btn btn-login" href="login.php"><font size="4"><i class="fa fa-user-circle-o"></i>  Login</a></font>
        <!--<a href="https://www.facebook.com/tracklog.gps/" target="_blank"><i class="fa fa-facebook"></i></a>-->

      </nav>
  </header>

    <section class="tracklog-ubica">
      <div class="text-center">

		<div class="col-md-12 container">
			<h3 style="color: black">Ingresa tu Ruc</h3>
        <p>Estimado Cliente, escriba el RUC para contactar a su sectorista<a href="#"  data-toggle="modal" data-target="#miModal3"><img src="   ../img/icons/icon-question.png" width="25"></p></a>
 			<div class="row">
 				<div class="col-md-4"></div>
	            <div class="col-md-7">
	                <div class="form-top col-md-6">
						<form class="navbar-form" role="search" method="POST" action="result.php">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Buscar" name="search" id="search" maxlength="11" minlength="11" onkeypress="return valida(event)" required>

								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</div>
							</div>
						</form>
	         </div>
	        	</div>
	        </div>
      	</div>
      </div>

    </section>
</body>
</html>

<div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">#CONTACTODIRECTO</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body">
<div class="team-over">
            <h4 class="hidden-md-down">Ubica a tu Sectorista</h4>
            <p> Tu Sectorista o Postventa se encarga de seguir ofreciendo atención después de la compra y es tan fundamental como las demás estrategias que ha implementado en su empresa</p>
            <p>Disponible solo para clientes registrados.
              <nav class="social-nav">
                <p> Si no aparece en el listado, contáctenos</p>
                <i class="fa fa-phone"></i>
                  962387467
                  <p>
                  <p><i class="fa fa-envelope"></i>
                  informes@tracklog.pe
              </nav>
          </div>
      </div>
    </div>
  </div>
</div>

<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }
        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>