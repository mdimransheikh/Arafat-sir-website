<?php include '/admin/config/config.php'; ?>
<?php include '/admin/lib/Database.php'; ?>

<?php
    $db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Md Arafat Hossain</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Professional CV a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- menu -->
<link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
<!-- //menu -->
<link href="css/jquery.fatNav.css" rel="stylesheet" type="text/css">

<!--FlexSlider-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--//FlexSlider-->

<link rel="stylesheet" href="css/lightbox.css"><!-- For-gallery-CSS -->

<!-- custom css theme files -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<!-- //custom css theme files -->

<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->

</head>
<!-- Body -->
<body id="home">
	
<div class="w3l-banner">
<div class="wthree-dot">

	<!-- nav -->
	<div class="w3layouts-nav-right">
		<div class="fat-nav">
			<div class="fat-nav__wrapper">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="#about" class="scroll" >About Me</a></li>
					<li><a href="#services" class="scroll" >My Thesis</a></li>
					<li><a href="#gallery" class="scroll" >My projects</a></li>
					<li><a href="#experience" class="scroll" >Experience</a></li>
					<li><a href="#education" class="scroll" >Education</a></li>
					<li><a href="#contact" class="scroll" >Contact</a></li>
				</ul>
			</div>
		</div>
	</div>		
	<!-- //nav -->
	
		<!-- //Header -->
		<div class="container">
			<div class="flexslider-info">
				<section class="slider col-md-6">
					<div class="flexslider">
						<ul class="slides">
							<li>
							<?php 
								$query = "SELECT * FROM about_me WHERE id='1'";
								$data = $db->select($query);
								if($data){
									$result = mysqli_fetch_array($data);
							?>
							<div class="w3l-info">
								<h1><span><?php echo $result['name']; ?></span></h1>
								<p><?php echo $result['position']; ?>,<br/>
								<?php echo $result['dept']; ?><br/>
								<?php echo $result['institute']; ?></p>
								<ul>
									<li><a href="#contact" class="scroll w3l_contact">Contact Me</a></li>
								</ul>
							</div>
						<?php } ?>
							</li>
						</ul>
					</div>
				</section>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->

<!-- About section -->
<div class="about" id="about">
	<div class="container">
		<h3 class="text-center">About Me</h3>
	<?php 
		$query = "SELECT * FROM about_me WHERE id='1'";
		$data = $db->select($query);
		if($data){
			$result = mysqli_fetch_array($data);
	?>
		<div class="col-md-5 about_left">
			<ul class="address">
				<li>
					<ul class="agileits-address-text ">
						<li><b>Name</b></li>
						<li><?php echo $result['name']; ?></li>
					</ul>
				</li>
				<li>
					<ul class="agileits-address-text">
						<li><b>JOB</b></li>
						<li><?php echo $result['position']; ?></li>
					</ul>
				</li>
				<li>
					<ul class="agileits-address-text">
						<li><b>Institute</b></li>
						<li><?php echo $result['institute']; ?></li>
					</ul>
				</li>
				<li>
					<ul class="agileits-address-text ">
						<li><b>D.O.B</b></li>
						<li><?php echo $result['dob']; ?></li>
					</ul>
				</li>
				<li>
					<ul class="agileits-address-text">
						<li><b>PHONE</b></li>
						<li><?php echo $result['phone']; ?></li>
					</ul>
				</li>
				<li>
					<ul class="agileits-address-text">
						<li><b>ADDRESS </b></li>
						<li><?php echo $result['address']; ?></li>
					</ul>
				</li>
				<li>
					<ul class="agileits-address-text">
						<li><b>E-MAIL </b></li>
						<li><a href="#"><?php echo $result['email']; ?></a></li>
					</ul>
				</li>
			</ul>
			<div class="w3-socials about-social">
				<ul>
					<li>
						<a href="<?php echo $result['fb_link']; ?>"><span class="fa fa-facebook"></span></a>
					</li>
					<li>
						<a href="<?php echo $result['yt_link']; ?>"><span class="fa fa-youtube"></span></a>
					</li>
					<li>
						<a href="<?php echo $result['git_link']; ?>"><span class="fa fa-github"></span></a>
					</li>
					<li>
						<a href="<?php echo $result['tw_link']; ?>"><span class="fa fa-twitter"></span></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-7 about_right">
			<h3>Hi, I am <?php echo $result['name']; ?></h3>
			<h4><?php echo $result['position']; ?>, <?php echo $result['dept']; ?></h4>
			<p><?php echo $result['institute']; ?></p>
			<p><?php echo $result['about']; ?></p>
			<ul>
				<li><a href="#contact" class="w3l scroll">Contact Me</a></li>
			</ul>
		</div>
	<?php } ?>
		<div class="clearfix"></div>
		
	</div>
