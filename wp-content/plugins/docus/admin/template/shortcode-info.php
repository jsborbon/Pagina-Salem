<div class="ht-short-code-info">
	<span class="tbl-ttle"><?php echo esc_html__('Shortcode:','docus'); ?></span>
	<p><?php echo esc_html('Click on the input copy the selected shortcode text then paste into your place you want to display gallery.','docus'); ?></p>
	<input type="text" title="Click the field then press Ctrl + C." onclick="this.focus();this.select()" style="text-align: center; margin-bottom:10px;" readonly="readonly" size="15" value="[docusplaylist]">
	<table class="ht-shortcode-table">
		<tbody>
			<tr>
				<th scope="row"><?php echo esc_html('Shortcode Option','docus') ?></th>
				<th scope="row"><?php echo esc_html('Description','docus') ?></th>
				<th scope="row"><?php echo esc_html('Example','docus') ?></th>
			</tr>
			<tr class="docus-tablehedding">
				<td colspan="3"><?php echo esc_html('Configure Option','docus') ?></td>
			</tr>
			<tr>
				<td><?php echo esc_html('key','docus') ?></td>
				<td><?php echo esc_html('YouTube Api Key','docus') ?></td>
				<td><?php echo esc_html('[docusplaylist key=AIzaSyAjHS2lQXCkhb1Jf1WcyB6IUR_D7k0GD4I]','docus') ?></td>
			</tr>
			<tr>
				<td><?php echo esc_html('channelid','docus') ?></td>
				<td><?php echo esc_html('YouTube Channel ID','docus') ?></td>
				<td><?php echo esc_html('[docusplaylist channelid=PLk25BQFrj7wEEGUHn9x2zwOql990bZAo_]','docus') ?></td>
			</tr>
			<tr>
				<td><?php echo esc_html('limit','docus') ?></td>
				<td><?php echo esc_html('Show number of YouTube Videos','docus') ?></td>
				<td><?php echo esc_html('[docusplaylist limit=30 ]','docus') ?></td>
			</tr>
			<tr>
				<td><?php echo esc_html('style','docus') ?><span style="color: red;"> <?php echo esc_html('(pro)') ?></span></td>
				<td><?php echo esc_html('Page Layout Style : one,two,three','docus') ?><span style="color: red;"> <?php echo esc_html('(pro)') ?></td>
				<td><?php echo esc_html('[docusplaylist style=one]','docus') ?><span style="color: red;"> <?php echo esc_html('(pro)') ?></td>
			</tr>
		</tbody>
	</table>
</div>