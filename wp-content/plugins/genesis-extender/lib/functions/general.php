<?php
/**
 * This file houses the functions that don't fit in any of the
 * other Genesis Extender function files.
 *
 * @package Extender
 */

add_filter( 'body_class', 'genesis_extender_body_classes', 15 );
/**
 * Create an array of body classes that reflect various Genesis Extender settings.
 *
 * @since 1.0
 * @return an array of Genesis Extender body classes.
 */
function genesis_extender_body_classes( $classes ) {

	if( !empty( $_SERVER['HTTP_USER_AGENT'] ) )
	{
		$browser = $_SERVER['HTTP_USER_AGENT'];
	
		// OS specific classes
		if( preg_match( '/Mac/', $browser ) )
			$classes[] = 'mac';
		elseif( preg_match( '/Windows/', $browser ) )
			$classes[] = 'windows';
		elseif( preg_match( '/Linux/', $browser ) )
			$classes[] = 'linux';
		else
			$classes[] = 'unknown-os';
	
		// Browser specific classes
		if( preg_match( '/Chrome/', $browser ) )
		{
			$classes[] = 'chrome';
		}
		elseif( preg_match( '/Safari/', $browser ) )
		{
			$classes[] = 'safari';
			
			preg_match( '/Version\/(\d.\d)/si', $browser, $matches );
			
			if( isset( $matches[0] ) && isset( $matches[0][1] ) )
			  $sf_version = 'sf' . str_replace( '.', '-', $matches[1] );
			else
			  $sf_version = '';
	
			$classes[] = $sf_version;
		}
		elseif( preg_match( '/Opera/', $browser ) )
		{
			$classes[] = 'opera';
			
			preg_match( '/Opera\/(\d.\d)/si', $browser, $matches );
			$op_version = 'op' . str_replace( '.', '-', $matches[1] );      
			$classes[] = $op_version;
		}
		elseif( preg_match( '/MSIE/', $browser ) )
		{
			$classes[] = 'msie';
			
			if( preg_match( '/MSIE 6.0/', $browser ) )
					$classes[] = 'ie6';
			elseif( preg_match( '/MSIE 7.0/', $browser ) )
					$classes[] = 'ie7';
			elseif( preg_match( '/MSIE 8.0/', $browser ) )
					$classes[] = 'ie8';
			elseif( preg_match( '/MSIE 9.0/', $browser ) )
					$classes[] = 'ie9';
			elseif( preg_match( '/MSIE 10.0/', $browser ) )
					$classes[] = 'ie10';
		}	
		elseif( preg_match( '/Firefox/', $browser ) && preg_match( '/Gecko/', $browser ) )
		{
			$classes[] = 'firefox';
			
			preg_match( '/Firefox\/(\d)/si', $browser, $matches );
			$ff_version = 'ff' . str_replace( '.', '-', $matches[1] );      
			$classes[] = $ff_version;
		}
		else
		{
			$classes[] = 'unknown-browser';
		}
	}

	if( is_front_page() && genesis_extender_get_settings( 'static_homepage' ) )
		$classes[] = 'genesis-extender-home';

	if( is_singular() && genesis_extender_get_custom_field( '_genext_labels', false, true ) != '' )
	{
		foreach ( genesis_extender_get_custom_field( '_genext_labels', false, true ) as $key => $value )
		{
			$classes[] = 'label-' . $key;
		}
	}

	$classes[] = 'override';

	return $classes;
}

if ( genesis_extender_get_custom_css( 'css_builder_popup_active' ) && current_user_can( 'administrator' ) && PHP_VERSION >= 5.3 )
	add_action( 'wp_head', 'genesis_extender_hooks_map' );
	
/**
 * Display Genesis action hooks on front-end of site (visible to logged in admins only)
 *
 * @since 1.6.7
 */
function genesis_extender_hooks_map() {
    
    $hooks = genesis_extender_hooks_array();
    
    foreach ( $hooks as $hook => $value ) {
        
        add_action( '' . $value . '', function() use ( $value ) { echo '<div id="' . $value . '" class="genesis-extender-mapped-hooks"></div>'; } );
        
    }
    
}

/**
 * Build an array of Genesis action hooks.
 *
 * @since 1.6.7
 * @return an array of Genesis action hooks.
 */
