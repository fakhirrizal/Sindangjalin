<!DOCTYPE html>
<html lang="en" >
<head>
  	<meta charset="UTF-8">
	<meta name="keywords" content="Transparansi Publik, Aplikasi Perjalanan Dinas, DPRD Kota Semarang, Sindangjalin">
	<meta content='"Sindangjalin" (Sistem Informasi Persidangan dan Perjalanan Dinas) adalah aplikasi yang dibangun untuk memberikan kemudahan dalam pengelolaan data dan penyajian informasi kegiatan Persidangan dan perjalanan Dinas Dewan Perwakilan Raktyat Daerah Kota Semarang.' name="description" />
	<meta content="DPRD Kota Semarang" name="author" />
  	<title>Sindangjalin | DPRD Kota Semarang</title>
  	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<style>

		.login-block {

			background: #DE6262;

			/* fallback for old browsers */

			background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);

			/* Chrome 10-25, Safari 5.1-6 */

			background: linear-gradient(to bottom, #FFB88C, #DE6262);

			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

			float: left;

			width: 100%;

			padding: 50px 0;

		}



		.banner-sec {

			/*background: url(http://selarasmedia.com/wp-content/uploads/2018/02/88kotasemarang.jpg) no-repeat left bottom;*/
			background: url(http://selarasmedia.com/wp-content/uploads/2018/02/88kotasemarang.jpg) no-repeat left bottom;

			background-size: cover;

			min-height: 500px;

			border-radius: 0 10px 10px 0;

			padding: 0;

		}



		.container {

			background: #fff;

			border-radius: 10px;

			box-shadow: 15px 20px 0px rgba(0, 0, 0, 0.1);

		}



		.carousel-inner {

			border-radius: 0 10px 10px 0;

		}



		.carousel-caption {

			text-align: left;

			left: 5%;

		}



		.login-sec {

			padding: 50px 30px;

			position: relative;

		}



		.login-sec .copy-text {

			position: absolute;

			width: 80%;

			bottom: 20px;

			font-size: 13px;

			text-align: center;

		}



		.login-sec .copy-text i {

			color: #FEB58A;

		}



		.login-sec .copy-text a {

			color: #E36262;

		}



		.login-sec h2 {

			margin-bottom: 30px;

			font-weight: 800;

			font-size: 30px;

			color: #DE6262;

		}



		.login-sec h2:after {

			content: " ";

			width: 100px;

			height: 5px;

			background: #FEB58A;

			display: block;

			margin-top: 20px;

			border-radius: 3px;

			margin-left: auto;

			margin-right: auto

		}



		.btn-login {

			background: #DE6262;

			color: #fff;

			font-weight: 600;

		}



		.banner-text {

			width: 70%;

			position: absolute;

			bottom: 40px;

			padding-left: 20px;

		}



		.banner-text h2 {

			color: #fff;

			font-weight: 600;

		}



		.banner-text h2:after {

			content: " ";

			width: 100px;

			height: 5px;

			background: #FFF;

			display: block;

			margin-top: 20px;

			border-radius: 3px;

		}



		.banner-text p {

			color: #fff;

		}



	</style>
	<link rel="shortcut icon" href="<?=base_url('assets/admin.png');?>" />
</head>
<body>
	<section class="login-block">
		<div class="container">
			<div class="row">
				<div class="col-md-4 login-sec">
					<div class="text-center">
						<img class="text-center" src="<?=base_url('assets/sindangjalin_semarang.png');?>" alt="logo" style="width:320px; height:140px">                        
					</div><br>
					<?= $this->session->flashdata('error') ?>
					<form action="<?php echo site_url('User/masuk'); ?>" class="login-form" method="post" role="form">
						<div class="form-group">
							<label for="exampleInputEmail1" class="text">Email</label>
							<input type="email" class="form-control" placeholder="" name='email' required>					
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1" class="text">Kata Sandi</label>
							<input type="password" class="form-control" placeholder="" name='password' required>
						</div>
						<div class="form-check">
							<button type="submit" class="btn btn-login float-right">Masuk</button>
						</div>
					</form>
					<div class="copy-text">2019 © Sindangjalin - DPRD Kota Semarang</div>
					<!-- <div class="copy-text">2019 © Sindangjalin - DPRD Kota Semarang<br>by <a href="http://grafreez.com">Grafreez.com</a></div> -->
				</div>
				<div class="col-md-8 banner-sec">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="carousel-item active">
								<!-- <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide"> -->
								<img class="d-block img-fluid" src="https://www.pegipegi.com/travel/wp-content/uploads/2016/06/gereja_blenduk_semarang-1.jpg" alt="First slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="banner-text">
										<h2>Transparansi Publik</h2>
										<p>Transparansi merupakan salah satu pilar dalam <i>good governance</i>. Adanya transparansi dalam penyelenggaraan pemerintahan dan pembuatan kebijakan dapat menjadi <i>entery point</i> bagi masyarakat untuk mendapatkan informasi sehingga dapat melakukan <i>check and balance</i> terhadap jalannya pemerintahan.</p>
									</div>	
								</div>
							</div>
							<div class="carousel-item">
								<!-- <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="Second slide"> -->
								<img class="d-block img-fluid" src="http://www.mysweetescapediary.com/wp-content/uploads/2018/05/kota-tua-semarang-1-1024x768.jpg" alt="Second slide">

								<div class="carousel-caption d-none d-md-block">

									<div class="banner-text">
										<h2><i>Good Governance</i></h2>
										<p><i>Good Governance</i> adalah suatu peyelegaraan manajemen pembangunan yang solid dan bertanggung jawab yang sejalan dengan prinsip demokrasi dan pasar yang efisien, penghindaran salah alokasi dana investasi dan pencegahan korupsi baik secara politik maupun secara administratif menjalankan disiplin anggaran serta penciptaan legal dan <i>politican framework</i> bagi tumbuhnya aktifitas usaha.</p>
									</div>	
								</div>
							</div>
							<div class="carousel-item">
								<!-- <img class="d-block img-fluid" src="https://images.pexels.com/photos/872957/pexels-photo-872957.jpeg" alt="Third slide"> -->
								<img class="d-block img-fluid" src="http://www.tanahnusantara.com/wp-content/uploads/2017/07/Tempat-angker-di-Semarang-1-1024x768.jpg" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
									<div class="banner-text">
										<h2>Pelayanan Publik</h2>
										<p>Pelayanan publik adalah segala bentuk jasa pelayanan, baik dalam bentuk barang publik maupun jasa publik yang pada prinsipnya menjadi tanggung jawab dan dilaksanakan oleh Instansi Pemerintah di Pusat, di Daerah, dan di lingkungan Badan Usaha Milik Negara atau Badan Usaha Milik Daerah, dalam rangka upaya pemenuhan kebutuhan masyarakat maupun dalam rangka pelaksanaan ketentuan peraturan perundang-undangan.</p>
									</div>	
								</div>
							</div>
						</div>	   
					</div>
				</div>
			</div>
	</section>
	<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js'></script>
</body>
</html>