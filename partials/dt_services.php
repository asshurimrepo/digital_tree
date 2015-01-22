<?php $services = get_field('services', 2); /*var_dump($services);*/ ?>

<section id="services" class="dark" style="position: relative;">
	<div class="container">

		<h1 class="center head-title white wow fadeInDown">
			our services
<!--			<small>lorem ipsum dolor sit amet</small>-->

			<img class="img-responsive center shadow" src="<?= asset( 'assets/img/shadow.png' ) ?>"/>
		</h1>




		<div class="row fadeInUpBig">


			<?php foreach($services as $i=>$service): ?>

			<div class="col-md-4">

				<h3 class="fw800 center"><?=$service['icon']?>
					<div class="spc-md"></div>
					<?=$service['title']?>
				</h3>

				<div class="spc-md"></div>
				<p><?//=$service['description']?></p>
			</div>

				<?php if($i%3 == 2): ?> <div class="col-md-12 spc-md"></div> <?php endif; ?>

			<?php endforeach; ?>

<!--			-->







		</div>

	</div>

	<div class="spc-lg"></div>



</section>

<div class="shadow2"></div>