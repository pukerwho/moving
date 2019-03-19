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
			<div class="col-md-12 text-center">
				<div class="lead">
					Решения задач по перемещению Ваших грузов по всему миру
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
							Комплекс услуг по перевозке грузов коммерческого характера любой сложности на любые расстояния. Помощь и консультация при оформлении таможенной документации на груз. 
							<br><br>Своевременная подача транспорта под загрузку. Отслеживание груза на время перевозки.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/worldperevozkcommerce.jpg" alt="">	
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
							Комплекс услуг по перемещению грузов как из Украины за границу, так и в Украину из-за границы для частных лиц. По большей части сюда входят такие услуги, как международная перевозка личных вещей, домашний международный переезд, международная отправка посылок.
							<br><br>Для подробной информации, касающейся оформления необходимой документации и последовательности действий в процессе данной услуги, обратитесь к нашим консультантам по телефону или через форму заявки.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/worldperevizkifizliz.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>