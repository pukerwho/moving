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
		<div class="row">
			<div class="col-md-4">
				<div class="b_contact__form">
					<?php echo do_shortcode('[contact-form-7 id="41" title="Контакты"]') ?>	
				</div>
			</div>
			<div class="col-md-8">
				<div class="b_contact__map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.352613237727!2d30.48356471573143!3d50.453158179475786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce629e8423ff%3A0xca2f8412964895c4!2z0YPQuy4g0JfQu9Cw0YLQvtGD0YHRgtC-0LLRgdC60LDRjywgNTEsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1553185587783" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>