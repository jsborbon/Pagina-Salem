jQuery(document).ready(function($) {
	
	$('body').addClass('genesis-extender-fe-css-builder');
	
	$('.genesis-extender-fe-css-builder-elements-select').each(function() {
		var menu_id = $(this).attr('id');
		this.menu_array = [];
		var menu_li = this;
		$('#'+menu_id+' optgroup option').each(function() {
			var option = $(this).text();
			menu_li.menu_array.push(option);
		});
		
		var menu_li_li = '';
		
		$.each(this.menu_array, function() {
			menu_li_li += '<li>'+this+'</li>';
		});
		
		var menu_optgroup = $('#'+menu_id+' optgroup').attr('label');
		
		var menu_li_open = '		<ul id="'+menu_id+'_ul" class="genesis-extender-fe-css-builder-elements-select-ul"> \
    <li> \
        <span>'+$('#'+menu_id).find('option:first').text()+'</span> \
        <ul>';
        
		var menu_li_close = '		</ul> \
    </li> \
</ul>';
			
		$(this).after(menu_li_open+'\n'+menu_li_li+'\n'+menu_li_close+'\n');
	});

	var genesis_extender_fe_css_builder_toggle_handler = function (event) {
		var clickCounter = $('#genesis-extender-fe-css-builder-css').data('clickCounter') || 0;
		
		if ( clickCounter == 0 ) {
			$('body').addClass('genesis-extender-fe-css-builder-active');
			$('#genesis-extender-fe-css-builder').animate({'height': 'show'}, { duration: 300 });
			var css_editor_h3_draggable_mouseenter = function() {
				$('#genesis-extender-fe-css-builder').draggable();
				$('#genesis-extender-fe-css-builder').draggable( 'enable' );
				$('#genesis-extender-fe-css-builder').draggable();
			};
			var css_editor_h3_draggable_mouseleave = function() {
				$('#genesis-extender-fe-css-builder').draggable();
				$('#genesis-extender-fe-css-builder').draggable( 'disable' );
				$('#genesis-extender-fe-css-builder').draggable();
			};
			$('#genesis-extender-fe-css-builder').addClass('genesis-extender-fe-css-builder-draggable');
			$('#genesis-extender-fe-css-builder h3').bind('mouseenter', css_editor_h3_draggable_mouseenter);
			$('#genesis-extender-fe-css-builder h3').bind('mouseleave', css_editor_h3_draggable_mouseleave);
			clickCounter = 1;
		} else {
			$('body').removeClass('genesis-extender-fe-css-builder-active');
			$('#genesis-extender-fe-css-builder').animate({'height': 'hide'}, { duration: 300 });
			clickCounter = 0;
		}
		
		$('#genesis-extender-fe-css-builder-css').data('clickCounter', clickCounter);
	};
	
	$('#genesis-extender-fe-css-builder-css').bind('click', genesis_extender_fe_css_builder_toggle_handler).one('click', genesis_extender_fe_css_builder_activate);
	$('#genesis-extender-fe-style-editor-css-builder-toggle-icon').one('click', genesis_extender_fe_css_builder_activate);

	function genesis_extender_fe_css_builder_activate() {
		
		function genesis_extender_fe_css_builder_string_between(string, start_needle, end_needle) {
			var start_pos = string.indexOf(start_needle) + 1;
			var end_pos = string.indexOf(end_needle,start_pos);
			var result = string.substring(start_pos,end_pos);
			return result;
		}
		
		$('#genesis-extender-fe-css-builder').addClass('genesis-extender-fe-css-builder-element');
		$('#genesis-extender-fe-css-builder *').addClass('genesis-extender-fe-css-builder-element');
		
		$('.genesis-extender-fe-css-builder-elements-select-ul').dropit();
		
		$('#genesis-extender-fe-css-builder-container .genesis-extender-fe-css-builder-elements-select-ul li ul li').hover(function() {
			var menu_id = $(this).parent().parent().parent().attr('id').slice(0,-3);
			var menu_text = $(this).text();
			$('#'+menu_id+' option').filter(function(index) { return $(this).text() === menu_text; }).attr('selected', 'selected').trigger('change');
		});
		
		$('#genesis-extender-fe-css-builder-container .genesis-extender-fe-css-builder-elements-select-ul li ul li').click(function() {
			$($(this).parent().parent().find('span')).text($(this).text());
		});
		
		/* Genesis Labels */
		function genesis_extender_fe_css_builder_genesis_element_labels_append() {
			$('.site-container').css('position', 'relative').append('<span id="page-label" class="element-labels element-label-right dashicons dashicons-admin-customizer" title=".site-container"></span>');
			$('.site-header').css('position', 'relative').append('<span id="header-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".site-header"></span>');
			$('.site-header .genesis-nav-menu').css('position', 'relative').append('<span id="header-menu-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".site-header .genesis-nav-menu"></span>');
			$('.nav-primary').css('position', 'relative').append('<span id="primary-menu-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".nav-primary"></span>');
			$('.nav-secondary').css('position', 'relative').append('<span id="secondary-menu-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".nav-secondary"></span>');
			$('.archive-description').css('position', 'relative').append('<span id="archive-description-label" class="element-labels element-label-right dashicons dashicons-admin-customizer" title=".archive-description"></span>');
			$('.breadcrumb').css('position', 'relative').append('<span id="breadcrumb-label" class="element-labels element-label-right dashicons dashicons-admin-customizer" title=".breadcrumb"></span>');
			$('.content').css('position', 'relative').append('<span id="content-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".content"></span>');
			$('.entry-header').css('position', 'relative').append('<span id="content-header-label" class="element-labels element-label-right dashicons dashicons-admin-customizer" title=".entry-header"></span>');
			$('.content blockquote').css('position', 'relative').append('<span id="content-blockquote-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".content blockquote"></span>');
			$('.entry-footer .entry-meta').css('position', 'relative').append('<span id="post-meta-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".entry-footer .entry-meta"></span>');
			$('.featured-content').css('position', 'relative').append('<span id="featured-content-label" class="element-labels element-label-right dashicons dashicons-admin-customizer" title=".featured-content"></span>');
			$('.author-box').css('position', 'relative').append('<span id="author-box-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".author-box"></span>');
			$('.after-entry').css('position', 'relative').append('<span id="after-entry-widget-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".after-entry"></span>');
			$('#comments').css('position', 'relative').append('<span id="comment-label" class="element-labels element-label-right dashicons dashicons-admin-customizer" title="#comments"></span>');
			$('#respond').css('position', 'relative').append('<span id="comment-respond-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title="#respond"></span>');
			$('.sidebar').css('position', 'relative').append('<span id="sidebar-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".sidebar"></span>');
			$('#ez-home-container-wrap').css('position', 'relative').append('<span id="ez-home-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title="#ez-home-container-wrap"></span>');
			$('.genesis-extender-widget-area').css('position', 'relative').append('<span id="custom-widget-area-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".genesis-extender-widget-area"></span>');
			$('.footer-widgets').css('position', 'relative').append('<span id="genesis-footer-widget-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".footer-widgets"></span>');
			$('.site-footer').css('position', 'relative').append('<span id="footer-label" class="element-labels element-label-left dashicons dashicons-admin-customizer" title=".site-footer"></span>');
		};
		
		function genesis_extender_fe_css_builder_genesis_element_labels_disable() {
			$('.site-container').css('position', '');
			$('.site-header').css('position', '');
			$('.site-header .genesis-nav-menu').css('position', '');
			$('.nav-primary').css('position', '');
			$('.nav-secondary').css('position', '');
			$('.content').css('position', '');
			$('.breadcrumb').css('position', '');
			$('.archive-description').css('position', '');
			$('.author-box').css('position', '');
			$('.featured-content').css('position', '');
			$('.sidebar').css('position', '');
			$('#comments').css('position', '');
			$('#respond').css('position', '');
			$('#ez-home-container-wrap').css('position', '');
			$('.genesis-extender-widget-area').css('position', '');
			$('.footer-widgets').css('position', '');
			$('.site-footer').css('position', '');
		};
		
		var genesis_extender_fe_css_builder_element_selectors_enable_handler = function() {
			var clickCounter = $('#genesis-extender-fe-css-builder-element-selectors-icon').data('clickCounter') || 0;
			
			if ( clickCounter == 0 ) {
				$('#genesis-extender-fe-css-builder-element-selectors-icon').addClass('element_selectors_enabled');
				genesis_extender_fe_css_builder_genesis_element_labels_append();
				$('.element-labels').click(function() {
					$('.genesis-extender-fe-css-builder-elements-select').change();
					$('#genesis-extender-fe-css-builder-nav-open-close-elements').click();
					var element_label_id = $(this).attr('id');
					var element_label_id_select = element_label_id.replace(/-/g, '_').slice(0,-5);
					$('.all-labeled-elements').hide();
					$('#'+element_label_id_select+'elements').show();
					var value = $(this).attr('title') + ' {';
					var styles = ' background: #DDFFDD !important;';
					$('#genesis-extender-fe-css-builder-highlight-css').html('');
					$('#genesis-extender-fe-css-builder-highlight-css').html('<style type="text/css">' + value + styles + '}</style>');
					setTimeout(function(){
						$('#genesis-extender-fe-css-builder-highlight-css').html('');
					}, 1500);
				});
				clickCounter = 1;
			} else {
				$('#genesis-extender-fe-css-builder-element-selectors-icon').removeClass('element_selectors_enabled');
				genesis_extender_fe_css_builder_genesis_element_labels_disable();
				$('.element-labels').remove();
				clickCounter = 0;
			}
			
			$('#genesis-extender-fe-css-builder-element-selectors-icon').data('clickCounter', clickCounter);
		};
		
		$('#genesis-extender-fe-css-builder-element-selectors-icon').bind('click', genesis_extender_fe_css_builder_element_selectors_enable_handler);
		
		$('.labeled-elements-button').click(function() {
			element_selectors_enabled_check();
		});
		
		$('#font_unit').change(function() {
			var font_unit = $(this).val();
			var font_size = $('#font_size').val();
			if(font_unit == 'rem') {
				$('#font_size').val(font_size / 10 );
			} else {
				$('#font_size').val(font_size * 10);
			}
		});
		
		$('.genesis-extender-fe-css-builder-css-builder-nav-all').click(function() {
			var css_nav_id = $(this).attr('id');
			$('.genesis-extender-fe-css-builder-all-css-builder').hide();
			$('#'+css_nav_id+'-box').show();
			$('.genesis-extender-fe-css-builder-css-builder-nav-all').removeClass('genesis-extender-fe-css-builder-options-nav-active');
			$('#'+css_nav_id).addClass('genesis-extender-fe-css-builder-options-nav-active');
		});
		
		$('#genesis-extender-fe-css-builder-output-cut-button').click(function() {
			$('#genesis-extender-fe-css-builder-nav-open-close-elements').click();
			$('#genesis-extender-fe-css-builder-css').html('<span class="dashicons dashicons-sos"></span><style id="css-builder-editor-css-style" type="text/css"></style>');
		});
		
		$('.genesis-extender-fe-css-builder-elements-select').change(function () {
			var value = $(this).val() || [];
			var styles = ' background: #DDFFDD !important;';
			$('#genesis-extender-fe-css-builder-highlight-css').html('<style type="text/css">' + value + styles + '}</style>');
		});
		
		$('#genesis-extender-fe-css-builder-container').show();
	    $('#genesis-extender-fe-css-builder-style-editor-toggle-icon').click(function() {
	    	element_selectors_enabled_check();
	    	$('#genesis-extender-fe-css-builder-highlight-css').html('');
	    	$('#genesis-extender-fe-css-builder-container').hide();
	    	$('body').removeClass('genesis-extender-fe-css-builder-active');
	    	$('#genesis-extender-fe-style-editor-form').show();
	    	$('body').addClass('genesis-extender-fe-style-editor-active');
	    });
	    
		function element_selectors_enabled_check() {
			if ( $('#genesis-extender-fe-css-builder-element-selectors-icon').hasClass('element_selectors_enabled') ) {
				$('#genesis-extender-fe-css-builder-element-selectors-icon').click();
			} else if ( $('#genesis-extender-fe-css-builder-bb-theme-element-selectors-icon').hasClass('element_selectors_enabled') ) {
				$('#genesis-extender-fe-css-builder-bb-theme-element-selectors-icon').click();
			} else if ( $('#genesis-extender-fe-css-builder-twentysixteen-element-selectors-icon').hasClass('element_selectors_enabled') ) {
				$('#genesis-extender-fe-css-builder-twentysixteen-element-selectors-icon').click();
			}
		}
		
		function genesis_extender_fe_css_builder_css_change() {
			var css = $('#genesis-extender-fe-css-builder-output').val();
			$('#genesis-extender-fe-css-builder-highlight-css').html('');
			$('#genesis-extender-fe-css-builder-css').html('<span class="dashicons dashicons-sos"></span><style id="css-builder-editor-css-style" type="text/css">' + css + '</style>');
		}
		
		$('#genesis-extender-fe-css-builder-output').bind('keyup paste', function(e) {
			if (e.type == 'paste') {
				setTimeout(genesis_extender_fe_css_builder_css_change, 20);
			} else {
				genesis_extender_fe_css_builder_css_change();
			}
		});

		$('.genesis-extender-fe-css-builder-buttons').click(function() {
			genesis_extender_fe_css_builder_css_change();
			$('#genesis-extender-fe-css-builder-output-cut-button').show();
			$('#genesis-extender-fe-css-builder-output-copied-button').hide();
			$('.code-builder-output-cut').removeClass('code-builder-output-cut-copied');
		});
		
		$('.genesis-extender-fe-css-builder-elements-select').change(function() {
			var css = $('#genesis-extender-fe-css-builder-output').val();
			var new_css = css.replace(/\n\n}/g,'\n}');
			$('#genesis-extender-fe-css-builder-output').val(new_css);
		});
		
		$('.genesis-extender-fe-css-builder-button-elements').click(function() {
			var css_length = $('#genesis-extender-fe-css-builder-output').val().length;
			var css_cursor_position = css_length - 3;
			$('#genesis-extender-fe-css-builder-output').selectRange(css_cursor_position,css_cursor_position);
			$('#genesis-extender-fe-css-builder-output-cut-button').show();
			$('#genesis-extender-fe-css-builder-output-copied-button').hide();
		});
	}
	
	/***
		Genesis Hooks Map
							***/
	var show_hide_bb_hooks_map_toggle_handler = function (event) {
		var clickCounter = $(event.target).data('clickCounter') || 0;
		
		if ( clickCounter == 0 ) {
			$('.genesis-extender-mapped-hooks').addClass('genesis-extender-mapped-hooks-styles').each(function(i){
			    var mapped_hook_id = $(this).attr('id');
			    $(this).text('Hook: '+mapped_hook_id);
			});
			clickCounter = 1;
		} else {
			$('.genesis-extender-mapped-hooks').empty().removeClass('genesis-extender-mapped-hooks-styles');
			clickCounter = 0;
		}
		
		$(event.target).data('clickCounter', clickCounter);
	};
		
	$('#css-builder-hooks-map').bind('click', show_hide_bb_hooks_map_toggle_handler);
	/***
		END BB Theme Hooks Map
								***/
	
});