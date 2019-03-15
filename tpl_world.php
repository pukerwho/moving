<?php
/*
Template Name: Международные перевозки
*/
?>

<?php get_header(); ?>

<div class="p_poukr p_page">
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
						Международная перевозка коммерческих грузов •  Международные перевозки для физических лиц
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="lead">
					Многолетний опыт наших менеджеров и консультантов в организации грузовых перевозок разной сложности и характера позволяет гарантировать качество и ответственность в работе компании Worldmoving.
				</div>
			</div>
		</div>
		<div class="row">
			<div id="worldcommerce" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Международная перевозка коммерческих грузов
						</div>
						<div class="p_page__item__text mb-5">
							<!-- Перевозка автомобилей с помощью автовозов на любые расстояния. -->
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="http://wheelco.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/hero_inner_services_01.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="worldhuman" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Международные перевозки для физических лиц
						</div>
						<div class="p_page__item__text mb-5">
							<!-- Перевозка автомобилей с помощью автовозов на любые расстояния. -->
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Расчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="http://wheelco.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/hero_inner_services_01.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>