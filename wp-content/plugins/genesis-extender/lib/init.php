<?php
/**
 * This is the initialization file for Genesis Extender,
 * defining constants, globaling database option arrays
 * and requiring other function files.
 *
 * @package Extender
 */

require_once( GENEXT_PATH . 'lib/functions/add-styles.php' );
require_once( GENEXT_PATH . 'lib/functions/general.php' );
require_once( GENEXT_PATH . 'lib/functions/fonts.php' );

add_action( 'init', 'genesis_extender_fe_style_editor_init' );
/**
 * Conditionally initialize the front-end style editor functionality.
 *
 * @since 1.7
 */
function genesis_extender_fe_style_editor_init() {
	
	if ( ! current_user_can( 'administrator' ) || ! genesis_extender_get_custom_css( 'css_builder_popup_active' ) )
		return;
	
	if ( ! is_admin() ) {
		
		require_once( GENEXT_PATH . 'lib/admin/fe-style-editor/style-editor.php' );
		require_once( GENEXT_PATH . 'lib/admin/fe-css-builder/general.php' );
		require_once( GENEXT_PATH . 'lib/admin/fe-css-builder/genesis-elements.php' );
		require_once( GENEXT_PATH . 'lib/admin/fe-css-builder/fe-css-builder.php' );
		
	}
	
	add_action( 'wp_ajax_genesis_extender_fe_style_editor_save', 'genesis_extender_fe_style_editor_save' );
	/**
	 * Use ajax to update the theme styles based on the posted values.
	 *
	 * @since 1.7.0
	 */
	function genesis_extender_fe_style_editor_save() {
		
		check_ajax_referer( 'genesis-extender-fe-style-editor', 'security' );
		
		$update = array(
			'custom_css' => $_POST['extender']['custom_css'],
			'css_builder_popup_active' => genesis_extender_get_custom_css( 'css_builder_popup_active' ),
			'custom_functions' => genesis_extender_get_custom_css( 'custom_functions' )
		);
		$update_merged = array_merge( genesis_extender_custom_css_options_defaults(), $update );
		update_option( 'genesis_extender_custom_css', $update_merged );
		
		genesis_extender_write_files( $css = true, $ez = false, $custom = false  );
		
		echo 'Custom CSS Updated';
		
		exit();
		
	}
		
}

/**
 * Require files only needed for admin.
 */
if( is_admin() )
{
	if( defined( 'GENESS_VERSION' ) )
	{
		add_action( 'admin_notices', 'genesis_extender_essentials_is_active_nag' );
		/**
		 * Build "Essentials Is Active" Nag HTML.
		 *
		 * @since 1.5
		 */
		function genesis_extender_essentials_is_active_nag()
		{			
			echo '<div id="update-nag">';
			printf( __( '<strong>Genesis Extender & Genesis Essentials Are Currently Active!</strong> These two Cobalt Apps products are not to be used together so deactivate <a href="%s">Genesis Extender</a> or <a href="%s">Genesis Essentials</a>.', 'extender' ), admin_url( 'plugins.php' ), admin_url( 'plugins.php' ) );
			echo '</div>';
		}
	}

	require_once( GENEXT_PATH . 'lib/functions/option-lists.php' );
	require_once( GENEXT_PATH . 'lib/admin/build-menu.php' );
	require_once( GENEXT_PATH . 'lib/admin/settings.php' );
	require_once( GENEXT_PATH . 'lib/admin/custom-options.php' );
	require_once( GENEXT_PATH . 'lib/functions/user-meta.php' );
	require_once( GENEXT_PATH . 'lib/functions/build-styles.php' );
	require_once( GENEXT_PATH . 'lib/functions/write-files.php' );
	require_once( GENEXT_PATH . 'lib/admin/bulletproof/bulletproof.php' );
	require_once( GENEXT_PATH . 'lib/admin/image-manager-options.php' );
	require_once( GENEXT_PATH . 'lib/update/edd-updater.php' );
	require_once( GENEXT_PATH . 'lib/functions/import-export.php' );
	require_once( GENEXT_PATH . 'lib/functions/ez-structures.php' );
	require_once( GENEXT_PATH . 'lib/admin/metaboxes/metaboxes.php' );
	require_once( GENEXT_PATH . 'lib/functions/templates.php' );
	require_once( GENEXT_PATH . 'lib/functions/labels.php' );
	require_once( GENEXT_PATH . 'lib/functions/conditionals.php' );
	require_once( GENEXT_PATH . 'lib/functions/widget-areas.php' );
	require_once( GENEXT_PATH . 'lib/functions/hook-boxes.php' );
	require_once( GENEXT_PATH . 'lib/update/update.php' );
}
