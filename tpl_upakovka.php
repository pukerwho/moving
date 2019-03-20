<?php
/*
Template Name: Грузчики, упаковка
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
						Услуги грузчиков • Упаковочные материалы • Услуга сборки/разборки мебели • Ответственное хранение
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="lead">
					<div class="text-center mb-4">
						Все виды работ по упаковке, погрузке и выгрузке, разборке и сборке мебели, хранение грузов и багажа.	
					</div>
					<div class="text-center text-uppercase mb-3">
						Муверы компании Worldmoving:
					</div>
					<div class="p_page__list d-flex align-items-center mb-4">
						<div class="p_page__list-icon mr-4">
							<img src="<?php bloginfo('template_url') ?>/img/tick.svg" width="25px" alt="">
						</div>
						<div class="p_page__list-text">
							перемещают тяжести разного веса, понимая, какие инструменты и приспособления для этого необходимы;	
						</div>
					</div>
					<div class="p_page__list d-flex align-items-center mb-4">
						<div class="p_page__list-icon mr-4">
							<img src="<?php bloginfo('template_url') ?>/img/tick.svg" width="25px" alt="">
						</div>
						<div class="p_page__list-text">
							разбирают и собирают любую мебель;
						</div>
					</div>
					<div class="p_page__list d-flex align-items-center mb-4">
						<div class="p_page__list-icon mr-4">
							<img src="<?php bloginfo('template_url') ?>/img/tick.svg" width="25px" alt="">
						</div>
						<div class="p_page__list-text">
							подбирают упаковочный материал, разбираясь в его многообразии, оценивая его необходимое количество и логическое предназначение;	
						</div>
					</div>
					<div class="p_page__list d-flex align-items-center mb-4">
						<div class="p_page__list-icon mr-4">
							<img src="<?php bloginfo('template_url') ?>/img/tick.svg" width="25px" alt="">
						</div>
						<div class="p_page__list-text">
							заранее планируют работу на объекте, разбираясь в планах и чертежах;
						</div>
					</div>
					<div class="p_page__list d-flex align-items-center mb-4">
						<div class="p_page__list-icon mr-4">
							<img src="<?php bloginfo('template_url') ?>/img/tick.svg" width="25px" alt="">
						</div>
						<div class="p_page__list-text">
							всегда опрятны и вежливы, поскольку представляют собой лицо компании;
						</div>
					</div>
					<div class="p_page__list d-flex align-items-center mb-4">
						<div class="p_page__list-icon mr-4">
							<img src="<?php bloginfo('template_url') ?>/img/tick.svg" width="25px" alt="">
						</div>
						<div class="p_page__list-text">
							несут ответственность за качество своей работы и вещи клиентов;
						</div>
					</div>
					<div class="p_page__list d-flex align-items-center">
						<div class="p_page__list-icon mr-4">
							<img src="<?php bloginfo('template_url') ?>/img/tick.svg" width="25px" alt="">
						</div>
						<div class="p_page__list-text">
							проходят специальное обучение для совершенствования своих навыков и знаний;
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div id="uslugigruzchikov" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Услуги грузчиков
						</div>
						<div class="p_page__item__text mb-5">
							Погрузка и выгрузка Вашей мебели и вещей, подъем и снос с этажа габаритных или тяжелых предметов таких, как холодильник, пианино, кровать, сейф и т.д.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/uslugi-gruzchikov.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="upakovkamaterial" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Упаковочные материалы
						</div>
						<div class="p_page__item__text mb-5">
							Расчет необходимого количества и доставка упаковочного материала. Работа по упаковке для хранения, перевозки вещей, мебели.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/upakovochnyye-materialy.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="sborkamebeli" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Услуга сборки и разборки мебели
						</div>
						<div class="p_page__item__text mb-5">
							Разборка и сборка мебели любой сложности.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/usluga-sborki-razborki-mebeli.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="hranenie" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Ответственное хранение
						</div>
						<div class="p_page__item__text mb-5">
							Хранение вещей, мебели, багажа различного объема на любые сроки.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/otvetstvennoye-khraneniye.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>