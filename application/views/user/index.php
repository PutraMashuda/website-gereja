	<!DOCTYPE html>
	<html lang="zxx" class="no-js">

	<head>
	    <?php $this->load->view('header');?>
	</head>

	<body>
	    <header id="header" id="home">
	        <!-- <div class="header-top">
	  			<div class="container">
			  		<?php $this->load->view('media_sosial');?>
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



				  		<li class="nav-item">
				     	 	<a class="nav-link" href="<?php echo base_url('user/guru') ?>">Warta Jemaat</a>
				  		</li>

				    </div>
				  </div>
				</div>
			</nav> -->

	    </header><!-- #header -->

	    <!-- start banner Area -->
	    <section class="banner-area relative" id="home"
	        style="background: url(<?php echo base_url() ?>assets_user/img/salib.JPG);">
	        <div class="overlay overlay-bg"></div>
	        <div class="container">
	            <div class="row fullscreen d-flex align-items-center justify-content-between">
	                <div class="banner-content col-lg-12 col-md-12">


	                    <h3 class="text-uppercase" style="color: white">Selamat Datang Di</h3>
	                    <h1 class="text-uppercase">
	                        Aplikasi Warta Jemaat
	                    </h1>
	                    <h2 class="pt-10 pb-10" style="color: white">
	                        Gereja Sinar Kasih.
	                    </h2>
	                    <div class="container text-center">

	                        <a class="btn btn-dark mt-3 mb-3 btn-lg" style="width: 200px"
	                            href="<?php echo base_url('user') ?>" role="button">Home</a><br>

	                        <a class="btn btn-dark mt-3 mb-3 btn-lg" style="width: 200px"
	                            href="<?php echo base_url('user/galeri') ?>" role="button">Video</a><br>

	                        <a class="btn btn-dark mt-3 mb-3 btn-lg" style="width: 200px"
	                            href="<?php echo base_url('user/jadwal') ?>" role="button">Jadwal Ibadah</a><br>

	                        <a class="btn btn-dark mt-3 mb-3 btn-lg" style="width: 200px"
	                            href="<?php echo base_url('user/guru') ?>" role="button">Warta Jemaat</a><br>

	                        <a class="btn btn-dark mt-3 mb-3 btn-lg" style="width: 200px"
	                            href="<?php echo base_url('liturgi') ?>" role="button">Liturgi</a><br>

	                        <a class="btn btn-danger mt-3 mb-3 btn-lg" style="width: 200px"
	                            href="<?=IsLoggedIn() ? base_url('logout') : base_url('login')?>"
	                            role="button"><?=IsLoggedIn() ? "Logout" : "Login Admin"?></a>


	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>

	    <section class="mt-3">
	        <div class="container">
	            <div class="row d-flex justify-content-center">
	                <div class="menu-content col-sm">
	                    <div class="title text-center">
	                        <h1 class="mt-2">About</h1>
	                        <p>Gereja</p>
	                    </div>
	                </div>
	            </div>
	            <div class="row text-center">
	                <p>
	                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
	                    amet, consectetur adipisicing elit, sed do eiusmod
	                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	                </p>
	            </div>
	        </div>
	    </section>


	    <!-- Start upcoming-event Area -->
	    <section class="mt-3 mb-5">
	        <div class="container">
	            <div class="row d-flex justify-content-center">
	                <div class="menu-content">
	                    <div class="title text-center">
	                        <a class="btn btn-primary" href="user/artikel" role="button">Baca Artikel Gereja</a>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	    <!-- End upcoming-event Area -->

	    <!-- start footer Area -->
	    <footer class="footer-area bg-dark">
	        <div class="copyright py-4 text-center text-white">
	            <div class="container">
	                <small>Copyright &copy; Gereja Apa Ini</small>
	            </div>
	        </div>


	    </footer>
	    <!-- End footer Area -->


	    <script src="<?php echo base_url() ?>assets_user/js/vendor/jquery-2.2.4.min.js"></script>
	    <script
	        src="<?php echo base_url() ?>assets_user/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
	        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	    </script>
	    <script src="<?php echo base_url() ?>assets_user/js/vendor/bootstrap.min.js"></script>
	    <script
	        src="<?php echo base_url() ?>assets_user/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA">
	    </script>
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