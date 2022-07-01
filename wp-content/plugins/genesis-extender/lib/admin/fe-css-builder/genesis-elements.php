<?php
/**
 * Builds the Genesis Framework HTML elements arrays.
 *
 * @package Extender
 */

/**
 * Build HTML elements drop-down list.
 *
 * @since 1.7.0
 * @return HTML elements array.
 */
function genesis_extender_fe_css_builder_html_elements_array() {
	
	$elements_array = array(
		'page_elements' => array(
			'HTML' => '/* HTML */' . "\n" . 'html',
			'Body' => '/* Body */' . "\n" . 'body',
			'Site Container' => '/* Page Container */' . "\n" . '.site-container',
			'Site Inner' => '/* Site Inner */' . "\n" . '.site-inner',
			'Landing Page Site Inner' => '/* Landing Page Site Inner */' . "\n" . '.landing-page .site-inner',
			'Wrap Class' => '/* Wrap Class */' . "\n" . '.wrap',
			'Content Sidebar Wrap' => '/* Content Sidebar Wrap */' . "\n" . '.content-sidebar-wrap',
			'Universal Link' => '/* Universal Link */' . "\n" . 'a, a:visited',
			'Universal Link Hover' => '/* Universal Link Hover */' . "\n" . 'a:hover',
			'Universal Headings' => '/* Universal Headings */' . "\n" . 'h1, h2, h3, h4, h5, h6',
			'H1 Headings' => '/* H1 Headings */' . "\n" . 'h1',
			'H2 Headings' => '/* H2 Headings */' . "\n" . 'h2',
			'H3 Headings' => '/* H3 Headings */' . "\n" . 'h3',
			'H4 Headings' => '/* H4 Headings */' . "\n" . 'h4',
			'H5 Headings' => '/* H5 Headings */' . "\n" . 'h5',
			'H6 Headings' => '/* H6 Headings */' . "\n" . 'h6',
			'Image Align None' => '/* Image Align None */' . "\n" . 'img.alignnone',
			'Image Align Left' => '/* Image Align Left */' . "\n" . 'img.alignleft',
			'Image Align Center' => '/* Image Align Center */' . "\n" . 'img.centered',
			'Image Align Right' => '/* Image Align Right */' . "\n" . 'img.alignright',
			'Image WP Smiley' => '/* Image WP Smiley */' . "\n" . 'img.wp-smiley, img.wp-wink',
			'Align Left' => '/* Align Left */' . "\n" . '.alignleft',
			'Align Center' => '/* Align Center */' . "\n" . '.aligncenter',
			'Align Right' => '/* Align Right */' . "\n" . '.alignright',
			'WP Caption' => '/* WP Caption */' . "\n" . '.wp-caption',
			'WP Caption Text' => '/* WP Caption Text */' . "\n" . 'p.wp-caption-text',
			'Thumbnail Image' => '/* Thumbnail Image */' . "\n" . '.attachment-thumbnail',
			'Post Format Image' => '/* Post Format Image */' . "\n" . '.post-format-image',
			'Input/Select/Textarea' => '/* Input/Select/Textarea */' . "\n" . 'input, select, textarea',
			'Input/Textarea Focus' => '/* Input/Textarea Focus */' . "\n" . 'input:focus, textarea:focus',
			'Buttons' => '/* Buttons */' . "\n" . 'button, input[type=&#34;button&#34;], input[type=&#34;reset&#34;], input[type=&#34;submit&#34;], .button',
			'Buttons Hover' => '/* Buttons Hover */' . "\n" . 'button:hover, input:hover[type=&#34;button&#34;], input:hover[type=&#34;reset&#34;], input:hover[type=&#34;submit&#34;], .button:hover, button:focus, input:focus[type=&#34;button&#34;], input:focus[type=&#34;reset&#34;], input:focus[type=&#34;submit&#34;], .button:focus',
			'Content Button Hover' => '/* Content Button Hover */' . "\n" . '.entry-content .button:hover, .entry-content .button:focus',
			'Button Small' => '/* Button Small */' . "\n" . 'a.button.small, button.small, input[type=&#34;button&#34;].small, input[type=&#34;reset&#34;].small, input[type=&#34;submit&#34;].small',
			'Button Disabled' => '/* Button Disabled */' . "\n" . '.site-container button:disabled, .site-container button:disabled:hover, .site-container input:disabled, .site-container input:disabled:hover, .site-container input[type=&#34;button&#34;]:disabled, .site-container input[type=&#34;button&#34;]:disabled:hover, .site-container input[type=&#34;reset&#34;]:disabled, .site-container input[type=&#34;reset&#34;]:disabled:hover, .site-container input[type=&#34;submit&#34;]:disabled, .site-container input[type=&#34;submit&#34;]:disabled:hover',
			'Table' => '/* Table */' . "\n" . 'table',
			'Table Body' => '/* Table Body */' . "\n" . 'tbody',
			'Table Standard/Header Cells' => '/* Table Standard/Header Cells */' . "\n" . 'td, th',
			'Table Standard Cells' => '/* Table Standard Cells */' . "\n" . 'td',
			'Table Header Cells' => '/* Table Header Cells */' . "\n" . 'th',
			'Table Standard/Header Cells first-child' => '/* Table Standard/Header Cells first-child */' . "\n" . 'td:first-child, th:first-child'
		),
		'header_elements' => array(
			'Header' => '/* Header */' . "\n" . genesis_extender_html_markup( 'site_header' ),
			'Header Wrap' => '/* Header Wrap */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .wrap',
			'Title Area' => '/* Title Area */' . "\n" . genesis_extender_html_markup( 'title_area' ),
			'Site Title' => '/* Site Title */' . "\n" . genesis_extender_html_markup( 'site_title' ),
			'Site Title Link' => '/* Site Title Link */' . "\n" . genesis_extender_html_markup( 'site_title' ) . ' a, ' . genesis_extender_html_markup( 'site_title' ) . ' a:visited',
			'Site Title Link Hover' => '/* Site Title Link Hover */' . "\n" . genesis_extender_html_markup( 'site_title' ) . ' a:hover',
			'Site Tagline' => '/* Site Tagline */' . "\n" . genesis_extender_html_markup( 'site_description' ),
			'Logo Image' => '/* Logo Image */' . "\n" . '.header-image ' . genesis_extender_html_markup( 'site_header' ) . ' .wrap ' . genesis_extender_html_markup( 'title_area' ),
			'Logo Image Area' => '/* Logo Image Area */' . "\n" . '.header-image ' . genesis_extender_html_markup( 'title_area' ) . ', .header-image ' . genesis_extender_html_markup( 'site_title' ) . ', .header-image ' . genesis_extender_html_markup( 'site_title' ) . ' a',
			'Header Widget Area' => '/* Header Widget Area */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .widget-area'
		),
		'header_menu_elements' => array(
			'Header Menu' => '/* Header Menu */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu',
			'Header Menu Page Link' => '/* Header Menu Page Link */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu a',
			'Header Menu Page Link Hover' => '/* Header Menu Page Link Hover */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:active, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li a:hover',
			'Header Menu Current Page Link' => '/* Header Menu Current Page Link */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu .current_page_item a, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-cat a, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu .current-menu-item a',
			'Header Menu Page jQuery Sub-Indicator' => '/* Header Menu Page jQuery Sub-Indicator */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li a .sf-sub-indicator, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a .sf-sub-indicator, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li li li a .sf-sub-indicator',
			'Header Menu Sub-Page Link' => '/* Header Menu Sub-Page Link */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:link, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:visited',
			'Header Menu Sub-Page Link Hover' => '/* Header Menu Sub-Page Link Hover */' . "\n" . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:active, ' . genesis_extender_html_markup( 'site_header' ) . ' .genesis-nav-menu li li a:hover'
		),
		'primary_menu_elements' => array(
			'Primary Nav' => '/* Primary Nav */' . "\n" . genesis_extender_html_markup( 'nav_primary' ),
			'Primary Nav Menu' => '/* Primary Nav Menu */' . "\n" . '.menu-primary',
			'Primary Nav Page Link' => '/* Primary Nav Page Link */' . "\n" . '.menu-primary a',
			'Primary Nav Page Link Hover' => '/* Primary Nav Page Link Hover */' . "\n" . '.menu-primary li a:active, .menu-primary li a:hover',
			'Primary Nav Current Page Link' => '/* Primary Nav Current Page Link */' . "\n" . '.menu-primary .current_page_item a, .menu-primary .current-cat a, .menu-primary .current-menu-item a',
			'Primary Nav Page jQuery Sub-Indicator' => '/* Primary Nav Page jQuery Sub-Indicator */' . "\n" . '.menu-primary li a .sf-sub-indicator, .menu-primary li li a .sf-sub-indicator, .menu-primary li li li a .sf-sub-indicator',
			'Primary Nav Sub-Page Link' => '/* Primary Nav Sub-Page Link */' . "\n" . '.menu-primary li li a, .menu-primary li li a:link, .menu-primary li li a:visited',
			'Primary Nav Sub-Page Link Hover' => '/* Primary Nav Sub-Page Link Hover */' . "\n" . '.menu-primary li li a:active, .menu-primary li li a:hover',
			'Primary Nav Right' => '/* Primary Nav Right */' . "\n" . '.genesis-nav-menu li.right',
			'Primary Nav Right Search' => '/* Primary Nav Right Search */' . "\n" . '.genesis-nav-menu li.search',
			'Primary Nav Right RSS' => '/* Primary Nav Right RSS */' . "\n" . '.genesis-nav-menu li.rss a',
			'Primary Nav Right Twitter' => '/* Primary Nav Right Twitter */' . "\n" . '.genesis-nav-menu li.twitter a',
			'Primary Nav Right Link' => '/* Primary Nav Right Link */' . "\n" . '.genesis-nav-menu li.right a, .genesis-nav-menu li.right a:visted',
			'Primary Nav Right Link Hover' => '/* Primary Nav Right Link Hover */' . "\n" . '.genesis-nav-menu li.right a:hover'
		),
		'secondary_menu_elements' => array(
			'Secondary Nav' => '/* Secondary Nav */' . "\n" . genesis_extender_html_markup( 'nav_secondary' ),
			'Secondary Nav Menu' => '/* Secondary Nav Menu */' . "\n" . '.menu-secondary',
			'Secondary Nav Page Link' => '/* Secondary Nav Page Link */' . "\n" . '.menu-secondary a',
			'Secondary Nav Page Link Hover' => '/* Secondary Nav Page Link Hover */' . "\n" . '.menu-secondary li a:active, .menu-secondary li a:hover',
			'Secondary Nav Current Page Link' => '/* Secondary Nav Current Page Link */' . "\n" . '.menu-secondary .current_page_item a, .menu-secondary .current-cat a, .menu-secondary .current-menu-item a',
			'Secondary Nav Page jQuery Sub-Indicator' => '/* Secondary Nav Page jQuery Sub-Indicator */' . "\n" . '.menu-secondary li a .sf-sub-indicator, .menu-secondary li li a .sf-sub-indicator, .menu-secondary li li li a .sf-sub-indicator',
			'Secondary Nav Sub-Page Link' => '/* Secondary Nav Sub-Page Link */' . "\n" . '.menu-secondary li li a, .menu-secondary li li a:link, .menu-secondary li li a:visited',
			'Secondary Nav Sub-Page Link Hover' => '/* Secondary Nav Sub-Page Link Hover */' . "\n" . '.menu-secondary li li a:active, .menu-secondary li li a:hover'
		),
		'archive_description_elements' => array(
			'Archive Description' => '/* Archive Description */' . "\n" . '.archive-description',
			'Archive Description Title' => '/* Archive Description Title */' . "\n" . genesis_extender_html_markup( 'content' ) . '  .archive-description .archive-title',
			'Archive Description Paragraph' => '/* Archive Description Paragraph */' . "\n" . genesis_extender_html_markup( 'content' ) . '  .archive-description p',
			'Archive Description Link' => '/* Archive Description Link */' . "\n" . genesis_extender_html_markup( 'content' ) . '  .archive-description a, .content .archive-description a:visited',
			'Archive Description Link Hover' => '/* Archive Description Link Hover */' . "\n" . genesis_extender_html_markup( 'content' ) . '  .archive-description a:hover, .content .archive-description a:focus',
			'Taxonomy Description' => '/* Taxonomy Description */' . "\n" . '.taxonomy-description',
			'Taxonomy Description Title' => '/* Taxonomy Description Title */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .taxonomy-description h1',
			'Taxonomy Description Paragraph' => '/* Taxonomy Description Paragraph */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .taxonomy-description p',
			'Taxonomy Description Link' => '/* Taxonomy Description Link */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .taxonomy-description a, ' . genesis_extender_html_markup( 'content' ) . ' .taxonomy-description a:visited',
			'Taxonomy Description Link Hover' => '/* Taxonomy Description Link Hover */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .taxonomy-description a:hover',
			'Author Description' => '/* Author Description */' . "\n" . '.author-description',
			'Author Description Title' => '/* Author Description Title */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .author-description h1',
			'Author Description Paragraph' => '/* Author Description Paragraph */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .author-description p',
			'Author Description Link' => '/* Author Description Link */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .author-description a, ' . genesis_extender_html_markup( 'content' ) . ' .author-description a:visited',
			'Author Description Link Hover' => '/* Author Description Link Hover */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .author-description a:hover'
		),
		'breadcrumb_elements' => array(
			'Breadcrumbs' => '/* Breadcrumbs */' . "\n" . '.breadcrumb',
			'Breadcrumbs Link' => '/* Breadcrumbs Link */' . "\n" . '.breadcrumb a, .breadcrumb a:visited',
			'Breadcrumbs Link Hover' => '/* Breadcrumbs Link Hover */' . "\n" . '.breadcrumb a:hover'
		),
		'content_elements' => array(
			'Content' => '/* Content */' . "\n" . genesis_extender_html_markup( 'content' ),
			'Content Post' => '/* Content Post */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .post',
			'Content Page' => '/* Content Page */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .page',
			'Content Paragraph' => '/* Content Paragraph */' . "\n" . '.entry-content p',
			'Content Lists' => '/* Content Lists */' . "\n" . '.entry-content ul li, .entry-content ol li',
			'Content Link' => '/* Content Link */' . "\n" . '.entry-content a, .entry-content a:visited',
			'Content Link Hover' => '/* Content Link Hover */' . "\n" . '.entry-content a:hover',
			'Content Post/Page UL LI' => '/* Content Post/Page UL LI */' . "\n" . '.entry-content ul li',
			'Content Post/Page OL LI' => '/* Content Post/Page OL LI */' . "\n" . '.entry-content ol li',
			'Post Navigation' => '/* Post Navigation */' . "\n" . genesis_extender_html_markup( 'pagination' ),
			'Post Navigation Link' => '/* Post Navigation Link */' . "\n" . genesis_extender_html_markup( 'pagination' ) . ' a, ' . genesis_extender_html_markup( 'pagination' ) . ' a:visited',
			'Post Navigation Link Hover' => '/* Post Navigation Link Hover */' . "\n" . genesis_extender_html_markup( 'pagination' ) . ' a:hover',
			'Post Navigation Numbered' => '/* Post Navigation Numbered */' . "\n" . genesis_extender_html_markup( 'pagination' ) . ' li a, ' . genesis_extender_html_markup( 'pagination' ) . ' li.disabled, ' . genesis_extender_html_markup( 'pagination' ) . ' li a:hover, ' . genesis_extender_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link' => '/* Post Navigation Numbered Link */' . "\n" . genesis_extender_html_markup( 'pagination' ) . ' li a:hover, ' . genesis_extender_html_markup( 'pagination' ) . ' li.active a ',
			'Post Navigation Numbered Link Hover' => '/* Post Navigation Numbered Link Hover */' . "\n" . genesis_extender_html_markup( 'pagination' ) . ' li a:hover'
		),
		'content_header_elements' => array(
			'Entry Header' => '/* Entry Header */' . "\n" . '.entry-header',
			'Post/Page Title' => '/* Post/Page Title */' . "\n" . genesis_extender_html_markup( 'content' ) . ' h1.entry-title, ' . genesis_extender_html_markup( 'content' ) . ' h2.entry-title',
			'Post Title Link' => '/* Post Title Link */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .post h2 a, ' . genesis_extender_html_markup( 'content' ) . ' .post h2 a:visited',
			'Post Title Link Hover' => '/* Post Title Link Hover */' . "\n" . genesis_extender_html_markup( 'content' ) . ' .post h2 a:hover',
			'Post Info' => '/* Post Info */' . "\n" . genesis_extender_html_markup( 'entry_header_entry_meta' ),
			'Post Info Link' => '/* Post Info Link */' . "\n" . genesis_extender_html_markup( 'entry_header_entry_meta' ) . ' a, ' . genesis_extender_html_markup( 'entry_header_entry_meta' ) . ' a:visited',
			'Post Info Link Hover' => '/* Post Info Link Hover */' . "\n" . genesis_extender_html_markup( 'entry_header_entry_meta' ) . ' a:hover'
		),
		'content_blockquote_elements' => array(
			'Content Blockquote' => '/* Content Blockquote */' . "\n" . genesis_extender_html_markup( 'content' ) . ' blockquote',
			'Content Blockquote Paragraph' => '/* Content Blockquote Paragraph */' . "\n" . genesis_extender_html_markup( 'content' ) . ' blockquote p',
			'Content Blockquote Link' => '/* Content Blockquote Link */' . "\n" . genesis_extender_html_markup( 'content' ) . ' blockquote a, ' . genesis_extender_html_markup( 'content' ) . ' blockquote a:visited',
			'Content Blockquote Link Hover' => '/* Content Blockquote Link Hover */' . "\n" . genesis_extender_html_markup( 'content' ) . ' blockquote a:hover'
		),
		'post_meta_elements' => array(
			'Post Meta' => '/* Post Meta */' . "\n" . genesis_extender_html_markup( 'entry_footer_entry_meta' ),
			'Post Meta Link' => '/* Post Meta Link */' . "\n" . genesis_extender_html_markup( 'entry_footer_entry_meta' ) . ' a, ' . genesis_extender_html_markup( 'entry_footer_entry_meta' ) . ' a:visited',
			'Post Meta Link Hover' => '/* Post Meta Link Hover */' . "\n" . genesis_extender_html_markup( 'entry_footer_entry_meta' ) . ' a:hover'
		),
		'featured_content_elements' => array(
			'Featured Content' => '/* Featured Content */' . "\n" . '.featured-content',
			'Featured Content .entry' => '/* Featured Content .entry */' . "\n" . '.featured-content .entry',
			'Featured Content Title' => '/* Featured Content Title */' . "\n" . '.featured-content .entry h2',
			'Featured Content Title Link' => '/* Featured Content Title Link */' . "\n" . '.featured-content .entry h2 a, .featured-content .entry h2 a:visited',
			'Featured Content Title Link Hover' => '/* Featured Content Title Link Hover */' . "\n" . '.featured-content .entry h2 a:hover, .featured-content .entry h2 a:focus',
			'Featured Content Byline' => '/* Featured Content Byline */' . "\n" . '.featured-content .entry .byline',
			'Featured Content Byline Link' => '/* Featured Content Byline Link */' . "\n" . '.featured-content .entry .byline a, .featured-content .entry .byline a:visited',
			'Featured Content Byline Link Hover' => '/* Featured Content Byline Link Hover */' . "\n" . '.featured-content .entry .byline a:hover, .featured-content .entry .byline a:focus',
			'Featured Content Paragraph' => '/* Featured Content Paragraph */' . "\n" . '.featured-content .entry p',
			'Featured Content Link' => '/* Featured Content Link */' . "\n" . '.featured-content .entry a, .featured-content .entry a:visited',
			'Featured Content Link Hover' => '/* Featured Content Link Hover */' . "\n" . '.featured-content .entry a:hover, .featured-content .entry a:focus',
			'Featured Post' => '/* Featured Post */' . "\n" . '.featuredpost',
			'Featured Post .post' => '/* Featured Post .post */' . "\n" . '.featuredpost .post',
			'Featured Post Title' => '/* Featured Post Title */' . "\n" . '.featuredpost .post h2',
			'Featured Post Title Link' => '/* Featured Post Title Link */' . "\n" . '.featuredpost .post h2 a, .featuredpost .post h2 a:visited',
			'Featured Post Title Link Hover' => '/* Featured Post Title Link Hover */' . "\n" . '.featuredpost .post h2 a:hover',
			'Featured Post Post Info' => '/* Featured Post Post Info */' . "\n" . '.featuredpost .post ' . genesis_extender_html_markup( 'entry_header_entry_meta' ),
			'Featured Post Post Info Link' => '/* Featured Post Post Info Link */' . "\n" . '.featuredpost .post ' . genesis_extender_html_markup( 'entry_header_entry_meta' ) . ' a, .featuredpost .post ' . genesis_extender_html_markup( 'entry_header_entry_meta' ) . ' a:visited',
			'Featured Post Post Info Link Hover' => '/* Featured Post Post Info Link Hover */' . "\n" . '.featuredpost .post ' . genesis_extender_html_markup( 'entry_header_entry_meta' ) . ' a:hover',
			'Featured Post Paragraph' => '/* Featured Post Paragraph */' . "\n" . '.featuredpost .post p',
			'Featured Post Link' => '/* Featured Post Link */' . "\n" . '.featuredpost .post a, .featuredpost .post a:visited',
			'Featured Post Link Hover' => '/* Featured Post Link Hover */' . "\n" . '.featuredpost .post a:hover',
			'Featured Page' => '/* Featured Page */' . "\n" . '.featuredpage',
			'Featured Page .page' => '/* Featured Page .page */' . "\n" . '.featuredpage .page',
			'Featured Page Title' => '/* Featured Page Title */' . "\n" . '.featuredpage .page h2',
			'Featured Page Title Link' => '/* Featured Page Title Link */' . "\n" . '.featuredpage .page h2 a, .featuredpage .page h2 a:visited',
			'Featured Page Title Link Hover' => '/* Featured Page Title Link Hover */' . "\n" . '.featuredpage .page h2 a:hover, .featuredpage .page h2 a:focus',
			'Featured Page Byline' => '/* Featured Page Byline */' . "\n" . '.featuredpage .page .byline',
			'Featured Page Byline Link' => '/* Featured Page Byline Link */' . "\n" . '.featuredpage .page .byline a, .featuredpage .page .byline a:visited',
			'Featured Page Byline Link Hover' => '/* Featured Page Byline Link Hover */' . "\n" . '.featuredpage .page .byline a:hover, .featuredpage .page .byline a:focus',
			'Featured Page Paragraph' => '/* Featured Page Paragraph */' . "\n" . '.featuredpage .page p',
			'Featured Page Link' => '/* Featured Page Link */' . "\n" . '.featuredpage .page a, .featuredpage .page a:visited',
			'Featured Page Link Hover' => '/* Featured Page Link Hover */' . "\n" . '.featuredpage .page a:hover, .featuredpage .page a:focus'
		),
		'after_entry_widget_elements' => array(
			'After Entry Widget Container' => '/* After Entry Widget Container */' . "\n" . '.after-entry',
			'After Entry Widget' => '/* After Entry Widget */' . "\n" . '.after-entry .widget',
			'After Entry Widget Title' => '/* After Entry Widget Title */' . "\n" . '.after-entry .widget .widget-title',
			'After Entry Widget Link' => '/* After Entry Widget Link */' . "\n" . '.after-entry .widget a',
			'After Entry Widget Link Hover' => '/* After Entry Widget Link Hover */' . "\n" . '.after-entry .widget a:hover, .after-entry .widget a:focus'
		),
		'author_box_elements' => array(
			'Author Box' => '/* Author Box */' . "\n" . '.author-box',
			'Author Box Title' => '/* Author Box Title */' . "\n" . '.author-box-title',
			'Author Box Paragraph' => '/* Author Box Paragraph */' . "\n" . '.author-box-content',
			'Author Box Link' => '/* Author Box Link */' . "\n" . '.author-box a, .author-box a:visited',
			'Author Box Link Hover' => '/* Author Box Link Hover */' . "\n" . '.author-box a:hover, .author-box a:focus',
			'Author Box Avatar' => '/* Author Box Avatar */' . "\n" . '.author-box .avatar'
		),
		'comment_elements' => array(
			'Comments' => '/* Comments */' . "\n" . '#comments',
			'Comments Title' => '/* Comments Title */' . "\n" . '#comments h3',
			'Comment List' => '/* Comment List */' . "\n" . '.comment-list',
			'Comment Author' => '/* Comment Author */' . "\n" . '.comment-author',
			'Comment Meta' => '/* Comment Meta */' . "\n" . genesis_extender_html_markup( 'comment_meta' ),
			'Comment Meta Link' => '/* Comment Meta Link */' . "\n" . genesis_extender_html_markup( 'comment_meta' ) . ' a, ' . genesis_extender_html_markup( 'comment_meta' ) . ' a:visited',
			'Comment Meta Link Hover' => '/* Comment Meta Link Hover */' . "\n" . genesis_extender_html_markup( 'comment_meta' ) . ' a:hover',
			'Comment Thread Even' => '/* Comment Thread Even */' . "\n" . '.thread-even',
			'Comment Thread Alt' => '/* Comment Thread Alt */' . "\n" . '.thread-alt',
			'Comments Nav' => '/* Comments Nav */' . "\n" . '#comments ' . genesis_extender_html_markup( 'pagination' ),
			'No Comments Text' => '/* No Comments Text */' . "\n" . '.nocomments'
		),
		'comment_respond_elements' => array(
			'Comments Respond' => '/* Comments Respond */' . "\n" . '#respond',
			'Reply Title' => '/* Reply Title */' . "\n" . '#respond h3',
			'Author/Email/URL/Comment' => '/* Author/Email/URL/Comment */' . "\n" . '#author, #comment, #email, #url',
			'Comment Form' => '/* Comment Form */' . "\n" . '#comment',
			'Comment Submit Button' => '/* Comment Submit Button */' . "\n" . '#commentform #submit',
			'Comment Submit Button Hover' => '/* Comment Submit Button Hover */' . "\n" . '#commentform #submit:hover'
		),
		'sidebar_elements' => array(
			'Sidebars' => '/* Sidebars */' . "\n" . '.sidebar',
			'Sidebars Heading' => '/* Sidebars Heading */' . "\n" . '.sidebar .widget-title',
			'Sidebars Widget' => '/* Sidebars Widget */' . "\n" . '.sidebar .widget',
			'Sidebars Link' => '/* Sidebars Link */' . "\n" . '.sidebar a',
			'Sidebars Link Hover' => '/* Sidebars Link Hover */' . "\n" . '.sidebar a:hover, .sidebar a:focus',
			'Sidebars UL/OL' => '/* Sidebars UL/OL */' . "\n" . '.sidebar.widget-area ul, .sidebar.widget-area ol',
			'Sidebars UL LI' => '/* Sidebars UL LI */' . "\n" . '.sidebar.widget-area ul li',
			'Primary Sidebar' => '/* Primary Sidebar */' . "\n" . genesis_extender_html_markup( 'sidebar_primary' ),
			'Primary Sidebar Title' => '/* Primary Sidebar Title */' . "\n" . genesis_extender_html_markup( 'sidebar_primary' ) . ' .widget-title',
			'Primary Sidebar Widget' => '/* Primary Sidebar Widget */' . "\n" . genesis_extender_html_markup( 'sidebar_primary' ) . ' .widget',
			'Primary Sidebar Link' => '/* Primary Sidebar Link */' . "\n" . genesis_extender_html_markup( 'sidebar_primary' ) . ' a, ' . genesis_extender_html_markup( 'sidebar_primary' ) . ' a:visited',
			'Primary Sidebar Link Hover' => '/* Primary Sidebar Link Hover */' . "\n" . genesis_extender_html_markup( 'sidebar_primary' ) . ' a:hover',
			'Primary Sidebar UL/OL' => '/* Primary Sidebar UL/OL */' . "\n" . genesis_extender_html_markup( 'sidebar_primary' ) . '.widget-area ul, ' . genesis_extender_html_markup( 'sidebar_primary' ) . '.widget-area ol',
			'Primary Sidebar UL LI' => '/* Primary Sidebar UL LI */' . "\n" . genesis_extender_html_markup( 'sidebar_primary' ) . '.widget-area ul li',
			'Secondary Sidebar' => '/* Secondary Sidebar */' . "\n" . genesis_extender_html_markup( 'sidebar_secondary' ),
			'Secondary Sidebar Title' => '/* Secondary Sidebar Title */' . "\n" . genesis_extender_html_markup( 'sidebar_secondary' ) . ' .widget-title',
			'Secondary Sidebar Widget' => '/* Secondary Sidebar Widget */' . "\n" . genesis_extender_html_markup( 'sidebar_secondary' ) . ' .widget',
			'Secondary Sidebar Link' => '/* Secondary Sidebar Link */' . "\n" . genesis_extender_html_markup( 'sidebar_secondary' ) . ' a, ' . genesis_extender_html_markup( 'sidebar_secondary' ) . ' a:visited',
			'Secondary Sidebar Link Hover' => '/* Secondary Sidebar Link Hover */' . "\n" . genesis_extender_html_markup( 'sidebar_secondary' ) . ' a:hover',
			'Secondary Sidebar UL/OL' => '/* Secondary Sidebar UL/OL */' . "\n" . genesis_extender_html_markup( 'sidebar_secondary' ) . '.widget-area ul, ' . genesis_extender_html_markup( 'sidebar_secondary' ) . '.widget-area ol',
			'Secondary Sidebar UL LI' => '/* Secondary Sidebar UL LI */' . "\n" . genesis_extender_html_markup( 'sidebar_secondary' ) . '.widget-area ul li'
		),
		'ez_home_elements' => array(
			'EZ Home Container Wrap' => '/* EZ Home Container Wrap */' . "\n" . '#ez-home-container-wrap',
			'EZ Home Widget Area H4' => '/* EZ Home Widget Area H4 */' . "\n" . '#ez-home-container-wrap .ez-widget-area h4',
			'EZ Home Widget Area' => '/* EZ Home Widget Area */' . "\n" . '#ez-home-container-wrap .ez-widget-area',
			'EZ Home Widget Area Link' => '/* EZ Home Widget Area Link */' . "\n" . '#ez-home-container-wrap .ez-widget-area a, #ez-home-container-wrap .ez-widget-area a:visited',
			'EZ Home Widget Area Link Hover' => '/* EZ Home Widget Area Link Hover */' . "\n" . '#ez-home-container-wrap .ez-widget-area a:hover',
			'EZ Home Container Area Class' => '/* EZ Home Container Area Class */' . "\n" . '.ez-home-container-area',
			'EZ Home Top Container' => '/* EZ Home Top Container */' . "\n" . '#ez-home-top-container',
			'EZ Home Top 1' => '/* EZ Home Top 1 */' . "\n" . '#ez-home-top-1',
			'EZ Home Top 2' => '/* EZ Home Top 2 */' . "\n" . '#ez-home-top-2',
			'EZ Home Top 3' => '/* EZ Home Top 3 */' . "\n" . '#ez-home-top-3',
			'EZ Home Middle Container' => '/* EZ Home Middle Container */' . "\n" . '#ez-home-middle-container',
			'EZ Home Middle 1' => '/* EZ Home Middle 1 */' . "\n" . '#ez-home-middle-1',
			'EZ Home Middle 2' => '/* EZ Home Middle 2 */' . "\n" . '#ez-home-middle-2',
			'EZ Home Middle 3' => '/* EZ Home Middle 3 */' . "\n" . '#ez-home-middle-3',
			'EZ Home Bottom Container' => '/* EZ Home Bottom Container */' . "\n" . '#ez-home-bottom-container',
			'EZ Home Bottom 1' => '/* EZ Home Bottom 1 */' . "\n" . '#ez-home-bottom-1',
			'EZ Home Bottom 2' => '/* EZ Home Bottom 2 */' . "\n" . '#ez-home-bottom-2',
			'EZ Home Bottom 3' => '/* EZ Home Bottom 3 */' . "\n" . '#ez-home-bottom-3'
		),
		'custom_widget_area_elements' => array(
			'Custom Widget Area' => '/* Custom Widget Area */' . "\n" . '.genesis-extender-widget-area',
			'Custom Widget Area H4' => '/* Custom Widget Area H4 */' . "\n" . '.genesis-extender-widget-area h4',
			'Custom Widget Area Link' => '/* Custom Widget Area Link */' . "\n" . '.genesis-extender-widget-area a, .catalyst-widget-area a:visited',
			'Custom Widget Area Link Hover' => '/* Custom Widget Area Link Hover */' . "\n" . '.genesis-extender-widget-area a:hover'
		),
		'genesis_footer_widget_elements' => array(
			'Footer Widgets Container' => '/* Genesis Footer Widgets Container */' . "\n" . '.footer-widgets',
			'Footer Widgets Inner Wrap' => '/* Genesis Footer Widgets Inner Wrap */' . "\n" . '.footer-widgets .wrap',
			'Footer Widgets Widget' => '/* Genesis Footer Widgets Widget */' . "\n" . '.footer-widgets .widget',
			'Footer Widgets Title' => '/* Genesis Footer Widgets Title */' . "\n" . '.footer-widgets .widget .widget-title',
			'Footer Widgets Link' => '/* Genesis Footer Widgets Link */' . "\n" . '.footer-widgets .widget a',
			'Footer Widgets Link Hover' => '/* Genesis Footer Widgets Link Hover */' . "\n" . '.footer-widgets .widget a:hover'
		),
		'footer_elements' => array(
			'Footer' => '/* Footer */' . "\n" . genesis_extender_html_markup( 'site_footer' ),
			'Footer Wrap' => '/* Footer Wrap */' . "\n" . genesis_extender_html_markup( 'site_footer' ) . ' .wrap',
			'Footer Text' => '/* Footer Text */' . "\n" . genesis_extender_html_markup( 'site_footer' ) . ' p',
			'Footer Link' => '/* Footer Link */' . "\n" . genesis_extender_html_markup( 'site_footer' ) . ' a, ' . genesis_extender_html_markup( 'site_footer' ) . ' a:visited',
			'Footer Link Hover' => '/* Footer Link Hover */' . "\n" . genesis_extender_html_markup( 'site_footer' ) . ' a:hover',
			'Footer Go To Top' => '/* Footer Go To Top */' . "\n" . genesis_extender_html_markup( 'site_footer' ) . ' .gototop',
			'Footer Credits' => '/* Footer Credits */' . "\n" . genesis_extender_html_markup( 'site_footer' ) . ' .creds'
		)
	);
	
	return $elements_array;
	
}
