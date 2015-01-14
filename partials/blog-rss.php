<?php

	$reg_exUrl = "/https?\:\/\/[^\" ]+/i";
	preg_match($reg_exUrl, $rss_item['mash']['thumbnail'], $featured_image_url) ;

?>
<div class="col-md-4 wow lightSpeedIn lightSpeedOut">

	<div class="profile" style="background-image: url(<?=$featured_image_url[0]?>);">

		<div id="box-6" class="box">
			<a href="<?=$rss_item['link']?>"><img src="<?= asset( 'assets/img/profile-spc.png' ) ?>"/></a>
<!--			<img id="image-6" src="--><?//=$featured_image_url?><!--"/>-->
			<a href="<?=$rss_item['link']?>">
				<span class="caption scale-caption">
					<p><?php echo wp_trim_words( $rss_item['description'], 40); ?></p>
				</span>
			</a>
		</div>

	</div>

	<div class="profile-info">
		<h3 style="margin: 5px;"><a href="<?=$rss_item['link']?>"><?=$rss_item['title']?></a>

			<small class="fw300"><br/> <i><?=$rss_item['pubdate']?></i></small>

			<small class="pull-right">
				<a href="#"><i class="fa fa-facebook-square"></i></a>
				<a href="#"><i class="fa fa-twitter-square"></i></a>
				<a href="#"><i class="fa fa-pinterest-square"></i></a>
			</small>
		</h3>
	</div>

</div>


<?php if($i%3 == 2): ?>
	<div class="spc-md col-md-12"></div>
<?php endif; ?>