function genesis_extender_hooks_array() {
    
    $hooks = array( 
		'genesis_doctype',
		'genesis_title',
		'genesis_meta',
		'wp_head',
		'genesis_before',
		'genesis_after',
		'genesis_before_header',
		'genesis_header',
		'genesis_after_header',
		'genesis_site_title',
		'genesis_site_description',
		'genesis_header_right',
		'genesis_before_content_sidebar_wrap',
		'genesis_after_content_sidebar_wrap',
		'genesis_before_content',
		'genesis_after_content',
		'genesis_extender_before_ez_home',
		'genesis_extender_after_ez_home',
		'genesis_before_entry',
		'genesis_after_entry',
		'genesis_entry_header',
		'genesis_before_entry_content',
		'genesis_entry_content',
		'genesis_after_entry_content',
		'genesis_entry_footer',
		'genesis_before_post',
		'genesis_after_post',
		'genesis_before_post_title',
		'genesis_post_title',
		'genesis_after_post_title',
		'genesis_before_post_content',
		'genesis_post_content',
		'genesis_after_post_content',
		'genesis_before_loop',
		'genesis_loop',
		'genesis_after_loop',
		'genesis_after_endwhile',
		'genesis_loop_else',
		'genesis_before_comments',
		'genesis_comments',
		'genesis_after_comments',
		'genesis_list_comments',
		'genesis_before_pings',
		'genesis_pings',
		'genesis_after_pings',
		'genesis_before_comment',
		'genesis_after_comment',
		'genesis_before_comment_form',
		'genesis_comment_form',
		'genesis_after_comment_form',
		'genesis_sidebar',
		'genesis_before_sidebar_widget_area',
		'genesis_after_sidebar_widget_area',
		'genesis_sidebar_alt',
		'genesis_before_sidebar_alt_widget_area',
		'genesis_after_sidebar_alt_widget_area',
		'genesis_before_footer',
		'genesis_footer',
		'genesis_after_footer'
    );
    
    return $hooks;
    
}

add_action('after_setup_theme', 'genesis_extender_add_custom_thumb_sizes');
/**
 * Add custom thumbnail sizes if set in Genesis Extender Settings.
 *
 * @since 1.0
 */
function genesis_extender_add_custom_thumb_sizes()
{
	if( genesis_extender_get_settings( 'custom_image_size_one_mode' ) == '' )
		return;

	$custom_image_size_one_crop = genesis_extender_get_settings( 'custom_image_size_one_mode' ) == 'crop' ? true : false;
	add_image_size( 'custom-thumb-1', genesis_extender_get_settings( 'custom_image_size_one_width' ), genesis_extender_get_settings( 'custom_image_size_one_height' ), $custom_image_size_one_crop );

	if( genesis_extender_get_settings( 'custom_image_size_two_mode' ) != '' )
	{
		$custom_image_size_two_crop = genesis_extender_get_settings( 'custom_image_size_two_mode' ) == 'crop' ? true : false;
		add_image_size( 'custom-thumb-2', genesis_extender_get_settings( 'custom_image_size_two_width' ), genesis_extender_get_settings( 'custom_image_size_two_height' ), $custom_image_size_two_crop );
	}
	if( genesis_extender_get_settings( 'custom_image_size_three_mode' ) != '' )
	{
		$custom_image_size_three_crop = genesis_extender_get_settings( 'custom_image_size_three_mode' ) == 'crop' ? true : false;
		add_image_size( 'custom-thumb-3', genesis_extender_get_settings( 'custom_image_size_three_width' ), genesis_extender_get_settings( 'custom_image_size_three_height' ), $custom_image_size_three_crop );
	}
	if( genesis_extender_get_settings( 'custom_image_size_four_mode' ) != '' )
	{
		$custom_image_size_four_crop = genesis_extender_get_settings( 'custom_image_size_four_mode' ) == 'crop' ? true : false;
		add_image_size( 'custom-thumb-4', genesis_extender_get_settings( 'custom_image_size_four_width' ), genesis_extender_get_settings( 'custom_image_size_four_height' ), $custom_image_size_four_crop );
	}
	if( genesis_extender_get_settings( 'custom_image_size_five_mode' ) != '' )
	{
		$custom_image_size_five_crop = genesis_extender_get_settings( 'custom_image_size_five_mode' ) == 'crop' ? true : false;
		add_image_size( 'custom-thumb-5', genesis_extender_get_settings( 'custom_image_size_five_width' ), genesis_extender_get_settings( 'custom_image_size_five_height' ), $custom_image_size_five_crop );
	}
}

add_filter( 'image_size_names_choose', 'genesis_extender_add_custom_thumbs' );
/**
 * Add any Custom Extender Thumbnails to the WP Media Uploader.
 *
 * @since 1.4
 */
