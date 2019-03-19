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
		<div class="row mb-5">
			<div class="col-md-12 text-center text-uppercase">
				<h3>
					Возможно вас заинтересует	
				</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-5">
							<?php echo get_the_title( rwmb_meta( 'meta-other-page' ) ); ?>
						</div>
						<div class="">
							<a href="<?php echo get_permalink( rwmb_meta( 'meta-other-page' ) ) ?>">
								<div class="my-btn">
									Подробнее
								</div>
							</a>
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php echo get_the_post_thumbnail_url( rwmb_meta( 'meta-other-page' ) ) ?>	" alt="">	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>