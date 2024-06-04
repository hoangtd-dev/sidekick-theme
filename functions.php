<?php

function my_awesome_scripts()
{
	// wp_enqueue_style("style", get_template_directory_uri() . "/assets/main.css", array(), null);
	wp_enqueue_style( 'rit-style-css', get_stylesheet_directory_uri() . '/assets/main.css', array(), filemtime(  get_stylesheet_directory() . '/assets/main.css' ) );
	wp_enqueue_script("script", get_template_directory_uri() . "/assets/main.min.js", array(), false);
}
add_action("wp_enqueue_scripts", "my_awesome_scripts");
