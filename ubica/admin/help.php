
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
              <li> <a href="contactlist.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Sectoristas</b> </a> </li>
              <li> <a href="contactlist.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Transportistas</b> </a> </li>
              <li> <a href="help.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ayuda</b> </a> </li>
            </ul>
          </li>
        </ul>
      </div>
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
              <li> <a href="contactlist.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Sectoristas</b> </a> </li>
              <li> <a href="contactlist.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Transportistas</b> </a> </li>
              <li> <a href="help.html"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ayuda</b> </a> </li>
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
          <h1>help</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">EXTRA</a></li>
            <li class="active">Help</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        
        <div class="row">
          <div class="col-sm-9">
            <div class="panel-group  accordion accordion-color" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading ">
        
          <h4 class="panel-title ">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4">
            <i class="fa fa-angle-right"></i>
              Lorem Ipsum is simply dummy text.
            </a>
          </h4>
        </div>
        <div style="height: 0px;" id="collapse4" class="panel-collapse collapse">
          <div class="panel-body help_color">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading ">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5">
            <i class="fa fa-angle-right"></i>
              Lorem Ipsum is simply dummy text.
            </a>
          </h4>
        </div>
        <div style="height: 0px;" id="collapse5" class="panel-collapse collapse">
          <div class="panel-body help_color">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading ">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
            <i class="fa fa-angle-right"></i>
              Lorem Ipsum is simply dummy text.
            </a>
          </h4>
        </div>
        <div style="height: 0px;" id="collapse6" class="panel-collapse collapse">
          <div class="panel-body help_color">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
          </div>
        </div>
      </div>
    </div>
           </div> 
          <div class="col-sm-3">
            
              <h6>CATEGORY</h6>
              <div class="file_sidebar_list">
                <ul>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                  <li><a><i class="fa fa-folder-o"></i>Lorem Ipsum is simply dummy text .</a></li>
                </ul>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> content </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
	<div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   















<div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10" style="color:#6e778c;">Layout Options</legend><section><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-header" name="subscription"><span>Fixed Header</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-navigation" name="terms"><span>Fixed Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms"><span>Right Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms"><span>Boxed Layout</span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a id="reset-smart-widget" class="btn btn-xs btn-block btn-primary" href="javascript:void(0);"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">Ultimo Skins</h6><section id="smart-styles"><a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);"><i id="skin-checked" class="fa fa-check fa-fw"></i> Dark Theme</a><a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white" id="red_thm" href="javascript:void(0);">Red Theme</a><a style="background:#34B077;" class="btn btn-xs btn-block txt-color-darken margin-top-5" id="green_thm" href="javascript:void(0);">Green Theme</a><a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5" data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Blue Theme</a><a style="background:#9C6BAD" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Magento Theme</a><a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="light_theme" href="javascript:void(0);">Light Theme</a></section></form> </div>









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
