<!DOCTYPE html>
<html lang="en">





<?php
$metatag = '<meta name="description" content="Founded in 2014 by Joyce Gema, an expert in African agrarian systems, Tradecare Africa specializes in agricultural consultancy. We collaborate with the private sector, development organizations, and third sectors, working on projects ranging from market development to policy advocacy. Discover how our services can enhance agricultural markets and food systems across Africa.">';
$pageTitle = "Tradecare Africa: Empowering Agriculture Across Africa";
include 'head.php';
?>
<style>
    .h-divider {
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        width: 100%;
        position: relative;
    }

    .h-divider .shadow {
        overflow: hidden;
        height: 20px;
    }

    .h-divider .shadow:after {
        content: '';
        display: block;
        margin: -25px auto 0;
        width: 100%;
        height: 25px;
        border-radius: 0;
        box-shadow: 0 0 8px black;
    }
</style>

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
            <div class="page-header__bg" style="background-image: url(assets/images/background/page-header-bg-1-12.jpg);"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Service Details</li>
                </ul>
                <h2 class="page-header__title">Project Implementation</h2><!-- /.page-header__title -->
            </div><!-- /.container -->
        </div><!-- /.page-header -->

        <section class="section-padding--bottom section-padding--top service-details--page">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8">
                        <div class="service-details__image">
                            <img src="assets/images/services/service-d-1.jpg" alt="">
                        </div><!-- /.service-details__image -->
                        <h3 class="service-details__title">Project Implementation</h3><!-- /.service-details__title -->
                        <div class="service-details__content">
                            <p>We partner with development organizations to implement long terms projects that have impact at scale. We have implemented projects that support SMEs to organize their supply chain, build long term connection to farmers and other suppliers and optimize internal systems. We have also implemented projects that seek to support food systems for peri-urban dwellers ( nutrition and kitchen garden), institutions ( companies and schools) and slum dwellers.</p>
                            <p>Environmental Social Governance (ESG) is another area of interest in which we work with companies to design their strategy</p>
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-lg-8 -->
                    <?php
                    include 'services-sidebar.php';
                    ?>
                </div><!-- /.row -->
                <section class="section-padding--bottom section-padding--top project-one">
                    <div class="container">
                        <div class="owl-carousel thm-owl__carousel project-one__carousel thm-owl__carousel--with-shadow" data-owl-options='{"loop": true,
                                    "autoplay": true,
                                    "autoplayTimeout": 5000,
                                    "autoplayHoverPause": true,
                                    "nav": true,
                                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                    "dots": false,
                                    "margin": 0,
                                    "items": 1,
                                    "smartSpeed": 700,
                                    "responsive": {
                                        "0": {
                                            "margin": 0,
                                            "items": 1
                                        },
                                        "768": {
                                            "margin": 30,
                                            "items": 2
                                        },
                                        "992": {
                                            "margin": 30,
                                            "items": 3
                                        }
                                    }}'>
                            <div class="item">
                                <div class="project-card-one">
                                    <div class="project-card-one__image">
                                        <img src="assets/images/projects/1.png" alt="">
                                    </div><!-- /.project-card-one__image -->
                                    <div class="project-card-one__content">
                                        <div class="project-card-one__content__inner">
                                            <p class="project-card-one__text">Logistics Solution</p>
                                            <h3 class="project-card-one__title"><a href="project-details.html">Piloting Delivery System For Fruits & Vegetables</a></h3><!-- /.project-card-one__title -->
                                            <a href="project-details.html" class="project-card-one__more">
                                                <i class="fa fa-angle-right"></i>
                                            </a><!-- /.project-card-one__more -->
                                        </div><!-- /.project-card-one__content__inner -->
                                    </div><!-- /.project-card-one__content -->
                                </div><!-- /.project-card-one -->
                            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                            <div class="item">
                                <div class="project-card-one">
                                    <div class="project-card-one__image">
                                        <img src="assets/images/projects/2.png" alt="">
                                    </div><!-- /.project-card-one__image -->
                                    <div class="project-card-one__content">
                                        <div class="project-card-one__content__inner">
                                            <p class="project-card-one__text">Agriculture Solution</p>
                                            <h3 class="project-card-one__title"><a href="project-details.html">Agri-Nutrition Improvement Project</a></h3><!-- /.project-card-one__title -->
                                            <a href="project-details.html" class="project-card-one__more">
                                                <i class="fa fa-angle-right"></i>
                                            </a><!-- /.project-card-one__more -->
                                        </div><!-- /.project-card-one__content__inner -->
                                    </div><!-- /.project-card-one__content -->
                                </div><!-- /.project-card-one -->
                            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                            <div class="item">
                                <div class="project-card-one">
                                    <div class="project-card-one__image">
                                        <img src="assets/images/projects/3.png" alt="">
                                    </div><!-- /.project-card-one__image -->
                                    <div class="project-card-one__content">
                                        <div class="project-card-one__content__inner">
                                            <p class="project-card-one__text">Development Solution</p>
                                            <h3 class="project-card-one__title"><a href="project-details.html">Macadamia Value Chain Development Project</a></h3><!-- /.project-card-one__title -->
                                            <a href="project-details.html" class="project-card-one__more">
                                                <i class="fa fa-angle-right"></i>
                                            </a><!-- /.project-card-one__more -->
                                        </div><!-- /.project-card-one__content__inner -->
                                    </div><!-- /.project-card-one__content -->
                                </div><!-- /.project-card-one -->
                            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                            <div class="item">
                                <div class="project-card-one">
                                    <div class="project-card-one__image">
                                        <img src="assets/images/projects/4.png" alt="">
                                    </div><!-- /.project-card-one__image -->
                                    <div class="project-card-one__content">
                                        <div class="project-card-one__content__inner">
                                            <p class="project-card-one__text">Consultancy Solution</p>
                                            <h3 class="project-card-one__title"><a href="project-details.html">Voluntary Sustainability Standards Capacity Building</a></h3><!-- /.project-card-one__title -->
                                            <a href="project-details.html" class="project-card-one__more">
                                                <i class="fa fa-angle-right"></i>
                                            </a><!-- /.project-card-one__more -->
                                        </div><!-- /.project-card-one__content__inner -->
                                    </div><!-- /.project-card-one__content -->
                                </div><!-- /.project-card-one -->
                            </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                        </div><!-- /.owl-carousel -->
                    </div><!-- /.container -->
                </section>
            </div><!-- /.container -->
        </section>

        <?php
        include 'footer.php';
        ?>
    </div><!-- /.page-wrapper -->


    <?php
    include 'mobile-wrapper-navbar.php';
    ?>

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