function genesis_extender_add_custom_thumbs( $thumb_sizes ) {
	$custom_thumb_sizes = array(
		'custom-thumb-1' => 'Custom Thumb 1',
		'custom-thumb-2' => 'Custom Thumb 2',
		'custom-thumb-3' => 'Custom Thumb 3',
		'custom-thumb-4' => 'Custom Thumb 4',
		'custom-thumb-5' => 'Custom Thumb 5'
	);

	return array_merge( $thumb_sizes, $custom_thumb_sizes );
}

add_action( 'template_redirect', 'genesis_extender_home_template', 17 );
/**
 * Override the Genesis homepage template with the
 * Genesis Extender Static Homepage template, if
 * the Genesis Extender settings are set to do so.
 *
 * @since 1.0
 */
function genesis_extender_home_template()
{
	if ( genesis_extender_get_settings( 'static_homepage' ) && defined('WP_USE_THEMES') && WP_USE_THEMES )
	{
		if( is_front_page() )
		{
			$template = GENEXT_PATH . 'genesis-extender-home.php';
			
			if ( $template = apply_filters( 'template_include', $template ) )
				include( $template );
			exit();
		}
	}
}

add_action( 'get_header', 'genesis_extender_remove_page_titles' );
/**
 * Remove all or specific page titles if specified in Genesis Extender Settings.
 *
 * @since 1.0
 */
function genesis_extender_remove_page_titles()
{
	global $post;
	$post_title_hook = ( current_theme_supports( 'html5' ) || genesis_extender_get_settings( 'html_five_active' ) ) ? 'genesis_entry_header' : 'genesis_post_title';
	
	if( !is_page() || is_page_template( 'page_blog.php' ) )
		return;
		
	if( genesis_extender_get_settings( 'remove_all_page_titles' ) )
	{
		remove_action( $post_title_hook, 'genesis_do_post_title' );
		return;
	}

	if( genesis_extender_get_settings( 'remove_page_titles_ids' ) == '' )
		return;
	
	foreach( explode( ',', genesis_extender_get_settings( 'remove_page_titles_ids' ) ) as $remove_page_titles_id )
	{
		if( $post->ID == $remove_page_titles_id )
			remove_action( $post_title_hook, 'genesis_do_post_title' );
	}
}

add_action( 'init', 'genesis_extender_add_post_type_support', 9999 );
/**
 * Add Genesis In-Post options into Custom Post Types
 * if enabled in Genesis Extender Settings.
 *
 * @since 1.0
 */
function genesis_extender_add_post_type_support()
{
	if( genesis_extender_get_settings( 'include_inpost_cpt_all' ) )
	{
		foreach( get_post_types( array( 'public' => true ) ) as $post_type )
		{
			add_post_type_support( $post_type, array( 'genesis-seo', 'genesis-scripts', 'genesis-layouts' ) );
		}
	}
	else
	{
		$post_types = explode( ',', genesis_extender_get_settings( 'include_inpost_cpt_names' ) );
		
		foreach ( $post_types as $post_type )
		{
			add_post_type_support( $post_type, array( 'genesis-seo', 'genesis-scripts', 'genesis-layouts' ) );
		}
	}
}

/**
 * Add support for Post Formats.
 */
if( genesis_extender_get_settings( 'post_formats_active' ) )
{
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	add_theme_support( 'genesis-post-format-images' );
}

/**
 * Add support for Genesis HTML5 Markup.
 */
if( genesis_extender_get_settings( 'html_five_active' ) )
{
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
}

/**
 * Add support for Genesis "Fancy Dropdowns".
 */
if( genesis_extender_get_settings( 'html_five_active' ) && genesis_extender_get_settings( 'fancy_dropdowns_active' ) )
{
	add_filter( 'genesis_superfish_enabled', '__return_true' );
}

/**
 * XHTML to HTML5 Markup conversion.
 *
 * @since 1.1
 */
