<div class="b_reviews pt-5">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12 text-center">
				<h2>Отзывы</h2>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-12">
				<!-- Slider main container -->
				<div class="swiper-container swiper-talent">
				  <!-- Additional required wrapper -->
				  <div class="swiper-wrapper mb-5">
				    <!-- Slides -->
				    <?php 
            $args_main_page = [
                'post_type' => 'page',
                'fields' => 'ids',
                'nopaging' => true,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'tpl_main.php'
            ];
            $main_pages = get_posts( $args_main_page );
            foreach ( $main_pages as $main_page ): ?>
	          	<?php
	            $reviews_slides = carbon_get_post_meta($main_page, 'crb_main_reviews' );
	            foreach ( $reviews_slides  as $reviews_slide ): ?>
					    <div class="swiper-slide">
					      <div class="b_reviews__detail">
					      	<div class="b_reviews__detail-img mb-4">
					      		<img src="<?php bloginfo('template_url') ?>/img/quote.svg" alt="">
					      	</div>
					      	<div class="b_reviews__detail-text mb-4">
					      		<?php echo $reviews_slide['crb_main_review_text'] ?>	
					      	</div>
					        <div class="b_reviews__detail-name">
					        	<?php echo $reviews_slide['crb_main_review_name'] ?>	
					        </div>
					        <div class="b_reviews__detail-date">
					        	<?php echo $reviews_slide['crb_main_review_date'] ?>	
					        </div>
					      </div>
					    </div>
					  	<?php endforeach; ?>
					  <?php endforeach; ?>
				  </div>
				  <!-- If we need pagination -->
				  <div class="swiper-pagination"></div>

				  <!-- If we need navigation buttons -->
				  <!--     <div class="swiper-button-prev"></div> -->
				  <!--     <div class="swiper-button-next"></div> -->

				</div>
			</div>
			
		</div>
	</div>
</div>