</div>
<!-- //About section -->

<!-- /services -->
<div class="w3-services" id="services">
	<div class="container">
			<div class="w3-services-grids">
						<h3 class="text-center">My Thesis</h3>
				<div class="col-md-4 w3-services-left-grid">
					<h4>Cras lacinia, nis ultrices</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam, a sodales er osplacerat vitae. Sed pretium fermentum luctus. Nunc at lectus ut ex blandit egestas. Pellent esque sed erat at diam lacinia accumsan. </p>
					<div class="more">
						<a href="#">Know more</a>
					</div>
				</div>
				<div class="col-md-8 w3-services-right-grid">
				<div class="w3-icon-grid-gap1">
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-codepen" aria-hidden="true"></i>
						<h3>Web design</h3>
						<div class="clearfix"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam.</p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-mobile" aria-hidden="true"></i>
						<h3>Mobile Apps</h3>
						<div class="clearfix"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam.</p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-hourglass" aria-hidden="true"></i>
						<h3>Animation</h3>
						<div class="clearfix"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam.</p>
					</div>
					<div class="clearfix"></div>
					</div>
					<div class="w3-icon-grid-gap2">
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-modx" aria-hidden="true"></i>
						<h3>Photoshop</h3>
						<div class="clearfix"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam.</p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-bar-chart" aria-hidden="true"></i>
						<h3>Marketing</h3>
						<div class="clearfix"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam.</p>
					</div>
					<div class="col-md-4 w3-icon-grid1">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
						<h3>Development</h3>
						<div class="clearfix"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisci ngelit. In euismod faucibus quam.</p>
					</div>
					<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->

<!--gallery-->
	<div class="gallery" id="gallery">
		<div class="container">
		<div class="about-head text-center ">
		<h3 class="text-center">My Projects</h3>
		</div>	
			<div class="gallery-info">
				<div class="col-md-3 gallery-grids">
					<a href="images/p1.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p1.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p2.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p2.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p3.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p3.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p4.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p4.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p5.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p5.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p6.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p6.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p7.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p7.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p8.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p8.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p9.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p9.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p10.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p10.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p11.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p11.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="col-md-3 gallery-grids">
					<a href="images/p12.jpg" class="gallery-box" data-lightbox="example-set" data-title="">
						<img src="images/p12.jpg" alt="" class="img-responsive zoom-img">
					</a>
				</div>
				<div class="clearfix"> </div>	
			</div>
			<script src="js/lightbox-plus-jquery.min.js"></script>
		</div>
</div>
<!--//gallery-->

<!-- My experience -->
<section class="experience" id="experience">
	<div class="container">
		<h3 class="text-center">Experience</h3>
		<div class="col-md-5 exp_left">
			<img src="images/experience.jpg" alt="" />
		</div>
		<div class="col-md-7 exp_right">
			<h3>My Experience</h3>
			<p>Morbi imperdiet scelerisque felis, eget auctor libero eleifend nec. 
			Curabitur a aliquet justo. Etiam et ullamcorper dolor. Nam pulvinar accumsan congue.
			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
	<?php 
		$query = "SELECT * FROM experience ORDER BY id ASC LIMIT 3";
		$result = $db->select($query);
		if($result){
			$i=1;
			while($data = $result->fetch_assoc()){
	?>
			<div class="exp_grids">
				<div class="exp_grid1">
					<h4><?php echo $data['position']; ?></h4>
					<h5><?php echo $data['institution']; ?> </h5>
					<h5><?php echo $data['from_to']; ?> </h5>
					<p><?php echo $data['description']; ?></p>
					<span class="fa fa-circle"></span>
				</div>
			</div>
	<?php } } ?>
		</div>
		<div class="clearfix"></div>
	</div> 
</section> 
<!-- //My experience -->

