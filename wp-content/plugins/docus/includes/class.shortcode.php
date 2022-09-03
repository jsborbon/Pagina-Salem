<?php 

/**
 * Docus Shortcode
*/
class Docus_Shortcode
{

	/**
     * [$_instance]
     * @var null
    */
    private static $_instance = null;

	/**
     * [instance] Initializes a singleton instance
     * @return [Docus_Shortcode]
    */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

	function __construct(){
		add_shortcode('docusplaylist',array($this, 'docus_layout' ));
	}


	/**
     * Docus Short Code
    */
	public function docus_layout($attributes){

		$default = array(
			'key' 		=> docus_get_option('apikey',''),
			'channelid' => docus_get_option('play_list_id',''),
			'limit' 	=> docus_get_option('video_limit',30),
		);

		$list_attributes = shortcode_atts($default, $attributes);

		$api_data = json_encode(
			array(
	            "api_key"       => $list_attributes['key'],
	            "channel_id"    => $list_attributes['channelid'],
	            "layout_style"  => docus_get_option('page_layout_style',''),
	            "video_limit"   => $list_attributes['limit'],
	        )
		);

		ob_start();
		?>
		<div class="htyt-channel-area" id="<?php echo 'key-'.$list_attributes['key'].'-'.$list_attributes['channelid']; ?>">
			<div class="htyt-channel-top-area" data-apidata='<?php echo $api_data; ?>'>
		        <div class="htyt-container">
		            <div class="htyt-channel-info-wrapper">
		                <div class="htyt-row htyt-align-items-center">
		                    <div class="htyt-col-md-6">
		                        <div class="htyt-channel-info">
		                            <!-- channel info will go here -->
		                        </div>
		                    </div>
		                    <div class="htyt-col-md-6">
		                        <div class="htyt-subscribe-button">
		                            <!-- subscribe button with count -->
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="htyt-channel-video-area">
		        <div class="htyt-container">
		            <div class="htyt-video-grid-wrapper htyt-video-grid-wrapper--column-3">
		                <!-- videos will go here -->
		            </div>
		        </div>
		    </div>
	    </div>
		<?php 	
		return ob_get_clean();

	}

}

Docus_Shortcode::instance();

?>