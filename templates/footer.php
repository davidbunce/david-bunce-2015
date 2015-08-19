<footer class="content-info main-footer" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <nav role="navigation" class="main-footer__navigation">
    	<h3><?php _e('Quick links', 'davidbunce'); ?></h3>
      	<?php
      	if (has_nav_menu('footer_navigation')) :
        	wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
      	endif;
      	?>
    </nav>
  </div>
</footer>
