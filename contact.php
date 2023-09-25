<!DOCTYPE html>
<html lang="en">


<?php
$metatag = '<meta name="description" content="Discover how Tradecare revolutionizes agriculture through innovative market strategies and community empowerment. Join us in shaping the future of sustainable farming.">';
$pageTitle = "Tradecare Africa || Consultancy ||Advisory";
include 'head.php';
?>

<body class="custom-cursor">

	<div class="custom-cursor__cursor"></div>
	<div class="custom-cursor__cursor-two"></div>

	<div class="preloader">
		<div class="preloader__circle"></div>
	</div>

	<div class="page-wrapper">
		<?php
		include "navbar.php";
		?>


		<div class="page-header">
			<div class="page-header__bg" style="background-image: url(assets/images/background/page-header-bg-1-1.jpg);"></div>
			<!-- /.page-header__bg -->
			<div class="container">
				<ul class="thm-breadcrumb list-unstyled">
					<li><a href="index-2.html">Home</a></li>
					<li>Contact</li>
				</ul>
				<h2 class="page-header__title">Contact</h2><!-- /.page-header__title -->
			</div><!-- /.container -->
		</div><!-- /.page-header -->

		<section class="contact-one section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<form action="https://webdevcode.com/html/cretech/assets/inc/sendemail" class="contact-one__form contact-form-validated">
							<div class="section-title text-center">
								<p class="section-title__text">Contact us</p><!-- /.section-title__text -->
								<h2 class="section-title__title">Join Us To Get Agri Consultations & Advisory</h2><!-- /.section-title__title -->
							</div><!-- /.section-title -->
							<div class="row ">
								<div class="col-lg-6 col-md-12">
									<input type="text" placeholder="Your name" name="name">
								</div><!-- /.col-lg-6 col-md-12 -->
								<div class="col-lg-6 col-md-12">
									<input type="email" placeholder="Email address" name="email">
								</div><!-- /.col-lg-6 col-md-12 -->
								<div class="col-lg-12 col-md-12">
									<textarea name="message" placeholder="Write message"></textarea>
								</div><!-- /.col-lg-6 col-md-12 -->
								<div class="col-md-12">
									<button class="thm-btn contact-one__btn" type="submit"><span>send a
											message</span></button>
								</div><!-- /.col-md-12 -->
							</div><!-- /.row -->
						</form><!-- /.contact-one__form -->
						<div class="result"></div><!-- / -->
					</div><!-- /.col-lg-8 -->
					<div class="col-lg-4">
						<div class="contact-one__info wow fadeInRight" data-wow-duration="1500ms" style="background-image: url(assets/images/background/contact-one-bg-1-1.png);">
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Address</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text">106 Mwimuto/Kibichiku, Next to <br>ACK Emmanuel Church <br>Nairobi | Kenya</p><!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Phone</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text">Local: <a href="tel:+254781050960">(+254) 781 050 960</a><br>
									Mobile: <a href="tel:+254114171636">(+254) 114 171 636</a></p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<h3 class="contact-one__item__title">Email</h3><!-- /.contact-one__item__title -->
								<p class="contact-one__item__text"><a href="mailto:admin@tradecareafrica.com">admin@tradecareafrica.com</a></p>
								<!-- /.contact-one__item__text -->
							</div><!-- /.contact-one__item -->
							<div class="contact-one__item">
								<ul class="contact-one__social">
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="https://web.facebook.com/tradecareafrica/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								</ul><!-- /.contact-one__social -->
							</div><!-- /.contact-one__item -->
						</div><!-- /.contact-one__info -->
					</div><!-- /.col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.contact-one -->

		<!--Google Map Start-->
		<section class="google-map google-map--contact">
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__one" allowfullscreen>
			</iframe> -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.238892462619!2d36.73349562047857!3d-1.227400323612456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f198db2813815%3A0x66303f574ce96784!2sTRADE%20CARE!5e0!3m2!1sen!2ske!4v1695454505205!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

		</section>
		<!--Google Map End-->
		<?php
		include 'footer.php';
		?>
	</div><!-- /.page-wrapper -->


	<?php
	include 'mobile-wrapper-navbar.php';
	?>
	<!-- /.mobile-nav__wrapper -->

	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div>
		<!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<span><i class="icon-magnifying-glass"></i></span>
				</button>
			</form>
		</div>
		<!-- /.search-popup__content -->
	</div>
	<!-- /.search-popup -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- plugins js -->
	<script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/vendors/wow/wow.js"></script>
	<script src="assets/vendors/jarallax/jarallax.min.js"></script>
	<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<!-- template js -->
	<script src="assets/js/cretech.js"></script>

</body>
</html>