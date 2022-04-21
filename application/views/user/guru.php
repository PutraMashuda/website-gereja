	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets_user/css/bootstrap.css">
	</head>
		<body>	
		  <!-- <header> -->
	  		<!-- <div class="header-top">
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
					
			<!-- Start popular-course Area -->
			<!-- <section class="popular-course-area section-gap">
				
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-6 col-sm bg bg-dark">
							
								<h1 class="mt-3 text-center text-light">Warta Jemaat</h1>
								<p class="text-center text-light">Gereja Apa Ini</p>
							
						</div>
					</div>	
			</section> -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<br>					
					<table id_guru="bootstrap-data-table" class="table table-striped table-bordered mt-5">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Tema</th>
                                <!-- <th>Jenis Kelamin</th>
                                <th>Umur</th>
                                <th>Alamat</th>
                                <th>Jabatan Kepengurusan</th> -->
                              </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; foreach($data_guru as $row) 
                            { 
                                $no++;
                            ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nip']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                               <!--  <td><?php echo $row['jenis_kelamin']; ?></td>
                                <td><?php echo $row['umur']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['nama_mapel']; ?></td> -->
                              </tr>
                            <?php 
                            } ?>
                            </tbody>
                          </table>

                          
				</div>	
			</section>
			<!-- End popular-course Area -->


				
			<!-- start footer Area -->		
			<!-- <footer class="footer-area bg-dark mt-auto">								
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