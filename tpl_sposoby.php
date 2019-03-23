<?php
/*
Template Name: Способы доставки
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
						Перевозка авиатранспортом • Перевозка наземным транспортом • Контейнерная перевозка • Перевозка автотранспорта, водного транспорта за границу 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="lead">
					Для перемещения грузов в любую точку мира компания Worldmoving предлагает разные способы доставки.
				</div>
			</div>
		</div>
		<div class="row">
			<div id="perevozkanazem" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Перевозка наземным транспортом
						</div>
						<div class="p_page__item__text mb-5">
							Все виды грузовых авто для перевозок по суше, где существуют дороги.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/perevozkanazemnim.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="perevozkaavia" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Перевозка авиатранспортом
						</div>
						<div class="p_page__item__text mb-5">
							Главным преимуществом авиаперевозок является скорость доставки грузов на дальние расстояния.
							<br><br>Для международной доставки личных вещей, международного переезда авиатранспортом необходим максимально точный перечень груза, его габаритов и веса, в определении стоимости авиаперевозки.
							<br><br>Свяжитесь с нами по телефону или через форму заявки. Менеджеры компании Woldmoving окажут консультацию и дадут ответы на все Ваши вопросы в области перевозок, как личных вещей, так и коммерческих грузов авиатранспортом.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/aviaperevozky.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="perevozkacontainer" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Контейнерная перевозка
						</div>
						<div class="p_page__item__text mb-5">
							Отправка грузов по морю.<br>Подача контейнера под загрузку.<br>Таможенное оформление груза.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/containerperevozka.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<!-- <div id="perevozkatransporta" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Перевозка автотранспорта, водного транспорта за границу
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
							<img src="<?php bloginfo('template_url') ?>/img/perevozkazagranicuavto.jpg" alt="">	
						</div>
					</div>
				</div>
			</div> -->
		</div>
	</div>
</div>

<?php get_footer(); ?>