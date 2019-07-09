<!--
06/07/2016
Estos codigos son de propiedad de IBAMATIC, S.A.
Tecnologia 
-->
<?php
session_start();
?>

<?php
$host_db = "localhost:8088";
$user_db = "root"; //usuario de la base de datos
$pass_db = ""; // clave de la bd
$db_name = "directorio_tracklog"; //nombre tu bd
$tbl_name = "usuario"; //nombre de la tabla donde estan los usuarios y los password

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name); //recibe los parametros anteriormente requeridos

if ($conexion->connect_error) {//revisa si la conexion esta establecida
 die("La conexion falló: " . $conexion->connect_error); //si no, te genera el error 
}

$usrname = $_POST['usuario']; // recibo los parametros del usuario 
$pass = $_POST['clave']; // recibo los del password
  //and password ='$pass'
$sql = "SELECT * FROM $tbl_name WHERE cUsuario = '$usrname'"; //hago la consulta sql  y la asigno a una variable
$result = $conexion->query($sql);
/*$row = mysql_fetch_array($result);
//echo $usrname;
$nombre = $row['nombre'];*/
//echo $pass;
 // le asigno la consulta a una variable
/*echo $row['id_privilegio'];
echo $row['nombre'];*/
if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($pass, $row['clave'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $usrname;
/*    $_SESSION['nombre'] = $nombre;*/
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1000 * 6000); //tiempo de expiracion, lo tengo elevado ahorita por motivos de diseño
/*
    echo "Bienvenido! " . $_SESSION['username'];
    echo "<br><br><a href=pba.php>Panel de Control</a>"; 
*/
	echo'<SCRIPT>window.location="admin/"</SCRIPT>';
 } else { 
   //echo "Username o Password estan incorrectos.";
    		echo'<script type="text/javascript">window.alert("Password no válido")</script>';
        	echo'<SCRIPT>window.location="index.php"</SCRIPT>';
  // echo "<br><a href='../index.php'>Volver a Intentarlo</a>";
 }
 mysqli_close($conexion); 
 ?>