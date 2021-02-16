<?php include'header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="styles/services.css">
<link rel="stylesheet" type="text/css" href="styles/services_responsive.css">
	<title>Daftar Video - GIKI</title>
</head>

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/natal.png" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>VIDEO</span> GIKI</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li>Video</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>Daftar Video</h2></div>
				</div>
			</div>


			<div class="row services_row">


								 <?php
				            $qry = mysqli_query($konek,"SELECT * FROM tbl_video where kode order by kode limit 100");
				            while ($data=mysqli_fetch_assoc($qry)) {
				          ?>
				<div class="col-lg-6 col-md-6 service_col">
					<div class="service_title trans_200"><?php echo $data['nama']; ?></div>
							<iframe width="100%" height="290" src="https://www.youtube.com/embed/<?php echo $data['alamat']; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>



				</div>


				
			<?php } ?>
			</div>



		</div>
	</div>

	

<?php include'footer.php'; ?>