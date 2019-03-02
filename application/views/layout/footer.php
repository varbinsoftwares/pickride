<!-- Footer Area Start Here -->
<footer>
    <div class="footer-area">
        <div class="footer-area-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Information</h3>
                            <ul class="info-list">
                                <li><a href="<?php echo site_url("Shop/faq"); ?>">FAQ's</a></li>
                                <li><a href="<?php echo site_url("Shop/aboutus"); ?>">About Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>My Account</h3>
                            <ul class="info-list">
                                <li><a href="<?php echo site_url("Account/login"); ?>">Login</a></li>
                                <li><a href="<?php echo site_url("Account/profile"); ?>">My Account</a></li>
                                <li><a href="<?php echo site_url("Account/orderList"); ?>">Order History</a></li>
                                <li><a href="<?php echo site_url("Cart/details"); ?>">View Cart</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
<!--                            <h3>Order Now</h3>
                            <ul class="info-list">

                                <li><a href="<?php echo site_url('Product/ProductList/1/0') ?>">Shirts</a></li>
                                <li><a href="<?php echo site_url('Product/ProductList/2/0') ?>">Suits</a></li>
                                <li><a href="<?php echo site_url('Product/ProductList/4/0') ?>">Jackets</a></li>
                                <li><a href="<?php echo site_url('Product/ProductList/3/0') ?>">Pants</a></li>


                               
                            </ul>-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                            <h3>Stay With Us!</h3>
                            <p>Connect with us via social media.</p>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>

                            </ul><div class="newsletter-area">
                                <h3>NewsLetter Sign Up!</h3>
                                <div class="input-group stylish-input-group">
                                    <input type="text" class="form-control" placeholder="E-mail . . .">
                                    <span class="input-group-addon">
                                        <button type="submit">
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </button>  
                                    </span>
                                </div>
                            </div


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <p>Copyright © <?php echo date('Y') ?> Joogls.com. All rights reserved</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Footer Area End Here -->

</div>




<!-- jquery-->
<script src="<?php echo base_url(); ?>assets/theme2/js/vendor/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>




<!-- Bootstrap js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="<?php echo base_url(); ?>assets/theme2/js/owl.carousel.min.js" type="text/javascript"></script>
<!-- Nivo slider js -->
<script src="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/theme2/lib/custom-slider/home.js" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.meanmenu.min.js" type="text/javascript"></script>
<!-- WOW JS -->
<script src="<?php echo base_url(); ?>assets/theme2/js/wow.min.js" type="text/javascript"></script>
<!-- Plugins js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/plugins.js" type="text/javascript"></script>
<!-- Countdown js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.countdown.min.js" type="text/javascript"></script>
<!-- Srollup js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/jquery.scrollUp.min.js" type="text/javascript"></script>
<!-- Isotope js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/isotope.pkgd.min.js" type="text/javascript"></script>
<!-- Select2 Js -->
<script src="<?php echo base_url(); ?>assets/theme2/js/select2.min.js" type="text/javascript"></script>
<!-- Custom Js -->

<!--wnum-->
<script src="<?php echo base_url(); ?>assets/theme2/js/wNumb.js" type="text/javascript"></script>

<!--no slider-->
<script src="<?php echo base_url(); ?>assets/theme2/js/vendor/nouislider.min.js" type="text/javascript"></script>


<script src="<?php echo base_url(); ?>assets/theme2/js/main.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/handlebars.js" type="text/javascript"></script>

<!-- type ahead-->
<script src="<?php echo base_url(); ?>assets/typeahead.bundle.js" type="text/javascript"></script>


<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme2/angular/shopController.js"></script>




<script>
    jQuery(document).ready(function(){
    $(".dropdown").hover(
        function() { $('.dropdown-menu', this).stop().fadeIn("fast");
        },
        function() { $('.dropdown-menu', this).stop().fadeOut("fast");
    });
});
                                            $(window).on('load', function () {
                                                // Page Preloader




                                            });

                                            $('nav#dropdown').meanmenu({siteLogo: "<a href='/' class='logo-mobile-menu'><img src='<?php echo base_url() . 'assets/images/logo73.png'; ?>' style='    height: 35px;' /></a>"});
</script>


</body>

</html>