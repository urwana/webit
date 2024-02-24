<?php get_header(); ?>

<div class="main">
    <!--<div class="posts">-->
    <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
    <!--<div class="post">-->
        <div class="post_header">
            <h2>
                <?php the_title(); ?>
            </h2>
            <div class="post_meta">
                <span class="ttl_link_category">category : <?php the_category(','); ?></span>
                <span>date : <?php echo get_the_date(); ?></span>
            </div>
        </div>
        <div class="post_content">
            <div class="post_body">
                <?php the_content(); ?>
            </div>
        </div>
    <!--</div>-->
    <?php
        endwhile;
        else:
        ?>
    <p>記事はありません。</p>
    <?php
            endif;
        ?>
</div>
<!--</div>-->
<?php get_footer(); ?>