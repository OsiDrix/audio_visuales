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

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container container-xl">
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
                  <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                    <input placeholder="Select date" type="text" id="example" class="form-control">
                        <label for="example">Try me...</label>
                    <i class="fas fa-calendar input-prefix"></i>
                  </div>
                  <div class="form-group">
                    <fieldset>
                      <label class="control-label" for="readOnlyInput">Readonly input</label>
                      <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here…" readonly="">
                    </fieldset>
                  </div>
                  <div class="form-group has-success">
                    <label class="form-control-label" for="inputSuccess1">Valid input</label>
                    <input class="form-control is-valid" id="inputValid" type="text">
                    <div class="form-control-feedback">Success! You've done it.</div>
                  </div>
                  <div class="form-group has-danger">
                    <label class="form-control-label" for="inputDanger1">Invalid input</label>
                    <input class="form-control is-invalid" id="inputInvalid" type="text">
                    <div class="form-control-feedback">Sorry, that username's taken. Try another?</div>
                  </div>
                  <div class="form-group">
                    <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
                    <input class="form-control form-control-lg" id="inputLarge" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Default input</label>
                    <input class="form-control" id="inputDefault" type="text">
                  </div>
                  <div class="form-group">
                    <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
                    <input class="form-control form-control-sm" id="inputSmall" type="text">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Input addons</label>
                    <div class="form-group">
                      <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                      <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                        <input class="form-control" id="exampleInputAmount" type="text" placeholder="Amount">
                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tile-footer">
              <button class="btn btn-primary" type="submit">Submit</button>
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
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });

      $('.datepicker').datepicker({
        inline: true
      });
    </script>
  </body>
</html>