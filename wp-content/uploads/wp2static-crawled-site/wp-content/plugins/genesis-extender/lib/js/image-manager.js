jQuery(document).ready(function($) {
	
	$('.genesis-extender-image-info-button').click(function() {
		var active_li = $(this).closest('li');
		
		active_li.find('.genesis-extender-listed-image-inner').toggleClass('genesis-extender-faded genesis-extender-not-faded');
		active_li.find('.genesis-extender-listed-image-info-inner').toggleClass('genesis-extender-faded genesis-extender-not-faded');
		active_li.find('.genesis-extender-listed-image-inner.genesis-extender-faded').toggle();
		active_li.find('.genesis-extender-listed-image-inner.genesis-extender-not-faded').fadeToggle();
		active_li.find('.genesis-extender-listed-image-info-inner.genesis-extender-faded').toggle();
		active_li.find('.genesis-extender-listed-image-info-inner.genesis-extender-not-faded').fadeToggle();
	});
	
	$('.genesis-extender-image-rename-button').click(function() {
		var answer = confirm ('Are you sure you want to rename this image?');
		if(answer) {
			$('#genesis-extender-image-file-control-form li').removeAttr('id');
			$(this).closest('li').attr('id', 'genesis-extender-child-theme-images-list-rename');
			$('#genesis-extender-image-file-control-form').submit();
		}
	});
	
	$('.genesis-extender-image-delete-button').click(function() {
		var answer = confirm ('Are you sure you want to delete this image?');
		if(answer) {
			$('#genesis-extender-image-file-control-form li').removeAttr('id');
			$(this).closest('li').attr('id', 'genesis-extender-child-theme-images-list-delete');
			$('#genesis-extender-image-file-control-form').submit();
		}
	});
	
	$('.genesis-extender-image-delete-all-button').click(function() {
		var answer = confirm ('Are you sure you want to delete ALL Child Theme images?');
		if(answer) {
			$('#genesis-extender-image-file-control-form li').removeAttr('id');
			$('.genesis-extender-image-delete-all-button-container').attr('id', 'genesis-extender-child-theme-images-list-delete-all');
			$('#genesis-extender-image-file-control-form').submit();
		}
	});
	
	function show_message(response, theme_type) {
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-rename .genesis-extender-ajax-save-spinner').hide();
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-rename .genesis-extender-saved').html(response).fadeIn('slow');
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-delete .genesis-extender-ajax-save-spinner').hide();
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-delete .genesis-extender-saved').html(response).fadeIn('slow');
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-delete-all .genesis-extender-ajax-save-spinner').hide();
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-delete-all .genesis-extender-saved').html(response).fadeIn('slow');
		window.setTimeout(function() {
			$('#genesis-extender-image-file-control-form .genesis-extender-saved').fadeOut('slow');
			if(response.substring(0, 5) != 'Error') {
				location.reload();
			}
		}, 2222);
	}
	
	$('#genesis-extender-image-file-control-form').on('submit', function() {
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-rename .genesis-extender-ajax-save-spinner').show();
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-delete .genesis-extender-ajax-save-spinner').show();
		$('#genesis-extender-image-file-control-form #genesis-extender-child-theme-images-list-delete-all .genesis-extender-ajax-save-spinner').show();
		
		if($('#genesis-extender-child-theme-images-list-rename').length != 0) {
			var action_type = 'rename';
			var name = $('#genesis-extender-child-theme-images-list-rename .genesis-extender-listed-image-name').attr('title');
			var new_name = $('#genesis-extender-child-theme-images-list-rename .genesis-extender-listed-image-name').val();
		} else if($('#genesis-extender-child-theme-images-list-delete').length != 0) {
			var action_type = 'delete';
			var name = $('#genesis-extender-child-theme-images-list-delete .genesis-extender-listed-image-name').attr('title');
			var new_name = '';
		} else if($('#genesis-extender-child-theme-images-list-delete-all').length != 0) {
			var action_type = 'delete_all';
			var name = '';
			var new_name = '';
		}
		var data = $(this).serialize()+'&action_type='+action_type+'&name='+name+'&new_name='+new_name;
		jQuery.post(ajaxurl, data, function(response) {
			if(response) {
				show_message(response);
			}
		});
		
		return false;
	});
	
});