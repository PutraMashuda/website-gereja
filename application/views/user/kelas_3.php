	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php $this->load->view('header'); ?>
	</head>
		<body>	
		  <header id="header" id="home">
	  		<div class="header-top">
	  			<div class="container">
			  		<?php $this->load->view('media_sosial'); ?>					
	  			</div>
			</div>
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="<?php echo base_url() ?>user"><img src="<?php echo base_url() ?>images/logo mekar.png" width="80" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			          <?php $this->load->view('menu_user'); ?>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home"  style="background: url(<?php echo base_url() ?>assets_user/img/bg.JPG);">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-9 col-md-12">
							<h3 class="text-uppercase" style="color: white">Data Siswa</h3>
							<h1 class="text-uppercase">
								Kelas III	
							</h1>
							<p class="pt-10 pb-10">
								Geser Ke Bawah
							</p>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->
					
			<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="title text-center">
								<h1 class="mb-10">Data Siswa Kelas III</h1>
								<p>SMA Mekar Arum</p>
							</div>
					<table id_siswa="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Angkatan</th>
                                <th>Alamat</th>
                                <th>Kelas</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; foreach($data_kelas_3 as $row) 
                            { 
                                $no++;
                            ?>
                              <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $row['nis']; ?></td>
                                <td><?php echo $row['nama']; ?></td>
                                <td><?php echo $row['jenis_kelamin']; ?></td>
                                <td><?php echo $row['angkatan']; ?></td>
                                <td><?php echo $row['alamat']; ?></td>
                                <td><?php echo $row['kelas']; ?></td>
                              </tr>
                            <?php 
                            } ?>
                            </tbody>
                          </table>
				</div>	
			</section>
			<!-- End popular-course Area -->


				
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">										
					</div>
					<div class="footer-bottom row align-items-center justify-content-between">
						<p class="footer-text m-0 col-lg-6 col-md-12">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kerja Praktek | Teknik Informatika</p>
						<div class="col-lg-6 col-sm-12 footer-social">
							<a href="<?php echo base_url() ?>assets_user/#"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo base_url() ?>assets_user/#"><i class="fa fa-twitter"></i></a>
							<a href="<?php echo base_url() ?>assets_user/#"><i class="fa fa-dribbble"></i></a>
							<a href="<?php echo base_url() ?>assets_user/#"><i class="fa fa-behance"></i></a>
						</div>
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