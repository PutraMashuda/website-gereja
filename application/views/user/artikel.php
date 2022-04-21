	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/bootstrap.css">
	</head>
		<body>	
		  <!-- #header -->

			<!-- start banner Area -->
			
			<!-- End banner Area -->

			<!-- Start feature Area -->
			
			<!-- End feature Area -->
					
			
			<!-- Start upcoming-event Area -->
			<section class="upcoming-event-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-12">
							<div class="title text-center">
								<h1 class="mb-10 mt-3">Artikel</h1>
								<p>Gereja Apa Ini</p>
							</div>
						</div>
					</div>								
					<div class="row">
						<?php foreach($hasil_artikel as $row) 
                        {
                        ?>
						<div class="container">
							<div class="row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="<?php echo base_url() ?><?php echo $row->gambar ?>" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p><?php echo $row->tanggal ?></p>
									<h4><?php echo $row->judul ?></h4></a>
									<p><a href="<?php echo base_url() ?>user/detail_artikel/<?php echo $row->id_artikel ?>"> Selengkapnya </a></p>
								</div>
							</div>																			
						</div>
						<?php 
                        } ?>
					</div>
				</div>	
			</section>
			<!-- End upcoming-event Area -->

				
			<!-- start footer Area -->		
			<footer class="footer-area bg-dark mt-auto">								
					  <div class="copyright py-4 text-center text-white">
			            <div class="container">
			            	<small>Copyright &copy; Gereja Apa Ini</small>
			            </div>
			          </div>
											
				
			</footer>	
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