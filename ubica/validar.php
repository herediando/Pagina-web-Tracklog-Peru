<?php
$login = $_POST['usuario'];
$password = $_POST['clave'];
$bd="Directorio_Tracklog";
$servidor="localhost";
$usuario="root";
$clave="";
if (! $idcon= mysql_connect($servidor, $usuario, $clave))
{ echo "No se pudo conectar con el servidor de BD";
	die;
	}
if (!mysql_select_db($bd, $idcon))
	{
	echo "Error al abrir la Base de Datos";
	mysql_close ($idcon);
	die;
	}
$sql="select * from Usuario where cUsuario = '".$login."' and cClave='".$password."'";
$idconsulta = mysql_query($sql,$idcon);
	if(!mysql_fetch_row($idconsulta))
	{
    	echo'<script type="text/javascript">window.alert("Debe logearse correctamente")</script>';
		printf("<script>location.href='login.php'</script>");    }
	else{
		$_SESSION['loggedin'] = true;
    	$_SESSION['usuario'] = $login;
    	$_SESSION['start'] = time();
    	$_SESSION['expire'] = $_SESSION['start'] + (1000 * 6000);
		printf("<script>location.href='admin/'</script>");
    }
?>