<!DOCTYPE html>
<html lang="es">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS STYLES -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <link rel="stylesheet" type="text/css" href="../views/assets/dist/css/main.css">
    <link rel="stylesheet" type="text/css" href="../views/assets/dist/css/sweetalert2.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
  </head>
  <body class="app sidebar-mini">
<?php
    /*===================================================================
        HEADER
    ====================================================================*/

    include "../views/modules/layout/header_navbar.php";

    /*===================================================================
        MENU LATERAL
    ====================================================================*/

    include "../views/modules/layout/lateral_sidebar.php";

    /*===================================================================
        CONTENIDO DE LA PAGINA
    ====================================================================*/
    echo '<main class="app-content">';

    include "../views/modules/home.php";

    echo '</main>';

?>
 
    <!-- Essential javascripts for application to work-->
    <script type="text/javascript" src="../views/assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/popper.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../views/assets/js/plugins/pace.min.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="../views/assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/fullcalendar.min.js"></script>
    <script type="text/javascript" src="../views/assets/js/plugins/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">$('#reservationTable').DataTable();</script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
    <script type="text/javascript">

$(document).ready(function () {

  $('#reservationTable').DataTable({
               processing: true,
               serverSide: true,
               ajax: '../ajax/reservaciones.ajax.php',

    });

});


      // var table = $("#reservationTable").DataTable({
      //             "ajax":{
      //             "url":"../ajax/reservaciones.ajax.php",
      //             "type":"POST",
      //             "dataSrc":""
      //           }
      //         });
      // });



    </script>
  </body>
</html>