function genesis_extender_html_markup( $markup )
{
	if( current_theme_supports( 'html5' ) )
	{
		$html_markup = array(
			'site_container' => '.site-container',
			'site_header' => '.site-header',
			'title_area' => '.title-area',
			'site_title' => '.site-title',
			'site_description' => '.site-description',
			'nav_primary' => '.nav-primary',
			'nav_secondary' => '.nav-secondary',
			'site_inner' => '.site-inner',
			'content_sidebar_wrap' => '.content-sidebar-wrap',
			'content' => '.content',
			'entry_header_entry_meta' => '.entry-header .entry-meta',
			'entry_footer_entry_meta' => '.entry-footer .entry-meta',
			'pagination' => '.pagination',
			'sidebar_primary' => '.sidebar-primary',
			'sidebar_secondary' => '.sidebar-secondary',
			'site_footer' => '.site-footer',
			'author_box_title' => '.author-box-title',
			'author_box_content' => '.author-box-content',
			'comment_author_link' => '.comment-author span',
			'comment_meta' => '.comment-meta',
			'comment_reply' => '.comment-reply',
			'respond_label' => 'display: block;',
			'search_form' => '.search-form',
			'search_form_search' => '.search-form input[type="search"]',
			'search_form_submit' => '.search-form input[type="submit"]'
		);
	}
	else
	{
		$html_markup = array(
			'site_container' => '#wrap',
			'site_header' => '#header',
			'title_area' => '#title-area',
			'site_title' => '#title',
			'site_description' => '#description',
			'nav_primary' => '#nav',
			'nav_secondary' => '#subnav',
			'site_inner' => '#inner',
			'content_sidebar_wrap' => '#content-sidebar-wrap',
			'content' => '#content',
			'entry_header_entry_meta' => '.post-info',
			'entry_footer_entry_meta' => '.post-meta',
			'pagination' => '.navigation',
			'sidebar_primary' => '#sidebar',
			'sidebar_secondary' => '#sidebar-alt',
			'site_footer' => '#footer',
			'author_box_title' => '.author-box strong',
			'author_box_content' => '.author-box p',
			'comment_author_link' => '.comment-author cite',
			'comment_meta' => '.commentmetadata',
			'comment_reply' => '.reply',
			'respond_label' => '',
			'search_form' => '.searchform',
			'search_form_search' => '.s',
			'search_form_submit' => '.searchsubmit'
		);
	}

	// Return $html_markup[$markup].
	return apply_filters( 'genesis_extender_html_markup', $html_markup[$markup] );
}

/**
 * Return proper size/unit info (used for image size info).
 *
 * @since 1.9.0
 * @return proper size/unit info.
 */
function genesis_extender_format_size_units( $bytes ) {
	
	if ( $bytes >= 1073741824 )
		$bytes = number_format( $bytes / 1073741824, 2 ) . ' GB';
	elseif ( $bytes >= 1048576 )
		$bytes = number_format( $bytes / 1048576, 2 ) . ' MB';
	elseif ( $bytes >= 1024 )
		$bytes = number_format( $bytes / 1024, 2 ) . ' KB';
	elseif ( $bytes > 1 )
		$bytes = $bytes . ' bytes';
	elseif ( $bytes == 1 )
		$bytes = $bytes . ' byte';
	else
		$bytes = '0 bytes';
	
	return $bytes;
	
}

/**
 * Rebuild the multi-image file upload array to be
 * better suited for feeding into the image upload script.
 *
 * @since 1.9.0
 * @return a more usable image upload file array.
 */
function genesis_extender_rearray_multi_image_upload( $file_post ) {

	$file_array = array();
	$file_count = count( $file_post['name'] );
	$file_keys = array_keys( $file_post );
	
	for ( $i=0; $i<$file_count; $i++ ) {
		
		foreach ( $file_keys as $key ) {
			
			$file_array[$i][$key] = $file_post[$key][$i];
			
		}
		
	}
	
	return $file_array;
	
}

/**
 * Check if directory exists and try and create it if it does not.
 *
 * @since 1.4
 * @return true or false based on the findings of the function.
 */
function genesis_extender_dir_check( $dir )
{
	if( !is_dir( $dir ) )
	{
		mkdir( $dir );
		@chmod( $dir, 0755 );
	}
	
	if( is_dir( $dir ) )
		return true;
	else
		return false;
}

/**
 * Minify (strip out unnecessary stuff) the stylesheets.
 *
 * @since 1.0.1
 * @return a minified version of the stylesheets.
 */
function genesis_extender_minify_css( $css )
{
    $css = preg_replace( '/\s+/', ' ', $css );
    $css = preg_replace( '/\/\*[^\!](.*?)\*\//', '', $css );
    $css = preg_replace( '/(,|:|;|\{|}) /', '$1', $css );
    $css = preg_replace( '/ (,|;|\{|})/', '$1', $css );
    $css = preg_replace( '/(:| )0\.([0-9]+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}.${2}${3}', $css );
    $css = preg_replace( '/0 0 0 0/', '0', $css );

    return apply_filters( 'genesis_extender_minify_css', $css );
}

