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
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 box">
                <div class="wrap">
                    <h1 class="title text-center"><a href="#">GASNANO</a></h1>
                    <div class="content">
                        <a href="#" class="box-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg" alt="" /></a>
                        <p class="excerpt">Nhiều người cho rằng: rượu bia, đồ ăn cay nóng chính là nguyên nhân khiến đâu dạ dày tái phát.. </p>
                        <div class="text-right">
                            <a class="read-more" href="#" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 box">
                <div class="wrap">
                    <h1 class="title text-center"><a href="#">GASNANO</a></h1>
                    <div class="content">
                        <a href="#" class="box-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg" alt="" /></a>
                        <p class="excerpt">Nhiều người cho rằng: rượu bia, đồ ăn cay nóng chính là nguyên nhân khiến đâu dạ dày tái phát.. </p>
                        <div class="text-right">
                            <a class="read-more" href="#" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 box">
                <div class="wrap">
                    <h1 class="title text-center"><a href="#">GASNANO</a></h1>
                    <div class="content">
                        <a href="#" class="box-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg" alt="" /></a>
                        <p class="excerpt">Nhiều người cho rằng: rượu bia, đồ ăn cay nóng chính là nguyên nhân khiến đâu dạ dày tái phát.. </p>
                        <div class="text-right">
                            <a class="read-more" href="#" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 box">
                <div class="wrap">
                    <h1 class="title text-center"><a href="#">GASNANO</a></h1>
                    <div class="content">
                        <a href="#" class="box-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg" alt="" /></a>
                        <p class="excerpt">Nhiều người cho rằng: rượu bia, đồ ăn cay nóng chính là nguyên nhân khiến đâu dạ dày tái phát.. </p>
                        <div class="text-right">
                            <a class="read-more" href="#" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 box">
                <div class="wrap">
                    <h1 class="title text-center"><a href="#">GASNANO</a></h1>
                    <div class="content">
                        <a href="#" class="box-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg" alt="" /></a>
                        <p class="excerpt">Nhiều người cho rằng: rượu bia, đồ ăn cay nóng chính là nguyên nhân khiến đâu dạ dày tái phát.. </p>
                        <div class="text-right">
                            <a class="read-more" href="#" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 box">
                <div class="wrap">
                    <h1 class="title text-center"><a href="#">GASNANO</a></h1>
                    <div class="content">
                        <a href="#" class="box-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg" alt="" /></a>
                        <p class="excerpt">Nhiều người cho rằng: rượu bia, đồ ăn cay nóng chính là nguyên nhân khiến đâu dạ dày tái phát.. </p>
                        <div class="text-right">
                            <a class="read-more" href="#" title="Xem chi tiết">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>


<?php endwhile; ?>

<?php get_footer(); ?>