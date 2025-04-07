<?php get_header(); ?>
<main class="main">
  <?php
  $category = get_the_category();
  $cat_id   = $category[0]->cat_ID;
  $cat_name = $category[0]->cat_name;
  $cat_slug = $category[0]->category_nicename;
  ?>

  <h2><?php echo $cat_name; ?></h2>
  <div class="tileBox_category">
    <ul>
      <?php if (have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <h3><?php the_title(); ?></h3>
        </a>
        <?php the_excerpt(); ?>
      </li>
      <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
  <!-- ページネーション -->
  <div class="pagination">
    <?php
    the_posts_pagination([
      'mid_size' => 2,
      'prev_text' => '«',
      'next_text' => '»',
    ]);
    ?>
  </div>
</main>
<?php get_footer(); ?>