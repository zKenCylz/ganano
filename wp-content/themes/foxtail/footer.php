<?php
/**
 * The template for displaying the footer.
 */
global $foxtail_options;
?>

<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo.png" alt="">
            </div>
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <p>Sản phẩm khác</p>
                <div class="owl-carousel owl-theme">
                    <div class="item"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-1.png" alt=""> </div>
                    <div class="item"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-2.png" alt=""> </div>
                    <div class="item"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-3.png" alt=""> </div>
                    <div class="item"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-4.png" alt=""> </div>
                    <div class="item"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/partner-1.png" alt=""> </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <?php dynamic_sidebar( 'sidebar-footer' ) ?>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/tu-van.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-8 col-md-4 col-lg-4">
                <?php dynamic_sidebar( 'sidebar-footer-socials' ) ?>
            </div>
        </div>
    </div>
</footer>


<div id="up-button">
    <i class="fa fa-angle-up"></i>
</div>
<style>
    #up-button{
        position: fixed;
        bottom: 20px;
        right: 20px;
        border: 2px solid red;
        background: red;
        color: white;
        padding: 5px 10px;
    }
</style>


<?php echo $foxtail_options['footer-code'] ?>

<?php wp_footer(); ?>

</body>
</html>