<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./views/assets/dist/css/reservation.css">
    <link rel="stylesheet" href="./views/assets/dist/css/main.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="./views/assets/dist/css/line.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
      <img src="./views/assets/dist/images/logo.png" alt="logo UTESA" srcset="">
        <header>Formulario de Servicios Audiovisuales (UTESA)</header>

        <div class="row">
        <div class="col-sm-12 col-md-12 ">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form>

                <div class="form-group">
                    <label for="exampleSelect1">Horario</label>
                    <select class="form-control" id="exampleSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  
                  <div class="form-check form-check-inline">
                    <label class="form-check-label ">
                      <input class="form-check-input" type="checkbox">Proyector
                    </label>
                  </div>

                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Laptop
                    </label>
                  </div>

                  <div class="form-check form-check-inline">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Sonido
                    </label>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="readOnlyInput">Nombre</label>
                      <input class="form-control" id="readOnlyInput" type="text" readonly="">
                    </fieldset>
                  </div>

                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="readOnlyInput">Carrera</label>
                      <input class="form-control" id="readOnlyInput" type="text" readonly="">
                    </fieldset>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Correo</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Digite su email">
                  </div>

                </form>
              </div>


              <div class="col-lg-4 offset-lg-1">
                <form>
                <label class="form-control-label" for="inputSuccess1">Fecha</label>
                <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control">
                    <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="readOnlyInput">Matricula / Código</label>
                      <input class="form-control" id="readOnlyInput" type="text" readonly="">
                    </fieldset>
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="readOnlyInput">Aula</label>
                      <input class="form-control" id="readOnlyInput" type="text" readonly="">
                    </fieldset>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Teléfono</label>
                    <input type="tel" name="telefono" placeholder="(000)-000-0000">
                  </div>

                </form>
              </div>
            </div>
            <div class="form-check form-check-inline">
                    <label class="form-check-label ">
                      <input class="form-check-input" type="checkbox">He revidado la informacion para enviar
                    </label>
                  </div>
            <div class="tile-footer">

              <button class="btn btn-primary btn-md btn-block" type="submit" >Enviar</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--<script src="script.js"></script>-->
</body>
</html>

    <!-- Essential javascripts for application to work-->
    <script src="./views/assets/js/jquery-3.3.1.min.js"></script>
    <script src="./views/assets/js/popper.min.js"></script>
    <script src="./views/assets/js/bootstrap.min.js"></script>
    <script src="./views/assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="./views/assets/js/plugins/pace.min.js"></script>

    <script type="text/javascript" src="./views/assets/js/plugins/moment.min.js"></script>
    <script type="text/javascript" src="./views/assets/js/plugins/jquery-ui.custom.min.js"></script>
    <script type="text/javascript" src="./views/assets/js/plugins/fullcalendar.min.js"></script>
    <script type="text/javascript" src="./views/assets/js/plugins/bootstrap-datepicker.min.js"></script>


    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });

 
      $('.datepicker').datepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        language: "es",
        startDate: "0"
    });

    </script>
  </body>
</html>