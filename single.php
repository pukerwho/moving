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
				<div class="col-md-12">
					<div class="lead">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="row mb-5 pb-3">
				<div class="col-md-12 text-center">
					<div>
						<div class="my-btn modal-price-btn">
							Раcсчитать стоимость
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endwhile; else: ?>
		<p><?php _e('Ничего не найдено'); ?></p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>