<?php

	get_header('single');

	if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'partials/post', 'single' );

	endwhile; endif;


	get_footer();