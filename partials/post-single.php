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
			<div class="well">
				<h4><i class="fa fa-search"></i> Blog Search...</h4>
				<div class="input-group">
					<input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
	                            <i class="fa fa-search"></i>
                            </button>
                        </span>
				</div>
				<!-- /input-group -->
			</div>
			<!-- /well -->
			<div class="well">
				<h4><i class="fa fa-tags"></i> Popular Tags:</h4>
				<div class="row">
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href=""><span class="badge badge-info">Windows 8</span></a>
							</li>
							<li><a href=""><span class="badge badge-info">C#</span></a>
							</li>
							<li><a href=""><span class="badge badge-info">Windows Forms</span></a>
							</li>
							<li><a href=""><span class="badge badge-info">WPF</span></a>
							</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul class="list-unstyled">
							<li><a href=""><span class="badge badge-info">Bootstrap</span></a>
							</li>
							<li><a href=""><span class="badge badge-info">Joomla!</span></a>
							</li>
							<li><a href=""><span class="badge badge-info">CMS</span></a>
							</li>
							<li><a href=""><span class="badge badge-info">Java</span></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /well -->
			<div class="well">
				<h4><i class="fa fa-thumbs-o-up"></i> Follow me!</h4>
				<ul>
					<p><a title="Facebook" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a> <a title="Twitter" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a> <a title="Google+" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-google-plus fa-stack-1x"></i></span></a> <a title="Linkedin" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></span></a> <a title="GitHub" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-github fa-stack-1x"></i></span></a> <a title="Bitbucket" href=""><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-bitbucket fa-stack-1x"></i></span></a></p>
				</ul>
			</div>
			<!-- /well -->
			<!-- /well -->
			<div class="well">
				<h4><i class="fa fa-fire"></i> Popular Posts:</h4>
				<ul>
					<li><a href="">WPF vs. Windows Forms-Which is better?</a></li>
					<li><a href="">How to create responsive website with Bootstrap?</a></li>
					<li><a href="">The best Joomla! templates 2014</a></li>
					<li><a href="">ASP .NET cms list</a></li>
					<li><a href="">C# Hello, World! program</a></li>
					<li><a href="">Java random generator</a></li>
				</ul>
			</div>
			<!-- /well -->

			<!-- /well -->
			<div class="well">
				<h4><i class="fa fa-book"></i> Featured books:</h4>
				<div class="row">

					<div class="col-lg-12">
						<div class="cuadro_intro_hover " style="background-color:#cccccc;">
							<p style="text-align:center; margin-top:20px;">
								<img src="http://placehold.it/500x330" class="img-responsive" alt="">
							</p>
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Book 1</h3>
									<p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
									<a class=" btn btn-default" href="#"><i class="fa fa-plus"></i> INFO</span></a>

								</div>
							</div>
						</div>

					</div>

					<div class="col-lg-12">
						<div class="cuadro_intro_hover " style="background-color:#cccccc;">
							<p style="text-align:center; margin-top:20px;">
								<img src="http://placehold.it/500x330" class="img-responsive" alt="">
							</p>
							<div class="caption">
								<div class="blur"></div>
								<div class="caption-text">
									<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Book 2</h3>
									<p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
									<a class=" btn btn-default" href="#"><i class="fa fa-plus"></i> INFO</span></a>

								</div>
							</div>
						</div>

					</div>
				</div>


			</div>
			<!-- /well -->


		</div>
	</div>

	<hr>
</div>

