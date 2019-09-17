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
    Container::make( 'post_meta', 'More' )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'tpl_reviews.php' )
        ->add_fields( array(
        Field::make( 'complex', 'crb_reviews_video', 'Видео-отзывы' )
        ->add_fields( array(
            Field::make( 'textarea', 'crb_reviews_video_iframe', 'Код видео' ),
            Field::make( 'text', 'crb_reviews_video_name', 'Имя' ),
            Field::make( 'text', 'crb_reviews_video_date', 'Дата' ),
            ) 
        ),
        Field::make( 'complex', 'crb_reviews_albums', 'Альбомы' )->add_fields( array(
            Field::make( 'text', 'crb_reviews_albums_name', 'Название альбома' ),
            Field::make( 'textarea', 'crb_reviews_albums_text', 'Текст' ),
            Field::make( 'media_gallery', 'crb_reviews_albums_photos', 'Фотографии' )->set_type( array( 'image' ) ),
        )),
        Field::make( 'complex', 'crb_reviews_text', 'Текстовые отзывы' )
        ->add_fields( array(
            Field::make( 'text', 'crb_reviews_text_name', 'Имя' ),
            Field::make( 'text', 'crb_reviews_text_date', 'Дата' ),
            Field::make( 'textarea', 'crb_reviews_text_content', 'Отзыв' ),
            ) 
        ),
        ) 
    );
}

?>