
    <!-- footer -->
    <footer class="footer py-md-5 pt-md-3 pb-sm-5">
        <div class="footer-position">
            <div class="container">
                <div class="row newsletter-inner">
                    <div class="col-md-4 py-3">
                        <h3 class="w3ls-title text-white">
                            Get notified</h3>
                        <p class="text-white">sociosqu ad litora torquent per conubia.</p>
                    </div>
                    <div class="col-md-8 newsright">
                        <form action="#" method="post" class="d-flex">
                            <input class="form-control" type="email" placeholder="Enter your email..." name="email" required="">
                            <input class="form-control" type="submit" value="Subscribe">
                        </form>
                    </div>
                    <div class="up-arrow"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-lg-5 mt-sm-5">
            <div class="row p-sm-4 px-3 py-5">
                <div class="col-lg-4 col-md-6 footer-top mt-lg-0 mt-md-5">
                    <h2>
                        <a href="<?=base_url()?>" class="text-theme text-uppercase">
                            poly clinic
                        </a>
                    </h2>
                    <p class="mt-2">Donec consequat sam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus
                        id quod possimusapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at, semper varius
                        orci.
                    </p>
                </div>
                <div class="col-lg-2  col-md-6 mt-lg-0 mt-5">
                    <div class=".footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Navigation</h3>
                        <hr>
                        <ul class="list-agileits">
                            <li>
                                <a href="<?=base_url()?>">
                                    Home
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?=base_url()?>welcome/about">
                                    About Us
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?=base_url()?>welcome/gallery">
                                    Gallery
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="<?=base_url()?>welcome/services">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>welcome/contact">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Contact Us</h3>
                        <hr>
                        <div class="fv3-contact">
                            <span class="fas fa-envelope-open mr-2"></span>
                            <p>
                                <a href="mailto:example@email.com">info@example.com</a>
                            </p>
                        </div>
                        <div class="fv3-contact my-2">
                            <span class="fas fa-phone-volume mr-2"></span>
                            <p>+456 123 7890</p>
                        </div>
                        <div class="fv3-contact">
                            <span class="fas fa-home mr-2"></span>
                            <p>+90 nsequursu dsdesdc,
                                <br>xxx Street State 34789.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-lg-0 mt-5">
                    <div class="footerv2-w3ls">
                        <h3 class="mb-3 w3f_title">Links</h3>
                        <hr>
                        <ul class="list-agileits">
                            <li>
                                <a href="<?=base_url()?>">
                                    Overview
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?=base_url()?>welcome/services">
                                    Centres of Excellence
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="<?=base_url()?>welcome/single">
                                    Blog
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="<?=base_url()?>welcome/contact">
                                    Find us
                                </a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- //footer bottom -->
    </footer>
    <!-- //footer -->
    <!-- quick contact -->
    <div class="container">
        <div class="outer-col">
            <div class="heading">Quick Enquiry</div>
            <div class="form-col">
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="Name" name="Name" id="user-name" required="">
                    <input type="email" class="form-control" placeholder="Email" name="Name" id="Email-id" required="">
                    <input type="text" class="form-control" placeholder="phone number" name="Name" id="phone-number" required="">
                    <textarea placeholder="your message" class="form-control"></textarea>
                    <input type="submit" value="send" class="btn_apt">
                </form>
            </div>
        </div>
    </div>
    <!-- //quick contact -->
    <!-- copyright -->
    <div class="cpy-right text-center">
        <p>©  Design by
            <a href="http://w3layouts.com">Nishat</a>
        </p>
    </div>
    <!-- //copyright -->
    <!-- js -->
    <script src="<?=base_url()?>asset/js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!-- Banner Responsiveslides -->
    <script src="<?=base_url()?>asset/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: false,
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
    <!-- //banner responsive slides -->
    <!-- Flexslider-js for-testimonials -->
    <script src="<?=base_url()?>asset/js/jquery.flexisel.js"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>
    <!-- //Flexslider-js for-testimonials -->
    <!-- //fixed quick contact -->
    <script>
        $(function () {
            var hidden = true;
            $(".heading").click(function () {
                if (hidden) {
                    $(this).parent('.outer-col').animate({
                        bottom: "0"
                    }, 1200);
                } else {
                    $(this).parent('.outer-col').animate({
                        bottom: "-305px"
                    }, 1200);
                }
                hidden = !hidden;
            });
        });
    </script>
    <!-- //fixed quick contact -->
    <!-- start-smooth-scrolling -->
    <script src="<?=base_url()?>asset/js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <script src="<?=base_url()?>asset/js/SmoothScroll.min.js"></script>
    <!-- //end-smooth-scrolling -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>asset/js/bootstrap.js"></script>
</body>

</html>