<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>FORM IKM | PPP BULU</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Sistem Informasi dan Monitoring Indeks Kepuasan Masyarakat Untuk Unit Pelaksana Teknis Pelabuhan Perikanan Pantai Bulu" />
<meta name="keywords" content="IKM PPP Bulu, Survey Kepuasan PPP Bulu, Indeks Survey Pelabuhan Bulu, Indeks Kepuasan Masyarakat" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="css/style_common.css" />
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
</head>
<body>
<header>
	<!-- header -->
	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.html">IKM PPP BULU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Beranda </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pengantar.php">Pengantar</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Pelayanan</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Formulir
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="kuisioner.php">Form Kuisioner</a>
          <a class="dropdown-item" href="#">Form Pengaduan Masyarakat</a>
          
          <a class="dropdown-item" href="#">Publikasi Capaian IKM</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#">Sosial Media</a>
      </li>



    </ul>
 
</nav>
	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider1">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider1-img">
							<div class="slider_banner_info">
							
								
							</div>
						</div>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-slider -->
</div>
</header>

<section class="contact  py-lg-5 py-md-4 py-md-3 py-2" id="contact">

	
	<section class="wthree-row py-5 w3-contact" id="contact">
		<div class="container py-md-5">
			<h4 class="w3ls-title text-center text-uppercase pb-md-5 pb-4">Formulir IKM Pelayanan Publik</h3><hr>
			<div class="row contact-form ">
				<div class="col-lg-6 wthree-form-left">
					<!-- contact form grid -->
					<div class="contact-top1">
						<form method="post" action="tambah_kuisioner.php" class="f-color" enctype="multipart/form-data">
							<div class="form-group">
								<label for="contactusername"><b>Nama Anda</b></label>
								<input type="text" class="form-control" id="contactusername" name="nama" required>
							</div>
							<div class="form-group">
								<label for="contactemail"><b>Pendidikan</b></label>
								<select name="pendidikan" class="form-control" id="contactusername">
								    <option value="SD">Sekolah Dasar (SD)</option>
								    <option value="SMP">Sekolah Menengah Pertama (SMP)</option>
								    <option value="SMA">Sekolah Menengah Atas (SMA)</option>
								     <option value="Dp">Diploma (D.I/II/III)</option>
								    <option value="S1">Sarjana (S.1)</option>
								    <option value="S2">Pasca Sarjana (S.2)</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactcomment"><b>Asal Desa</b></label>
								<textarea class="form-control" rows="3" id="contactcomment" required name="desa"></textarea>
							</div>
							
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 1 :</b> Bagaimana tanggapan menurut anda tentang pembangunan pelabuhan perikanan berdampak positif untuk menunjang kegiatan nelayan, memiliki manfaat yang lebih dibanding sebelumnya?</label>
								<select name="p1" class="form-control" id="contactusername">
								    <option value="4">Sangat Bermanfaat</option>
								    <option value="3">Bermanfaat</option>
								    <option value="2">Cukup Bermanfaat</option>
								    <option value="1">Kurang Bermanfaat</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 2 :</b> Bagaimana Persyaratan yang harus dipenuhi dalam pengurusan pelayanan, baik persyaratan teknis maupun administratif di UPT Pelabuhan Perikanan Pantai Bulu?</label>
								<select name="p2" class="form-control" id="contactusername">
								    <option value="4">Sangat Baik</option>
								    <option value="3">Baik</option>
								    <option value="2">Cukup Baik</option>
								    <option value="1">Kurang Baik</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 3 :</b> Menurut Bpk/Ibu/Sdr bagaimana prosedur/tata cara pelayanan, termasuk pengaduan di UPT Pelabuhan Perikanan Pantai Bulu?</label>
								<select name="p3" class="form-control" id="contactusername">
								    <option value="4">Sangat Baik</option>
								    <option value="3">Baik</option>
								    <option value="2">Cukup Baik</option>
								    <option value="1">Kurang Baik</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 4 :</b> Bagaimana jangka waktu pelayanan yang Pelayanan diperlukan untuk menyelesaikan seluruh proses Pelayanan dari setiap jenis pelayanan di UPT Pelabuhan Perikanan Pantai Bulu?
