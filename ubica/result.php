<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title>Tracklog - Ubica tu Secorista</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="../img/icono.png" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <div class="nav-menu-container" align="right">
  </div>
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <a href="../index.php"><img src="../img/logos/loggo.png" alt="" title="" /></img></a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="#"><i class="fa fa-address-card"></i> Ubica a tu sectorista</a></li>
          <li><a href="http://190.12.73.84/" target="_blank"><i class="fa fa-user"></i> Localizador</a></li>
          <li><a href="http://trackloggps.com/pages/fprincipal/acceso/login.php" target="_blank"><i class="fa fa-user"></i> Nueva Web</a></li>
          <li><a href="http://190.12.73.86/distracktl/" target="_blank"><i class="fa fa-user"></i> Distrack</a></li>
        </ul>
      </nav>
  </header>
  <style type="text/css">
  </style>
  <section class="tracklog-ubica">
    <div class="container text-center">
      <div class="col-md-12">
        <div class="row container">
          <?php
          include('conn.php');
          $search = $_POST['search'];
          $query = mysqli_query($conn, "select * from `Sectorista` s  INNER JOIN Transportista t on s.nCodSect = t.nCodSect where t.cRucTrans like '%$search%'");
          if (mysqli_num_rows($query) == 0) {
            echo '<script type="text/javascript">window.alert("Ingrese su RUC correctamente")</script>';
            echo '<SCRIPT>window.location="javascript:window.history.go(-1)"</SCRIPT>';
          } else {
            while ($row = mysqli_fetch_array($query)) {
              ?>
              </ul>
            </div>
          </div>
          <div class="form-group pull-right">
            Hola <?php echo $row['cNomTrans']; ?>, su sectorista es: <ul style="list-style-type:none;">
          </div>
          <span class="counter pull-right"></span>
          <table class="table table-hover table-responsive-md table-bordered">
            <thead>
              <tr>
                <th style="width: 380px;">Nombre/Apellido</th>
                <th style="width: 290px;">N&uacute;mero de Contacto</th>
                <th style="width: 290px;">Correo </th>
                <th style="width: 290px;">Zona </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $row['cNomSect']; ?> <?php echo $row['cApeSect']; ?></td>
                <td><?php echo $row['cNumSect']; ?></td>
                <td><?php echo $row['cCorreoSect']; ?></td>
                <td><?php echo $row['cPais']; ?>, <?php echo $row['cZona']; ?></td>
              </tr>
            </tbody>
          </table>
          <div class="row">
            <div class="col-md-2">
              <a href="javascript:window.history.go(-1)" class="btn"><span class="fa fa-arrow-left"></span> Regresar</a>
            </div>
          </div>
        </div>
        <br>
        <div class="container">
          <div class="col-sm-1"></div>
          <div class="col-sm-6"><b>Nota:</b> La persona estará disponible para prestarle el apoyo requerido</div>
        </div>
      </section>
    </body>

    </html>
  <?php
  }
}
?>