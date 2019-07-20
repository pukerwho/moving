<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_main.php' )
    ->add_fields( array(
    	Field::make( 'complex', 'crb_main_reviews', 'Отзывы' )->add_fields( array(
		        Field::make( 'textarea', 'crb_main_review_text', 'Текст' ),
                Field::make( 'text', 'crb_main_review_name', 'Имя' ),
                Field::make( 'text', 'crb_main_review_date', 'Дата' ),
		    ) ),
    ) );
}

?>