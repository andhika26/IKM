<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>IKM | PPP BULU</title>
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
  <a class="navbar-brand" href="index.php"><b>IKM </b>PPP BULU</a>
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

 
</nav>
	


	<!-- //header -->

	<!-- banner -->
	<!-- banner-slider -->
	<div class="w3l_banner_info">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="slider-img">
							<div class="slider_banner_info">
							<div class="text">
								  <h3 class="word wisteria"></h3>
								  <p></p>
								</div>
								
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-2">
							<div class="slider_banner_info">
								<div class="text">
								  <h3 class="word wisteria"></h3>
								  <p></p>
								</div>
								
							</div>
						</div>
					</li>
					<li>
						<div class="slider-img-3">
							<div class="slider_banner_info">
								<div class="text">
								  <h3 class="word wisteria"></h3>
								  <p></p>
								</div>
								
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


<?php include("formula.php"); ?>

<section class="mission py-lg-5 py-md-4 py-md-3 py-2">
<div class="mission py-lg-5 py-md-4 py-md-3 py-2">
<div class="row">
<div class="col-md-3 col-sm-12 w3_ms8">
<img src="images/bb9.jpg" alt="xt" class="img-fluid">
</div>
<div class="col-md-3 col-sm-12 w3_ms1">
<h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Peraturan</h4>
<p>Berdasarkan Peraturan Menteri Pendayagunaan Aparatur Negeri dan Reformasi Birokrasi, Nomor 16 Tahun 2014 tentang Pedoman Survei Kepuasan Masyarakat Terhadap Penyelenggara Pelayanan Publik</p>
</div>

<!-- Slideshow container -->
<div class="col-md-3 col-sm-12 w3_ms8">
<img src="images/bb9.jpg" alt="xt" class="img-fluid">
</div>
<div class="col-md-3 col-sm-12 w3_ms1">
<h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Transparansi Data</h4>
<p>Survei ini menyatakan pendapat masyarakat mengenai pengalaman dalam memperoleh pelayanan instansi pemerintah, dalam hal ini khususnya di UPT Pelabuhan Perikanan Pantai (PPP) Bulu</p>
</div>


<div class="col-md-3 col-sm-12 w3_ms7">
<h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Capaian IKM <?php echo $tahun; ?></h4>
<p>Data disamping menunjukan capaian Nilai IKM yang diperoleh dari hasil kuisioner <?php echo $rr[10] ?> Responden. Jumlah sasaran responden acak sekitar 110 Responden Setiap Tahun.</p>
</div>
<div class="col-md-3 col-sm-12 w3_ms">
	<div class="row inner_stat_wthree_agileits">
			
			<div class="col-md-6 stats_left counter_grid2">
				<i class="far fa-edit"></i>
				<p class="counter"><?php echo number_format($kategori,1); ?></p>
				<h4><?php 
if(($kategori>=25)and($kategori<=43.75)){  
	echo "<b>Tidak Baik</b>";
} elseif (($kategori>=43.76)and($kategori<=62.5)){
	echo "<b>Kurang Baik</b>";
} elseif (($kategori>=62.51)and($kategori<=81.25)){
	echo "<b>Baik</b>";
} elseif (($kategori>=81.26)and($kategori<=100)){
	echo "<b>Sangat Baik</b>";
} else {
	echo "<b>Nilai Tidak Bisa Terkategori</b>";
}
?></h4>
			</div>
			<div class="col-md-6 stats_left counter_grid3">
				<i class="far fa-smile"></i>
				<p class="counter"><?php echo $rr[10] ?></p>
				<h4>Data Kuisioner</h4>
			</div>

		</div>
		</div>



<div class="col-md-3 col-sm-12 w3_ms4">
<h4 class="mb-lg-4 mb-md-3 mb-sm-2 mb-2">Tujuan Kuisioner</h4>
<p>survey indek kepuasan merupakan kegiatan survey dari unit pelayanan instansi pemerintah secara rutin, dengan harapan mampu memberikan gambaran mengenai kualitas pelayanan di instansi pemerintah kepada masyarakat. </p>
</div>
<div class="col-md-3 col-sm-12 w3_ms6">
</div>
</div>
</div>
</section>

