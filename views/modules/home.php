
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Reservaciones</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>Likes</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Uploades</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Stars</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="reservationTable">
                  <thead>
                    <tr>
                      <th>Usuario</th>
                      <th>Email</th>
                      <th>Teléfono</th>
                      <th>Inicio</th>
                      <th>Final</th>
                      <th>Aula</th>
                      <th>Curso</th>
                      <th>Asistente</th>
                      <th>Estatus</th>
                      <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                      include "../models/conexion.php";
                        $sql = Conexion::conectar()->prepare("SELECT userName, userEmail , userPhone , userCode, userClassroom, fromDate, toDate, productName,productType,assistantId  FROM audiovisuales.view_reservation_full_data");
                        $sql->execute();
                        while ($datos = $sql->fetch(PDO::FETCH_ASSOC)){?>

                       
                            <tr>
                              <th><?php $datos['userName']; ?></th>
                              <th><?php $datos['userEmail']; ?></th>
                              <th><?php $datos['userPhone']; ?></th>
                              <th><?php $datos['userCode']; ?></th>
                              <th><?php $datos['userClassroom']; ?></th>
                              <th><?php $datos['fromDate']; ?></th>
                              <th><?php $datos['toDate']; ?></th>
                              <th><?php $datos['productName']; ?></th>
                              <th><?php $datos['productType']; ?></th>
                              <th><?php $datos['assistantId']; ?></th>
                            </tr>
             
                  <?php    } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
