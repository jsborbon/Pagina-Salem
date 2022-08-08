<?php
/**
 * Typography block support flag.
 *
 * @package gutenberg
 */

/**
 * Registers the style and typography block attributes for block types that support it.
 *
 * @param WP_Block_Type $block_type Block Type.
 */
function gutenberg_register_typography_support( $block_type ) {
	if ( ! property_exists( $block_type, 'supports' ) ) {
		return;
	}

	$typography_supports = _wp_array_get( $block_type->supports, array( 'typography' ), false );
	if ( ! $typography_supports ) {
		return;
	}

	$has_font_family_support     = _wp_array_get( $typography_supports, array( '__experimentalFontFamily' ), false );
	$has_font_size_support       = _wp_array_get( $typography_supports, array( 'fontSize' ), false );
	$has_font_style_support      = _wp_array_get( $typography_supports, array( '__experimentalFontStyle' ), false );
	$has_font_weight_support     = _wp_array_get( $typography_supports, array( '__experimentalFontWeight' ), false );
	$has_letter_spacing_support  = _wp_array_get( $typography_supports, array( '__experimentalLetterSpacing' ), false );
	$has_line_height_support     = _wp_array_get( $typography_supports, array( 'lineHeight' ), false );
	$has_text_decoration_support = _wp_array_get( $typography_supports, array( '__experimentalTextDecoration' ), false );
	$has_text_transform_support  = _wp_array_get( $typography_supports, array( '__experimentalTextTransform' ), false );

	$has_typography_support = $has_font_family_support
		|| $has_font_size_support
		|| $has_font_style_support
		|| $has_font_weight_support
		|| $has_letter_spacing_support
		|| $has_line_height_support
		|| $has_text_decoration_support
		|| $has_text_transform_support;

	if ( ! $block_type->attributes ) {
		$block_type->attributes = array();
	}

	if ( $has_typography_support && ! array_key_exists( 'style', $block_type->attributes ) ) {
		$block_type->attributes['style'] = array(
			'type' => 'object',
		);
	}

	if ( $has_font_size_support && ! array_key_exists( 'fontSize', $block_type->attributes ) ) {
		$block_type->attributes['fontSize'] = array(
			'type' => 'string',
		);
	}
}

/**
 * Add CSS classes and inline styles for typography features such as font sizes
 * to the incoming attributes array. This will be applied to the block markup in
 * the front-end.
 *
 * @param  WP_Block_Type $block_type       Block type.
 * @param  array         $block_attributes Block attributes.
 *
 * @return array Typography CSS classes and inline styles.
 */
