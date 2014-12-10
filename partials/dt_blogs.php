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

				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();

						$featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
						get_template_part('blog','list');

					endwhile; endif;
				?>

			</div>

		</div>

		<div class="spc-lg"></div>

	</div>

	<div class="shadow2"></div>


<?php wp_reset_query();