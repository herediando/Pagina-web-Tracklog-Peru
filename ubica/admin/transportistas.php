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
  <link href="../img/icono.png" rel="icon">
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
<!--        <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> Actualizar Data</span> </a> -->
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
<!--               <li> <a href="transportistas.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Transportistas</b> </a> --> </li>
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
          <h1>sectoristas</h1>
          <h2 class="">Listado</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">EXTRA</a></li>
            <li class="active">Sectoristas</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
<!--         <div class="file_Manager">
          <div class="letter_list">
              <ul>
                  <li><a href="#">a</a></li>
                    <li><a href="#">b</a></li>
                    <li><a href="#">c</a></li>
                    <li><a href="#">d</a></li>
                    <li><a href="#">e</a></li>
                    <li><a href="#">f</a></li>
                    <li><a href="#">g</a></li>
                    <li><a href="#">h</a></li>
                    <li><a href="#">i</a></li>
                    <li><a href="#">j</a></li>
                    <li><a href="#">k</a></li>
                    <li><a href="#">l</a></li>
                    <li><a href="#">m</a></li>
                    <li><a href="#">n</a></li>
                    <li><a href="#">o</a></li>
                    <li><a href="#">p</a></li>
                    <li><a href="#">q</a></li>
                    <li><a href="#">r</a></li>
                    <li><a href="#">s</a></li>
                    <li><a href="#">t</a></li>
                    <li><a href="#">u</a></li>
                    <li><a href="#">v</a></li>
                    <li><a href="#">w</a></li>
                    <li><a href="#">x</a></li>
                    <li><a href="#">y</a></li>
                    <li><a href="#">z</a></li>
                </ul>
            </div>
        </div> -->
        <div class="row">
          <div class="col-sm-9">
            <div class="row">
            <div class="col-sm-6">
            <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
             <div class="col-sm-6">
            <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
           <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
            <div class="col-sm-6">
            <div class="contact_people">
              <a href="#"><img src="images/contact people/aa-2.png" /></a>
                <div class="contact_people_body">
                  <h5>Emily Lazo</h5>
                    <span><i class="fa fa-map-marker"></i>Lima, Per&uacute;</span>
                    <span><i class="fa fa-briefcase"></i>Sectorista<a href="www.tracklog.pe"> Tracklog</a></span>
                    <ul class="contact_social_list">
                      <a href="#">922451089</a>
                      <a href="#">postventa@tracklog.pe</a> 
                    </ul>
                </div>
            </div>
            </div>
            </div>          
      
          </div>
          <div class="col-sm-3">
            <div class="file_sidebar">
              <span class="btn ">Departamento de Sistema</span>
              
              <br/>
             <p style="text-decoration:none;"> <h6>INFORMACION</h6>
              <div class="file_sidebar_list">
                <ul>
                  <li><i class="fa fa-exclamation-triangle"></i>Sistema en <b>FASE BETA</b>, cualquier problema contactar al programador</li>
                  <br>
                  <li><i class="fa fa-user"></i>Jorge Heredia 922451089</li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/checkbox/zepto.js"></script>
<script src="plugins/checkbox/icheck.js"></script>



<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>
</body>
</html>
