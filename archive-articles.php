<?php get_header(); ?>

<div class="p_page">
	<div class="p_page__welcome" style="background: url(<?php bloginfo('template_url') ?>/img/statiy.jpg); background-size: cover;">
		<div class="p_page__cover"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="p_page__title mb-4">
						Статьи
					</div>
					<div class="line mb-4"></div>
					<div class="lead text-white">
						Здесь собрана вся полезная и интересная информация.
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="b_articles py-5">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php 
					  global $wp_query, $wp_rewrite;  
					  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		    		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
						$custom_query_args = array(
							'post_type' => 'articles', 
							'posts_per_page' => 10, 
							'paged' => $current,
						);
		        $custom_query = new WP_Query( $custom_query_args );
		        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
		        	<div class="b_articles__flex">
		        		<div class="b_articles__img">
		        			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		        		</div>
		        		<div class="b_articles__info">
		        			<div class="b_articles__info-title mb-4">
		        				<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
		        			</div>
		        			<div class="line mb-4"></div>
		        			<div class="b_articles__info-date">
		        				Добавлено: <?php echo get_the_date(); ?>
		        			</div>
		        		</div>
		        	</div>
			    <?php endwhile; endif; ?>
		    </div>
		    <div class="col-md-3">
		    	<?php get_template_part('blocks/articles-sidebar') ?>
		    </div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>