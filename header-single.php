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
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?>  <?php wp_title(); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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

    <!-- Main JS -->
    <?=link_js('main.js')?>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>



<body>

<?php get_template_part('partials/dt_nav_single'); ?>