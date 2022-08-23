<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function ytpp_settings() {
    global $wpdb;
    ?>
    <div class="wrap">
        <h2><?php _e( 'YouTube Playlist Player Settings', 'youtube-playlist-player' ); ?></h2>

        <?php $tab = isset( $_GET['tab'] ) ? sanitize_text_field( $_GET['tab'] ) : 'dashboard'; ?>

        <h2 class="nav-tab-wrapper">
            <a href="<?php echo admin_url( 'admin.php?page=ytpp&tab=dashboard' ); ?>" class="nav-tab <?php echo $tab === 'dashboard' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Dashboard', 'youtube-playlist-player' ); ?></a>
            <a href="<?php echo admin_url( 'admin.php?page=ytpp&tab=settings' ); ?>" class="nav-tab <?php echo $tab === 'settings' ? 'nav-tab-active' : ''; ?>"><?php _e( 'General Settings', 'youtube-playlist-player' ); ?></a>
            <a href="<?php echo admin_url( 'admin.php?page=ytpp&tab=api' ); ?>" class="nav-tab <?php echo $tab === 'api' ? 'nav-tab-active' : ''; ?>"><?php _e( 'YouTube API', 'youtube-playlist-player' ); ?></a>
            <a href="<?php echo admin_url( 'admin.php?page=ytpp&tab=help' ); ?>" class="nav-tab <?php echo $tab === 'help' ? 'nav-tab-active' : ''; ?>"><?php _e( 'Help/Usage', 'youtube-playlist-player' ); ?></a>
        </h2>

        <?php if ( (string) $tab === 'dashboard' ) { ?>
            <div id="poststuff">
                <div class="gb-ad" id="gb-ad">
                    <h3 class="gb-ad--header"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68 68"><defs/><rect width="100%" height="100%" fill="none"/><g class="currentLayer"><path fill="#fff" d="M34.76 33C22.85 21.1 20.1 13.33 28.23 5.2 36.37-2.95 46.74.01 50.53 3.8c3.8 3.8 5.14 17.94-5.04 28.12-2.95 2.95-5.97 5.84-5.97 5.84L34.76 33"/><path fill="#fff" d="M43.98 42.21c5.54 5.55 14.59 11.06 20.35 5.3 5.76-5.77 3.67-13.1.98-15.79-2.68-2.68-10.87-5.25-18.07 1.96-2.95 2.95-5.96 5.84-5.96 5.84l2.7 2.7m-1.76 1.75c5.55 5.54 11.06 14.59 5.3 20.35-5.77 5.76-13.1 3.67-15.79.98-2.69-2.68-5.25-10.87 1.95-18.07 2.85-2.84 5.84-5.96 5.84-5.96l2.7 2.7" class="selected"/><path fill="#fff" d="M33 34.75c-11.9-11.9-19.67-14.67-27.8-6.52-8.15 8.14-5.2 18.5-1.4 22.3 3.8 3.79 17.95 5.13 28.13-5.05 3.1-3.11 5.84-5.97 5.84-5.97L33 34.75"/></g></svg> Thank you for using YouTube Playlist Player!</h3>
                    <div class="gb-ad--content">
                        <p>If you enjoy this plugin, do not forget to <a href="https://wordpress.org/support/plugin/youtube-playlist-player/reviews/?filter=5" rel="external">rate it</a>! We work hard to update it, fix bugs, add new features and make it compatible with the latest web technologies.</p>
                        <p>Have you tried our other <a href="https://getbutterfly.com/wordpress-plugins/">WordPress plugins</a>?</p>
                    </div>
                    <div class="gb-ad--footer">
                        <p>For support, feature requests and bug reporting, please visit the <a href="https://getbutterfly.com/" rel="external">official website</a>.<br>Built by <a href="https://getbutterfly.com/" rel="external"><strong>getButterfly</strong>.com</a> &middot; <a href="https://getbutterfly.com/wordpress-plugins/youtube-playlist-player/">Documentation</a> &middot; <small>Code wrangling since 2005</small></p>

                        <p>
                            <small>You are using PHP <?php echo PHP_VERSION; ?> and MySQL <?php echo $wpdb->db_version(); ?>.</small>
                        </p>
                    </div>
                </div>

                <h3><?php _e( 'About YouTube Playlist Player', 'youtube-playlist-player' ); ?></h3>
                <p>Display a YouTube player (with an optional playlist) on any post or page using a simple shortcode. The plugin supports a static YouTube player (no video title) and a dynamic one (video title) using the YouTube Data API v3.</p>

                <p>Embedded players must have a viewport that is at least 200px by 200px. If the player displays controls, it must be large enough to fully display the controls without shrinking the viewport below the minimum size. We recommend 16:9 players be at least 480 pixels wide and 270 pixels tall.</p>
                <p>By embedding YouTube videos on your site, you are agreeing to <a href="https://developers.google.com/youtube/terms/api-services-terms-of-service" rel="external">YouTube API Terms of Service</a>.</p>

                <hr>
                <p><img src="<?php echo plugins_url( 'img/developed-with-youtube.png', dirname( __FILE__ ) ); ?>"  alt="Developed with YouTube" width="256" class="ytpp-developed"></p>

                <hr>
                <p>For support, feature requests and bug reporting, please visit the <a href="https://getbutterfly.com/wordpress-plugins/youtube-playlist-player/" rel="external">official website</a>. If you enjoy this plugin, don't forget to rate it. Also, try our other WordPress plugins at <a href="https://getbutterfly.com/wordpress-plugins/" rel="external" target="_blank">getButterfly.com</a>.</p>
                <p>&copy;<?php echo gmdate( 'Y' ); ?> <a href="https://getbutterfly.com/" rel="external"><strong>getButterfly</strong>.com</a> &middot; <small>Code wrangling since 2005</small></p>
            </div>
            <?php
        } elseif ( (string) $tab === 'settings' ) {
            if ( isset( $_POST['info_update1'] ) && current_user_can( 'manage_options' ) ) {
                if ( isset( $_POST['ytpp_rel'] ) ) {
                    update_option( 'ytpp_rel', (int) sanitize_text_field( $_POST['ytpp_rel'] ) );
                } else {
                    update_option( 'ytpp_rel', 0 );
                }

                if ( isset( $_POST['ytpp_info'] ) ) {
                    update_option( 'ytpp_info', (int) sanitize_text_field( $_POST['ytpp_info'] ) );
                } else {
                    update_option( 'ytpp_info', 0 );
                }

                if ( isset( $_POST['ytpp_controls'] ) ) {
                    update_option( 'ytpp_controls', (int) sanitize_text_field( $_POST['ytpp_controls'] ) );
                } else {
                    update_option( 'ytpp_controls', 0 );
                }

                if ( isset( $_POST['ytpp_privacy'] ) ) {
                    update_option( 'ytpp_privacy', (int) sanitize_text_field( $_POST['ytpp_privacy'] ) );
                } else {
                    update_option( 'ytpp_privacy', 0 );
                }

                if ( isset( $_POST['ytpp_iframe_fix'] ) ) {
                    update_option( 'ytpp_iframe_fix', (int) sanitize_text_field( $_POST['ytpp_iframe_fix'] ) );
                } else {
                    update_option( 'ytpp_iframe_fix', 0 );
                }

                echo '<div class="updated notice is-dismissible"><p>Settings updated!</p></div>';
            }
            ?>
            <form method="post" action="">
                <h3><?php _e( 'Player Settings', 'youtube-playlist-player' ); ?></h3>

                <p>
                    <input type="checkbox" class="wppd-ui-toggle" name="ytpp_rel" id="ytpp_rel" value="1" <?php checked( 1, (int) get_option( 'ytpp_rel' ) ); ?>> <label for="ytpp_rel">Show suggested videos when the video finishes</label>
                </p>
                <p>
                    <input type="checkbox" class="wppd-ui-toggle" name="ytpp_info" id="ytpp_info" value="1" <?php checked( 1, (int) get_option( 'ytpp_info' ) ); ?>> <label for="ytpp_info">Show video title and player actions</label>
                </p>
                <p>
                    <input type="checkbox" class="wppd-ui-toggle" name="ytpp_controls" id="ytpp_controls" value="1" <?php checked( 1, (int) get_option( 'ytpp_controls' ) ); ?>> <label for="ytpp_controls">Show player controls</label>
                </p>
                <p>
                    <input type="checkbox" class="wppd-ui-toggle" name="ytpp_privacy" id="ytpp_privacy" value="1" <?php checked( 1, (int) get_option( 'ytpp_privacy' ) ); ?>> <label for="ytpp_privacy">Enable privacy-enhanced mode</label>
                    <br><small>When you turn on privacy-enhanced mode, YouTube won't store information about visitors on your website unless they play the video.</small>
                </p>

                <h3><?php _e( 'Display Settings', 'youtube-playlist-player' ); ?></h3>

                <p>
                    <input type="checkbox" class="wppd-ui-toggle" name="ytpp_iframe_fix" id="ytpp_iframe_fix" value="1" <?php checked( 1, (int) get_option( 'ytpp_iframe_fix' ) ); ?>> <label for="ytpp_iframe_fix">Enable fix for older browsers</label>
                    <br><small>Use this option to fix player height on older browsers, or browsers not supporting the <code>aspect-ratio</code> CSS property.</small>
                </p>                

                <p><input type="submit" name="info_update1" class="button button-primary" value="<?php _e( 'Save Changes', 'youtube-playlist-player' ); ?>"></p>
            </form>
            <?php
        } elseif ( (string) $tab === 'api' ) {
            if ( isset( $_POST['info_update1'] ) && current_user_can( 'manage_options' ) ) {
                update_option( 'ytppYouTubeApi', (string) sanitize_text_field( $_POST['ytppYouTubeApi'] ) );

                echo '<div class="updated notice is-dismissible"><p>Settings updated!</p></div>';
            }
            ?>
            <form method="post" action="">
                <h3><?php _e( 'YouTube API Settings', 'youtube-playlist-player' ); ?></h3>

                <p>
                    <input type="text" name="ytppYouTubeApi" id="ytppYouTubeApi" value="<?php echo get_option( 'ytppYouTubeApi' ); ?>" class="regular-text" placeholder="YouTube API"> <label for="ytppYouTubeApi">YouTube API</label>
                    <br><small>See the <a href="https://developers.google.com/youtube/v3/docs/" rel="external">YouTube API documentation here</a>.</small>
                </p>

                <p><input type="submit" name="info_update1" class="button button-primary" value="<?php _e( 'Save Changes', 'youtube-playlist-player' ); ?>"></p>
            </form>
            <?php
        } elseif ( (string) $tab === 'help' ) {
            ?>
            <div id="poststuff">
                <h3><?php _e( 'Help &amp; Usage Details', 'youtube-playlist-player' ); ?></h3>
                <h4>Use one of the shortcodes below to add the YouTube player</h4>
                <p>Static YouTube player: <code>[yt_playlist mainid="xcJtL7QggTI" vdid="xcJtL7QggTI,AheYbU8J5Tc,X0zGS4-UKgg,74SZXCQb44s,2M0XCH9q3YI"]</code></p>
                <p>Dynamic YouTube player (YouTube Data API v3): <code>[yt_playlist_v3 mainid="xcJtL7QggTI" vdid="xcJtL7QggTI,AheYbU8J5Tc,X0zGS4-UKgg,74SZXCQb44s,2M0XCH9q3YI"]</code></p>
                <p>or use the shortcode in one of your theme templates using the code below:</p>
                <p><code>&lt;?php echo do_shortcode('[yt_playlist mainid="xcJtL7QggTI" vdid="xcJtL7QggTI,AheYbU8J5Tc,X0zGS4-UKgg,74SZXCQb44s,2M0XCH9q3YI"]'); ?&gt;</code></p>
                <p><code>&lt;?php echo do_shortcode('[yt_playlist_v3 mainid="xcJtL7QggTI" vdid="xcJtL7QggTI,AheYbU8J5Tc,X0zGS4-UKgg,74SZXCQb44s,2M0XCH9q3YI"]'); ?&gt;</code></p>

                <p><b>Note:</b> Shortcodes can be added to posts, pages, custom post types, widgets or reusable blocks.</p>

                <hr>
                <p><code>mainid</code> is the main video ID and <code>vdid</code> is the list of playlist videos (also include the main video ID).</p>
                <p>Style the <code>.ytpp-main</code> element to change the videos (and playlist) container.</p>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
}
