<?php
	/*
	Template Name: Index Page
	Author: Asshurim Larita
	*/

	get_header();


		get_template_part( 'partials/dt_highlights' );
		get_template_part( 'partials/dt_clients' );
		get_template_part( 'partials/dt_services' );
		get_template_part( 'partials/dt_blogs' );
		get_template_part( 'partials/dt_hiring' );
		get_template_part( 'partials/dt_contact_us' );


	get_footer();