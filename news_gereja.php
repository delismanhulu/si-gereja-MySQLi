<?php include'header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<title>LIST NEWS - GIKI MEDAN</title>
</head>
<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/profil.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>NEWS</span> GIKI MEDAN</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li>News</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->


	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">
						
						<!-- News Post -->


						  <?php
            $qry = mysqli_query($konek,"SELECT * FROM tbl_blog where kode order by tgl_posting desc limit 100");
            while ($data=mysqli_fetch_assoc($qry)) {
          ?>

						<div class="news_post">
							<div class="news_image">
								<img src="img/blog/<?php echo $data['gambar']; ?>" alt="">
								<div class="news_date d-flex flex-column align-items-center justify-content-center">
										<div class="news_day">News</div>
										<div class="news_month"><?php echo $data['tgl_posting']; ?></div>
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="news_detail.php?id=<?php echo base64_encode($data['kode']); ?>"><?php echo $data['judul']; ?></a></div>
								<div class="news_info">
									<ul>
										<li class="news_author"><span>Post</span><a href="#"> <?php echo $data['user']; ?></a></li>
									</ul>
								</div>
								<div class="button about_button">
							<a href="news_detail.php?id=<?php echo base64_encode($data['kode']); ?>">SELENGKAPNYA</a>
						</div>
							</div>
						</div>

						<?php } ?>

					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Search -->
						<div class="sidebar_search">
							<form action="#" id="sidebar_search_form" class="sidebar_search_form">
								<input type="text" class="search_input" placeholder="Search" required="required">
								<button class="search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="sidebar_categories sidebar_section">
							<div class="sidebar_section_title">
								<div class="sidebar_title">LIST</div>
							</div>
							<ul>
								<?php
						           $qry = mysqli_query($konek,"SELECT * FROM tbl_blog where kode order by tgl_posting desc limit 100");
						           while ($data=mysqli_fetch_assoc($qry)) {
						          ?>
								<li><a href="news_gereja.php?id=<?php echo base64_encode($data['kode']); ?>"><?php echo $data['judul']; ?></a></li>
								<?php } ?>
							</ul>
						</div>
						<!-- Archives -->
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include'footer.php'; ?>