<?php
$login = $_POST['usuario'];
$password = $_POST['clave'];
// echo "login: ".$login."<br>password: ".$password;
// die;
$bd="Directorio_Tracklog";//nombre de la base de datos
$servidor="localhost";//nombre del servidor en este caso es local
$usuario="root";//usuario de la base de datos
$clave="";//clave de la base de datos

if (! $idcon= mysql_connect($servidor, $usuario, $clave))//conectarse con el servidor, CONTIENE UN ($idcon) DE LA CONEXION DENTRO DE LA BASE DATOS
	{ echo "No se pudo conectar con el servidor de BD";
	die;
	}
if (!mysql_select_db($bd, $idcon))// para seleccionar la base de datos
	{
	echo "Error al abrir la Base de Datos";
	mysql_close ($idcon);
	die;// mato el proceso
	}
$sql="select * from Usuario where cUsuario = '".$login."' and cClave='".$password."'";
// echo $sql."<br>";
$idconsulta = mysql_query($sql,$idcon);
// echo $idconsulta."<br>";
	if(!mysql_fetch_row($idconsulta))   //va al resultado que genero la consulta y se trae una linea de esa consulta a la vez
	{
//	header("location: index.php?error=true"); // si no consigue el usuario en la base de datos regresa al login.php

    	echo'<script type="text/javascript">window.alert("Debe logearse correctamente")</script>';
		printf("<script>location.href='login.php'</script>");    }

	else{
      //  echo'<script type="text/javascript">window.alert("Usted se ha validado correctamente")</script>';
		$_SESSION['loggedin'] = true;
    	$_SESSION['usuario'] = $login;
/*    $_SESSION['nombre'] = $nombre;*/
    	$_SESSION['start'] = time();
    	$_SESSION['expire'] = $_SESSION['start'] + (1000 * 6000); //tiempo de expiracion, lo tengo elevado ahorita por motivos de 
		printf("<script>location.href='admin/'</script>");


    }

//die;
?>