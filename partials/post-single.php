<div class="container">

	<div class="row">
		<div class="col-lg-12">

			<!-- the actual blog post: title/author/date/content -->
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

			<p class="lead"><i class="fa fa-user"></i> by <a href="#"><?php the_author(); ?></a>
			</p>
			<hr>
			<p><i class="fa fa-calendar"></i> Posted on <?php the_time( 'F d, Y' ); ?> at <?php the_time( 'h:m A' ); ?>
			</p>

			<p><i class="fa fa-tags"></i> Tags: <a href=""><span class="badge badge-info">Bootstrap</span></a> <a
					href=""><span class="badge badge-info">Web</span></a> <a href=""><span
						class="badge badge-info">CSS</span></a> <a href=""><span
						class="badge badge-info">HTML</span></a></p>

			<hr>
			<?php if ( has_post_thumbnail() ) : ?>
				<a class="media-left" href="#">
					<?php the_post_thumbnail(null, ['class'=>'img-responsive']); ?>
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


			<hr >


			</div>


			</div>


			<hr>


			</div>

