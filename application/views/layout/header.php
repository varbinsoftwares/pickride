<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pickdrive</title> 
        <!-- For-Mobile-Apps-and-Meta-Tags -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Clinical Care Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, SmartPhone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //For-Mobile-Apps-and-Meta-Tags -->
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>assets/theme/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/theme/css/style11.css" /><!-- menu style sheet -->
        <link href="<?php echo base_url(); ?>assets/theme/css/style.css" type="text/css" rel="stylesheet" media="all"> 
        <!-- //Custom Theme files -->
        <!-- font-awesome icons -->
        <link href="<?php echo base_url(); ?>assets/theme/fonts/css/fontawesome.css" rel="stylesheet" type="text/css" media="all" /> 
        <link href="<?php echo base_url(); ?>assets/theme/fonts/css/all.css" rel="stylesheet" type="text/css" media="all" /> 

        <!-- //font-awesome icons -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/theme/css/jquery-ui.css" />
        <!-- web-fonts -->  
        <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <!-- //web-fonts -->
    </head>
    <body class="bg">
        <div class="overlay overlay-simplegenie">
            <button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
            <nav>
                <ul>
                    <li><a href="<?php echo site_url("Shop/index"); ?>">Home</a></li>


                    <?php
                    $session_data = $this->session->userdata('logged_in');
                    if ($session_data) {
                        ?>
                        <li><a href="<?php echo site_url("AccountController/profile"); ?>">Profile</a></li>
                        <li><a href="<?php echo site_url("AccountController/confirmdrive"); ?>">Confirmed Drives</a></li>
      
                        <li><a href="<?php echo site_url("AccountController/logout"); ?>">Logout</a></li>

                        <?php
                    } else {
                        ?>
                        <li> <a href="<?php echo site_url("AccountController/login"); ?>" >Sign In </a>
                        </li>
<!--                        <li> <a href="<?php echo site_url("AccountController/registration"); ?>" >Sign Up </a>-->
                        </li>

                        <?php
                    }
                    ?>

                </ul>
            </nav>
        </div>
        <section class="header-w3ls"> 
            <button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <div class="bottons-agileits-w3layouts">


                <?php
                if ($session_data) {
                    
                    ?>
                    <a class="page-scroll" href="<?php echo site_url("AccountController/profile"); ?>"><i class="fa fa-sign-in" aria-hidden="true"></i>Profile</a>.

                    <?php
                } else {
                    ?>
                    <a href="<?php echo site_url("AccountController/login"); ?>" >Sign In </a>
<!--                    <a href="<?php echo site_url("AccountController/registration"); ?>" >Sign Up </a>-->


                    <?php
                }
                ?>


            </div>
            <h1><a href="<?php echo site_url("Shop/index"); ?>">Pick Ride</a></h1>
            <div class="clearfix"> </div>
        </section>
        <!-- //menu -->
        <!-- modal -->
        <div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div> 
                    <div class="modal-body login-page "><!-- login-page -->     
                        <div class="login-top sign-top">
                            <div class="agileits-login">
                                <h5>Login</h5>
                                <form action="#" method="post">
                                    <input type="email" class="email" name="Email" placeholder="Email" required=""/>
                                    <input type="password" class="password" name="Password" placeholder="Password" required=""/>
                                    <div class="wthree-text"> 
                                        <ul> 
                                            <li>
                                                <label class="anim">
                                                    <input type="checkbox" class="checkbox">
                                                    <span> Remember me ?</span> 
                                                </label> 
                                            </li>
                                            <li> <a href="#">Forgot password?</a> </li>
                                        </ul>
                                        <div class="clearfix"> </div>
                                    </div>  
                                    <div class="w3ls-submit"> 
                                        <input type="submit" value="LOGIN">  	
                                    </div>	
                                </form>

                            </div>  
                        </div>
                    </div>  
                </div> <!-- //login-page -->
            </div>
        </div>
        <!-- //modal --> 
        <!-- modal -->
        <div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
                    </div> 
                    <div class="modal-body login-page "><!-- login-page -->     
                        <div class="login-top sign-top">
                            <div class="agileits-login">
                                <h5>Register</h5>
                                <form action="#" method="post">
                                    <input type="text" name="username" placeholder="Username" required=""/>
                                    <input class="name" type="text"  name="mobile_no" placeholder="Mobile No." required=""/>
                                    <input type="password" name="password" placeholder="Password" required=""/>
                                    <div class="wthree-text"> 
                                        <ul> 
                                            <li>
                                                <label class="anim">
                                                    <input type="checkbox" class="checkbox">
                                                    <span> I accept the terms of use</span> 
                                                </label> 
                                            </li>
                                        </ul>
                                        <div class="clearfix"> </div>
                                    </div>  
                                    <div class="w3ls-submit"> 
                                        <input type="submit" value="Register">  	
                                    </div>	
                                </form>

                            </div>  
                        </div>
                    </div>  
                </div> <!-- //login-page -->
            </div>
        </div>
        <!-- //modal --> 
        <!-- banner -->
        <div class="banner-silder">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="w3layouts-banner-top">

                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h3></h3>
                                </div>	
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3layouts-banner-top w3layouts-banner-top1">
                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h3></h3>
                                </div>	
                            </div>
                        </div>
                    </li>
                    <!--                    <li>
                                            <div class="w3layouts-banner-top w3layouts-banner-top2">
                                                <div class="container">
                                                    <div class="agileits-banner-info">
                                                        <h3>Intensive Care</h3>
                                                    </div>
                    
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="w3layouts-banner-top w3layouts-banner-top3">
                                                <div class="container">
                                                    <div class="agileits-banner-info">
                                                        <h3>Medical professionals</h3>
                                                    </div>
                    
                                                </div>
                                            </div>
                                        </li>-->
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //banner -->