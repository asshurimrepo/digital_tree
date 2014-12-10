<?php
	query_posts('posts_per_page=12');
?>

	<div id="team" class="mid-dark">

		<div class="spc-md"></div>

		<div class="container">

			<h1 class="center head-title">
				blogs
				<!--			<small>lorem ipsum dolor sit amet</small>-->

				<img class="img-responsive center shadow" src="<?= asset( 'assets/img/shadow.png' ) ?>"/>
			</h1>


			<div class="row">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>

					<div class="col-md-4">

						<div class="profile" style="background-image: url(<?= $featured_image_url ?>);">
							<a href="<?php the_permalink() ?>"><img src="<?= asset( 'assets/img/profile-spc.png' ) ?>"/></a>
						</div>

						<div class="profile-info">
							<h3 style="margin: 5px;"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

								<small class="fw300"><br/> <i><?php the_time( 'M d Y' ); ?></i></small>

								<small class="pull-right">
									<a href="#"><i class="fa fa-facebook-square"></i></a>
									<a href="#"><i class="fa fa-twitter-square"></i></a>
									<a href="#"><i class="fa fa-pinterest-square"></i></a>
								</small>
							</h3>
						</div>

					</div>

					<!--			<div class="spc-md col-md-12"></div>-->

				<?php endwhile; endif; ?>

			</div>

		</div>

		<div class="spc-lg"></div>

	</div>

	<div class="shadow2"></div>


<?php wp_reset_query();