<?php

if( ! defined( 'ABSPATH' ) ) exit(); // Exit if accessed directly

/**
 * Docus Dashboard Options
 */
class Docus_Admin_Setting
{
	
	/**
     * [$_instance]
     * @var null
    */
    private static $_instance = null;

    /**
     * [instance] Initializes a singleton instance
     * @return [Docus_Admin_Setting]
    */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

	function __construct()
	{	
    	add_action( 'admin_init', array( $this, 'admin_init' ) );
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    	add_action( 'admin_enqueue_scripts', array( $this, 'docus_admin_assets' ) );
	}

	// Plugins menu Register
    function admin_menu() {

        add_menu_page(
			__('Docus','docus'), 
			__('Docus','docus'),
			'manage_options',
			'docus-setting-page',
			array($this,'plugin_page'),
			DOCUS_PL_URL.'admin/assets/images/playlist-3.png',
			65
		);

    }

	function admin_init() {
		$docus_options=array(
            'apikey',
            'play_list_id',
            'page_layout_style',
            'video_limit',
    	);

    	foreach ( $docus_options as $field ) {
			register_setting( 'docus-settings-group', $field );
		}
	}

	function docus_admin_assets($hook){
		if($hook === 'toplevel_page_docus-setting-page'){
			//enque stype
			wp_enqueue_style( 'docus-admin-style', DOCUS_PL_URL.'admin/assets/css/admin-style.css');
            wp_enqueue_script( 'docus-admin', DOCUS_PL_URL.'admin/assets/js/admin.js', array('jquery'),'1.0.0', true);
		}
	}

	function plugin_page() {

        ?>
            <h2 class="nav-tab-wrapper">
                <a href="#docus-tab-1" id="htg-general-tab" class="htg-nav nav-tab"><?php esc_html_e('General', 'docus')?></a>
                <a href="#docus-tab-2" id="htg-style-tab" class="htg-nav nav-tab"><?php esc_html_e('Shortcode', 'docus')?></a>
            </h2>
        <?php 
        echo '<div id="docus-tab-1" class="docus-tab-group">';
            echo '<h2>'.esc_html__( 'Docus Option Settings','docus' ).'</h2>';
            $this->save_message();
            echo '<form action="options.php" method="post">';
            settings_fields( 'docus-settings-group' );
            do_settings_sections( 'docus-setting-page' );
            require_once( 'template/general-setting.php' );
            submit_button();
            echo '</form>';
        echo '</div>';

        echo '<div id="docus-tab-2" class="docus-tab-group">';
            echo '<h2>'.esc_html__( 'Docus Shortcode Uses','docus' ).'</h2>';
            require_once( 'template/shortcode-info.php' );
        echo '</div>';

    }

    function save_message() {
        if( isset($_GET['settings-updated']) ) { ?>
            <div class="updated notice is-dismissible"> 
                <p><strong><?php esc_html_e('Successfully Settings Saved.', 'docus') ?></strong></p>
            </div>
            
            <?php
        }
    }

	
}

Docus_Admin_Setting::instance();

?>
