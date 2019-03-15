<?php
/*
Template Name: Специализированные перевозки
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
					<div class="line mb-4"></div>
					<div class="p_page__text">
						Рефрижераторные перевозки • Перевозки опасных грузов • Перевозки негабаритных грузов • Сыпучие грузы • Наливные грузы • Перевозка скота
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="lead">
					Text
				</div>
			</div>
		</div>
		<div class="row">
			<div id="refregeratorniy" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Рефрижераторные перевозки
						</div>
						<div class="p_page__item__text mb-5">
							
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/refrizheratornyye-perevozki.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="opacniygruzi" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Перевозки опасных грузов
						</div>
						<div class="p_page__item__text mb-5">
							
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/perevozki-opasnykh-gruzov.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="negabarit" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Перевозки негабаритных грузов
						</div>
						<div class="p_page__item__text mb-5">
							
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/perevozki-negabaritnykh-gruzov.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="sipuchie" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Сыпучие грузы
						</div>
						<div class="p_page__item__text mb-5">
							
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/sypuchiye-gruzy.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="nalivgruzi" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Наливные грузы
						</div>
						<div class="p_page__item__text mb-5">
							
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/nalivnyye-gruzy.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="perevozkaskota" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Перевозка скота
						</div>
						<div class="p_page__item__text mb-5">
							
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/perevoz-skota.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>