function gutenberg_apply_typography_support( $block_type, $block_attributes ) {
	if ( ! property_exists( $block_type, 'supports' ) ) {
		return array();
	}

	$typography_supports = _wp_array_get( $block_type->supports, array( 'typography' ), false );
	if ( ! $typography_supports ) {
		return array();
	}

	if ( gutenberg_should_skip_block_supports_serialization( $block_type, 'typography' ) ) {
		return array();
	}

	$has_font_family_support     = _wp_array_get( $typography_supports, array( '__experimentalFontFamily' ), false );
	$has_font_size_support       = _wp_array_get( $typography_supports, array( 'fontSize' ), false );
	$has_font_style_support      = _wp_array_get( $typography_supports, array( '__experimentalFontStyle' ), false );
	$has_font_weight_support     = _wp_array_get( $typography_supports, array( '__experimentalFontWeight' ), false );
	$has_letter_spacing_support  = _wp_array_get( $typography_supports, array( '__experimentalLetterSpacing' ), false );
	$has_line_height_support     = _wp_array_get( $typography_supports, array( 'lineHeight' ), false );
	$has_text_decoration_support = _wp_array_get( $typography_supports, array( '__experimentalTextDecoration' ), false );
	$has_text_transform_support  = _wp_array_get( $typography_supports, array( '__experimentalTextTransform' ), false );

	// Whether to skip individual block support features.
	$should_skip_font_size       = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'fontSize' );
	$should_skip_font_family     = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'fontFamily' );
	$should_skip_font_style      = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'fontStyle' );
	$should_skip_font_weight     = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'fontWeight' );
	$should_skip_line_height     = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'lineHeight' );
	$should_skip_text_decoration = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'textDecoration' );
	$should_skip_text_transform  = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'textTransform' );
	$should_skip_letter_spacing  = gutenberg_should_skip_block_supports_serialization( $block_type, 'typography', 'letterSpacing' );

	$typography_block_styles = array();
	if ( $has_font_size_support && ! $should_skip_font_size ) {
		$preset_font_size                    = array_key_exists( 'fontSize', $block_attributes ) ? "var:preset|font-size|{$block_attributes['fontSize']}" : null;
		$custom_font_size                    = isset( $block_attributes['style']['typography']['fontSize'] ) ? $block_attributes['style']['typography']['fontSize'] : null;
		$typography_block_styles['fontSize'] = $preset_font_size ? $preset_font_size : $custom_font_size;
	}

	if ( $has_font_family_support && ! $should_skip_font_family ) {
		$preset_font_family                    = array_key_exists( 'fontFamily', $block_attributes ) ? "var:preset|font-family|{$block_attributes['fontFamily']}" : null;
		$custom_font_family                    = isset( $block_attributes['style']['typography']['fontFamily'] ) ? gutenberg_typography_get_preset_inline_style_value( $block_attributes['style']['typography']['fontFamily'], 'font-family' ) : null;
		$typography_block_styles['fontFamily'] = $preset_font_family ? $preset_font_family : $custom_font_family;
	}

	if ( $has_font_style_support && ! $should_skip_font_style && isset( $block_attributes['style']['typography']['fontStyle'] ) ) {
		$typography_block_styles['fontStyle'] =
			gutenberg_typography_get_preset_inline_style_value( $block_attributes['style']['typography']['fontStyle'], 'font-style' );
	}

	if ( $has_font_weight_support && ! $should_skip_font_weight && isset( $block_attributes['style']['typography']['fontWeight'] ) ) {
		$typography_block_styles['fontWeight'] =
			gutenberg_typography_get_preset_inline_style_value( $block_attributes['style']['typography']['fontWeight'], 'font-weight' );
	}

	if ( $has_line_height_support && ! $should_skip_line_height ) {
			$typography_block_styles['lineHeight'] = _wp_array_get( $block_attributes, array( 'style', 'typography', 'lineHeight' ), null );
	}

	if ( $has_text_decoration_support && ! $should_skip_text_decoration && isset( $block_attributes['style']['typography']['textDecoration'] ) ) {
		$typography_block_styles['textDecoration'] =
			gutenberg_typography_get_preset_inline_style_value( $block_attributes['style']['typography']['textDecoration'], 'text-decoration' );
	}

	if ( $has_text_transform_support && ! $should_skip_text_transform && isset( $block_attributes['style']['typography']['textTransform'] ) ) {
		$typography_block_styles['textTransform'] =
			gutenberg_typography_get_preset_inline_style_value( $block_attributes['style']['typography']['textTransform'], 'text-transform' );
	}

	if ( $has_letter_spacing_support && ! $should_skip_letter_spacing && isset( $block_attributes['style']['typography']['letterSpacing'] ) ) {
		$typography_block_styles['letterSpacing'] =
			gutenberg_typography_get_preset_inline_style_value( $block_attributes['style']['typography']['letterSpacing'], 'letter-spacing' );
	}

	$attributes = array();
	$styles     = gutenberg_style_engine_get_block_supports_styles(
		array( 'typography' => $typography_block_styles ),
		array( 'convert_vars_to_classnames' => true )
	);

	if ( ! empty( $styles['classnames'] ) ) {
		$attributes['class'] = $styles['classnames'];
	}

	if ( ! empty( $styles['css'] ) ) {
		$attributes['style'] = $styles['css'];
	}

	return $attributes;
}

