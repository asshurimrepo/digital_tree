<?php global $main_nav, $detect; ?>

<header>

	<nav class="navbar navbar-default hidden-xs hidden-sm  main-navbar" role="navigation" id="home">
		<div class="row">

			<div class="row">
				<div class="col-md-12 visible-sm visible-xs">
					<img src="<?=asset('assets/img/logo.svg')?>" class="img-responsive" alt="Alfareeda Logo"/>
				</div>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="text-center">Menu</span>
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse col-md-" id="bs-example-navbar-collapse-1">
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


	<?php get_template_part('partials/dt_nav_mobile'); ?>


	<div class="row" style="margin-top: 0px; position: relative; padding-bottom: 102px;">

		<div class="mobile-tree visible-xs visible-sm">
			<div class="owl-carousel owl-theme single-slide">

				<div class="item center"><img src="<?=asset('digi-tree/images/mobile-2.png')?>" class="img-responsive" alt="Apps Store Optimization, Mobile Marketing"></div>
				<div class="item center"><img src="<?=asset('digi-tree/images/mobile-1.png')?>" class="img-responsive" alt="Brand and Analytics"></div>
				<div class="item center"><img src="<?=asset('digi-tree/images/mobile-3.png')?>" class="img-responsive" alt="Brand and Analytics"></div>
				<div class="item center"><img src="<?=asset('digi-tree/images/mobile-4.png')?>" class="img-responsive" alt="Brand and Analytics"></div>
				<div class="item center"><img src="<?=asset('digi-tree/images/mobile-5.png')?>" class="img-responsive" alt="Brand and Analytics"></div>
				<div class="item center"><img src="<?=asset('digi-tree/images/mobile-6.png')?>" class="img-responsive" alt="Brand and Analytics"></div>
				<div class="item center"><img src="<?=asset('digi-tree/images/mobile-7.png')?>" class="img-responsive" alt="Brand and Analytics"></div>

			</div>
			<img src="<?=asset('digi-tree/mobiletree.png')?>" alt="Digital Tree" style="margin-bottom: -45px;" class="img-responsive center"/>
		</div>

		<?php if( ! $detect->isMobile() ): ?>
			<iframe class="hidden-xs hidden-sm" style="width: 100%; min-height: 619px; margin-bottom: -70px;" src="<?=asset('digi-tree/digi-tree.html')?>" frameborder="0"></iframe>
		<?php endif; ?>
	</div>


</header>
<div class="shadow2"></div>
<div class="arrow bounce hidden-xs" data-anchor><a href="#partners" class="arrow-grey"><i class="fa fa-chevron-circle-down"></i></a></div>