<table class="form-table" role="presentation">
	<tbody>
		<?php 
			$docus_api_key = get_option('apikey')?get_option('apikey'):''; 
			$docus_playlist_id = get_option('play_list_id')?get_option('play_list_id'):''; 
			$ht_video_limit = get_option('video_limit')?get_option('video_limit'):''; 
		?>
		<tr>
			<th scope="row"><?php echo esc_html__('YouTube Data API V3 Key','docus'); ?></th>
			<td>
				<input type="text" class="regular-text" id="api-key" name="apikey" value="<?php echo esc_attr($docus_api_key); ?>"/>
				<p class="description"><?php echo esc_html__( 'Enter YouTube Data Api V3 Key. Don\'t have API Key ','docus'); ?><a href="<?php echo esc_url('https://console.cloud.google.com/apis/library'); ?>" target="_blank"><?php echo esc_html__('Create Your Api Key','docus') ?></a></p>
			</td>
		</tr>
		<tr>
			<th scope="row"><?php echo esc_html__('YouTube Playlist ID','docus'); ?></th>
			<td>
				<input type="text" class="regular-text" id="play-list-id" name="play_list_id" value="<?php echo esc_attr($docus_playlist_id); ?>"/>
				<p class="description docus-playlist-wraper"><?php echo esc_html__( 'Enter Playlist ID. Get the playlist ID from your YouTube Playlist URL  ','docus'); ?>
					<span class="docus-playlist-info">
						<img src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/info.png'); ?>">
						<img class="docus-demo-id" src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/deme-id.png'); ?>">
						<img class="docus-playlist-aro" src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/arro.png'); ?>">
					</span>
				</p>
			</td>
		</tr>
		<tr>
			<th scope="row"><?php echo esc_html__('Video Limit','docus'); ?></th>
			<td>
				<input type="text" class="regular-text" id="video-limit" name="video_limit" value="<?php echo esc_attr($ht_video_limit); ?>"/>
				<p class="description"><?php echo esc_html__( 'Enter the number of videos that you want to display in your page. Default: 30','docus'); ?></p>
			</td>
		</tr>
		<tr>
			<?php $docus_layout_style = get_option('page_layout_style')?get_option('page_layout_style'):'one' ?>
			<td colspan="2" class="docus-wrapper">
				<span class="tbl-ttle"><?php echo esc_html__('Select Page Layout Style :','docus'); ?></span>
				<div class="docus-layout">
					<div class="docus-col">
						<div class="ht-layout-inner">
							<p><?php echo esc_html('Layout Style 1','docus'); ?></p>
							<label for="page-layout-style-1"><img src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/info.png'); ?>"></label>
							<input class="img-slector" <?php echo $docus_layout_style=='one'?'checked':''; ?> id="page-layout-style-1" type="radio" name="page_layout_style" value="one">
							<div class="ht-demo-image">
								<span class="ht-icon-down"><img src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/arro.png'); ?>"></span>
								<img class="ht-demo-img" src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/layout-1.jpg'); ?>">
							</div>
						</div>
					</div>
					<div class="docus-col">
						<div class="ht-layout-inner">
							<p><?php echo esc_html('Layout Style 2','docus'); ?></p>
							<label for="page-layout-style-2"><img src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/info.png'); ?>"></label>
							<input class="img-slector" <?php echo $docus_layout_style=='two'?'checked':''; ?> id="page-layout-style-2" type="radio" name="page_layout_style" value="two" disabled>
							<span style="color: red; margin-top: 4px;"><?php echo esc_html('(Pro)') ?></span>
							<div class="ht-demo-image">
								<span class="ht-icon-down"><img src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/arro.png'); ?>"></span>
								<img class="ht-demo-img" src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/layout-2.jpg'); ?>">
							</div>
						</div>
					</div>
					<div class="docus-col">
						<div class="ht-layout-inner">
							<p><?php echo esc_html('Layout Style 3','docus'); ?></p>
							<label for="page-layout-style-3"><img src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/info.png'); ?>"></label>
							<input class="img-slector" <?php echo $docus_layout_style=='three'?'checked':''; ?> id="page-layout-style-3" type="radio" name="page_layout_style" value="three" disabled>
							<span style="color: red; margin-top: 4px;"><?php echo esc_html('(Pro)') ?></span>
							<div class="ht-demo-image">
								<span class="ht-icon-down"><img src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/arro.png'); ?>"></span>
								<img class="ht-demo-img" src="<?php echo esc_url(DOCUS_PL_URL.'admin/assets/images/layout-3.jpg'); ?>">
							</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
	</tbody>
</table>