<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>

      <h1 class="featured-heading featured-heading--orange featured-heading--full-width"><?php the_title(); ?></h1>
      <div class="featured-heading__image">
        <?php if(has_post_thumbnail( )): ?>
        <a href="<?php the_permalink(); ?>" ?>
            <?php the_post_thumbnail('full-size'); ?>
        </a>
    <?php endif; ?>
      </div>
     
    </header>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
