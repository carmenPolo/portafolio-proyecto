<?php

/**
 * Style Enqueue
 * Registers and Enqueue Styles in head
 *
 * @since   1.0
 * @version 1.3
 * @see     https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @see     https://developer.wordpress.org/reference/functions/wp_register_style/
 * @see     https://developer.wordpress.org/reference/functions/wp_deregister_style/
 * @see     https://developer.wordpress.org/reference/functions/get_theme_file_uri/
 * @see     https://developer.wordpress.org/reference/functions/get_parent_theme_file_uri/
 */
function dl_enqueue_style() {

	global $theme_options;
	$theme_data = wp_get_theme();


	/* Register Styles */
	wp_register_style( 'reset', get_theme_file_uri( '/assets/css/reset.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style( 'flexslider', get_theme_file_uri( '/assets/css/flexslider.css'), null, '2.7.1', 'screen' );
	wp_register_style( 'flickity', get_theme_file_uri( '/assets/css/flickity.css'), null, '2.1.0', 'screen' );
	wp_register_style( 'fontawesome', get_theme_file_uri( '/assets/css/fontawesome.css'), null, '5.2.0', 'screen' );
	wp_register_style( 'main_style', get_theme_file_uri( '/assets/css/style.css'), array('reset'), $theme_data->get( 'Version' ), 'screen' );

	wp_register_style( 'lora', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Lora', null, null, 'screen' );
	wp_register_style( 'aleo', 'https://fonts.googleapis.com/css?family=Aleo:300,400,700', null, null, 'screen' );
	wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css', null, null, 'screen' );
	wp_register_style( 'bootstrapcdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, null, 'screen' );
	wp_register_style( 'mistyle', get_theme_file_uri( 'assets/css/mistyle.css'), null, null, 'screen' );

	/* Enqueue Styles */
	if ( $theme_options['slider']['flexslider'] ) {
		wp_enqueue_style( 'flexslider' );
	}

	if ( $theme_options['slider']['flickity'] ) {
		wp_enqueue_style( 'flickity' );
	}

	if ( $theme_options['fontawesome'] ) {
		wp_enqueue_style( 'fontawesome' );
	}

	wp_enqueue_style( 'main_style' );

	wp_enqueue_style( 'lora' );
	wp_enqueue_style( 'aleo' );
	wp_enqueue_style( 'fontawesome' );
	wp_enqueue_style( 'bootstrapcdn' );
	wp_enqueue_style( 'mistyle' );


}

add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );
