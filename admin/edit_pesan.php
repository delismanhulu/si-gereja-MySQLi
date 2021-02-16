<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pesan WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
         <!--  <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit  Galeri</li> </li>
          </ul> -->

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                 <div class="form-group row has-success">
                      <label hidden="" class="col-sm-2 form-control-label">Alamat Video</label>
                      <div class="col-sm-10">
                        <input type="text" hidden="" name="txtction" value="1" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>

             

                <input type="submit" name="btnedit" class="btn btn-primary" value="TELAH DI BACA">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                $txtction=$_POST['txtction'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_pesan SET keterangan='$txtction' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                      document.location.href="tampil_pesan.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>