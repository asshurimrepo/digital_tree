<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main
 *
 * @package iBoostme
 * @subpackage Alfareeda
 * @since ALFAREEDA 1.0
 */

?>
<footer>

	<div class="container">

		<div class="col-md-4">

			<img src="<?= asset( 'assets/img/logo2.svg' ) ?>" class="img-responsive" alt="Logo2"/>

			<div class="spc-md"></div>

			<div class="copyright">
				<i class="fa fa-copyright fw300"></i> copyright 2014. The Digitaltree. All rights reserved.
			</div>

		</div>

		<div class="col-md-8 center">

			<div>
				<ul class="menu">
					<li><a href="#">our services</a></li>
					<li><a href="#">our team</a></li>
					<li><a href="#">our hiring</a></li>
					<li><a href="#">contact us</a></li>
				</ul>
			</div>

			<div class="text-right socials">

				<a href="#"><i class="fa fa-facebook-square"></i></a>
				<a href="#"><i class="fa fa-twitter-square"></i></a>

			</div>

		</div>


	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>