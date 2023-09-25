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
        include 'navbar.php';
        ?>

        <div class="page-header">
            <div class="page-header__bg" style="background-image: url(assets/images/background/page-header-bg-1-1.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Project</li>
                </ul>
                <h2 class="page-header__title">Project Details</h2><!-- /.page-header__title -->
            </div><!-- /.container -->
        </div><!-- /.page-header -->

        <section class="project-details section-padding--bottom section-padding--top">
            <div class="container">
                <div class="project-details__image">
                    <img src="assets/images/projects/Untitled design/3.png" alt="">
                </div><!-- /.project-details__image -->
                <div class="project-details__info">
                    <div class="project-details__info__item">
                        <h4 class="project-details__info__title">Clients:</h4>
                        <p class="project-details__info__text">David Jackson</p><!-- /.project-details__info__text -->
                    </div><!-- /.project-details__info__item -->

                    <div class="project-details__info__item">
                        <h4 class="project-details__info__title">Category:</h4>
                        <p class="project-details__info__text"><a href="#">IT</a>, <a href="#">Agri-Nutrition</a></p>
                        <!-- /.project-details__info__text -->
                    </div><!-- /.project-details__info__item -->
                    <div class="project-details__info__item">
                        <h4 class="project-details__info__title">Date:</h4>
                        <p class="project-details__info__text">28 July, 2022</p><!-- /.project-details__info__text -->
                    </div><!-- /.project-details__info__item -->
                    <div class="project-details__info__item">
                        <h4 class="project-details__info__title">Value:</h4>
                        <p class="project-details__info__text">87,000 USD</p><!-- /.project-details__info__text -->
                    </div><!-- /.project-details__info__item -->
                    <div class="project-details__info__item">
                        <div class="project-details__info__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div><!-- /.project-details__info__social -->
                    </div><!-- /.project-details__info__item -->
                </div><!-- /.project-details__info -->
                <h3 class="project-details__title">Agri-Nutrition Improvement Project</h3><!-- /.project-details__title -->
                <div class="project-details__content">
                    <p>In collaboration with Fairtrade Africa, Tradecare constructed Agri-nutrition gardens in 22 flower farms across Kenya for production of fresh fruits and vegetables collectively sold to workers at low cost. The gardens were constructed between 2021 and 2022, training and capacity building of workers committees on sustainable management and preparation of organic growing guides for the end users.</p>
                    
                    <!-- <ul class="project-details__list">
                        <li>
                            <i class="fa fa-check-circle"></i>
                            Lorem Ipsum generators on the Internet tend uses a dictionary.
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            The majority have alteration in some form of over 200 Latin words.
                        </li>
                        <li>
                            <i class="fa fa-check-circle"></i>
                            There are many variations of passages of available slightly.
                        </li>
                    </ul>/.project-details__list -->
                </div><!-- /.project-details__content -->
            </div><!-- /.container -->
        </section><!-- /.project-details -->

        <div class="project-nav">
            <div class="container">
                <div class="project-nav__inner">
                    <a href="#">
                        <i class="icon-left-arrow"></i>
                        Previous
                    </a>
                    <a href="#">
                        Next
                        <i class="icon-right-arrow"></i>
                    </a>
                </div><!-- /.project-nav__inner -->
            </div><!-- /.container -->
        </div><!-- /.project-nav -->


        


        <?php
        include 'similar-projects.php';
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