/**
 * Preserve backslasshes in Custom CSS when appropriate.
 *
 * @since 1.4
 * @return CSS code with preserved backslashes.
 */
function genesis_extender_preserve_backslashes( $css )
{
    $css = str_replace( 'content: " ', 'content: " \\', $css );
    $css = str_replace( 'content:" ', 'content:" \\', $css );
    $css = str_replace( 'content: "', 'content: "\\', $css );
    $css = str_replace( 'content:"', 'content:"\\', $css );
    $css = str_replace( 'content: \'', 'content: \'\\', $css );
    $css = str_replace( 'content:\'', 'content:\'\\', $css );

    return apply_filters( 'genesis_extender_preserve_backslashes', $css );
}

/**
 * Sanatize strings of text.
 *
 * @since 1.2
 */
function genesis_extender_sanatize_string( $string = '', $underscore = false )
{
    //lower case everything
    $string = strtolower( $string );
    //make alphaunermic
    $string = preg_replace( "/[^a-z0-9_\s-]/", "", $string );
    //Clean multiple dashes or whitespaces
    $string = preg_replace( "/[\s-]+/", " ", $string );
    if( false != $underscore )
    {
	    //Convert whitespaces and dashes to underscore
	    $string = preg_replace( "/[\s-]/", "_", $string );    	
    }
    else
    {
	    //Convert whitespaces and underscore to dash
	    $string = preg_replace( "/[\s_]/", "-", $string );
	}
    return $string;
}

/**
 * This is altered version of the genesis_get_custom_field() function
 * which includes the additional ability to work with array() values.
 *
 * @since 1.2
 */
function genesis_extender_get_custom_field( $field, $single = true, $explode = false )
{
	if( null === get_the_ID() )
		return '';

	$custom_field = get_post_meta( get_the_ID(), $field, $single );

	if( !$custom_field )
		return '';

	if( !$single )
	{
		$custom_field_string = implode( ',', $custom_field );
		if( $explode )
		{
			$custom_field_array_pre = explode( ',', $custom_field_string );
			foreach( $custom_field_array_pre as $key => $value )
			{
				$custom_field_array[$value] = $value;
			}
			return $custom_field_array;
		}
		return $custom_field_string;
	}

	return is_array( $custom_field ) ? stripslashes_deep( $custom_field ) : stripslashes( wp_kses_decode_entities( $custom_field ) );
}

/**
 * Create a Genesis Extender Label conditional tag which
 * allows content to be conditionally placed on pages and posts
 * that have specific Genesis Extender Labels assigned to them.
 *
 * @since 1.2
 */
function extender_has_label( $label = 'label' )
{
	$labels_meta_array = genesis_extender_get_custom_field( '_genext_labels', false, true ) != '' ? genesis_extender_get_custom_field( '_genext_labels', false, true ) : array();

	if( is_singular() )
	{
		if( in_array( $label, $labels_meta_array ) ) return true;
	}

	return false;
}

/**
 * Create a Genesis Simple Sidebars conditional tag which
 * allows content to be conditionally placed on pages and posts
 * that have specific simple sidebars assigned to them.
 *
 * @since 1.2
 */
function extender_is_ss( $sidebar_id = 'sb-id' )
{
	if( !defined( 'SS_SETTINGS_FIELD' ) )
		return false;

	static $taxonomies = null;

	if( is_singular() )
	{
		if( $sidebar_id == genesis_get_custom_field( '_ss_sidebar' ) ) return true;
	}

	if( is_category() )
	{
		$term = get_term( get_query_var( 'cat' ), 'category' );
		if( isset( $term->meta['_ss_sidebar'] ) && $sidebar_id == $term->meta['_ss_sidebar'] ) return true;
	}

	if( is_tag() )
	{
		$term = get_term( get_query_var( 'tag_id' ), 'post_tag' );
		if( isset( $term->meta['_ss_sidebar'] ) && $sidebar_id == $term->meta['_ss_sidebar'] ) return true;
	}

	if( is_tax() )
	{
		if ( null === $taxonomies )
			$taxonomies = ss_get_taxonomies();

		foreach ( $taxonomies as $tax )
		{
			if ( 'post_tag' == $tax || 'category' == $tax )
				continue;

			if ( is_tax( $tax ) )
			{
				$obj = get_queried_object();
				$term = get_term( $obj->term_id, $tax );
				if( isset( $term->meta['_ss_sidebar'] ) && $sidebar_id == $term->meta['_ss_sidebar'] ) return true;
				break;
			}
		}
	}

	return false;
}

