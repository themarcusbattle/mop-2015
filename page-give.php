<?php
/** Template Name: Give */
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<?php get_template_part( 'views/navigation' ); ?>
		<div id="hero-give" class="hero container-fluid pad-top">
			<div class="row text-center">
				<h3>Give</h3>
				<!-- <p>To give you must have a FREE Monument of Praise account. This account allows you to give securely, review your giving history and comment on sermons.</p> -->
				<!-- <p>To pay your tithes or offering complete the form below</p> -->
				<p>We thank you for your desire to give and support the work we're doing in High Point, NC. The ability to give online will be made available on <strong>Sunday May 31st, 2015</strong>.</p>
				<!-- <p><a class="btn btn-default white" href="<?php echo home_url('account?action=signin') ?>">Sign In to Give</a></p> -->
				<!-- <p>Create an Account</p> -->
			</div>
		</div>
		<div class="hero container-fluid content">
			<div class="row text-center">
				<h5>Why should I give?</h5>
				<h2>Your giving produces tangible results</h2>
				<p>Monument of Praise Ministries has purchased 25 acres of land—the first step in the fulfillment of the vision to establish ministries capable of meeting the spiritual, emotional, and physical needs of a hurting community, and of establishing a legacy of praise and worship to honor the Lord, and His commitment to His people.</p>
			</div>
		</div>
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>
