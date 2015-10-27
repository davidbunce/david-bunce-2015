<article class="portfolio-item">
            <?php if(has_post_thumbnail( $post_id )): ?>
                  <a href="<?php the_permalink(); ?>" ?>
                      <?php the_post_thumbnail('large'); ?>
                  </a>
              <?php endif; ?>
            <h3 class="portfolio-item__title"><?php the_title(); ?></h3>

            <?php if(get_field('client_name')): ?>
              <div class="portfolio-item__meta"><strong>Client:</strong> <a href="<?php echo get_field('client_website'); ?>"><?php echo get_field('client_name'); ?></a></div>
            <?php endif; ?>

            <?php if(get_field('technology')): ?>
              <div class="portfolio-item__meta"><strong>Technology:</strong> <?php echo get_field('technology'); ?></div>
            <?php endif; ?>
          </article>