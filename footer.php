    </section>
    <footer id="footer" class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 text-center">
    				 Подвал
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
    <?php wp_footer(); ?>
</body>
</html>