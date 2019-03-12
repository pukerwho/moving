<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>

<section id="welcome">
	<?php get_template_part('blocks/b_welcome') ?>
</section>

<section id="whyus">
	<?php get_template_part('blocks/b_whyus') ?>
</section>

<section id="b_ukraine">
	<?php get_template_part('blocks/b_ukraine') ?>
</section>

<section id="b_price">
	<?php get_template_part('blocks/b_price') ?>
</section>

<!-- <section id="b_contact">
	<?php get_template_part('blocks/b_contact') ?>
</section> -->

<?php get_footer(); ?>