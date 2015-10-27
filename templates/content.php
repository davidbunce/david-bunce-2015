<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	   <?php get_template_part('templates/entry-meta'); ?>
    
   
  </header>
  	<?php if(has_post_thumbnail( $post_id )): ?>
        <a href="<?php the_permalink(); ?>" ?>
            <?php the_post_thumbnail('large'); ?>
        </a>
    <?php endif; ?>
  <div class="entry-summary">
  	 <?php the_excerpt(); ?>
    
    	<a class="btn btn--read-more" href="<?php the_permalink(); ?>" ?>Read more</a>
   
  </div>
</article>
