<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../../views/assets/dist/css/main.css">
    <link rel="stylesheet" type="text/css" href="../../views/assets/dist/css/sweetalert2.min.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Vali Admin</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
    <!-- <div class="logo">
          <img src="../../public/LogoUtesaSC.gif" class="img-circle" alt="UTESA LOGO">
          <h1>Audiovisuales</h1>
      </div> -->
      <div class="logo">
        <img src="../../views/assets/dist/images/logo.png" alt="Utesa Logo" class="img-circle">
      </div>
      <div class="login-box">
        <form class="login-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Ingreso</h3>
          <div class="form-group">
            <label class="control-label">Usuario</label>
            <input class="form-control" type="text" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Contraseña</label>
            <input class="form-control" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Recordarme</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvido la Contraseña?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button onClick="" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>Recuperar</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i>Regresar al ingreso</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="../../views/assets/js/jquery-3.3.1.min.js"></script>
    <script src="../../views/assets/js/popper.min.js"></script>
    <script src="../../views/assets/js/bootstrap.min.js"></script>
    <script src="../../views/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="../../views/assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>