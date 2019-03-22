<?php get_header(); ?>

<div class="p_page">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="p_page__welcome" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;">
			<div class="p_page__cover"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="p_page__title mb-4">
							<?php the_title(); ?>
						</div>
						<div class="line mb-4"></div>
						<div class="lead text-white">
							<?php echo get_the_date(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b_articles py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="b_articles__content lead mb-5">
							<?php the_content(); ?>	
						</div>
						<div class="b_articles__heading text-center mb-4">
							Другие статьи
						</div>
						<div class="line m-auto"></div>
						<div class="b_articles__other mt-4">
							<?php 
							$custom_query_args = array(
								'post_type' => 'articles', 
								'posts_per_page' => 3, 
							);
			        $custom_query = new WP_Query( $custom_query_args );
			        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
								<a href="<?php the_permalink(); ?>">
									<div class="b_articles__other-item">
										<div class="b_articles__other-img">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
										</div>
										<div class="b_articles__other-title">
											<?php the_title(); ?>
										</div>
									</div>
								</a>
							<?php endwhile; endif; ?>
						</div>
					</div>
					<div class="col-md-3">
						<?php get_template_part('blocks/articles-sidebar') ?>
					</div>
				</div>
			</div>
		</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
</div>

<?php get_footer(); ?>