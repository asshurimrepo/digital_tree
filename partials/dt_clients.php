<?php $logos = get_field('partner_logos', 2); ?>

<div class="container center">
	<div class="spc-md"></div>
	<h2 class="condensed">partners</h2>
	<div class="spc-lg"></div>

		<?php foreach($logos as $i=>$logo): ?>
			<img src="<?=$logo['image']?>" style="height: <?=$logo['size']?>px; padding: 0 15px; margin-bottom: 15px;" />
		<?php endforeach; ?>
<!--	<img src="--><?//= asset( 'assets/img/clients.png' ) ?><!--" class="img-responsive" alt=""/>-->

	<div class="spc-lg"></div>
</div>