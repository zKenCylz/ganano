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
		<div id="header-wrap" class="clearfix">
			<div class="header-logo pull-left">
                <a href="<?php echo home_url( '/' ) ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo( 'description' ) ?>" />
                </a>
            </div>
            <div class="header-socials pull-right">
                <div>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/header/facebook.png" alt="Facebook" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/header/google.png" alt="Google Plus" /></a>
                </div>
                <div>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/header/viber.png" alt="Viber" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/header/zalo.png" alt="Zalo" /></a>
                </div>
            </div>
            <div class="header-right pull-right">
                <a href="tel:0977758686" class="hotline">
                    TƯ VẤN MIỄN PHÍ<br><span>0977758686</span>
                </a>
                <form class="search-form" method="get" action="<?php echo home_url( '/' ) ?>">
                    <input type="text" name="s" placeholder="Tìm kiếm" class="search-input">
                    <input type="hidden" name="post_type" value="post">
                    <button class="search-button" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>

<div id="main-nav-wrap">
	<div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php
                    wp_nav_menu( array(
                            'menu'              => 'nav-menu',
                            'menu_id' => 'main-nav-menu',
                            'theme_location' => 'main-nav',
                            'depth'             => 2,
                            'container' => false,
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <script>
            jQuery("#main-nav-menu li.menu-item-has-children").mouseover(function() {
                jQuery(this).find("ul.dropdown-menu").show();
            }).mouseout(function() {
                jQuery(this).find("ul.dropdown-menu").hide();
            });
        </script>
</div>
</div>
<div class="main-slider">

            <?php echo do_shortcode( '[rev_slider alias="main-slider"]' ) ?>

        </div>