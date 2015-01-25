<?php $services = get_field('services', 2); /*var_dump($services);*/ ?>

<section id="services" class="dark" style="position: relative;">
	<div class="container">

		<h1 class="center head-title white wow fadeInDown">
			our services
<!--			<small>lorem ipsum dolor sit amet</small>-->

			<img class="img-responsive center shadow" src="<?= asset( 'assets/img/shadow.png' ) ?>"/>
		</h1>


		<div class="row">
			<div class="col-sm-4 wow fadeInUpBig">

				<div class="spc-lg"></div>

				<div class="item text-center">
					<h3 class="fw800 center">
						<?=$services[0]['icon']?>
						<div class="spc-sm"></div>
						<?=$services[0]['title']?>
					</h3>
					<div class="spc-md"></div>
					<p><?=$services[0]['description']?></p>
				</div>

				<div class="item text-center">
					<h3 class="fw800 center">
						<?=$services[3]['icon']?>
						<div class="spc-sm"></div>
						<?=$services[3]['title']?>
					</h3>
					<div class="spc-md"></div>
					<p><?=$services[3]['description']?></p>
				</div>

			</div>

			<div class="col-sm-4 wow fadeInUpBig">

				<div class="item text-center">
					<h3 class="fw800 center">
						<?=$services[1]['icon']?>
						<div class="spc-sm"></div>
						<?=$services[1]['title']?>
					</h3>
					<div class="spc-md"></div>
					<p><?=$services[1]['description']?></p>
				</div>

				<div class="item text-center">
					<h3 class="fw800 center">
						<?=$services[4]['icon']?>
						<div class="spc-sm"></div>
						<?=$services[4]['title']?>
					</h3>
					<div class="spc-md"></div>
					<p><?=$services[4]['description']?></p>
				</div>

				<div class="item text-center">
					<h3 class="fw800 center">
						<?=$services[6]['icon']?>
						<div class="spc-sm"></div>
						<?=$services[6]['title']?>
					</h3>
					<div class="spc-md"></div>
					<p><?=$services[6]['description']?></p>
				</div>

			</div>

			<div class="col-sm-4 wow fadeInUpBig">

				<div class="spc-lg"></div>

				<div class="item text-center">
					<h3 class="fw800 center">
						<?=$services[2]['icon']?>
						<div class="spc-sm"></div>
						<?=$services[2]['title']?>
					</h3>
					<div class="spc-md"></div>
					<p><?=$services[2]['description']?></p>
				</div>

				<div class="item text-center">
					<h3 class="fw800 center">
						<?=$services[5]['icon']?>
						<div class="spc-sm"></div>
						<?=$services[5]['title']?>
					</h3>
					<div class="spc-md"></div>
					<p><?=$services[5]['description']?></p>
				</div>

			</div>
		</div>

	</div>

	<div class="spc-lg"></div>



</section>

<div class="shadow2"></div>