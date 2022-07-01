<?php
/**
 * Builds the Plugin Settings admin page.
 *
 * @package Extender
 */
 
/**
 * Build the Genesis Extender Settings admin page.
 *
 * @since 1.0
 */
function genesis_extender_settings()
{
	$user = wp_get_current_user();
	if( function_exists( 'wp_get_theme' ) )
		$my_theme = wp_get_theme();
?>
	<div class="wrap">
		
		<div id="genesis-extender-settings-saved" class="genesis-extender-update-box"></div>
		
		<?php
		if( !empty( $_POST['action'] ) && $_POST['action'] == 'reset' )
		{
			update_option( 'genesis_extender_settings', genesis_extender_settings_defaults() );
			genesis_extender_get_settings( null, $args = array( 'cached' => false, 'array' => false ) );
			genesis_extender_write_files( $css = true, $ez = true, $custom = false );
		?>
			<script type="text/javascript">jQuery(document).ready(function($){ $('#genesis-extender-settings-saved').html('Plugin Settings Reset').css("position", "fixed").fadeIn('slow');window.setTimeout(function(){$('#genesis-extender-settings-saved').fadeOut( 'slow' );}, 2222); });</script>
		<?php
		}

		if( !empty( $_GET['activetab'] ) )
		{ ?>
			<script type="text/javascript">jQuery(document).ready(function($) { $('#<?php echo $_GET['activetab']; ?>').click(); });</script>	
		<?php
		} ?>
		
		<div id="icon-options-general" class="icon32"></div>
		
		<h2 id="genesis-extender-admin-heading"><?php _e( 'Extender - Settings', 'extender' ); ?></h2>
		
		<div id="genesis-extender-admin-wrap">
			
			<form action="/" id="plugin-settings-form" name="plugin-settings-form">
			
				<input type="hidden" name="action" value="genesis_extender_settings_save" />
				<input type="hidden" name="security" value="<?php echo wp_create_nonce( 'plugin-settings' ); ?>" />
			
				<div id="genesis-extender-floating-save">
					<input type="submit" value="<?php _e( 'Save Changes', 'extender' ); ?>" name="Submit" alt="Save Changes"  class="genesis-extender-save-button button button-primary"/>
					<img class="genesis-extender-ajax-save-spinner" src="<?php echo site_url() . '/wp-admin/images/spinner-2x.gif'; ?>" />
					<span class="genesis-extender-saved"></span>
				</div>
					
				<div id="genesis-extender-settings-nav" class="genesis-extender-admin-nav">
					<ul>
						<li id="genesis-extender-settings-nav-info" class="genesis-extender-options-nav-all genesis-extender-options-nav-active"><a href="#">Plugin Info</a></li><li id="genesis-extender-settings-nav-general" class="genesis-extender-options-nav-all"><a href="#">General Settings</a></li><li id="genesis-extender-settings-nav-import-export" class="genesis-extender-options-nav-all"><a class="genesis-extender-options-nav-last" href="#">Import / Export</a></li>
					</ul>
				</div>
				
				<div class="genesis-extender-settings-wrap">
					<?php require_once( GENEXT_PATH . 'lib/admin/boxes/settings-general.php' ); ?>
				</div>
			
			</form>
			
			<div class="genesis-extender-settings-wrap">
				<?php require_once( GENEXT_PATH . 'lib/admin/boxes/settings-plugin-info.php' ); ?>
				<?php require_once( GENEXT_PATH . 'lib/admin/boxes/settings-import-export.php' ); ?>
			</div>
			
			<div id="genesis-extender-admin-footer">
				<p>
					<a href="http://cobaltapps.com" target="_blank">CobaltApps.com</a> | <a href="http://extenderdocs.cobaltapps.com/" target="_blank">Docs</a> | <a href="http://cobaltapps.com/my-account/" target="_blank">My Account</a> | <a href="http://cobaltapps.com/forum/" target="_blank">Community Forum</a> | <a href="http://cobaltapps.com/affiliates/" target="_blank">Affiliates</a> &middot;
					<a><span id="show-options-reset" class="genesis-extender-options-reset-button button" style="margin:0; float:none !important;"><?php _e( 'Plugin Settings Reset', 'extender' ); ?></span></a><a href="http://extenderdocs.cobaltapps.com/article/155-plugin-settings-reset" class="tooltip-mark" target="_blank">[?]</a>
				</p>
			</div>
			
			<div style="display:none; width:160px; border:none; background:none; margin:0 auto; padding:0; float:none; position:inherit;" id="show-options-reset-box" class="genesis-extender-custom-fonts-box">
				<form style="float:left;" id="genesis-extender-reset-theme-settings" method="post">
					<input style="background:#D54E21; width:160px !important; color:#FFFFFF !important; -webkit-box-shadow:none; box-shadow:none;" type="submit" value="<?php _e( 'Reset Plugin Settings', 'extender' ); ?>" class="genesis-extender-reset button" name="Submit" onClick='return confirm("<?php _e( 'Are you sure your want to reset your Genesis Extender Plugin Settings?', 'extender' ); ?>")'/><input type="hidden" name="action" value="reset" />
				</form>
			</div>
		</div>
	</div> <!-- Close Wrap -->
<?php
}

