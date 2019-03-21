<?php
/*
Template Name: Грузы по Украине
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
						Автотранспорт •  Паллетные грузы • Промышленное оборудование • Строительные материалы • Товары народного потребления • Продукты питания • Промышленные отходы • Офисные и домашние переезды
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
			<div id="avtotransport" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Автотранспорт
						</div>
						<div class="p_page__item__text mb-5">
							Перевозка автомобилей с помощью автовозов на любые расстояния.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/avtotransport.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="pallet" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Паллетные грузы
						</div>
						<div class="p_page__item__text mb-5">
							Организация услуги сборных грузов помогает клиенту экономить бюджет на доставку, не прибегая к необходимости привлекать отдельный транспорт для перевозки.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/palletniy.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="promobor" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Промышленное оборудование
						</div>
						<div class="p_page__item__text mb-5">
							Перевозка оборудования для предприятий, фабрик, промышленных комплексов.
							<br>Включает в себя перевозки любой сложности с индивидуальным подходом к каждому грузу.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/promishleniy.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="stroitel" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Строительные материалы
						</div>
						<div class="p_page__item__text mb-5">
							Перевозка строительных материалов как для частных лиц, строительства дома, дачи, коттеджа, так и для крупных застройщиков. Данная услуга перевозки предусматривает подбор специализированного транспорта (манипулятор, пирамида и т.д.)
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/stroitelny.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div id="narodtovar" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Товары народного потребления
						</div>
						<div class="p_page__item__text mb-5">
							Перевозка товаров, предназначенных для продажи населению с целью личного, семейного и домашнего использования.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/narodnogo.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div id="productpitanie" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Продукты питания
						</div>
						<div class="p_page__item__text mb-5">
							Для доставки грузов подобного характера чаще всего используют рефрижераторные перевозки с поддержкой необходимого температурного режима.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/producty.jpg" alt="">	
						</div>
					</div>
				</div>
			</div>
			<div id="promothod" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Промышленные отходы
						</div>
						<div class="p_page__item__text mb-5">
							Ряд предприятий сталкивается с проблемой удаления бесполезных либо вредных материалов, образующихся в ходе промышленного производства.  Такие отходы вырабатываются буквально на каждой стадии промышленного процесса. Уровень опасности промышленных отходов склоняется от безвредных материалов, как песок, до диоксинов, которые являются одними из самых токсичных и опасных отходов. Вывоз и утилизация вредных промышленных отходов, которые угрожают как здоровью людей, так и состоянию экологии, – незамедлительная задача.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/promothody.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div id="homeandoffice" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Офисные и домашние переезды
						</div>
						<div class="p_page__item__text mb-5">
							Глобальный переезд всегда важное и яркое событие, как для бизнесменов, желающих сменить место дислокации своего офиса, предприятия, так и для людей, желающих перевезти все нажитое в новое «уютное гнёздышко». Первое, с чем сталкиваются люди в приближении данного мероприятия, это суматоха – «с чего начать, и как организовать». 
							<br>Компания Worldmoving возьмет на себя все тяготы и Ваши головные боли в организации домашнего переезда, офисного переезда, дачного переезда.
						</div>
						<div class="">
							<div class="my-btn modal-price-btn">
								Раcсчитать стоимость
							</div>	
						</div>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/oficnie.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>