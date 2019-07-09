
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
<link href="plugins/data-tables/DT_bootstrap.css" rel="stylesheet">
<link href="plugins/advanced-datatable/css/demo_table.css" rel="stylesheet">
<link href="plugins/advanced-datatable/css/demo_page.css" rel="stylesheet">
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
              <li> <a href="#"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Relaci&oacute;n Transportistas</b> </a> </li>
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
          <h1>VISTAS</h1>
          <h2 class="">Relaci&oacute;n Transportistas</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Vistas</a></li>
            <li class="active">Relaci&oacute;n Transportistas</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
      
      

      
       <div id="main-content">
    <div class="page-content">
      
       <div class="row">
        <div class="col-md-12">
          <div class="block-web">
            <div class="header">
             

              <h3 class="content-header">Relaci&oacute;n Transportistas</h3>
            </div>
        <div class="table-responsive">
          <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  <button id="editable-sample_new" class="btn btn-primary">
                                      Add New <i class="fa fa-plus"></i>
                                  </button>
                              </div>
                              <div class="btn-group pull-right">
                                  <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                  </button>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="margin-top-10"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">                              <thead>
                              <tr>
                                  <th>Transportista</th>
                                  <th>RUC</th>
                                  <th>Sectorista</th>
                                  <th>Editar</th>
                              </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    include('../conn.php');

                                    $query=mysqli_query($conn,"select *, t.cNomSect,t.cApeSect from Transportista s  
                                                                INNER JOIN Sectorista t 
                                                                on s.nCodSect = t.nCodSect ");
                                    if (mysqli_num_rows($query)==0){

                                    }
                                    else{
                                    while($row=mysqli_fetch_array($query)){
                                      ?>  
                              <tr class="">
                                  <td><?php echo $row['cNomTrans']; ?> </td>
                                  <td><?php echo $row['cRucTrans']; ?></td>
                                  <td><?php echo $row['cNomSect']; ?> <?php echo $row['cApeSect']; ?></td>
                                  <td><a class="edit" href="javascript:;">Edit</a></td>
                              </tr>
                            <?php
                              }
                              }
                            ?>      
                              </tbody>
                          </table>
                      </div>
 
            </div><!--/porlets-content-->  
          </div><!--/block-web--> 
        </div><!--/col-md-12--> 
      </div><!--/row-->

      
        </div><!--/page-content end--> 
  </div><!--/main-content end--> 

      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->

<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="plugins/data-tables/jquery.dataTables.js"></script>
<script src="plugins/data-tables/DT_bootstrap.js"></script>
<script src="plugins/data-tables/dynamic_table_init.js"></script>
<script src="plugins/edit-table/edit-table.js"></script>
<script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
 </script>

</body>
</html>