add_action( 'wp_ajax_genesis_extender_settings_save', 'genesis_extender_settings_save' );
/**
 * Use ajax to update the Custom Options based on the posted values.
 *
 * @since 1.0
 */
function genesis_extender_settings_save()
{
	check_ajax_referer( 'plugin-settings', 'security' );
	
	$update = $_POST['extender'];
	update_option( 'genesis_extender_settings', $update );

	genesis_extender_get_settings( null, $args = array( 'cached' => false, 'array' => false ) );
	
	genesis_extender_write_files( $css = true, $ez = true, $custom = false );
	
	echo 'Plugin Settings Updated';
	exit();
}

/**
 * Create an array of Plugin Settings default values.
 *
 * @since 1.0
 * @return an array of Plugin Settings default values.
 */
function genesis_extender_settings_defaults( $defaults = true, $import = false )
{	
	$defaults = array(
		'static_homepage' => ( !$defaults && !empty( $import['static_homepage'] ) ) ? 1 : 0,
		'ez_homepage_select' => 'disabled',
		'static_homepage_type' => 'full',
		'static_homepage_content_layout' => 'content_sidebar',
		'static_homepage_entry_class' => ( $defaults || !empty( $import['static_homepage_entry_class'] ) ) ? 1 : 0,
		'add_google_fonts' => '',
		'remove_all_page_titles' => ( !$defaults && !empty( $import['remove_all_page_titles'] ) ) ? 1 : 0,
		'remove_page_titles_ids' => '',
		'include_inpost_cpt_all' => ( !$defaults && !empty( $import['include_inpost_cpt_all'] ) ) ? 1 : 0,
		'include_inpost_cpt_names' => '',
		'post_formats_active' => ( !$defaults && !empty( $import['post_formats_active'] ) ) ? 1 : 0,
		'include_column_class_styles' => ( !$defaults && !empty( $import['include_column_class_styles'] ) ) ? 1 : 0,
		'minify_stylesheets' => ( $defaults || !empty( $import['minify_stylesheets'] ) ) ? 1 : 0,
		'enable_ace_editor_syntax_validation' => ( $defaults || !empty( $import['enable_ace_editor_syntax_validation'] ) ) ? 1 : 0,
		'font_awesome_css' => ( !$defaults && !empty( $import['font_awesome_css'] ) ) ? 1 : 0,
		'font_awesome_cdn' => ( !$defaults && !empty( $import['font_awesome_css'] ) ) ? 1 : 0,
		'font_awesome_cdn_url' => '',
		'custom_image_size_one_mode' => '',
		'custom_image_size_one_width' => '0',
		'custom_image_size_one_height' => '0',
		'custom_image_size_two_mode' => '',
		'custom_image_size_two_width' => '0',
		'custom_image_size_two_height' => '0',
		'custom_image_size_three_mode' => '',
		'custom_image_size_three_width' => '0',
		'custom_image_size_three_height' => '0',
		'custom_image_size_four_mode' => '',
		'custom_image_size_four_width' => '0',
		'custom_image_size_four_height' => '0',
		'custom_image_size_five_mode' => '',
		'custom_image_size_five_width' => '0',
		'custom_image_size_five_height' => '0',
		'html_five_active' => ( !$defaults && !empty( $import['html_five_active'] ) ) ? 1 : 0,
		'fancy_dropdowns_active' => ( !$defaults && !empty( $import['fancy_dropdowns_active'] ) ) ? 1 : 0,
		'protocol_relative_urls' => ( !$defaults && !empty( $import['protocol_relative_urls'] ) ) ? 1 : 0
	);
	
	return apply_filters( 'genesis_extender_settings_defaults', $defaults );
}
