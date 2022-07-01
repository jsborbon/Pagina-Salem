<?php
/**
 * Enqueue/Echo the Genesis Extender stylesheets/CSS.
 *
 * @package Extender
 */

add_action( 'genesis_meta', 'genesis_extender_load_stylesheets', 15 );
/**
 * Enqueue the Genesis Extender stylesheets.
 *
 * @since 1.0.2
 */
function genesis_extender_load_stylesheets()
{
	add_action( 'wp_enqueue_scripts', 'genesis_extender_add_stylesheets' );
}

/**
 * Determine whether or not to enqueue the Custom stylesheet based on whether or not Custom CSS exists.
 *
 * @since 1.0
 */
function genesis_extender_add_stylesheets()
{
	if( genesis_extender_get_settings( 'include_column_class_styles' ) )
		$default_stylesheet = 'default-with-columns.css';
	else
		$default_stylesheet = 'default.css';

	$genesis_extender_css_builder_popup = false;
	if( genesis_extender_get_custom_css( 'css_builder_popup_active' ) && current_user_can( 'administrator' ) )
		$genesis_extender_css_builder_popup = true;

	if( !genesis_extender_get_settings( 'minify_stylesheets' ) || $genesis_extender_css_builder_popup )
		wp_enqueue_style( 'genesis-extender-default', GENEXT_URL . 'lib/css/' . $default_stylesheet, false, filemtime( GENEXT_PATH . 'lib/css/' . $default_stylesheet ) );
	
	if( !genesis_extender_get_settings( 'minify_stylesheets' ) && file_exists( genesis_extender_get_custom_stylesheet_path() ) && !$genesis_extender_css_builder_popup )
		wp_enqueue_style( 'genesis-extender-custom', genesis_extender_get_custom_stylesheet_url(), false, filemtime( genesis_extender_get_custom_stylesheet_path() ) );

	if( genesis_extender_get_settings( 'minify_stylesheets' ) && !$genesis_extender_css_builder_popup )
		wp_enqueue_style( 'genesis-extender-minified', genesis_extender_get_minified_stylesheet_url(), false, filemtime( genesis_extender_get_minified_stylesheet_path() ) );
		
    if( genesis_extender_get_settings( 'font_awesome_css' ) && !genesis_extender_get_settings( 'font_awesome_cdn' ) )
		wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/' . GENEXT_FONT_AWESOME_VERSION . '/css/font-awesome.min.css', array(), GENEXT_FONT_AWESOME_VERSION );
	elseif( genesis_extender_get_settings( 'font_awesome_css' ) && genesis_extender_get_settings( 'font_awesome_cdn' ) )
		wp_enqueue_script( 'font-awesome-cdn', genesis_extender_get_settings( 'font_awesome_cdn_url' ) );
}
