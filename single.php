<?php get_header(); ?>
<section class="entry-section">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="p_page">
		<div class="p_page__welcome mb-5" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;">
			<div class="p_page__cover"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="p_page__title mb-4">
							<?php the_title(); ?>
						</div>
						<div class="line"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<div>
						<div class="my-btn modal-price-btn">
							Раcсчитать стоимость
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-12">
					<div class="lead">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div>
						<div class="my-btn modal-price-btn">
							Раcсчитать стоимость
						</div>
					</div>
				</div>
			</div>
			<?php $current_term = get_the_category();
			foreach ($current_term as $myterm): ?>
				<div class="row mt-5">
					<div class="col-md-12 text-center text-uppercase mb-5">
						<h3>Похожие услуги</h3>
					</div>
					<?php 
						$current_term = get_the_category();
						foreach ($current_term as $myterm); {
							$current_term_slug = $myterm->cat_ID;
						}
					?>
					<?php 
						$current_id = get_the_ID();
						$custom_query = new WP_Query( array( 
						'post_type' => 'post', 
						'posts_per_page' => 3,
						'post__not_in' => array($current_id),
						'cat' => $current_term_slug
					) );
					if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
					  	<div class="col-md-4">
					  		<div class="card">
					  			<img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" style="height: 225px; object-fit: cover; -o-object-fit: cover;">
					  			<div class="card-body">
								    <h5 class="card-title"><?php the_title(); ?></h5>
								    <a href="<?php echo get_permalink(); ?>" class="btn btn-outline-dark">Подробнее</a>
								  </div>
					  		</div>
					  	</div>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php endwhile; else: ?>
		<p><?php _e('Ничего не найдено'); ?></p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>