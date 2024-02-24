<?php get_header(); ?>
<main class="main">

    <h2>最新の記事</h2>
    <!--index.php-->
    <div class="tileBox_index">
        <ul>
            <?php query_posts("post_type=post&posts_per_page=100"); ?>
            <?php if(have_posts()): ?>
            <?php while(have_posts()):  the_post();
                    $cat = get_the_category();
                    $catname = $cat[0]->cat_name;
                    $catslug = $cat[0]->slug;
                ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> &nbsp;
                <span class="<?php echo $catslug; ?>"><?php echo $catname; ?></span>&nbsp;
                <span class="ymd"><?php the_time('Y年m月d日'); ?></span>
            </li>
            <?php endwhile; ?>
            <?php else: ?>
            <p>現在投稿記事はありません。</p>
            <?php endif; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>