<!-- Skills -->
<section class="skills py-lg-5 py-md-4 py-md-3 py-2">
<div class="stats wthree-sub py-lg-5 py-md-4 py-md-3 py-2" id="skills">
	<div class="container"> 
		<h3 class="w3l-title mb-lg-4 mb-md-3 mb-sm-2 mb-2">Persentase Capaian Sub Kuisioner</h3><br>Tahapan Pengembangan Hasil Hitung *)Beta
		<div class="row">
		<div class="col-sm-6 stats_grid_right">
			<div class="skillbar" data-percent="78">
			  <span class="skillbar-title" style="background: #f1703a;">POIN</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="94">
			  <span class="skillbar-title" style="background: #2980b9;">POIN</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="76">
			  <span class="skillbar-title" style="background: #a0d034;">POIN</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
			<div class="skillbar" data-percent="94">
			  <span class="skillbar-title" style="background: #2980b9;">POIN</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="76">
			  <span class="skillbar-title" style="background: #a0d034;">POIN</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
		</div>
		<div class="col-sm-6 stats_grid_right"> 
			<div class="skillbar" data-percent="54">
			  <span class="skillbar-title" style="background: #f1703a;">POIN</span>
			  <p class="skillbar-bar" style="background: #f88c5e;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="64">
			  <span class="skillbar-title" style="background: #2980b9;">POIN</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="84">
			  <span class="skillbar-title" style="background: #a0d034;">POIN</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<div class="skillbar" data-percent="94">
			  <span class="skillbar-title" style="background: #2980b9;">POIN</span>
			  <p class="skillbar-bar" style="background: #3498db;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar -->
			
			<div class="skillbar" data-percent="76">
			  <span class="skillbar-title" style="background: #a0d034;">POIN</span>
			  <p class="skillbar-bar" style="background: #b2ec2f;"></p>
			  <span class="skill-bar-percent"></span>
			</div>
			<!-- End Skill Bar --> 
		</div>
		</div>
	</div> 
</div>
</section>
<!-- /Skills -->

<!-- Contact -->
<section class="contact py-lg-5 py-md-4 py-md-3 py-2">
<div class="container py-lg-5 py-md-4 py-md-3 py-2">
<div class="w3_mg">
<h3>Kontak Via Email</h3>
<p class=" my-lg-4 my-md-3 my-sm-2 my-2">Untuk memberikan saran untuk kegiatan Survey Kuisioner Silahkan Kirim Email</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  KABARKAN VIA EMAIL
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesan Email (Tahap Pengembangan)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="contact" id="contact">
         <div class="container">
            <h3 class="title clr">CONTACT FORM</h3>
            <div class=" contact-form">
               <form action="#" method="post">
                  <div class="row contact-bothside-agileinfo">
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="text" name="Name" placeholder="Name" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <input type="text" name="Last name" placeholder="Last name" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right form-left">
                        <input type="email" name="Email" placeholder="Email" required="">
                     </div>
                     <div class="col-md-6 col-sm-6 col-xs-6 form-right ">
                        <input type="text" name="phone" placeholder="Phone" required="">
                     </div>
                     <textarea name="Message" placeholder="Message" required=""></textarea>
                     <input type="submit" name="saran" value="SUBMIT">
                  </div>
               </form>
               <?php
               
               ?>
            </div>
         </div>
      </div>
      </div>
      
    </div>
  </div>
</div>
</div>
</div>
</section>
<!-- /Conatct -->
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
                    Login Admin IKM PPP BULU
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

	<!-- banner Slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider3").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!-- //banner Slider -->


	<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
	<!--team-->
<script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems:4,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems:2
										},
										tablet: { 
											changePoint:768,
											visibleItems: 3
										}
									}
								});
								
							});
					</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					
<!--team-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
<script type="text/javascript">
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
        cw[i].className = 'letter out';
  }, i*80);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
        nw[i].className = 'letter in';
  }, 340+(i*80));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 4000);

</script> 

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
<!-- skills -->
<script src="js/skill.bars.jquery.js"></script>
<script>
	$(document).ready(function(){
		
		$('.skillbar').skillBars({
			from: 0,
			speed: 4000, 
			interval: 100,
			decimals: 0,
		});
		
	});
</script>
<!-- //skills -->
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
	<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}	
	</script>
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