<?php $logos = get_field('partner_logos', 2); ?>

<div id="partners" class="container center wow bounceInUp">
	<div class="spc-md"></div>
	<h2 class="condensed wow fadeInDown">partners</h2>
	<div class="spc-lg"></div>

		<?php foreach($logos as $i=>$logo): ?>
			<img src="<?=$logo['image']?>" class="hidden-xs" style="height: <?=$logo['size']?>px; padding: 0 15px; margin-bottom: 15px;" />

			<div class="col-xs-6 visible-xs"><img src="<?=$logo['image']?>" class="visible-xs" alt="Digital Tree Partners" style="max-height: 40px; margin-bottom: 15px;" /></div>

		<?php endforeach; ?>

	<div class="spc-lg"></div>
</div>