</label>
							<select name="p4" class="form-control" id="contactusername">
								    <option value="4">Sangat Cepat</option>
								    <option value="3">Cepat</option>
								    <option value="2">Cukup Cepat</option>
								    <option value="1">Lama</option>
								</select>
							</div>
							
						
					</div>
					<!--  //contact form grid ends here -->
				</div>
				<!-- contact details -->
				<!-- contact map grid -->
				<div class="col-lg-6  mt-lg-0 mt-5 map contact-right">
					
				<div class="contact-top1">
						
							
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 5 :</b>Menurut Bpk/Ibu/Sdr, bagaimana kemudahan informasi yang disampaikan kepada penerima informasi publik di UPT Pelabuhan Perikanan Pantai Bulu ?</label>
								<select name="p5" class="form-control" id="contactusername">
								    <option value="4">Sangat Cepat Mudah</option>
								    <option value="3">Mudah</option>
								    <option value="2">Cukup Mudah</option>
								    <option value="1">Kurang Optimal</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 6 :</b>Menurut Bpk/Ibu/Sdr, bagaimana adanya POS Pelayanan Terpadu untuk nelayan di lingkup UPT Pelabuhan Perikanan Pantai Bulu? </label>
								<select name="p6" class="form-control" id="contactusername">
								    <option value="4">Sangat Membantu</option>
								    <option value="3">Membantu</option>
								    <option value="2">Cukup Membantu</option>
								    <option value="1">Kurang Membantu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 7 :</b>Menurut Bpk/Ibu/sdr, bagaimana kemampuan (pengetahuan, keahlian, keterampilan, dan pengalaman) para pegawai/petugas di UPT Pelabuhan Perikanan Pantai Bulu dalam pelayanan publik? </label>
								<select name="p7" class="form-control" id="contactusername">
								    <option value="4">Sangat Terampil</option>
								    <option value="3">Terampil</option>
								    <option value="2">Cukup Terampil</option>
								    <option value="1">Kurang Terampil</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 8 :</b>Bagaimana sikap petugas/pegawai di UPT Pelabuhan Perikanan Pantai Bulu dalam memberikan pelayanan? </label>
							<select name="p8" class="form-control" id="contactusername">
								    <option value="4">Sangat Ramah</option>
								    <option value="3">Ramah</option>
								    <option value="2">Cukup Ramah</option>
								    <option value="1">Kurang Ramah</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 9 :</b> Menurut Bpk/Ibu/sdr, apakah sudah memperoleh berita/informasi di berikan melalui internet, baik seperti website, blog, maupun sarana media sosial UPT Pelabuhan Perikanan Pantai Bulu?</label>
							<select name="p9" class="form-control" id="contactusername">
								    <option value="4">Sudah, Sangat Membantu dan Informatif</option>
								    <option value="3">Sudah, Belum Pernah Buka</option>
								    <option value="2">Sudah, Kurang Update Informasi</option>
								    <option value="1">Sudah, Kurang Informatif</option>
								</select>
							</div>
							<div class="form-group">
								<label for="contactusername"><b>Pertanyan 10 :</b> Menurut Bpk/Ibu/Sdr, bagaimana penanganan pengaduan, saran dan masukan, serta tindak lanjutnya di UPT Pelabuhan Perikanan Pantai Bulu? </label>
								<select name="p10" class="form-control" id="contactusername">
								    <option value="4">Sangat Cepat</option>
								    <option value="3">Cepat</option>
								    <option value="2">Kurang Cepat</option>
								    <option value="1">Tidak Respon</option>
								</select>
							</div>
							
							<input type="submit" name="simpan" class="btn btn-info btn-block" value="Kirim Kuisioner">
						</form>
					</div>
				</div>
				<!--//contact map grid ends here-->
			</div>
			<!-- //contact details container -->
		</div>
	</section>
	</section>
	<!-- //contact -->

<!-- Footer-->
<!-- Footer-->
<section class="footer">
<div class="container">
<h3>IKM PPP BULU</h3>
     <div class="wrapper">
<ul class="social-icons icon-circle icon-zoom list-unstyled list-inline"> 
<li> <a href="#"><i class="fab fa-facebook-f"></i></a></li> 
<li> <a href="#"><i class="fab fa-twitter"></i></a></li> 
<li> <a href="#"><i class="fab fa-linkedin-in"></i></a></li>
</ul>
</div>
<div class="copyright">
			<p>© 2020 IKM PPP BULU. All Rights Reserved | Design by <a href="https://www.plkdev.com/">Perahu Layar Kertas</a></p>
			
		</div>
	</div>
</section>
<!-- /Footer-->
    <!-- bootstrap-pop-up for login and register -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Fast Service
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="loginf_module">
                            <div class="module form-module">
                                <div class="toggle">
                                    <i class="fa fa-times fa-pencil"></i>
                                    <div class="tooltip">Register</div>
                                </div>
                                <div class="form">
                                    <h3>Login to your account</h3>
                                    <form action="#" method="post">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="submit" value="Login">
                                    </form>
                                    <div class="cta">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="form">
                                    <h3>Create a new account</h3>
                                    <form action="#" method="post">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="email" name="Email" placeholder="Email address" required="">
                                        <input type="text" name="Phone" placeholder="Phone Number" required="">
                                        <input type="submit" value="Register">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //bootstrap-pop-up for login and register-->

<script  src="js/jquery.min.v3.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script  src="js/SmoothScroll.min.js"></script>	

	
   <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms  
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
	
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<script type="text/javascript">
	$(function () {
  $('[data-toggle="popover"]').popover()
})
</script> 
<!-- //scrolling script -->
<!--//start-smoth-scrolling -->


</body>
</html>