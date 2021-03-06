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
			<div id="avtotransport" class="col-md-12 p_page__block mb-5">
				<div class="p_page__grid">
					<div class="p_page__item">
						<div class="p_page__item__title mb-3">
							Автотранспорт
						</div>
						<div class="p_page__item__text mb-5">
							Перевозка автомобилей с помощью автовозов на любые расстояния.
						</div>
						<a href="/perevozka-avtotransporta/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
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
							Сборные грузы
						</div>
						<div class="p_page__item__text mb-5">
							Организация услуги сборных грузов помогает клиенту экономить бюджет на доставку, не прибегая к необходимости привлекать отдельный транспорт для перевозки.
						</div>
						<a href="/sbornye-gruzy/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
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
						<a href="/perevozka-promyshlennogo-oborudovaniya/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
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
							Перевозка строительных материалов как для частных лиц, строительства дома, дачи, коттеджа, так и для крупных застройщиков. Данная услуга перевозки предусматривает подбор специализированного транспорта (манипулятор, пирамида, открытая платформа, и т.д.)
						</div>
						<a href="/perevozka-stroitelnyh-materialov/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
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
						<a href="/perevozka-hozyajstvennyh-tovarov/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
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
						<a href="/produkty-pitaniya/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
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
						<a href="/promyshlennye-othody/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
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
						<a href="/ofisnye-i-domashnie-pereezdy/">
							<div class="my-btn">
								Подробнее
							</div>	
						</a>
					</div>
					<div class="p_page__item">
						<div class="p_page__item__img">
							<img src="<?php bloginfo('template_url') ?>/img/oficnie.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="lead">
					<h4>Перевозки грузов по Украине от Worldmoving</h4>
					<p>С необходимостью грузоперевозок можно столкнуться в личных целях, организовывая домашний переезд по Украине или же для бизнеса. Организация перевозок грузов – основная наша специализация, Worldmoving поможет доставить груз в необходимое место в нужные клиентам сроки. Цена за перевозку груза за км рассчитывается на начальном этапе, учитывая все особенности габариты груза. Наша компания работает на рынке логистических услуг много лет, поэтому заказывая услуги на нашем сайте вы можете быть уверенны, что не возникнет никаких неприятных ситуаций.</p>
					<p>Одним из главных наших преимуществ является наличие собственного автопарка. С помощью собственных грузовых авто мы можем перевозить различные негабаритные товары, автомобили, продукты питания, контейнеры. Мы составляем самый выгодный для клиента маршрут, по которому перевозится груз, чтобы сэкономить средства.  Если вам уже сегодня необходима  перевозка грузов, цена на нашем сайте вас приятно удивит. А самое главное, стоимость не увеличиться в процессе перевозки, потому что мы учитываем все нюансы, особенности груза, дороги на этапе планирования и заключения договора с клиентом. В нашей компании все прозрачно – мы предоставляем своим заказчикам расчеты по запросу.</p>
					<h4>От чего зависит стоимость перевозки грузов за км?</h4>
					<p>Чтобы рассчитать стоимость перевозки нужно учитывать особенности грузов: если это продукты, то необходимо задействовать рефрижератор, если это авто – автовоз, если это переезд офиса – тентованый грузовик. Услуги разных авто имеют разную цену.</p>
					<p>Следующий момент, который учитывается – объем и вес груза, есть авто различной вместимости 5, 10, 20 или 40 тонн, чтобы рассчитать стоимость правильно – нам нужно знать, какой автомобиль вам понадобится.</p>
					<p>От направления маршрута. Наши менеджеры составляют план перевозок и для каждого направления перевозок грузов по Украине есть собственная стоимость.</p>
					<h4>Наши преимущества</h4>
					<p>Так как компания работает на рынке более 18 лет – опыт, знание состояния дорог, широкий спектр услуг позволяют выполнять все заказы в срок с гарантией качества. Все грузы будут доставлены в целости и сохранности. Если вам необходимо заказать перевозку грузов для переезда офиса, то можете не сомневаться, вся мебель и бумаги будут доставлены в том же состоянии, даже если ехать надо через всю страну. Так же мы поможем осуществить переезд внутри города или области.</p>
					<p>Все водители грузовых авто профессионалы, которые регулярно проходят медицинский осмотр и им можно доверить перевозку даже самых ценных грузов, не сомневаясь в их компетенции.</p>
					<p>Мы много лет сотрудничаем со строительными компаниями Украины, поэтому имеем огромный опыт в перевозке негабаритных строительных материалов, поэтому смело звоните и уточняйте стоимость перевозки нужного вам объема. </p>
					<p>Менеджеры-логисты с многолетним опытом работы смогут ответить на любой ваш вопрос и подсказать актуальную стоимость тех или иных услуг. На нашем сайте не указана цена за перевозку груза за км, потому что для каждого случая она индивидуальна. Чтобы заказать машину для перевозки груза по Украине вы можете позвонить нам или заполнить форму на сайте, и мы свяжемся с вами в самые короткие сроки.</p>
				</div>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-md-12 text-center">
				<div>
					<div class="my-btn modal-price-btn">
						Раcсчитать стоимость
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>