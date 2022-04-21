	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		
			<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/font-awesome.min.css">
			<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/bootstrap.css">
		
	</head>
		<body>	
		  <!-- <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<?php $this->load->view('media_sosial'); ?>					
	  			</div>
			</div> -->

		    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		    	<div class="container">
				  <a class="navbar-brand" href="#">GKI</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				    <div class="navbar-nav ml-auto">

				    	<li class="nav-item active">
					      	<a class="nav-link js-scroll-trigger" href="<?php echo base_url('user') ?>">Home <span class="sr-only">(current)</span></a>
					    </li>

					    <li class="nav-item">
				      	  	<a class="nav-link" href="<?php echo base_url('user/galeri') ?>">Video</a>
				      	</li>

				      	<li class="nav-item">
				      		<a class="nav-link" href="<?php echo base_url('user/jadwal') ?>">Jadwal Ibadah</a>
				  		</li>

				  		mata pelajaran

				  		<li class="nav-item">
				     	 	<a class="nav-link" href="<?php echo base_url('user/guru') ?>">Warta Jemaat</a>
				  		</li>
				       <a class="nav-link disabled">Disabled</a> -->
				    <!-- </div>
				  </div>
				</div>
			</nav> 
			
		  </header> --><!-- #header -->

			<!-- start banner Area -->
			<!-- <section class="banner-area relative" id="home"  style="background: url(<?php echo base_url() ?>assets_user/img/salib.JPG);">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h3 class="text-uppercase" style="color: white">Selamat Datang Di</h3>
							<h1 class="text-uppercase">
								Sistem Informasi			
							</h1>
							<p class="pt-10 pb-10">
								Gereja Apa Ini
							</p>
						</div>										
					</div>
				</div>					
			</section> -->
			<!-- End banner Area -->

			<!-- Start feature Area -->
			<!-- <section class="feature-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6">
							<div class="single-feature">
								<div class="title">
									<h4>Berprestasi</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Menciptakan Siswa-Siswa Yang Unggul Dan Berprestasi
									</p>									
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-feature">
								<div class="title">
									<h4>Religius</h4>
								</div>
								<div class="desc-wrap">
									<p>
										Menciptakan Siswa-Siswi Yang Taat Pada Keagamaan
									</p>									
								</div>
							</div>
						</div>							
					</div>
				</div>	
			</section> -->
			<!-- End feature Area -->
					
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				
					<!-- <div class="row d-flex justify-content-center">
						<div class="menu-content pb-6 col-sm bg bg-dark">
							
								<h1 class="mt-3 text-center text-light">Galeri</h1>
								<p class="text-center text-light">Sinar Kasih</p>
							
						</div>
					</div>	 -->	

					<div class="container">
						<div class="text-center mt-5">
						 <iframe width="400" height="315" src="https://www.youtube.com/embed/Gd69vKVsJW8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
					</div>
					
			</section>
			<!-- End popular-course Area -->

			<!-- Start Galeri -->
			<section class="popular-course-area section-gap">
				<div class="container">
											
					<div class="row d-flex justify-content-center">
						 <?php foreach($hasil_galeri as $row) 
                            {
                            ?>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="<?php echo base_url() ?><?php echo $row->berkas ?>" alt="">
									</div>
									<div class="meta d-flex justify-content-between">
										
									</div>									
								</div>
								<div class="details">
									<p>
										<?php echo $row->deskripsi ?>										
									</p>
								</div>
							</div>
						<?php 
            	            } ?>						
						</div>
					</div>
				</div>	
			</section>
			<!-- End Galeri -->
			
			<!-- start footer Area -->		
			<!-- <footer class="footer-area bg-dark">								
					  <div class="copyright py-4 text-center text-white">
			            <div class="container">
			            	<small>Copyright &copy; Gereja Apa Ini</small>
			            </div>
			          </div>
			</footer> -->	
			<!-- End footer Area -->	


			<script src="<?php echo base_url() ?>assets_user/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="<?php echo base_url() ?>assets_user/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="<?php echo base_url() ?>assets_user/js/vendor/bootstrap.min.js"></script>			
			<script src="<?php echo base_url() ?>assets_user/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="<?php echo base_url() ?>assets_user/js/easing.min.js"></script>			
			<script src="<?php echo base_url() ?>assets_user/js/hoverIntent.js"></script>
			<script src="<?php echo base_url() ?>assets_user/js/superfish.min.js"></script>	
			<script src="<?php echo base_url() ?>assets_user/js/jquery.ajaxchimp.min.js"></script>
			<script src="<?php echo base_url() ?>assets_user/js/jquery.magnific-popup.min.js"></script>	
    		<script src="<?php echo base_url() ?>assets_user/js/jquery.tabs.min.js"></script>						
			<script src="<?php echo base_url() ?>assets_user/js/jquery.nice-select.min.js"></script>	
			<script src="<?php echo base_url() ?>assets_user/js/owl.carousel.min.js"></script>									
			<script src="<?php echo base_url() ?>assets_user/js/mail-script.js"></script>	
			<script src="<?php echo base_url() ?>assets_user/js/main.js"></script>	
		</body>
	</html>