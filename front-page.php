<article class="front-page-welcome">
	<div class="front-page-welcome__image">
		<img src="<?php echo get_template_directory_uri(); ?>/dist/images/front-page-image.png" />
	</div>

	<div class="front-page-welcome__text">
		<?php the_content(); ?>
	</div>
 </article>

<section class="front-page-portfolio">
	<h2 class="featured-heading featured-heading--green">
		Recent case studies
	</h2>

	<div class="front-page-portfolio__items">
		<?php 
		$portfolio = get_posts(array(
			'post_type' => 'portfolio_item',
			'posts_per_page' => 3,
			'suppress_filters' => 0
		));
		if(!empty($portfolio)):
			foreach($portfolio as $post):
				setup_postdata( $post ); ?>
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
				<?php wp_reset_postdata();
			endforeach;
		endif;
		?>
	</div>
</section> 

<aside class="front-page-logos">
	<h2 class="featured-heading featured-heading--orange">
		Tools I commonly work with
	</h2>

	<ul class="front-page-logos__list">
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-shopify.png" alt="Shopify logo" />
		</li>

		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-wordpress.png" alt="Wordpress logo" />
		</li>

		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-angular.png" alt="Angular logo" />
		</li>

		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo-woocommerce.png" alt="Woocommerce logo" />
		</li>
	</ul>
</aside>

