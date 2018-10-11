<?php

/*
 * Меню
 * */
register_nav_menu('menu', 'Primary Menu');

/*
 * слайдер
 * */
register_sidebar(array(
	'name' => 'Слайдер на шлавной странице',
	'id' => 'slider_index',
	'description' => 'Добавте слайдер через виджет Текст',
	'before_widget' => '',
	'after_widget' => ''
));
/*
 * миниатюры
 * */
add_theme_support('post-thumbnails');

?>