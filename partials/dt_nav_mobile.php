<?php global $main_nav; ?>
<nav class="navbar navbar-default visible-xs visible-sm" role="navigation">
	<div class="row">

		<div class="row">
			<div class="col-md-12 visible-sm visible-xs">
				<img src="<?=asset('assets/img/logo.svg')?>" class="img-responsive" alt="Alfareeda Logo"/>
			</div>
		</div>
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
				<span class="text-center">Menu</span>
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse col-md-" id="bs-navbar-collapse">
			<div class="row">


				<div class="col-md-2 visible-md visible-lg">
					<ul class="nav navbar-nav onepager" style="width: 100%;">
						<li><a href="#">&nbsp;</a></li>
					</ul>
				</div>

				<div class="col-md-2 no-pad text-center visible-md visible-lg">
					<img src="<?=asset('assets/img/logo.svg')?>" class="logo" style="width: 100%;" alt="Alfareeda Logo"/>
				</div>

				<div class="col-md-8">
					<ul class="nav navbar-nav onepager" style="width: 100%;">
						<li class="home"><a href="<?=site_url()?>s"><i class="fa fa-home"></i></a></li>
						<?php foreach($main_nav as $nav): ?>
							<li class="<?=is_active($nav->object_id)?>">
								<a href="<?=$nav->url?>"><?=$nav->title?></a>
							</li>
						<?php endforeach; ?>

					</ul>
				</div>


			</div>


		</div><!-- /.navbar-collapse -->
	</div>
</nav>