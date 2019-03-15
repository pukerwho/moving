<?php
/*
Template Name: Контакты
*/
?>

<?php get_header(); ?>

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
		<div class="row justify-content-center">
			<div class="col-md-8">
				<?php echo do_shortcode('[contact-form-7 id="41" title="Контакты"]') ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>