<!-- My educatuon -->
<section class="experience" id="education">
	<div class="container">
		<h3 class="text-center">Education</h3>
		<div class="col-md-5 exp_left">
			<img src="images/education.jpg" alt="" />
		</div>
		<div class="col-md-7 exp_right">
			<h3>My Education</h3>
			<p>Morbi imperdiet scelerisque felis, eget auctor libero eleifend nec. 
			Curabitur a aliquet justo. Etiam et ullamcorper dolor. Nam pulvinar accumsan congue.
			Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
	<?php 
		$query = "SELECT * FROM education ORDER BY id ASC LIMIT 3";
		$result = $db->select($query);
		if($result){
			$i=1;
			while($data = $result->fetch_assoc()){
	?>
			<div class="exp_grids">
				<div class="exp_grid1">
					<h4><?php echo $data['degree_name']; ?></h4>
					<h5><?php echo $data['pass_year']; ?></h5>
					<h5><?php echo $data['institution']; ?> </h5>
					<p><?php echo $data['description']; ?></p>
					<span class="fa fa-circle"></span>
				</div>
			</div>
	<?php } } ?>
		</div>
		<div class="clearfix"></div>
	</div> 
</section> 
<!-- //My educatuon -->

<!-- comments -->
<section class="comment-w3l" id="contact">
	<div class="container">
		<h3 class="text-center">Contact Me</h3>
		<div class="col-lg-6 col-md-6 col-sm-6 comment-agile1" data-aos="flip-left">
			<form action="#" method="post">
                <div class="control-group form-group">
                    <div class="controls">
                        <input type="text" class="form-control" id="name" placeholder="Full Name" required="">
                        <p class="help-block"></p>
                    </div>
                </div>
				<div class="control-group form-group">
                    <div class="controls">
                        <input type="email" class="form-control" id="email" placeholder="Email Address" required="">
                    </div>
                </div>
				<div class="control-group form-group">
                    <div class="controls">
                        <input type="text" class="form-control" id="name1" placeholder="Phone Number" required="">
						<p class="help-block"></p>
					</div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <textarea rows="10" cols="100" class="form-control" id="message" placeholder="Message" required=""></textarea>
                    </div>
                </div>
				<button type="submit" class="btn btn-primary">Send Message</button>
            </form>
		</div>

		<?php 
			$query = "SELECT * FROM about_me WHERE id='1'";
			$data = $db->select($query);
			if($data){
				$result = mysqli_fetch_array($data);
		?>

		<div class="col-lg-6 col-md-6 col-sm-6 comment-agile2" data-aos="flip-right">
			<h4>Contact me for more details</h4>
			<p class="comment-w3"></p>
			
			<h5><span class="fa fa-phone"></span><?php echo $result['phone']; ?></h5>
			<h5><span class="fa fa-envelope"></span> <a href=""> <?php echo $result['email']; ?></a></h5>
			<h5><span class="fa fa-map-marker"></span><?php echo $result['address']; ?></h5>
			<h5><span class="fa fa-facebook"></span> <?php echo $result['fb_link']; ?></h5>
			<h5><span class="fa fa-github"></span> <?php echo $result['git_link']; ?></h5>
		</div>
		<?php } ?>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /comments -->
<div class="w3l_footer">
		<div class="container">
			<h3>Thanks for visiting my site</h3>
				<div class="connect-social">  
					<ul>
						<li class="connect">Connect me with : </li>
						<li><a href="<?php echo $result['fb_link']; ?>" class="social-button facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo $result['tw_link']; ?>" class="social-button twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php echo $result['yt_link']; ?>" class="social-button google"><i class="fa fa-google"></i></a></li>
						<li><a href="<?php echo $result['git_link']; ?>" class="social-button github"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			<p class="agileits_w3ls_copyright">&copy; All right reserved by Md Arafat Hossain</p>
			<div class="arrow-container animated fadeInDown">
				<a href="#home" class="arrow-2 scroll">
					<i class="fa fa-angle-up"></i>
				</a>
				<div class="arrow-1 animated hinge infinite zoomIn"></div>
			</div>
		</div>
	</div>
	<!--//footer -->


<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->

<!-- gauge-meter -->
	<script src="js/jquery.gauge.js"></script>
	<script>
		$(document).ready(function (){
			$("#gauge1").gauge(90,{color: "#ff4f81",unit: " %",type: "halfcircle"});
			$("#gauge2").gauge(70, {color: "#2dde98", unit: " %",type: "halfcircle"});
			$("#gauge3").gauge(75, {color: "#00aeff",unit: " %",type: "halfcircle"});
			$("#gauge4").gauge(40, {color: "#ffb900",unit: " %",type: "halfcircle"});
		});
	</script>
<!-- //gauge-meter -->

<!--menu script-->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/jquery.fatNav.js"></script>
		<script>
		(function() {
			
			$.fatNav();
			
		}());
		</script>

<!--Start-slider-script-->
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->

<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->
	
	
</body>
<!-- //Body -->
</html>