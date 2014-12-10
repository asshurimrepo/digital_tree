<div class="container">

	<div class="row">
		<div class="col-lg-8">

			<!-- the actual blog post: title/author/date/content -->
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<p class="lead"><i class="fa fa-user"></i> by <a href="#"><?php the_author(); ?></a>
			</p>
			<hr>
			<p><i class="fa fa-calendar"></i> Posted on <?php the_time( 'F d, Y' ); ?> at <?php the_time( 'h:m A' ); ?>
			</p>

			<p><i class="fa fa-tags"></i>
				Tags: <?php the_tags( '<span class="badge badge-info">', '</span> <span class="badge badge-info">', '</span>' ); ?>

			<hr>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="media-left" href="#">
					<?php the_post_thumbnail( 'large', [ 'class' => 'img-responsive' ] ); ?>
				</a>
			<?php endif; ?>
			<hr>

			<?php the_content(); ?>

			<hr>

			<!-- the comment box -->
			<div class="well">
				<h4><i class="fa fa-paper-plane-o"></i> Leave a Comment:</h4>

				<?php
					if ( comments_open() || get_comments_number() )
					{
						comments_template();
					}
				?>
			</div>
			<hr>
		</div>


		<div class="col-lg-4">

			<?php dynamic_sidebar( 'sidebar-1' ); ?>

		</div>
	</div>

	<hr>
</div>

