<?php
/**
 * Handles the front-end style editor functionality.
 *
 * @package Extender
 */

/**
 * Build the Genesis Extender Style Editor.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_style_editor() {
	
?>
	<div id="genesis-extender-fe-style-editor" style="display:none;">
		
		<h3>
			<span class="dashicons dashicons-move" style="padding-top:3px;"></span>
		</h3>
		
		<?php do_action( 'genesis_extender_fe_style_editor_form' ); ?>
		
	</div><!-- END #genesis-extender-fe-style-editor -->
<?php

}

add_action( 'genesis_extender_fe_style_editor_form', 'genesis_extender_fe_style_editor_build_form' );
/**
 * Build and add_action the Style Editor form.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_style_editor_build_form() {
	
?>
		<form action="/" id="genesis-extender-fe-style-editor-form" name="genesis-extender-fe-style-editor-form">
			
			<input type="hidden" name="action" value="genesis_extender_fe_style_editor_save" />
			<input type="hidden" name="security" value="<?php echo wp_create_nonce( 'genesis-extender-fe-style-editor' ); ?>" />
		
			<div class="genesis-extender-fe-style-editor-nav">
				<input id="genesis-extender-fe-style-editor-save-button" type="submit" value="<?php _e( 'Save Changes', 'extender' ); ?>" name="Submit" alt="Save Changes" />
				<img class="genesis-extender-ajax-save-spinner" src="<?php echo site_url() . '/wp-admin/images/spinner-2x.gif'; ?>" />
				<span class="genesis-extender-saved"></span>
	
				<span id="genesis-extender-fe-style-editor-contract-icon" class="genesis-extender-fe-style-editor-icons dashicons dashicons-editor-contract"></span>
				<span id="genesis-extender-fe-style-editor-css-builder-toggle-icon" class="genesis-extender-fe-style-editor-icons dashicons dashicons-admin-customizer"></span>
				<span id="genesis-extender-fe-style-editor-search-icon" class="genesis-extender-fe-style-editor-icons dashicons dashicons-search"></span>
			</div><!-- END .genesis-extender-fe-style-editor-nav -->
			
			<div id="genesis-extender-fe-style-editor-container">
				
				<textarea data-editor="css" style="display:none;" wrap="off" id="genesis-extender-fe-style-editor-output" class="code-builder-output" name="extender[custom_css]"><?php echo genesis_extender_get_custom_css( 'custom_css' ); ?></textarea>					
			
			</div><!-- END #genesis-extender-fe-style-editor-container -->
		
		</form><!-- END #genesis-extender-fe-style-editor-form -->
<?php
	
}

add_action( 'wp_head', 'genesis_extender_fe_css_echo', 15 );
/**
 * Echo the Genesis Extender Custom Stylesheet into the <head>.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_css_echo() {

	$output = '';
    $custom_css = genesis_extender_preserve_backslashes( genesis_extender_get_custom_css( 'custom_css' ) );

	if ( $custom_css != '' )
		$output .= $custom_css . "\n";
	
	$output = "\n\n<!-- Begin echoed Genesis Extender Custom CSS -->\n<style id=\"genesis-extender-custom-css-echo\" type=\"text/css\">\n" . genesis_extender_preserve_backslashes( $output ) . "</style>\n<!-- End echoed Genesis Extender Custom CSS -->\n";

	if ( genesis_extender_get_settings( 'responsive_enabled' ) ) {
		
		$media_query_css = '
@media only screen and (max-width: ' . genesis_extender_get_responsive( 'media_query_large_cascading_width' ) . 'px) {
' . genesis_extender_get_responsive( 'media_query_large_cascading_content' ) . '
}
@media only screen and (min-width: ' . genesis_extender_get_responsive( 'genesis_extender_media_query_large_min_width' ) . 'px) and (max-width: ' . genesis_extender_get_responsive( 'genesis_extender_media_query_large_max_width' ) . 'px) {
' . genesis_extender_get_responsive( 'media_query_large_content' ) . '
}
@media only screen and (min-width: ' . genesis_extender_get_responsive( 'genesis_extender_media_query_medium_large_min_width' ) . 'px) and (max-width: ' . genesis_extender_get_responsive( 'genesis_extender_media_query_medium_large_max_width' ) . 'px) {
' . genesis_extender_get_responsive( 'media_query_medium_large_content' ) . '
}
@media only screen and (max-width: ' . genesis_extender_get_responsive( 'media_query_medium_cascading_width' ) . 'px) {
' . genesis_extender_get_responsive( 'media_query_medium_cascading_content' ) . '
}
@media only screen and (min-width: ' . genesis_extender_get_responsive( 'genesis_extender_media_query_medium_min_width' ) . 'px) and (max-width: ' . genesis_extender_get_responsive( 'genesis_extender_media_query_medium_max_width' ) . 'px) {
' . genesis_extender_get_responsive( 'media_query_medium_content' ) . '
}
@media only screen and (max-width: ' . genesis_extender_get_responsive( 'media_query_small_width' ) . 'px) {
' . genesis_extender_get_responsive( 'media_query_small_content' ) . '
}';

		$media_query_css = "\n<!-- Begin Media Query Custom CSS -->\n<style id=\"media-query-custom-css-echo\" type=\"text/css\">" . genesis_extender_preserve_backslashes( $media_query_css ) . "\n</style>\n<!-- End Media Query Custom CSS -->\n\n";
		
	} else {
		
		$media_query_css = '';
		
	}
	
	echo stripslashes( $output . $media_query_css );
	
}

add_action( 'wp_head', 'genesis_extender_fe_style_editor_add_html' );
/**
 * Add the Genesis Extender Style Editor HTML to the <head> area.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_style_editor_add_html() {

	$enable_ace_editor_syntax_validation = genesis_extender_get_settings( 'enable_ace_editor_syntax_validation' );
	$ace_editor_syntax_validation = !empty( $enable_ace_editor_syntax_validation ) ? 'true' : 'false';

?>
<script type="text/javascript">
var ace_editor_syntax_validation = <?php echo $ace_editor_syntax_validation ?>;
var genesis_extender_fe_style_editor_images_url = 'url(<?php echo genesis_extender_get_stylesheet_location( 'url' ) . 'images'; ?>';
var genesis_extender_fe_style_editor_images_url_single_quotes = 'url(\'<?php echo genesis_extender_get_stylesheet_location( 'url' ) . 'images'; ?>';
var genesis_extender_fe_style_editor_images_url_double_quotes = 'url("<?php echo genesis_extender_get_stylesheet_location( 'url' ) . 'images'; ?>';
var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';
</script>
<?php

	echo '<span id="genesis-extender-fe-style-editor-css"><span class="dashicons dashicons-editor-code"></span></span>' . "\n";
	genesis_extender_fe_style_editor();
	
}

add_action( 'wp_enqueue_scripts', 'genesis_extender_fe_style_editor_register_scripts' );
/**
 * Register styles and scripts.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_style_editor_register_scripts() {

	wp_register_style( 'genesis_extender_fe_style_editor_styles', GENEXT_URL . 'lib/admin/fe-style-editor/front-end.css' );
	wp_register_script( 'genesis_extender_fe_style_editor', GENEXT_URL . 'lib/admin/fe-style-editor/front-end.js', array( 'jquery', 'jquery-ui-draggable' ), GENEXT_VERSION, true );
	wp_register_script( 'genesis_extender_ace', GENEXT_URL . 'lib/js/ace/ace.js' );
	wp_register_script( 'genesis_extender_ace_autocomplete', GENEXT_URL . 'lib/js/ace/ext-language_tools.js' );
		
}

add_action( 'wp_enqueue_scripts', 'genesis_extender_fe_style_editor_load_scripts' );
/**
 * Load styles and scripts.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_style_editor_load_scripts() {

	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'genesis_extender_fe_style_editor_styles' );
	wp_enqueue_style( 'genesis_extender_jquery_ui_css', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css', false, GENEXT_VERSION, false );
	wp_enqueue_script( 'jquery-ui-resizable' );
	wp_enqueue_script( 'genesis_extender_fe_style_editor' );
	wp_enqueue_script( 'genesis_extender_ace' );
	wp_enqueue_script( 'genesis_extender_ace_autocomplete' );
		
}
