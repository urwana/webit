<?php get_header(); ?>
<main class="main">
    <h2>category.php</h2>
    <div class="tileBox_category">
        <ul>
            <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
                <?php the_excerpt(); ?>
            </li>
            <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</main>
<?php get_footer(); ?>