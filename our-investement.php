<!DOCTYPE html>
<html lang="en">

<?php
$metatag = '<meta name="description" content="Founded in 2014 by Joyce Gema, an expert in African agrarian systems, Tradecare Africa specializes in agricultural consultancy. We collaborate with the private sector, development organizations, and third sectors, working on projects ranging from market development to policy advocacy. Discover how our services can enhance agricultural markets and food systems across Africa.">';
$pageTitle = "Tradecare Africa: Empowering Agriculture Across Africa";
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
            <div class="page-header__bg" style="background-image: url(assets/images/background/page-header-bg-1-15.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Investment</li>
                </ul>
                <h2 class="page-header__title">Our Investments</h2><!-- /.page-header__title -->
            </div><!-- /.container -->
        </div><!-- /.page-header -->

        <section class="section-padding--bottom section-padding--top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details__image">
                            <img src="assets/images/blog/react cert logo.png" alt="">
                        </div><!-- /.blog-details__image -->
                        <div class="blog-card-one__meta">
                            <div class="blog-card-one__date">
                                <i class="fa fa-calendar-alt" aria-hidden="true"></i>
                            </div><!-- /.blog-card-one__date -->
                            <a href="blog.html" class="blog-card-one__category">Investment</a>
                            <!-- /.blog-card-one__category -->
                        </div><!-- /.blog-card-one__meta -->
                        <h3 class="blog-card-one__title blog-details__title">1. React Cert Africa</h3>
                        <div class="blog-details__content">
                            <p>React Cert Africa is a product and management system certification company. React Cert was founded in 2017 and is currently accredited to combined management system of ISP 17021:2015 and ISO 17065:2012. The company offers certification services against management systems of ISO 9001, ISO 14000, ISO 220000, GLOBALGAP Integrated Farm Assurance standard, KS17058 Part II, Chain of Costody and is currently under process of approval to offer FSSC 22000. </p>
                            <p>For more information visit the <a href="https://www.reactcertafrica.com" target="_blank">React Cert Africa website</a></p>
                        </div><!-- /.blog-details__content -->
                        <div class="blog-details__meta">
                            <!-- <div class="blog-details__tags">
								<span>Tags</span>
								<a href="#">Development</a>
								<a href="#">Designing</a>
							</div>/.blog-details__tags -->
                            <!-- <ul class="blog-details__share">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>/.blog-details__share -->
                        </div><!-- /.blog-details__meta -->
                        <div class="blog-details__image">
                            <img src="assets/images/blog/fish market.png" alt="">
                        </div><!-- /.blog-details__image -->
                        <div class="blog-card-one__meta">
                            <div class="blog-card-one__date">
                                <i class="fa fa-calendar-alt" aria-hidden="true"></i>
                            </div><!-- /.blog-card-one__date -->
                            <a href="blog.html" class="blog-card-one__category">Investment</a>
                            <!-- /.blog-card-one__category -->
                        </div><!-- /.blog-card-one__meta -->
                        <h3 class="blog-card-one__title blog-details__title">2. Tradecare Fish and Pantries Market.</h3>
                        <div class="blog-details__content">
                            <p>This is over second social enterprise which is a marketplace for fresh and value added Tilapia and Nile Perch, Fresh Fruits and Vegetables from Mazao Safi extension department as well as pantries used commonly in the kitchen. Tradecare packhouse in Lower Kabete has cold chain infrastructure, refrigerated trucks for transportation of the fish and vegetables, 5 constructed outlets in Nairobi metropolis and an order and delivery system through our e-commerce platform.</p>
                        </div><!-- /.blog-details__content -->
                        <div class="blog-details__meta">
                            <!-- <div class="blog-details__tags">
								<span>Tags</span>
								<a href="#">Development</a>
								<a href="#">Designing</a>
							</div>/.blog-details__tags -->
                            <!-- <ul class="blog-details__share">
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>/.blog-details__share -->
                        </div><!-- /.blog-details__meta -->
                    </div><!-- /.col-lg-8 -->
                    <?php
                    include 'services-sidebar.php';
                    ?><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>


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