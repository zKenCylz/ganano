<?php
/**
 * The template for displaying the homepage.
 * Template name: Homepage
 */

get_header();
global $foxtail_options;
if (have_posts()) while(have_posts()):
    the_post(); ?>

<main class="main main-home">
    <div class="container">
		<div class="container-inner">
			<div class="box main-slider">

				<?php echo do_shortcode( '[rev_slider alias="main-slider"]' ) ?>

			</div>
		</div>
	</div>
</main>

<div class="row">
    <div class="container">
        <div id="category" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h1 id="title">GASNANO</h1>
            <img width="100%" src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg" alt="">
            <p>Nhiều người cho rằng: rượu bia, đồ ăn cay nóng chính là nguyên nhân khiến đâu dạ dày tái phát.. </p>
            <a class="btn btn-primary" href="#" title="">Xem chi tiết</a>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>