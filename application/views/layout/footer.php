<?php ?>
<!-- footer -->
	<div class="footer">
		<div class="agileinfo_footer_bottom">
			<div class="container">
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h2>About <span>Us</span></h2>
                                        <p>
                                            
Get best taxi services from anywhere to anywhere. We provide best online pick or offer taxi booking service in Indore. Take taxi for all MP places 
like Indore, Bhopal, Ujjain etc.
                                        </p>
					<ul class="social-nav model-3d-0 footer-social w3_agile_social">
						<li><a href="#" class="facebook">
							  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="twitter"> 
							  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="instagram">
							  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
						<li><a href="#" class="pinterest">
							  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
					</ul>
				</div>
<!--				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>The <span>Tags</span></h3>
					<div class="unorder">
						<ul class="tag2 tag_agileinfo">
							<li><a href="doctors.html">Doctors</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="departments.html">Departments</a></li>
						</ul>
						<ul class="tag2 tag_agileinfo">
							<li><a href="locations.html">Locations</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="appointment.html">Appointment</a></li>
						</ul>
						<ul class="tag2 tag_agileinfo">
							<li><a href="single.html">More</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="departments.html">Departments</a></li>
						</ul>
						<ul class="tag2 tag_agileinfo">
							<li><a href="doctors.html">Doctors</a></li>
							<li><a href="contact.html">Contact</a></li>
							<li><a href="locations.html">Locations</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Latest <span>Tweets</span></h3>
					<ul class="twi agileits_twitter">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Praesent imperdiet diam sagittis, egestas <a href="#" class="mail">
						@http://t.co/9vslJFpW</a> <span>ABOUT 15 MINS</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Mauris tristique, dolor vel iaculis vestibulum<a href="#" class="mail">
						@http://t.co/9vslJFpW</a> <span>ABOUT 2 HOURS AGO</span></li>
					</ul>
				</div>
				<div class="col-md-3 agileinfo_footer_bottom_grid">
					<h3>Flickr <span>Feed</span></h3>
					<div class="flickr-grids">
						<div class="flickr-grid agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url(); ?>assets/images/1.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url(); ?>assets/images/2.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url(); ?>assets/images/3.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
						
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url(); ?>assets/images/4.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url(); ?>assets/images/1.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="flickr-grid  agileits_w3layouts_flickr">
							<a href="single.html"><img src="<?php echo base_url(); ?>assets/images/2.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>-->
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="agileinfo_footer_bottom1">
			<div class="container">
					<p>© 2019 Pickdrive. All rights reserved </p>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- js -->
<script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<script src="<?php echo base_url(); ?>assets/theme/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/scripts.js"></script>

<!--responsiveslides js-->
<script src="<?php echo base_url(); ?>assets/theme/js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
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
			<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 3
							  $("#slider3").responsiveSlides({
								auto: true,
								pager:false,
								nav: true,
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

<!--//responsiveslides js-->
<script src="<?php echo base_url(); ?>assets/theme/js/SmoothScroll.min.js"></script>
<!--menu script-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/theme/js/modernizr-2.6.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/classie.js"></script>
<script src="<?php echo base_url(); ?>assets/theme/js/demo1.js"></script>
<!--//menu script-->

<!-- banner -->
<script type='text/javascript' src='<?php echo base_url(); ?>assets/theme/js/jquery.easing.1.3.js'></script> 
<!-- //banner -->

<!-- //jarallax -->
<script src="<?php echo base_url(); ?>assets/theme/js/jquery-ui.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--js for bootstrap working-->
	<script src="<?php echo base_url(); ?>assets/theme/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>