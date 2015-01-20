<?php
	$contact_form = get_field('contact_form', 2);
?>

<div id="contact">
	<div class="spc-md"></div>
	<div class="container">

		<h1 class="center head-title wow fadeIn">
			contact us
<!--			<small>lorem ipsum dolor sit amet</small>-->

			<img class="img-responsive center shadow" src="<?= asset( 'assets/img/shadow.png' ) ?>"/>
		</h1>


		<div class="col-md-8 wow slideInLeft">

			<?php include('_contact_form.php'); ?>

		</div>

		<div class="col-md-4 text-right wow slideInRight">

			<a href="#" style="color: #ff7200; font-size: 40px; margin:0 6px;"><i class="fa fa-facebook-square"></i></a>
			<a href="#" style="color: #ff7200; font-size: 40px; margin:0 6px;"><i class="fa fa-twitter-square"></i></a>
			<p>
				<h3>Email us</h3>
				<span class="italic lead">info@the-digitaltree.com</span>

				<h3>Call us</h3>
				<span class="italic lead">+971 50 2551752</span>

				<h3>Address</h3>
				<span class="italic lead">Dubai</span>
				<span class="italic lead">Internet</span>
				<span class="italic lead">City</span>
				<span class="italic lead">Building 14 office 117</span>

			</p>
		</div>
	</div>

	<div class="spc-lg"></div>

</div>