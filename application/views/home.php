<?php
$this->load->view('layout/header');
?>
<!-- Slider Area Start Here -->
<!--<div class="main-slider2">
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides">
<?php
foreach ($sliders as $key => $value) {
    ?>
                                                    <img src="<?php echo imageserverslider . $value->file_name; ?>" alt="" title="#slider-direction-<?php echo $key; ?>" />
    <?php
}
?>        
        </div>


<?php
foreach ($sliders as $key => $value) {
    ?>
                                                <div id="slider-direction-<?php echo $key; ?>" class="t-cn slider-direction">
                                                    <div class="slider-content t-lfl s-tb slider-1">
                                                        <div class="title-container s-tb-c">
                                                            <h2 class="title<?php echo $key; ?>" style="color:<?php echo $value->title_color; ?>">
    <?php echo $value->title; ?>
                                                            </h2>
                                                            <p style="color:<?php echo $value->line1_color; ?>"><?php echo $value->line1; ?></p>
                                                            <p style="color:<?php echo $value->line2_color; ?>"><?php echo $value->line2; ?></p>
                                                            <a href="<?php echo $value->link; ?>" class="btn-shop-now-fill-slider"><?php echo $value->link_text; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
    <?php
}
?>

    </div>
</div>-->
<!-- Slider Area End Here -->


<!-- Slider Area Start Here -->
<div class="main-slider2" >
    <div class="bend niceties preview-1">
        <div id="ensign-nivoslider-3" class="slides" style="    height: 500px;">
            <img src="<?php echo base_url(); ?>assets/sliders/s6.jpg" alt="" title="#slider-direction-1" />
     
        </div>
        <div id="slider-direction-1" class="t-cn slider-direction">
            <div class="slider-content t-lfl s-tb slider-1">
                <div class="title-container s-tb-c">

                    <!--                    <a href="#" class="btn-shop-now-fill-slider">Customize Now</a>-->
                </div>
            </div>
        </div>
        <div id="slider-direction-3" class="slider-direction">
            <div class="slider-content t-lfr s-tb slider-3">
                <div class="title-container s-tb-c">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Slider Area End Here -->

<!-- Featured Products Area End Here -->
<div class="featured-products-area" style="padding: 30px 0px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 class="title-carousel">Featured Products</h2>
            </div>
        </div>
        <div class="metro-carousel" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="4" data-r-large-nav="true" data-r-large-dots="false">
            <?php
            foreach ($product_home_slider_bottom['home_slider'] as $key => $value) {
                ?>
                <div class="product-box1">
                    <ul class="product-social" style="">
                        <li><a href="#" ng-click="addToCart(<?php echo $value['id']; ?>, 1)"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

                    </ul>
                    <div class="product-img-holder">
                        <?php if ($value['sale_price'] > 0) { ?>
                            <div class="hot-sale">
                                <span>Sale</span>
                            </div>
                            <?php
                        }
                        ?>
                        <a href="#">
                            <div class="product_image_back" style="background: url(<?php echo custome_image_server; ?><?php echo $value['file_name']; ?>);height: 270px"></div>
                        </a>
                    </div>
                    <div class="product-content-holder">
                        <h3><a href="#"><?php echo $value['title']; ?></a></h3>

                        <span style="font-size: 12px"><?php echo $value['short_description']; ?></span>
                        <br>
                        <span>{{<?php echo $value['price']; ?>|currency:"<?php echo globle_currency; ?> "}}</span>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Featured Products Area End Here -->
<!-- Offer Area 1 Start Here -->
<!--<div class="offer-area1 hidden-after-desk" style="background: url(<?php echo base_url(); ?>assets/theme2/img/mid_slide.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-area-box-l">
                    <span>Get the Most Classy</span>
                    <h1>HOME DECOR </h1>
                    <p>Check it out now! </p>
                    <a href="#" class="btn-shop-now-fill">Shop Now</a>
                </div>
            </div>
            <div id="countdown" style="    margin-left: 75px;"></div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="brand-area-box-r">
                    <a href="#"><img src="<?php echo base_url(); ?>assets/theme2/img/mid_slide.jpg" alt="offer"></a>
                </div>
            </div>
        </div>
    </div>
</div>-->
<!-- Offer Area 1 End Here -->
<!-- Product Area Start Here -->
<div class="product-area padding-top-0-after-desk" style="padding: 30px 0px">
    <div class="container" id="home-isotope">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="isotop-classes-tab myisotop1">

                    <a href="#" data-filter=".popular">Popular</a>
                </div>
            </div>
        </div>
        <div class="row featuredContainer">


            <?php
            foreach ($product_home_slider_bottom['home_bottom'] as $key => $value) {
                ?>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 on-sale">
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="<?php echo site_url("Product/customizationRedirect/" . $suitcustome->id) ?>/<?php echo $value['id']; ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

                        </ul>
                        <div class="product-img-holder">
                            <a href="#">
                                <div class="product_image_back product_image_back_grid" style="background: url(<?php echo custome_image_server; ?><?php echo $value['file_name']; ?>);height: 270px"></div>
                                <!--<img src="img/product/3.jpg" alt="product">-->
                            </a>
                        </div>
                        <div class="product-content-holder">
                            <h3><a href="#"><?php echo $value['title']; ?></a></h3>

                            <span style="font-size: 12px"><?php echo $value['short_description']; ?></span>
                            <br>
                            <span>{{<?php echo $value['price']; ?>|currency:"<?php echo globle_currency; ?> "}}</span>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Advantage Area Start Here -->
<div class="advantage3-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="advantage-area-box">
                    <div class="advantage-area-box-icon">
                        <a href="#"><i class="flaticon-truck"></i></a>
                    </div>
                    <div class="advantage-area-box-content">
                        <h3>FREE SHIPPING WORLDWIDE</h3>
                        <p>On All Orders Of <?php echo globle_currency; ?> 500</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="advantage-area-box">
                    <div class="advantage-area-box-icon">
                        <a href="#"><i class="flaticon-headphones"></i></a>
                    </div>
                    <div class="advantage-area-box-content">
                        <h3>24/7 CUSTOMER SERVICE</h3>
                        <p>Get Help When You Need It</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="advantage-area-box">
                    <div class="advantage-area-box-icon">
                        <a href="#"><i class="flaticon-reload"></i></a>
                    </div>
                    <div class="advantage-area-box-content">
                        <h3>100% RETURN BACK</h3>
                        <p>30 Day Free Returns.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Advantage Area End Here -->

<?php
$this->load->view('layout/footer');
?>