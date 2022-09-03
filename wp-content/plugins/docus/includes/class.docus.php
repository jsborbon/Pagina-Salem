<?php

/**
 * Docus Playlist Render
*/
class Docus 
{

	/**
     * [$_instance]
     * @var null
    */
    private static $_instance = null;

    /**
     * [instance] Initializes a singleton instance
     * @return [Docus]
    */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
	
	function __construct()
	{
        add_action( 'init', array( $this, 'i18n') );
        add_action( 'plugins_loaded', array( $this, 'init' ) );
        add_action( 'wp_enqueue_scripts', array( $this, 'docus_assets_enqueue' ) );
        register_activation_hook(DOCUS_PL_ROOT, array( $this, 'docus_deactivate_pro_version' ));
	}

	/**
     * [i18n] Load Text Domain
     * @return [void]
    */
    public function i18n() {
        load_plugin_textdomain( 'docus', false, dirname( plugin_basename( DOCUS_PL_ROOT ) ) . '/languages/' );

    }

    public function init() {
    	// Plugins Required File
    	$this->includes();
    	//add settings in plugin action
		add_filter('plugin_action_links_'.DOCUS_PLUGIN_BASE,function($links){

			$link = sprintf("<a href='%s'>%s</a>",esc_url(admin_url('admin.php?page=docus-setting-page')),__('Settings','docus'));
			array_unshift($links,$link);
			return $links;

		});
    }

    /**
	 *include file
	*/
    public function includes() {
        require_once ( DOCUS_PL_PATH . 'admin/admin-init.php' );
    }

    /**
     * Plugin deactivation pro version
    */
    function docus_deactivate_pro_version(){
        if( is_plugin_active('docus-pro/docus-pro.php') ){
            deactivate_plugins('docus-pro/docus-pro.php');
        }
         if(empty(get_option('page_layout_style')) || get_option('page_layout_style')){
            update_option('page_layout_style', 'one');
        }
    }

    /**
	 *enque style
	*/
    public function docus_assets_enqueue(){
       global $post;
       if(has_shortcode( $post->post_content, 'docusplaylist') && ( is_single() || is_page() ) ){
    	   wp_enqueue_style( 'magnific-popup', DOCUS_PL_URL.'assets/css/magnific-popup.css');
           wp_enqueue_style( 'perfect-scrollbar', DOCUS_PL_URL.'assets/css/perfect-scrollbar.css');
           wp_enqueue_style( 'docus-style', DOCUS_PL_URL.'assets/css/style.css');
           wp_enqueue_script( 'magnific-popup', DOCUS_PL_URL.'assets/js/jquery.magnific-popup.min.js', array('jquery'),'1.0.0', true);  
           wp_enqueue_script( 'sticky-sidebar', DOCUS_PL_URL.'assets/js/jquery.sticky-sidebar.js', array('jquery'),'1.0.0', true);  
           wp_enqueue_script( 'perfect-scrollbar', DOCUS_PL_URL.'assets/js/perfect-scrollbar.min.js', array('jquery'),'1.0.0', true);     
           wp_enqueue_script( 'ResizeSensor', DOCUS_PL_URL.'assets/js/ResizeSensor.js', array('jquery'),'1.0.0', true);
           wp_enqueue_script( 'docus-main-js', DOCUS_PL_URL.'assets/js/main.js', array('jquery'),'1.0.0', true); 
        }
    }
      
}

Docus::instance();

?>