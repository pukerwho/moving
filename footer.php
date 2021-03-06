    <?php if( !is_page_template( 'tpl_reviews.php' )): ?>
      <section id="b_reviews">
        <?php get_template_part('blocks/b_reviews') ?>
      </section>
    <?php endif; ?>
    </section>
    <footer id="footer" class="footer py-5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 text-center">
    				<div class="footer__subtitle mb-4">
    					Наши контакты
    				</div>
    				<div class="lead">
    					<i class="fas fa-phone-square mr-2"></i>
    					<a href="tel:+38 (066) 160-1-444">+38 (066) 160-1-444</a>
    				</div>
    				<div class="lead">
    					<i class="fas fa-phone-square mr-2"></i>
    					<a href="tel:+38 (063) 160-1-444">+38 (063) 160-1-444</a>
    				</div>
    				<div class="lead mb-4">
    					<i class="fas fa-phone-square mr-2"></i>
    					<a href="tel:+38 (097) 125-2-444">+38 (097) 125-2-444</a>
    				</div>
            <div class="lead mb-4">
              <div class="text-center">
                Viber:
              </div>
              <div class="d-flex justify-content-center">
                <div>
                  <i class="fab fa-viber mr-2"></i>
                </div>
                <div>
                  <div>
                    <a href="viber://chat?number=+380968580682 ">+38 (096) 858-06-82 </a>    
                  </div>
                  <div>
                    <a href="viber://chat?number=+380635101222">+38 (063) 510-1-222</a>    
                  </div>
                </div>
              </div>
            </div>
            <div class="lead mb-4">
              <div class="text-center">
                WhatsApp:
              </div>
              <div class="d-flex justify-content-center">
                <div>
                  <i class="fab fa-whatsapp mr-2"></i>
                </div>
                <div>
                  <div>
                    <a href="https://api.whatsapp.com/send?phone=380968580682 ">+38 (096) 858-06-82</a>
                  </div>
                  <div>
                    <a href="https://api.whatsapp.com/send?phone=380635101222">+38 (063) 510-1-222</a>
                  </div>
                </div>
              </div>
            </div>
    				<div class="lead mb-4">
    					<i class="far fa-envelope-open mr-2"></i>
    					<a href="mailto:ua.worldmoving@gmail.com">ua.worldmoving@gmail.com</a>
    				</div>
    				<div class="social d-flex justify-content-center mb-4">
    					<a href="https://www.facebook.com/Woldmoving.Kravchenko.O.V/" target="_blank">
    						<li>
	    						<i class="fab fa-facebook-f"></i>	
	    					</li>
    					</a>
    					<a href="#">
	    					<li>
	    						<i class="fab fa-instagram"></i>
	    					</li>	
    					</a>
    					<a href="#">
	    					<li>
	    						<i class="fab fa-youtube"></i>
	    					</li>	
    					</a>
    				</div>
    				<div class="footer__line mb-4"></div>
    				<div class="copyright">
              <?php if( !is_page_template( 'tpl_main.php' )): ?>
                2019 &copy; WorldMoving.com.ua
              <? else: ?>
                2019 &copy; 
                <span typeof="v:Breadcrumb"> <a href="http://worldmoving.com.ua/" rel="v:url" property="v:title"> WorldMoving.com.ua</a> › </span> <span typeof="v:Breadcrumb"> <a href="http://worldmoving.com.ua/#best" rel="v:url" property="v:title">Мир грузовых перевозок</a> </span>
              <?php endif ?>
              <br><br>
              <div>
                Разработка сайта: <a href="https://timeto.top/" target="_blank">Time2Top</a>
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>
    <div class="modal-price">
    	<div class="b_contact py-5">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6">
							<div class="b_contact__box">
								<div class="b_contact__title mb-4">
									Ваши контактные<br>данные для расчета
								</div>
								<div class="b_contact__form">
									<?php echo do_shortcode('[contact-form-7 id="16" title="Расчет стоимости"]') ?>
								</div>
								<div class="modal-price__close">
					    		<i class="fas fa-times"></i>
					    	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
    <div class="modal-bg"></div>
    <div class="countdown">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="countdown__before">
              <div class="countdown__text">
                <img src="<?php bloginfo('template_url') ?>/img/gift.svg" alt="" width="32px" class="mr-3">
                Через 4 минуты вы получите подарок!
              </div>
              <div id="count" class="countdown__count"></div>
            </div>
            <div class="countdown__after">
              Отлично! Вы можете рассчитывать на скидку в 10%. Ваш промокод: <span>мувинг2019</span>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <?php wp_footer(); ?>
</body>
</html>