/**
 * Note: this method is for backwards compatibility.
 * It mostly replaces `gutenberg_typography_get_css_variable_inline_style()`.
 *
 * Generates an inline style value for a typography feature e.g. text decoration,
 * text transform, and font style.
 *
 * @param string $style_value    A raw style value for a single typography feature from a block's style attribute.
 * @param string $css_property   Slug for the CSS property the inline style sets.
 *
 * @return string?             A CSS inline style value.
 */
function gutenberg_typography_get_preset_inline_style_value( $style_value, $css_property ) {
	// If the style value is not a preset CSS variable go no further.
	if ( empty( $style_value ) || strpos( $style_value, "var:preset|{$css_property}|" ) === false ) {
		return $style_value;
	}

	// For backwards compatibility.
	// Presets were removed in https://github.com/WordPress/gutenberg/pull/27555.
	// We have a preset CSS variable as the style.
	// Get the style value from the string and return CSS style.
	$index_to_splice = strrpos( $style_value, '|' ) + 1;
	$slug            = _wp_to_kebab_case( substr( $style_value, $index_to_splice ) );

	// Return the actual CSS inline style value e.g. `var(--wp--preset--text-decoration--underline);`.
	return sprintf( 'var(--wp--preset--%s--%s);', $css_property, $slug );
}

/**
 * Deprecated.
 * This method is no longer used and will have to be deprecated in Core.
 *
 * It can be deleted once migrated to the next WordPress version.
 *
 * Generates an inline style for a typography feature e.g. text decoration,
 * text transform, and font style.
 *
 * @param array  $attributes   Block's attributes.
 * @param string $feature      Key for the feature within the typography styles.
 * @param string $css_property Slug for the CSS property the inline style sets.
 *
 * @return string              CSS inline style.
 */
function gutenberg_typography_get_css_variable_inline_style( $attributes, $feature, $css_property ) {
	// Retrieve current attribute value or skip if not found.
	$style_value = _wp_array_get( $attributes, array( 'style', 'typography', $feature ), false );
	if ( ! $style_value ) {
		return;
	}

	// If we don't have a preset CSS variable, we'll assume it's a regular CSS value.
	if ( strpos( $style_value, "var:preset|{$css_property}|" ) === false ) {
		return sprintf( '%s:%s;', $css_property, $style_value );
	}

	// We have a preset CSS variable as the style.
	// Get the style value from the string and return CSS style.
	$index_to_splice = strrpos( $style_value, '|' ) + 1;
	$slug            = substr( $style_value, $index_to_splice );

	// Return the actual CSS inline style e.g. `text-decoration:var(--wp--preset--text-decoration--underline);`.
	return sprintf( '%s:var(--wp--preset--%s--%s);', $css_property, $css_property, $slug );
}

/**
 * Internal method that checks a string for a unit and value and returns an array consisting of `'value'` and `'unit'`, e.g., [ '42', 'rem' ].
 *
 * @access private
 *
 * @param string $raw_value Raw size value from theme.json.
 * @param array  $options    array(
 *      'coerce_to'        => (string) Coerce the value to rem or px. Default `'rem'`.
 *      'root_size_value'  => (number) Value of root font size for rem|em <-> px conversion. Default `16`.
 *      'acceptable_units' => (array)  An array of font size units. Default `[ 'rem', 'px', 'em' ]`;
 *  );.
 * @return array An array consisting of `'value'` and `'unit'`, e.g., [ '42', 'rem' ]
 */
