<?php
	global $rss_item;

	var_dump($rss_item);

	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	preg_match($reg_exUrl, $rss_item['mash']['thumbnail'], $featured_image_url) ;

?>
<div class="col-md-4">

	<div class="profile" style="background-image: url(<?= $featured_image_url ?>);">

		<div id="box-6" class="box">
			<a href="<?=$rss_item['link']?>"><img src="<?= asset( 'assets/img/profile-spc.png' ) ?>"/></a>
<!--			<img id="image-6" src="--><?//=$featured_image_url?><!--"/>-->
			<a href="<?=$rss_item['link']?>">
				<span class="caption scale-caption">
					<p><?php echo wp_trim_words( $rss_item['description'], 25); ?></p>
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
