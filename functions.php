<?php
add_theme_support('menus');
register_sidebar(array(
  'name' => 'サイドバー',
  'id' => 'sidebar',
  'description' => 'サイドバーウィジェット',
  'before_widget' => '<div class="style_wedgit">',
  'after_widget' => '</div>',
  'before_title' => '<h3 class="style_ttl_h3">',
  'after_title' => '</h3>'
  ));
register_nav_menus(array(
  'nav'=>'ナビゲーション'
));