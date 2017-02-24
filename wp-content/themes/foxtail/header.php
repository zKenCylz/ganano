<?php
/**
 * The header for our theme.
 * Displays all of the <head> section and everything up till <div id="content">
 */

global $foxtail_options;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<link rel="shortcut icon" href="<?php echo $foxtail_options['favicon']['url'] ?>" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=vietnamese" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

	<?php echo $foxtail_options['header-code'] ?>

	<style>
		<?php echo $foxtail_options['custom-css'] ?>
	</style>

</head>

<body <?php body_class(); ?>>

</header><!-- /header -->
<header id="header">
	<div class="container">
		<div id="header-wrap" class="clearfix" style="background: url(<?php echo $foxtail_options['header-background']['url'] ?>)">

			<div class="header-logo col-xs-12 col-sm-12 col-md-3 col-lg-3">

                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="">

            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-6">

            </div>
            <div id="header-search" class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                <div id="tu-van">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tu-van.png" alt="">
                </div>
                <form class="search_form" method="get" action="<?php echo home_url('/') ?>">
                    <input type="text" name="s" placeholder="Tìm kiếm" class="search_field">
                    <input type="hidden" name="post_type" value="post">
                    <button class="search_button" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div id="social-icon" class="col-xs-12 col-sm-6 col-md-3 col-lg-1">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-google-plus" aria-hidden="true"></i>
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                <i class="fa fa-google-plus" aria-hidden="true"></i>
            </div>
        </div>
    </div>
</header>

<div id="main-nav-wrap">
	<div class="container">

		<?php
        wp_nav_menu( array(
            'menu'              => 'nav-menu',
            'menu_id' => 'main-nav-menu',
            'theme_location' => 'main-nav',
            'depth'             => 2,
            'container' => 'nav',
            'container_class'   => 'nav collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
        );
        ?>
        <script>
            jQuery("#main-nav-menu li.menu-item-has-children").mouseover(function() {
                jQuery(this).find("ul.dropdown-menu").show();
            }).mouseout(function() {
                jQuery(this).find("ul.dropdown-menu").hide();
            });
        </script>
</div>
</div>
<div class="box main-slider">

            <?php echo do_shortcode( '[rev_slider alias="main-slider"]' ) ?>

        </div>