function gutenberg_get_typography_value_and_unit( $raw_value, $options = array() ) {
	if ( empty( $raw_value ) ) {
		return null;
	}

	$defaults = array(
		'coerce_to'        => '',
		'root_size_value'  => 16,
		'acceptable_units' => array( 'rem', 'px', 'em' ),
	);

	$options = wp_parse_args( $options, $defaults );

	$acceptable_units_group = implode( '|', $options['acceptable_units'] );
	$pattern                = '/^(\d*\.?\d+)(' . $acceptable_units_group . '){1,1}$/';

	preg_match( $pattern, $raw_value, $matches );

	// We need a number value and a px or rem unit.
	if ( ! isset( $matches[1] ) || ! isset( $matches[2] ) ) {
		return null;
	}

	$value = $matches[1];
	$unit  = $matches[2];

	// Default browser font size. Later we could inject some JS to compute this `getComputedStyle( document.querySelector( "html" ) ).fontSize`.
	if ( 'px' === $options['coerce_to'] && ( 'em' === $unit || 'rem' === $unit ) ) {
		$value = $value * $options['root_size_value'];
		$unit  = $options['coerce_to'];
	}

	if ( 'px' === $unit && ( 'em' === $options['coerce_to'] || 'rem' === $options['coerce_to'] ) ) {
		$value = $value / $options['root_size_value'];
		$unit  = $options['coerce_to'];
	}

	return array(
		'value' => $value,
		'unit'  => $unit,
	);
}

/**
 * Internal implementation of clamp() based on available min/max viewport width, and min/max font sizes.
 *
 * @access private
 *
 * @param array $args array(
 *     'maximum_viewport_width' => (string) Maximum size up to which type will have fluidity.
 *     'minimum_viewport_width' => (string) Minimum viewport size from which type will have fluidity.
 *     'maximum_font_size'      => (string) Maximum font size for any clamp() calculation.
 *     'minimum_font_size'      => (string) Minimum font size for any clamp() calculation.
 *     'scale_factor'           => (number) A scale factor to determine how fast a font scales within boundaries.
 * );.
 * @return string|null A font-size value using clamp().
 */
function gutenberg_get_computed_fluid_typography_value( $args = array() ) {
	$maximum_viewport_width_raw = isset( $args['maximum_viewport_width'] ) ? $args['maximum_viewport_width'] : null;
	$minimum_viewport_width_raw = isset( $args['minimum_viewport_width'] ) ? $args['minimum_viewport_width'] : null;
	$maximum_font_size_raw      = isset( $args['maximum_font_size'] ) ? $args['maximum_font_size'] : null;
	$minimum_font_size_raw      = isset( $args['minimum_font_size'] ) ? $args['minimum_font_size'] : null;
	$scale_factor               = isset( $args['scale_factor'] ) ? $args['scale_factor'] : null;

	// Grab the minimum font size and normalize it in order to use the value for calculations.
	$minimum_font_size = gutenberg_get_typography_value_and_unit( $minimum_font_size_raw );

	// We get a 'preferred' unit to keep units consistent when calculating,
	// otherwise the result will not be accurate.
	$font_size_unit = isset( $minimum_font_size['unit'] ) ? $minimum_font_size['unit'] : 'rem';

	// Grab the maximum font size and normalize it in order to use the value for calculations.
	$maximum_font_size = gutenberg_get_typography_value_and_unit(
		$maximum_font_size_raw,
		array(
			'coerce_to' => $font_size_unit,
		)
	);

	// Protect against unsupported units.
	if ( ! $maximum_font_size || ! $minimum_font_size ) {
		return null;
	}

	// Use rem for accessible fluid target font scaling.
	$minimum_font_size_rem = gutenberg_get_typography_value_and_unit(
		$minimum_font_size_raw,
		array(
			'coerce_to' => 'rem',
		)
	);

	// Viewport widths defined for fluid typography. Normalize units.
	$maximum_viewport_width = gutenberg_get_typography_value_and_unit(
		$maximum_viewport_width_raw,
		array(
			'coerce_to' => $font_size_unit,
		)
	);
	$minimum_viewport_width = gutenberg_get_typography_value_and_unit(
		$minimum_viewport_width_raw,
		array(
			'coerce_to' => $font_size_unit,
		)
	);

	// Build CSS rule.
	// Borrowed from https://websemantics.uk/tools/responsive-font-calculator/.
	$view_port_width_offset = round( $minimum_viewport_width['value'] / 100, 3 ) . $font_size_unit;
	$linear_factor          = 100 * ( ( $maximum_font_size['value'] - $minimum_font_size['value'] ) / ( $maximum_viewport_width['value'] - $minimum_viewport_width['value'] ) );
	$linear_factor          = round( $linear_factor, 3 ) * $scale_factor;
	$fluid_target_font_size = implode( '', $minimum_font_size_rem ) . " + ((1vw - $view_port_width_offset) * $linear_factor)";

	return "clamp($minimum_font_size_raw, $fluid_target_font_size, $maximum_font_size_raw)";
}

