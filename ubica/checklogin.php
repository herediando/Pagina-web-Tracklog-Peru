<?php
session_start();
?>
<?php
$host_db = "localhost:8088";
$user_db = "root";
$pass_db = "";
$db_name = "directorio_tracklog";
$tbl_name = "usuario";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

$usrname = $_POST['usuario'];
$pass = $_POST['clave'];
$sql = "SELECT * FROM $tbl_name WHERE cUsuario = '$usrname'";
$result = $conexion->query($sql);
if ($result->num_rows > 0) {     
 }
 $row = $result->fetch_array(MYSQLI_ASSOC);
 if (password_verify($pass, $row['clave'])) { 
 
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $usrname;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1000 * 6000);
	echo'<SCRIPT>window.location="admin/"</SCRIPT>';
 } else { 
    		echo'<script type="text/javascript">window.alert("Password no válido")</script>';
        	echo'<SCRIPT>window.location="index.php"</SCRIPT>';
 }
 mysqli_close($conexion); 
 ?>