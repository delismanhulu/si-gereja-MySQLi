<?php 
// include'valid.php';
include'header.php'; 
?>
      <!-- Counts Section -->
     <br>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card income text-center">
                <div class="icon"><i class="icon-line-chart"></i></div>
                <div class="number">0</div><strong class="text-primary">SELAMAT DATANG ADMIN</strong>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              <div class="card data-usage">
                <h2 class="display h4">Total Janji Iman</h2>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-6">
                    <div id="progress-circle" class="d-flex align-items-center justify-content-center"></div>
                  </div>
                  <div class="col-sm-6"><strong class="text-primary">0</strong></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- User Actibity-->
              <div class="card user-activity">
                <h2 class="display h4">Total Penerimaan Janji Iman</h2>
                <div class="number">Rp. 0</div>
                <h3 class="h4 display">Proggres</h3>
                <div class="progress">
                  <div role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar bg-primary"></div>
                </div>
               <!--  <div class="page-statistics d-flex justify-content-between">
                  <div class="page-statistics-left"><span>Project</span><strong>0</strong></div>
                  <div class="page-statistics-right"><span>Demo</span><strong>0,00 %</strong></div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
<br>    
<?php include'footer.php'; ?>