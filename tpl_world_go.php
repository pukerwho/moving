<?php
/*
Template Name: Международные переезды
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
						Перевозка личных вещей за границу • Переезд квартиры, дома или офиса за границу
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="lead">
					Переезд – это всегда важное событие, и поэтому он должен быть хорошо подготовлен и спланирован. С того момента, как вы сделаете заявку  на нашем сайте, ваш заказ будет немедленно поддержан нашими консультантами и профессионалами, специализирующимися в области домашних переездов по Украине и за ее пределы.
					<br><br>Транспортная компания Worldmoving  предлагает высококачественные услуги как частным лицам, которые собираются переехать в другую страну или по Украине, так  и юридическим лицам, которые хотят  перевести свою компанию, бизнес без потерь.
					<br><br>Наши высококвалифицированные грузчики и водители, сочетающие серьезность и профессионализм, будут сопровождать вас на протяжении всего переезда. С мастерством и эффективностью, каждый упаковщик будет вносить свой вклад в тщательную упаковку и защиту вашей мебели и личных вещей, аккуратно загружая ее в грузовик и доставляя ее в наилучших возможных условиях в ваш новый дом.
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<a href="/perevozka-lichnih-veshey-za-granitsu">
					<div class="p_page__square" style="background: url('<?php bloginfo('template_url') ?>/img/lichni-zagranitsu.jpg'); background-position: 50%;">
						<div class="p_page__square__title">
							Перевозка личных вещей за границу	
						</div>
						<div class="p_page__square__cover"></div>
					</div>
				</a>
			</div>
			<div class="col-md-6">
				<a href="/pereezd-kvartiti-doma-ofica-za-granitsu">
					<div class="p_page__square" style="background: url('<?php bloginfo('template_url') ?>/img/kvartira-zagranicu.jpg'); background-position: 50%;">
						<div class="p_page__square__title">
							Переезд квартиры, дома или офиса за границу
						</div>
						<div class="p_page__square__cover"></div>
					</div>
				</a>
			</div>
		</div>
	</div>	
</div>

<?php get_footer(); ?>