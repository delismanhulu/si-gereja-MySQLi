<?php include'header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<title>Contact GIKI Medan</title>
</head>
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/janji.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>JANJI</span>IMAN</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li>Janji Iman</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




  <section id="contact" class="wow fadeInUp">

	<div class="contact">
		<div class="container">
		
      	 <div class="section-header">
        <h3>FORM JANJI IMAN</h3>
          <p></p>
	 </div>
        <div class="form">
          <div id="sendmessage">Form Janji Iman ini tidak ada paksaan dari Gereja GIKI</div>
          <div id="errormessage"></div>
          <form method="POST">
            <div class="form-row">
        <label>Nama Lengkap</label>
        <input type="text" name="txtnama" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')"> </input>
        <label>Jenis Kelamin</label>
        <select class="form-control" name="txtpaket">
            <option>-Pilih-</option>
            <option>Laki-Laki</option>
            <option>Perempuan</option>
        </select>
        <label>Status Nikah</label>
        <select class="form-control" name="txtbahasa">
            <option>-Pilih-</option>
            <option>Menikah</option>
            <option>Belum Menikah </option>
          </select>
  
        <label>Email </label>
        <input type="email" class="form-control" name="txtemail" id="email" placeholder="Email"required oninvalid="this.setCustomValidity('Email Perusahaan Masih Kosong')" oninput="setCustomValidity('')"> </input>
        <div class="validation"></div>

        <label>HandPhone</label>
        <input type="text" name="txthandphone" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('HandPhone Masih Kosong')" oninput="setCustomValidity('')"> </input>
        <label>Jumlah Janji Iman Rp.</label>
          <input type="text" name="txthandphone" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('HandPhone Masih Kosong')" oninput="setCustomValidity('')"> </input>
         <label>Tanggal Pembayaran</label>
          <input type="date" name="txthandphone" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('HandPhone Masih Kosong')" oninput="setCustomValidity('')"> </input>
          <label>Alamat</label>
         <textarea class="form-control" name="txtpesan" rows="2" data-rule="required" data-msg="Pesan Tidak Boleh Kosong" placeholder="Alamat"></textarea><div class="validation"></div>

        <label>Catatan</label>
         <textarea class="form-control" name="txtpesan" rows="3" data-rule="required" data-msg="Pesan Tidak Boleh Kosong" placeholder="Catatan Janji Iman"></textarea><div class="validation"></div>
      </div>
      <a> Janji Iman Ini Belum Berfungsi...</a>
     <div class="modal-footer">
      <input type="submit" name="btnsimpan" class="btn btn-primary" value="Kirim Janji Iman Anda">
      </div>
	</form>
	 <?php
          if (isset($_POST["btnsimpan"])){
            $txtnama = mysqli_real_escape_string($konek, $_POST['txtnama']);
            $txtemail = mysqli_real_escape_string($konek, $_POST['txtemail']);
            $txthandphone = mysqli_real_escape_string($konek, $_POST['txthandphone']);
            $txtpesan = mysqli_real_escape_string($konek, $_POST['txtpesan']);
           	$txtpaket = mysqli_real_escape_string($konek, $_POST['txtpaket']);
           	$txtlama = mysqli_real_escape_string($konek, $_POST['txtlama']);
           	$txtbahasa = mysqli_real_escape_string($konek, $_POST['txtbahasa']);
            $simpan = mysqli_query($konek,"INSERT INTO tbl_tawaran(nama,paket,bahasa_program,email,handphone,deskripsi) VALUES ('$txtnama','$txtpaket','$txtbahasa','$txtemail','$txthandphone','$txtpesan')");
            if ($simpan){
              ?>
              <script type="text/javascript">
                alert('Data Berhasil di kirim');
                document.location.href="penawaran.php";
              </script>
              <?php
            }else{
              echo "Gagal Untuk Menyimpan";
            }
          }
        ?>

</div>
</div>
</div>
</div>
</section>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Menampilkan Modal Secara Otomatis-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p class="modal-title">Pesan</p>
            </div>
            <div class="modal-body">
                <H2>Opps....</H2>
                <H3>Form Ini belum Berfungsi Berhubunng Belum Adan Persetujuan Dari Bapak Gembala</H3>
                <a href="https://layanancoding.com/contact.php">Klik : Hub. Programmer Web GIKI</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
            </div>
        </div>

    </div>
</div>

<?php include'footer.php'; ?>
<script>
$('#myModal').modal('show');
</script>