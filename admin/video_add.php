<?php 
include'header.php'; ?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php"></a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Video</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama Video</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" class="form-control is-valid" placeholder="Uraian Video">
                      </div>
                </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Link Video</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtalamat" class="form-control is-valid" value="-" placeholder="Alamat Link Video">
                      </div>
                </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="SIMPAN">
                </div>
              </div>
          </div>
      </section> 
      </form>            

        <?php

                  if (isset($_POST["btnsimpan"])){
                                  $txtnama=$_POST['txtnama'];
                                  $txtalamat=$_POST['txtalamat'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_video (nama,alamat) VALUES ('$txtnama','$txtalamat')");
                                   if(!empty($simpan)){
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="video_tampil.php";
                            </script>
                          <?php
                          }
                        }
                      ?>
<?php include'footer.php'; ?>