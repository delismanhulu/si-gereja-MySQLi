<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_video WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit  Galeri</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama Video</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtnama" value="<?php echo $data['nama'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>
                 <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Alamat Video</label>
                      <div class="col-sm-10">
                        <input type="text" name="txtalamat" value="<?php echo $data['alamat'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>

             

                <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE">
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $txtnama=$_POST['txtnama'];
                                  $txtalamat=$_POST['txtalamat'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_video SET nama='$txtnama',alamat='$txtalamat' WHERE kode='$id'");
                  if ($edit){
                    if(!empty($edit)){
                    ?>
                    <script type="text/javascript">
                      document.location.href="video_tampil.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>

    <?php include'footer.php'; ?>