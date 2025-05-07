<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Muebleria FAMA</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Vistas/dist/css/adminlte.css">
  <!-- Other Style -->
  <link rel="stylesheet" href="Vistas/dist/css/styles.css">

  <!-- jQuery -->
  <script src="Vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="Vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="Vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="Vistas/dist/js/demo.js"></script>
  <script>
    const images = [

      "Vistas/dist/img/principal.jpg",
      "Vistas/dist/img/descansando.jpg"
    ];

    let currentIndex = 0;

    function changeHeroImage() {
      currentIndex = (currentIndex + 1) % images.length;
      document.getElementById("hero-image").src = images[currentIndex];
    }

    setInterval(changeHeroImage, 5000); // Cambia la imagen cada 5 segundos
</script>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
 <?php
  include "Vistas/modulos/cabecera.php";
  include "Vistas/modulos/menu.php";
  if (isset($_GET["ruta"]))
    {
      if ($_GET["ruta"] == "inicio" || 
        $_GET["ruta"] == "servicio" ||
        $_GET["ruta"] == "comprar" ||
        $_GET["ruta"] == "productos" ||
        $_GET["ruta"] == "contacto")
      {
        include "modulos/".$_GET["ruta"].".php";
      }
      else
      {
        include "modulos/404.php";
      }
    }
    else
    {
      include "modulos/inicio.php";
    }
  //include "Vistas/modulos/404.php";
  include "Vistas/modulos/piedepagina.php";
 ?>
</div>
<!-- ./wrapper -->

</body>
</html>