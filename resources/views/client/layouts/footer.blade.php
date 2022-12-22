<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top d-lg-block d-none">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex justify-content-center">
                                    <!-- Social -->
                                    <div class="header-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                                <div class="header-info-mid">
                                    <!-- logo -->
                                    <div class="logo">
                                        <a href="/"><img src="client/assets/img/logo/logo.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-bottom2 ">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <!-- Main-menu -->
                                <div class="main-menu text-center">
                                    <nav>
                                        <ul>
                                            @foreach ($categories as $category)
                                            <li>
                                                <a
                                                    href="{{route('category.single',['slugCat' => $category->slugCat])}}">{{$category->nameCat}}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->

<script src="client/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="client/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="client/assets/js/popper.min.js"></script>
<script src="client/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="client/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="client/assets/js/owl.carousel.min.js"></script>
<script src="client/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="client/assets/js/wow.min.js"></script>
<script src="client/assets/js/animated.headline.js"></script>
<script src="client/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="client/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="client/assets/js/jquery.nice-select.min.js"></script>
<script src="client/assets/js/jquery.sticky.js"></script>
<!-- Progress -->
<script src="client/assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="client/assets/js/jquery.counterup.min.js"></script>
<script src="client/assets/js/waypoints.min.js"></script>
<script src="client/assets/js/jquery.countdown.min.js"></script>
<script src="client/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="client/assets/js/contact.js"></script>
<script src="client/assets/js/jquery.form.js"></script>
<script src="client/assets/js/jquery.validate.min.js"></script>
<script src="client/assets/js/mail-script.js"></script>
<script src="client/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="client/assets/js/plugins.js"></script>
<script src="client/assets/js/main.js"></script>