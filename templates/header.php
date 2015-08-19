<nav role="navigation" class="header-nav">
    <div class="container">
        <?php
        if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header-nav__list']);
        endif;
        ?>

        <a href="/contact" class="header-nav__menu-button">
            Hire me
        </a>
    </div>
</nav>

<div class="container">
  <header class="banner main-header" role="banner">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" />
    </a>

    

  </header>
</div>