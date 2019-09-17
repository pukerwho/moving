<?php
/*
Template Name: Отзывы
*/
?>

<?php get_header(); ?>

<div class="p_page p_reviews">
	<div class="p_page__welcome mb-5" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>); background-size: cover;">
		<div class="p_page__cover"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="p_page__title mb-4">
						<?php the_title(); ?>
					</div>
					<div class="line mb-4"></div>
					<div class="p_page__text">
						Отзывы наших клиентов
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pb-5">
		<div class="row mb-3">
			<div class="col-md-12 text-center">
				<h3 class="p_reviews-title">
					Видео-отзывы
				</h3>
			</div>
		</div>
		<div class="row mb-5">
			<?php 
				$reviews_videos = carbon_get_the_post_meta('crb_reviews_video');
				foreach ($reviews_videos as $reviews_video):
			?>
			<div class="col-md-6">
				<div class="p_reviews-item">
					<div class="p_reviews__video">
						<div class="youtube-player" data-id="<?php echo $reviews_video['crb_reviews_video_iframe'] ?>	"></div>
						<div class="p_reviews__video-info">
							<div class="p_reviews__video-name">
								<?php echo $reviews_video['crb_reviews_video_name'] ?>
							</div>
							<div class="p_reviews__video-line"></div>
							<div class="p_reviews__video-date">
								<?php echo $reviews_video['crb_reviews_video_date'] ?>
							</div>	
						</div>
						<div class="p_reviews__video-cover"></div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="row mb-3">
			<div class="col-md-12 text-center">
				<h3 class="p_reviews-title">
					Фотоотчеты
				</h3>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="swiper-container swiper-review-photos">
			    <div class="swiper-wrapper">
			    	<?php $i=0; ?>
			    	<?php 
			    		$reviews_albums = carbon_get_the_post_meta('crb_reviews_albums');
			    		foreach ($reviews_albums as $reviews_album):
			    	?>
			    		<?php $i++ ?>
			    		<div class="swiper-slide">
			    			<div class="p_reviews__albums" data-toggle="modal" data-target="#modalAlbums-<?php echo $i ?>">
				    			<div class="p_reviews__albums-photo mb-2">
				    				<?php 
				    					$reviews_photos = $reviews_album['crb_reviews_albums_photos'];
				    					foreach (array_slice($reviews_photos, 0, 1) as $reviews_photo): ?>
					    				<?php 
					    					$photo_src = wp_get_attachment_image_url($reviews_photo, 'large');
					    				?>
					    				<img src="<?php echo $photo_src ?>" alt="" class="img-fluid">
				    				<?php endforeach; ?>
				    			</div>
				    			<div class="p_reviews__albums-stars mb-2">
				    				<div class="p_reviews__albums-star">
				    					<img src="<?php bloginfo('template_url') ?>/img/star.svg" alt="">
				    				</div>
				    				<div class="p_reviews__albums-star">
				    					<img src="<?php bloginfo('template_url') ?>/img/star.svg" alt="">
				    				</div>
				    				<div class="p_reviews__albums-star">
				    					<img src="<?php bloginfo('template_url') ?>/img/star.svg" alt="">
				    				</div>
				    				<div class="p_reviews__albums-star">
				    					<img src="<?php bloginfo('template_url') ?>/img/star.svg" alt="">
				    				</div>
				    				<div class="p_reviews__albums-star">
				    					<img src="<?php bloginfo('template_url') ?>/img/star.svg" alt="">
				    				</div>
				    			</div>
				    			<div class="p_reviews__albums-title">
				    				<?php echo $reviews_album['crb_reviews_albums_name'] ?>
				    			</div>
				    		</div>
			    		</div>
			    	<?php endforeach; ?>
			    	<!-- <?php 
							$reviews_photos = carbon_get_the_post_meta('crb_reviews_photos');
							foreach ($reviews_photos as $reviews_photo):
						?>
						<div class="swiper-slide">
							<div class="p_reviews__photos-item">
								<?php $photo_src = wp_get_attachment_image_url($reviews_photo, 'large'); ?>
								<a href="<?php echo $photo_src ?>" data-lightbox="review" data-title="Фотоотчеты">
									<img src="<?php echo $photo_src ?>"/>		
								</a>
							</div>
						</div>
						<?php endforeach; ?> -->
			    </div>
			  </div>
			  <div class="swiper-button-next swiper-review-video-button-next"></div>
	      <div class="swiper-button-prev swiper-review-video-button-prev"></div>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col-md-12 text-center">
				<h3 class="p_reviews-title">
					Отзывы наших клиентов
				</h3>
			</div>
		</div>
		<div class="row">
			<?php 
				$reviews_texts = carbon_get_the_post_meta('crb_reviews_text');
				foreach ($reviews_texts as $reviews_text):
			?>
				<div class="col-md-6 mb-5">
					<div class="p_reviews__text">
						<div class="p_reviews__text-info mb-3">
							<div class="p_reviews__text-quote">
								<img src="<?php bloginfo('template_url') ?>/img/quote.svg" alt="">
							</div>
							<div>
								<div class="p_reviews__text-name">
									<?php echo $reviews_text['crb_reviews_text_name'] ?>
								</div>
								<div class="p_reviews__text-date">
									<?php echo $reviews_text['crb_reviews_text_date'] ?>
								</div>
							</div>
						</div>
						<div class="p_reviews__text-content lead">
							<?php echo $reviews_text['crb_reviews_text_content'] ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php $iterator = 0; ?>
<?php
	$reviews_albums = carbon_get_the_post_meta('crb_reviews_albums');
	foreach ($reviews_albums as $reviews_album):
?>
	<?php $iterator++; ?>
	<div class="modal fade" id="modalAlbums-<?php echo $iterator ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	    	<div class="modal-body">
	    		<h3><?php echo $reviews_album['crb_reviews_albums_name'] ?></h3>
	    		<div class="lead mb-3">
	    			<?php echo $reviews_album['crb_reviews_albums_text'] ?>
	    		</div>
	    		<div>
						<?php 
    					$reviews_photos = $reviews_album['crb_reviews_albums_photos'];
    					foreach ($reviews_photos as $reviews_photo): ?>
	    				<?php 
	    					$photo_src = wp_get_attachment_image_url($reviews_photo, 'large');
	    				?>
	    				<img src="<?php echo $photo_src ?>" alt="" class="img-fluid w-100 mb-3">
    				<?php endforeach; ?>	
					</div>
	    	</div>
	    </div>
	  </div>
	</div>
<?php endforeach; ?>

<?php get_footer(); ?>