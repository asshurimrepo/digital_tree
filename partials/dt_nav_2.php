<?php global $main_nav; ?>
<nav id="hidden_nav" class="navbar navbar-hide navbar-default navbar-fixed-top gone" style="display: none;" >
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="bs-navbar-collapse-1" data-target="#bs-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Digital Tree</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-navbar-collapse-1">

			<ul class="nav navbar-nav navbar-right">
				<?php foreach($main_nav as $nav): ?>
					<li data-anchor class="<?=is_active($nav->object_id)?>">
						<a  href="<?=$nav->url?>"><?=$nav->title?></a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>