<?php
	query_posts('posts_per_page=12&post_type=post');

	include_once(ABSPATH . WPINC . '/rss.php');

	$rss = fetch_rss('http://mashable.com/social-media/rss');
	$rss_items = array_slice($rss->items, 0, 5);

?>

	<div id="team" class="mid-dark">

		<div class="spc-md"></div>

		<div class="container" id="mainwrapper">

			<h1 class="center head-title">
				blogs
				<!--			<small>lorem ipsum dolor sit amet</small>-->

				<img class="img-responsive center shadow" src="<?= asset( 'assets/img/shadow.png' ) ?>"/>
			</h1>


			<div class="row">

				<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post();

						get_template_part('blog','list');

					endwhile; endif;

					foreach($rss_items as $rss_item){

						get_template_part('blog','rss');

					}
				?>

			</div>

		</div>

		<div class="spc-lg"></div>

	</div>

	<div class="shadow2"></div>


<?php wp_reset_query();