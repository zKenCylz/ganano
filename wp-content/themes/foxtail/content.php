<?php
/**
 * Default Content
 */
?>

<article class="clearfix post row" role="article" itemscope="" itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
        <?php foxtail_thumbnail('post-thumbnail') ?>
    </div>

    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <h3 class="post-title title" itemprop="name">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>

        <div class="post-excerpt"><?php the_excerpt() ?></div>
        <div class="text-right">
            <a class="read-more" href="#" title="Xem chi tiết">Xem chi tiết</a>
        </div>
    </div>
</article>