/**
 * Provide exif_imagetype function for Genesis Extender Image Manager
 * in case the current server's PHP configuration does not include it.
 * 
 * @since 1.9.1
 */
if ( ! function_exists( 'exif_imagetype' ) ) {

	function exif_imagetype( $filename ) {
    
		if ( ( list( $width, $height, $type, $attr ) = getimagesize( $filename ) ) !== false )
			return $type;
            
		return false;
        
	}
    
}

/**
 * Enable Shortcodes in Text Widgets.
 */
add_filter( 'widget_text', 'do_shortcode' );

add_action( 'wp_enqueue_scripts', 'genesis_extender_register_scripts' );
/**
 * Register custom js.
 *
 * @since 1.3
 */
function genesis_extender_register_scripts()
{
	$custom_js = get_option( 'genesis_extender_custom_js' );
	if( !empty( $custom_js['custom_js_in_head'] ) )
		$in_footer = false;
	else
		$in_footer = true;

	wp_register_script( 'custom-scripts', genesis_extender_get_stylesheet_location( 'url' ) . 'custom-scripts.js', array( 'jquery' ), filemtime( genesis_extender_get_custom_js_path() ), $in_footer );
}

add_action( 'wp_enqueue_scripts', 'genesis_extender_load_scripts' );
/**
 * Conditionally load custom js.
 *
 * @since 1.3
 */
function genesis_extender_load_scripts()
{
	if( file_exists( genesis_extender_get_custom_js_path() ) && 0 != filesize( genesis_extender_get_custom_js_path() ) )
		wp_enqueue_script( 'custom-scripts' );
}

add_action( 'after_setup_theme', 'genesis_extender_require_ez_structure_file' );
/**
 * Require the Genesis Extender EZ Structure file only if it exists.
 *
 * @since 1.0
 *
 */
function genesis_extender_require_ez_structure_file()
{
	if( defined( 'PARENT_THEME_NAME' ) && PARENT_THEME_NAME == 'Genesis' && file_exists( genesis_extender_get_ez_structure_path() ) )
		require_once( genesis_extender_get_ez_structure_path() );
}

add_action( 'after_setup_theme', 'genesis_extender_require_custom_widget_areas_register_file' );
/**
 * Require the Genesis Extender Custom Widget Areas Register file only if it exists.
 *
 * @since 1.0
 *
 */
function genesis_extender_require_custom_widget_areas_register_file()
{
	if( defined( 'PARENT_THEME_NAME' ) && PARENT_THEME_NAME == 'Genesis' && file_exists( genesis_extender_get_custom_widget_areas_register_path() ) )
		require_once( genesis_extender_get_custom_widget_areas_register_path() );
}

add_action( 'after_setup_theme', 'genesis_extender_require_custom_widget_areas_file' );
/**
 * Require the Genesis Extender Custom Widget Areas file only on the
 * site's front-end and only if it exists.
 *
 * @since 1.0
 *
 */
function genesis_extender_require_custom_widget_areas_file()
{
	if( !is_admin() && file_exists( genesis_extender_get_custom_widget_areas_path() ) )
		require_once( genesis_extender_get_custom_widget_areas_path() );
}

add_action( 'after_setup_theme', 'genesis_extender_require_custom_hook_boxes_file' );
/**
 * Require the Genesis Extender Custom Hook Boxes file only on the
 * site's front-end and only if it exists.
 *
 * @since 1.0
 *
 */
function genesis_extender_require_custom_hook_boxes_file()
{
	if( !is_admin() && file_exists( genesis_extender_get_custom_hook_boxes_path() ) )
		require_once( genesis_extender_get_custom_hook_boxes_path() );
}

add_action( 'after_setup_theme', 'genesis_extender_require_custom_functions_file' );
/**
 * Require the Genesis Extender Custom Functions file only on the
 * site's front-end and only if it exists.
 *
 * @since 1.0
 *
 */
function genesis_extender_require_custom_functions_file()
{
	$custom_functions = get_option( 'genesis_extender_custom_functions' );

	if( file_exists( genesis_extender_get_custom_functions_path() ) && ( !empty( $custom_functions['custom_functions_effect_admin'] ) || !is_admin() ) )
		require_once( genesis_extender_get_custom_functions_path() );
}
