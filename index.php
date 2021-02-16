<?php include'header.php';?>



	<!-- Home -->
<head>
	<title>Gereja Injil Kristus Indonesia GIKI</title>
</head>
	<div class="home">
		<div class="home_slider_container">
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(img/slide/berdoa.jpg")></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>GEREJA GIKI MEDAN</h1></div>
										<div class="home_text">
											<!-- <p>GEREJA GIKI MERUPAKAN GERAJA YANG MEMILIKI JEMAAT </p> -->
										</div>
										<div class="button home_button">
											<a href="#">GESER>></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(img/slide/gambarj.jpg")></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>DOA MUJIZAT</h1></div>
										<div class="home_text">
											<p></p>
										</div>
										<div class="button home_button">
											<a href="news_gereja.php">GIKI</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(img/slide/jemaat.jpg)"></div>
					<div class="home_content">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content_inner">
										<div class="home_title"><h1>BERSATU DALAM TUHAN</h1></div>
										<div class="home_text">
											<p>..</p>
										</div>
										<div class="button home_button">
											<a href="news_gereja.php">READ</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Slider Progress -->
			<div class="home_slider_progress"></div>
		</div>
	</div>

	<!-- 3 Boxes -->

	  <section id="contact" class="wow fadeInUp">
	<div class="boxes">
		<div class="container">
			<div class="row">
				
				<!-- Box -->
				<div class="col-lg-8 box_col">
					<div class="box working_hours">
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width:29px; height:29px;"><img src="images/alarm-clock.svg" alt=""></div></div>
						<div class="box_title">DATANG DAN HADIRLAH</div>
						<div class="working_hours_list">
							<ul>
								<li class="d-flex flex-row align-items-center justify-content-start">
								<h3>	<div>Ibadah Mujizat 1 X Sebulan</div></h3>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
								<h3> <div>Doa Semalaman Jam : 24:00 s/d Selesai 1 X Sebulan</div><br> </h3>
									
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-4 box_col">
					<div class="box box_emergency">
						<!-- <a href="tel:085277948885"> -->
						<div class="box_icon d-flex flex-column align-items-start justify-content-center"><div style="width: 37px; height:37px; margin-left:-4px;"><img src="images/phone-call.svg" alt=""></div></div>
						<div class="box_title">Emergency Konseling</div>
						<!-- <div class="box_phone">+64852-7794-8885</div> -->
						<div class="box_emergency_text">Pdt. Dr. Domianus, M.Th</div>


						 <a href="https://api.whatsapp.com/send?phone=6285277948885&amp;text=Hallo%20Bapak Pendata Gereja Injil  Kristus Indonesia (GIKI Medan), Nama : ,%20Saya%20:%20...">
                        <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-whatsapp fa-stack-1x fa-inverse"></i>
                   </span>Chat: 0852-7794-8885</a> 
                   <br>
                   	 <a href="tel:085277948885">
                        <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                   </span>Call : 0852-7794-8885</a> 

               <!-- </a> -->
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
	<!-- About -->
  <section id="contact" class="wow fadeInUp">
	<div class="about">
		<div class="container">
			<div class="row row-lg-eq-height">
				<div class="col-lg-7">
					<div class="about_content">
						<div class="section_title"><h2>Ingat Perpuluhan</h2></div>
						<div class="about_text">
							<h4 align="justify-content-center"> Ingatlah Untuk Mengembalikan Perpuluhan Karena Itulah Yang di Kehendaki Tuhan Yesus Kristus dan Kita Akan Semakin Diberkati Percayalah</h4>
						</div>
						<div class="button about_button">
							<a href="#">MALEAKHI 3:10-11 </a>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="img/slide/perpuluhan.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>
	  <section id="contact" class="wow fadeInUp">
	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h2>KEGIATAN SEPEKAN</h2></div>
				</div>
			</div>
			<div class="row services_row">
			

				<!-- Service -->
				 <?php
            $qry = mysqli_query($konek,"SELECT * FROM tbl_file where kode order by kode limit 200");
            while ($data=mysqli_fetch_assoc($qry)) {
          ?>

				<div class="col-lg-4 col-md-6 service_col">
					
						<div class="service text-center trans_200">
							<div class="service_icon"><img class="svg" src="images/alarm-clock.svg" alt=""></div>
							<div class="service_title trans_200"><?php echo $data['kategori']; ?></div>
							<div class="service_text">
								<div class="service_title trans_200"><?php echo $data['judul']; ?></div>

							</div>
							<div class="button dept_button"><a href="kegiatan_detail.php?id=<?php echo base64_encode($data['kategori']); ?>">READ MORE</a></div>
						</div>

					
				</div>
			<?php } ?>

			</div>
		</div>
	</div>
</section>

	<!-- Call to action -->

	<div class="cta">
		<div class="cta_background parallax-window" data-parallax="scroll" data-image-src="img/slide/pdtdomi.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<h2>HADIR DAN DATANGLAH BERIBADAH</h2>
						<p>MATIUS : 6 : 33 = Tetapi carilah dahulu Kerajaan Allah dan kebenarannya, maka semuanya itu akan ditambahkan kepadamu</p>
						<div class="button cta_button"><a href="#">MINGGU : 10:00 - SELESAI</a></div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Footer -->

<?php include'footer.php'; ?>