<?php $now_hiring_text = get_field('now_hiring_text', 2); ?>
<div id="hiring" class="dark win-height" style="position: relative">

	<div class="container">

		<h1 class="center head-title white wow tada">
			now hiring
<!--			<small>lorem ipsum dolor sit amet</small>-->

			<img class="img-responsive center shadow wow fadeInLeft" src="<?= asset( 'assets/img/shadow.png' ) ?>"/>
		</h1>

		<div class="spc-md"></div>

		<div class="row wow rollIn">
			<div class="col-md-10 col-md-offset-1">
				<div class="featured-box">

<!--					<h3 class="condensed">Web Developer</h3>-->
<!--					<div class="spc-md"></div>-->
					<p class="fw300"><?=$now_hiring_text?></p>

				</div>
			</div>



		</div>

		<div class="spc-md"></div>
		<img class="img-responsive center shadow wow zoomInUp" src="<?= asset( 'assets/img/shadow.png' ) ?>"/>

		<?php include('_hire_form.php'); ?>


	</div>

	<div class="spc-md"></div>



</div>

<div class="shadow2"></div>