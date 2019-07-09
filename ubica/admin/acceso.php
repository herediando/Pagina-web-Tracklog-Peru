<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {

	echo"<link rel='icon' href='jpg/icono-candado.png'>"; 

echo "<body bgcolor='gray'><center><br><img src='../jpg/candado.png' height='500'></br></center>";

       		echo'<script type="text/javascript">window.alert("Esta pagina es solo para usuarios registrados, inicie sesión o contacte con Tecnología Ext: 2144")</script>';
    echo'<SCRIPT>window.location="../index.php"</SCRIPT>';  
   //echo "<br><br><a href='registrar.html'>Registrarme</a>";
echo "<img src='../jpg/stop.jpg' height='800'>";
exit;
}
/*if (isset($_SESSION['validacion']) == 1) {

 }else{
	echo"<link rel='icon' href='jpg/icono-candado.png'>"; 

echo "<body bgcolor='gray'><center><br><img src='../jpg/candado.png' height='500'></br></center>";

       		echo'<script type="text/javascript">window.alert("Esta pagina es solo para Administradores contacte con Tecnología Ext: 2144")</script>';
    echo'<SCRIPT>window.location="menu.php"</SCRIPT>';  
echo "<img src='../jpg/stop.jpg' height='800'>";

exit;
}*/


$now = time();

if($now > $_SESSION['expire']) {
session_destroy();
include('header.php');
	echo"<link rel='icon' href='jpg/icono-candado.png'>"; 

echo "<body bgcolor='gray'><center><br><img src='../jpg/candado.png' height='500'></br></center>";

       		echo'<script type="text/javascript">window.alert("Su sesión ha expirado, por su seguridad vuelva a iniciar sesión")</script>';
    echo'<SCRIPT>window.location="../index.php"</SCRIPT>';  
   //echo "<br><br><a href='registrar.html'>Registrarme</a>";
echo "<img src='../jpg/stop.jpg' height='800'>";
exit;
}

?>