<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>
    <?php wp_title('|', true, 'right');
    bloginfo('name') ?>
  </title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="logo_main_webit">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="このサイトのロゴ">
      </a>
    </div>
    <h1 class="ttl_h1_webit">
      <?php bloginfo('name'); ?>
    </h1>
    <div class="searchBox">
      <?php get_search_form(); ?>
    </div>
  </header>
  <?php wp_nav_menu(array('theme_location' => 'nav')); ?>