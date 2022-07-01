<?php
/**
 * This file houses the functions that don't fit in any of the
 * other Genesis Extender function files.
 *
 * @package Extender
 */
 
/**
 * Build the Genesis Extender FE CSS Builder select menu.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_css_builder_build_css_builder_select_menu( $elements_array = array(), $selected = '' ) {
	
	foreach( $elements_array as $element_type => $elements ) {
		
		echo '<optgroup label="' . $element_type . '">';
			
			$option = '<option value="' . $elements . ' {"';
				
			if ( $elements == $selected )
				$option .= ' selected="selected"';

			$option .= '>' . $element_type . '</option>';
			
			echo $option;

		echo '</optgroup>';
		
	}
	
}

/**
 * Build the labeled element menu sections.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_css_builder_build_labeled_elements( $id, $name, $menu ) {
	
	?>
	<span id="<?php echo $id ?>" class="all-labeled-elements">
		<?php _e( $name, 'extender' ); ?><br />
		<select id="<?php echo $id ?>_list" class="genesis-extender-fe-css-builder-elements-select" name="<?php echo $id ?>_list" size="1" style="display:none;">
		<?php genesis_extender_fe_css_builder_build_css_builder_select_menu( $menu ); ?>
		</select>
		<input class="genesis-extender-fe-css-builder-button-elements genesis-extender-fe-css-builder-buttons labeled-elements-button" style="width:30px; height:30px;" type="button" value="&raquo;" onclick="insertAtCaret(this.form.text, this.form.<?php echo $id ?>_list.value+'\n\n}\n')">
	</span>
	<?php
	
}

/**
 * Display the labeled element menu sections by iterating through an array.
 *
 * @since 1.7.0
 * @return a list of labeled element menus based on an array of values.
 */
function genesis_extender_fe_css_builder_display_labeled_elements() {
	
	$elements_array = genesis_extender_fe_css_builder_html_elements_array();
	$element_list = '';
	
	foreach ( $elements_array as $key => $value ) {
		
		$element_list .= genesis_extender_fe_css_builder_build_labeled_elements( $key, ucwords( str_replace( '_', ' ', $key ) ), $value ) . "\n";
		
	}
	
	return $element_list;
	
}

add_action( 'wp_enqueue_scripts', 'genesis_extender_fe_css_builder_register_scripts' );
/**
 * Register styles and scripts.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_css_builder_register_scripts() {

	wp_register_style( 'genesis_extender_fe_css_builder_styles', GENEXT_URL . 'lib/admin/fe-css-builder/front-end.css' );
	wp_register_style( 'genesis_extender_fe_css_builder_dropit', GENEXT_URL . 'lib/admin/fe-css-builder/js/dropit/dropit.css' );
	wp_register_script( 'genesis_extender_fe_css_builder_genesis_extender_fe_css_builder', GENEXT_URL . 'lib/admin/fe-css-builder/js/front-end.js', array( 'jquery', 'jquery-ui-draggable' ), GENEXT_VERSION, true );
	wp_register_script( 'genesis_extender_fe_css_builder_code_builder', GENEXT_URL . 'lib/js/code-builder.js' );
	wp_register_script( 'genesis_extender_fe_css_builder_dropit', GENEXT_URL . 'lib/admin/fe-css-builder/js/dropit/dropit.js' );
	wp_register_script( 'genesis_extender_fe_css_builder_jscolor_popup', GENEXT_URL . 'lib/admin/fe-css-builder/js/jscolor/jscolor-popup.js', false, GENEXT_VERSION, true );
		
}

add_action( 'wp_enqueue_scripts', 'genesis_extender_fe_css_builder_load_scripts' );
/**
 * Load styles and scripts.
 *
 * @since 1.7.0
 */
function genesis_extender_fe_css_builder_load_scripts() {

	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'genesis_extender_fe_css_builder_styles', 11 );
	wp_enqueue_style( 'genesis_extender_fe_css_builder_dropit', 11 );
	wp_enqueue_script( 'genesis_extender_fe_css_builder_genesis_extender_fe_css_builder', 11 );
	wp_enqueue_script( 'genesis_extender_fe_css_builder_code_builder', 11 );
	wp_enqueue_script( 'genesis_extender_fe_css_builder_dropit', 11 );
	wp_enqueue_script( 'genesis_extender_fe_css_builder_jscolor_popup', 11 );
		
}
