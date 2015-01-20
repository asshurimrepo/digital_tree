<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="site_url" content="<?=asset('')?>" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <link rel="shortcut icon" href="<?=asset('assets/img/favicon.ico')?>">

<!-- Jquery -->
    <?=link_js('assets/jquery/jquery.min.js')?>

<!-- Bootstrap -->
    <?=link_css('assets/bootstrap/css/bootstrap.min.css')?>
    <?=link_js('assets/bootstrap/js/bootstrap.min.js')?>

<!--    Font Awesome    -->
    <?=link_css('assets/font-awesome/css/font-awesome.min.css')?>

<!-- Style -->
    <?=link_css('style.css')?>
    <?=link_css('assets/css/main.css')?>

	<!--WOW-->
	<?=link_css('assets/wow/animate.css')?>
	<?=link_js('assets/wow/wow.min.js')?>

	<!--OWL-->
	<?=link_css('assets/owl-carousel/owl.carousel.css')?>
	<?=link_css('assets/owl-carousel/owl.theme.css')?>
	<?=link_css('assets/owl-carousel/owl.transitions.css')?>
	<?=link_js('assets/owl-carousel/owl.carousel.js')?>

	<!-- Main JS -->
	<?=link_js('main.js')?>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-58725784-1', 'auto');
		ga('send', 'pageview');

	</script>

</head>



<body>

<?php get_template_part('partials/dt_nav'); ?>
<?php get_template_part('partials/dt_nav_2'); ?>