 <?php
require_once("../validar.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Panel administrativo Tracklog</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<meta content="width=320px, initial-scale=1, maximum-scale=1" name="viewport">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
<link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Favicon -->
  <link href="../../img/icons/icono.png" rel="icon">
</head>
<body class="dark_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->

      <div class="small_logo"><img src="../../img/logos/loggo.png" width="200" height="47" alt="s-logo" /> </div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
       <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> Actualizar Data</span> </a>
      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
          
          </div>
        </div>
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname"><?php echo $_SESSION['usuario'];?></span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="help.php"><i class="fa fa-question-circle"></i> Ayuda</a> </li>
<!--             <li> <a href="settings.html"><i class="fa fa-cog"></i> Setting </a></li> -->
            <li> <a href="../login.php"><i class="fa fa-power-off"></i> Cerrar sesi&oacute;n</a> </li>
          </ul>
        </div>
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\--><div class="left_nav">

      <!--\\\\\\\left_nav start \\\\\\-->
     
      <div class="left_nav_slidebar">
        
            <ul class="opened" style="display:block">
             
          <li> <a href="javascript:void(0);"> <i class="fa fa-th"></i> VISTAS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="datatable.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Relaci&oacute;n Sectoristas</b> </a> </li>
              <li> <a href="datatableT.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Relaci&oacute;n Transportistas</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-glass"></i> EXTRA <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="sectoristas.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Sectoristas</b> </a> </li>
<!--               <li> <a href="transportista.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Transportistas</b> </a> </li> -->
              <li> <a href="help.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ayuda</b> </a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Panel</h1>
          <h2 class="">Relación Sectoristas - Transportistas</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Panel</a></li>
            <li class="active">Panel</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->

        <div class="row">
          <div class="col-md-12">
            <div class="block-web">
              <div class="header">
                <h3 class="content-header">Graph</h3>
              </div>
              <div class="porlets-content">
                <div id="graph"></div>
              </div>
              <!--/porlets-content-->
            </div>
            <!--/block-web-->
          </div>
          <!--/col-md-12-->
        </div>
        <!--/row-->

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/jquery.sparkline.js"></script>
<script src="js/sparkline-chart.js"></script>
<script src="js/graph.js"></script>
<script src="js/edit-graph.js"></script>
<script src="js/jPushMenu.js"></script> 

</body>
</html>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Adjunte el Archivo</h4>
      </div>
      <div class="modal-body"><a href="FormatoCarga.xlsx" download="FormatoCargaMasiva">Descargar Formato</a></div>
      <div class="modal-footer">
    <input type="file" id="ejemplo_archivo_1">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>