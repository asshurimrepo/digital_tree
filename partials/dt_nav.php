<?php global $main_nav; ?>

<header>

	<nav class="navbar navbar-default  main-navbar" role="navigation" id="home">
		<div class="container-fluid">

			<div class="row">
				<div class="col-md-12 hide">
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


					<div class="col-md-2">
						<ul class="nav navbar-nav onepager" style="width: 100%;">
							<li><a href="#">&nbsp;</a></li>
						</ul>
					</div>

					<div class="col-md-4 no-pad text-center">
						<img src="<?=asset('assets/img/logo.svg')?>" class="logo" style="width: 100%;" alt="Alfareeda Logo"/>
					</div>

					<div class="col-md-6">
						<ul class="nav navbar-nav onepager" style="width: 100%;">

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


	<div class="row" style="margin-top: 20px; position: relative; padding-bottom: 102px;">
		<?php get_template_part('digi-tree/digi-tree'); ?>
	</div>


</header>
<div class="shadow2"></div>