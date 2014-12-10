<?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>
<div class="col-md-4">

	<div class="profile" style="background-image: url(<?= $featured_image_url ?>);">
<!--		<a href="--><?php //the_permalink() ?><!--"><img src="--><?//= asset( 'assets/img/profile-spc.png' ) ?><!--"/></a>-->

		<div id="box-6" class="box">
			<?php the_post_thumbnail(array(280, 290), array('class'=>'img-responsive')); ?>
<!--			<img id="image-6" src="--><?//=$featured_image_url?><!--"/>-->
			<span class="caption scale-caption">
				<p><?php the_excerpt(); ?></p>
			</span>
		</div>

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
