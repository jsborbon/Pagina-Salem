<?php
/**
 * Builds the Extender Image Manager admin content.
 *
 * @package Extender
 */
?>

<div id="genesis-extender-settings-nav-export-box" class="genesis-extender-optionbox-outer-1col genesis-extender-all-options genesis-extender-options-display">
	<div class="genesis-extender-optionbox-inner-1col" style="border: 1px solid #DFDFDF; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05); box-shadow: 0 1px 2px rgba(0,0,0,.05);">
		<h3 style="border:0;"><?php _e( 'Extender Image Uploader', 'extender' ); ?></h3>
		
		<div class="genesis-extender-child-theme-export-wrap" style="padding:10px 10px 10px 0; border-top:1px solid #F0F0F0; background:#FFFFFF;">

			<div class="bg-box" style="margin-right:0; margin-bottom:0;">
				<form id="genesis-extender-image-file-upload-form" method="POST" enctype="multipart/form-data">
				    <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
				    <input type="file" multiple="multiple" name="images[]"/>
				    <input class="button rounded-button button-highlighted" type="submit" value="upload"/>
					<?php
					if ( is_dir( $child_images ) ) {
						
						$images_array = isset( $_FILES['images'] ) ? genesis_extender_rearray_multi_image_upload( $_FILES['images'] ) : array();
						$upload_message_count = 0;
						
						foreach ( $images_array as $images ) {
							
							$image = new Bulletproof\GenesisExtenderImage( array( 'images' => $images ) );
							$image_upload_name = isset( $images['name'] ) ? $images['name'] : 'temp-image-name';
							$image_upload_name = substr( $image_upload_name, 0, strrpos( $image_upload_name, '.' ) );
							$image->setName( $image_upload_name );
							$image->setSize( 100, 5000000 );
							$image->setLocation( $child_images );
							
							if ( $image['images'] ) {
							
								$upload = $image->upload(); 
								
								if ( $upload_message_count == 0 ) {
								
									echo '<div class="genesis-extender-image-file-upload-status">';
										
									if ( $upload )
										echo '<span class="dashicons dashicons-yes"></span>Image Upload Successful!';
									else
										echo '<span class="dashicons dashicons-warning"></span>' . $image['error'];
										
									echo '</div>';
								
								}
								
								$upload_message_count++;
							
							}
							
						}
						
					}
					?>
				</form>
			</div>
		</div>
	</div>
	
	<div class="genesis-extender-optionbox-inner-1col" style="border: 1px solid #DFDFDF; -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05); box-shadow: 0 1px 2px rgba(0,0,0,.05);">
		<h3 style="border:0;"><?php _e( 'Extender Images', 'extender' ); ?></h3>
		
		<div class="genesis-extender-child-theme-export-wrap" style="padding:10px 10px 10px 0; border-top:1px solid #F0F0F0; background:#FFFFFF;">

			<div class="bg-box" style="margin-right:0; margin-bottom:0;">
				<form action="/" id="genesis-extender-image-file-control-form" name="genesis-extender-image-file-control-form">
					<input type="hidden" name="action" value="genesis_extender_image_file_control_save" />
					<input type="hidden" name="security" value="<?php echo wp_create_nonce( 'genesis-extender-ajax-nonce' ); ?>" />
					
					<ul class="genesis-extender-child-theme-images-list">
						<?php
							foreach( glob( $child_images . '/*' ) as $filename ) {
								
								if ( ! is_dir( $filename ) ) {
									
									$image_size = getimagesize( $filename );
									
									echo '<li class="genesis-extender-child-theme-images-list-item">';
									echo '<div class="genesis-extender-listed-image-header">';
									echo '<input class="genesis-extender-listed-image-name" type="text" name="devkit[image_name]" value="' . basename( $filename ) . '" title="' . basename( $filename ) . '">';
									echo '<span class="genesis-extender-image-rename-button"/>' . __( 'Rename', 'extender' ) . '</span>';
									echo '</div>';
									echo '<div class="genesis-extender-listed-image-inner genesis-extender-not-faded">';
									echo '<a href="' . $child_images_url . '/' . substr( $filename, strrpos( $filename, '/' ) + 1 ) . '" target="_blank"><img class="genesis-extender-listed-image" height="100" width="10" src="' . $child_images_url . '/' . substr( $filename, strrpos( $filename, '/' ) + 1 ) . '"></a>';
									echo '<img class="genesis-extender-ajax-save-spinner" src="' . GENEXT_URL . '/lib/css/images/ajax-save-in-progress.gif" />';
									echo '<span class="genesis-extender-saved"></span>';
									echo '</div>';
									echo '<div class="genesis-extender-listed-image-info-inner genesis-extender-faded">';
									echo '<span class="genesis-extender-image-info-item-heading"><span class="dashicons dashicons-info"></span>' . __( 'Image Info', 'extender' ) . '</span>';
									echo '<span class="genesis-extender-image-info-item"><span class="dashicons dashicons-admin-links"></span><a href="' . $child_images_url . '/' . substr( $filename, strrpos( $filename, '/' ) + 1 ) . '" target="_blank">' . basename( $filename ) . '</span></a>';
									echo '<span class="genesis-extender-image-info-item"><span class="dashicons dashicons-format-image"></span>' . __( 'W: ', 'extender' ) . $image_size[0] . 'px' .  __( ' H: ', 'extender' ) . $image_size[1] . 'px' . '</span>';
									echo '<span class="genesis-extender-image-info-item"><span class="dashicons dashicons-format-image"></span>' . __( 'Filesize: ', 'extender' ) . genesis_extender_format_size_units( filesize( $filename ) ) . '</span>';
									echo '</div>';
									echo '<div class="genesis-extender-listed-image-footer">';
									echo '<span class="genesis-extender-image-info-button dashicons dashicons-editor-help"/></span>';
									echo '<span class="genesis-extender-image-delete-button dashicons dashicons-no"/></span>';
									echo '</div>';
									echo '</li>';
									
								}
							    
							}
						?>
					</ul>
					
					<div class="genesis-extender-image-delete-all-button-container">
						<span class="button rounded-button button-highlighted genesis-extender-image-delete-all-button"/><?php _e( 'Delete ALL Images', 'extender' ); ?></span>
						<img class="genesis-extender-ajax-save-spinner" src="<?php echo GENEXT_URL; ?>/lib/css/images/ajax-save-in-progress.gif" />
						<span class="genesis-extender-saved"></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>