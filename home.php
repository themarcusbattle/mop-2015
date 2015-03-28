<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="side-menu">
			<a class="close-menu">Close <i class="fa fa-times"></i></a>
			<ul>
				<li class="visible-xs" role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
				<li class="visible-xs" role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
				<li class="visible-xs" role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
				<li class="visible-xs" role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
				<li><a href="#">Our Beliefs</a></li>
				<li><a href="#">Leadership</a></li>
				<li><a href="#">Ministries</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
		<div id="navigation">
			<div class="row">
				<h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/monument-logo-white.png" width="194" height="80" /></a></h1>
				<ul id="location-menu" class="nav nav-pills pull-right">
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
					<li class="hidden-xs" role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
					<li role="presentation"><a href="#" class="open-menu">Menu <i class="fa fa-bars"></i></a></li>
				</ul>
			</div>
		</div>
		<div id="hero-video" class="hero container-fluid ">
			<?php get_template_part( 'views/sermon', 'hero' ); ?>
			<div class="overlay"></div>
			<video id="video-background" autoplay loop poster="">
				<source src="<?php echo get_template_directory_uri(); ?>/assets/video/sunday-morning.mp4" type="video/mp4">
			</video>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/sheep.jpg"></div>
		<div id="hero-sermon-series" class="hero container-fluid">
			<div class="row text-center">
				<h5>Current Sermon Series</h5>
				<h3>Redemption</h3>
				<p>In preparation for the Easter Season, Dr. Williams imparts a life changing word about the death, burial and resurrection of our Lord and Savior, Jesus Christ.</p>
				<a class="btn btn-default white">Sermons</a>
			</div>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/assets/images/steeple-top.jpg"></div>
		<div id="statement" class="hero container-fluid">
			<div class="row text-center">
				<h3>A Modern Church With Traditional Values</h3>
				<p>Serving High Point, Thomasville and Lexington, NC</p>
				<a class="btn btn-default">Our Story</a>
			</div>
		</div>
		<div class="parallax-window" data-parallax="scroll" data-image-src="http://maps.googleapis.com/maps/api/staticmap?center=High+Point,+NC&zoom=13&scale=2&size=2000x300&maptype=roadmap&format=png&visual_refresh=true&markers=size:mid%7Ccolor:red%7Clabel:1%7C321+Oakview+Rd,+High+Point,+NC+27265"></div>
		<div id="visit" class="hero container-fluid content">
			<div class="row text-center">
				<h3>9AM Every Sunday</h3>
				<p>Within a couple of hours, you’ll have received everything you need for a new week without disrupting your Sunday. Enter your address for directions to Monument of Praise.</p>
				<form class="form-inline" action="http://maps.google.com/maps" method="get" target="_blank">
					<div class="form-group">
						<input type="text" class="form-control input-lg" name="saddr" placeholder="Your Address">
					</div>
					<button class="btn btn-default">Get Directions</button>
					<input type="hidden" name="daddr" value="321 Oakview Rd, High Point, NC 27265" />
				</form>
			</div>
		</div>
		<div id="hero-testify" class="hero container-fluid">
			<div class="row text-center">
				<h3>Our Testimonies Help Each Other</h3>
				<p>If you've visited one of our services, we'd love to hear how the word has impacted your life.</p>
				<a class="btn btn-default">Testify</a>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>