/**
 * Returns a font-size value based on a given font-size preset.
 * Takes into account fluid typography parameters and attempts to return a css formula depending on available, valid values.
 *
 * @param array   $preset                      fontSizes preset value as seen in theme.json.
 * @param boolean $should_use_fluid_typography An override to switch fluid typography "on". Can be used for unit testing.
 * @return string Font-size value.
 */
function gutenberg_get_typography_font_size_value( $preset, $should_use_fluid_typography = false ) {
	// Check if fluid font sizes are activated.
	$typography_settings         = gutenberg_get_global_settings( array( 'typography' ) );
	$should_use_fluid_typography = isset( $typography_settings['fluid'] ) && true === $typography_settings['fluid'] ? true : $should_use_fluid_typography;

	if ( ! $should_use_fluid_typography ) {
		return $preset['size'];
	}

	// Defaults.
	$default_maximum_viewport_width   = '1600px';
	$default_minimum_viewport_width   = '768px';
	$default_minimum_font_size_factor = 0.75;
	$default_maximum_font_size_factor = 1.5;
	$default_scale_factor             = 1;

	// Font sizes.
	$fluid_font_size_settings = isset( $preset['fluid'] ) ? $preset['fluid'] : null;

	// Try to grab explicit min and max fluid font sizes.
	$minimum_font_size_raw = isset( $fluid_font_size_settings['min'] ) ? $fluid_font_size_settings['min'] : null;
	$maximum_font_size_raw = isset( $fluid_font_size_settings['max'] ) ? $fluid_font_size_settings['max'] : null;

	// Font sizes.
	$preferred_size = gutenberg_get_typography_value_and_unit( $preset['size'] );

	// Protect against unsupported units.
	if ( empty( $preferred_size['unit'] ) ) {
		return $preset['size'];
	}

	// If no fluid min or max font sizes are available, create some using min/max font size factors.
	if ( ! $minimum_font_size_raw ) {
		$minimum_font_size_raw = ( $preferred_size['value'] * $default_minimum_font_size_factor ) . $preferred_size['unit'];
	}

	if ( ! $maximum_font_size_raw ) {
		$maximum_font_size_raw = ( $preferred_size['value'] * $default_maximum_font_size_factor ) . $preferred_size['unit'];
	}

	$fluid_font_size_value = gutenberg_get_computed_fluid_typography_value(
		array(
			'minimum_viewport_width' => $default_minimum_viewport_width,
			'maximum_viewport_width' => $default_maximum_viewport_width,
			'minimum_font_size'      => $minimum_font_size_raw,
			'maximum_font_size'      => $maximum_font_size_raw,
			'scale_factor'           => $default_scale_factor,
		)
	);

	if ( ! empty( $fluid_font_size_value ) ) {
		return $fluid_font_size_value;
	}

	return $preset['size'];
}

// Register the block support.
WP_Block_Supports::get_instance()->register(
	'typography',
	array(
		'register_attribute' => 'gutenberg_register_typography_support',
		'apply'              => 'gutenberg_apply_typography_support',
	)
);