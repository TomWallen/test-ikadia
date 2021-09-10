<?php wp_head(); ?>

<nav id="navigation">
<?php
wp_nav_menu(
  array(
    'theme_location' => 'main-menu',
    'menu_id' => 'primary-menu',
    'container_class' => 'main-menu', 
    'menu_class' => 'main-menu',
 )
);
?>
</nav>