<?php
if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { die('You are not allowed to call this page directly.'); }

/**
 * nggallery_admin_overview()
 *
 * Add the admin overview the dashboard style
 * @return mixed content
 */
function nggallery_admin_overview()  {
    ?>
    <div class="wrap ngg-wrap">
        <?php screen_icon( 'nextgen-gallery' ); ?>
        <h2><?php _e('NextGEN Gallery Overview', 'nggallery') ?></h2>
        <?php if (version_compare(PHP_VERSION, '5.0.0', '<')) ngg_check_for_PHP5(); ?>
        <div id="dashboard-widgets-container" class="ngg-overview">
            <div id="dashboard-widgets" class="metabox-holder">
                <div id="post-body">
                    <div id="dashboard-widgets-main-content">
                        <div class="postbox-container" id="main-container" style="width:75%;">
                            <?php do_meta_boxes('ngg_overview', 'left', ''); ?>
                        </div>
                        <div class="postbox-container" id="side-container" style="width:24%;">
                            <?php do_meta_boxes('ngg_overview', 'right', ''); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //<![CDATA[
        var ajaxWidgets, ajaxPopulateWidgets;

        jQuery(document).ready( function($) {
            // These widgets are sometimes populated via ajax
            ajaxWidgets = [
                'dashboard_primary',
                'dashboard_plugins'
            ];

            ajaxPopulateWidgets = function(el) {
                show = function(id, i) {
                    var p, e = $('#' + id + ' div.inside:visible').find('.widget-loading');
                    if ( e.length ) {
                        p = e.parent();
                        setTimeout( function(){
                            p.load('admin-ajax.php?action=ngg_dashboard&jax=' + id, '', function() {
                                p.hide().slideDown('normal', function(){
                                    $(this).css('display', '');
                                    if ( 'dashboard_plugins' == id && $.isFunction(tb_init) )
                                        tb_init('#dashboard_plugins a.thickbox');
                                });
                            });
                        }, i * 500 );
                    }
                };
                if ( el ) {
                    el = el.toString();
                    if ( $.inArray(el, ajaxWidgets) != -1 )
                        show(el, 0);
                } else {
                    $.each( ajaxWidgets, function(i) {
                        show(this, i);
                    });
                }
            };
            ajaxPopulateWidgets();
        } );

        jQuery(document).ready( function($) {
            // postboxes setup
            postboxes.add_postbox_toggles('ngg-overview');
        });
        //]]>
    </script>
<?php
}

/**
 * Load the meta boxes
 *
 */
add_meta_box('dashboard_right_now', __('Welcome to NextGEN Gallery !', 'nggallery'), 'ngg_overview_right_now', 'ngg_overview', 'left', 'core');
add_meta_box('ngg_meta_box', __('Do you like this Plugin?', 'nggallery'), 'ngg_likeThisMetaBox', 'ngg_overview', 'right', 'core');
//add_meta_box('dashboard_primary', __('Latest News', 'nggallery'), 'ngg_widget_overview_news', 'ngg_overview', 'left', 'core');
add_meta_box('ngg_about_meta_box', __('About', 'nggallery'), 'ngg_AboutMetaBox', 'ngg_overview', 'left', 'core');
//add_meta_box('ngg_lastdonators', __('Recent donators', 'nggallery'), 'ngg_widget_overview_donators', 'ngg_overview', 'right', 'core');
if ( !is_multisite() || is_super_admin() ) {
    add_meta_box('ngg_server', __('Server Settings', 'nggallery'), 'ngg_overview_server', 'ngg_overview', 'right', 'core');
}

function ngg_AboutMetaBox()
{
    ?>
    <div id="poststuff">
        <p><?php _e("NextGEN Gallery is one of the most popular WordPress plugins of all time with over 12 million downloads.", 'nggallery'); _e("It is developed and supported by Photocrati Media. We'd like to offer a special thanks to Alex Rabe, who first developed the plugin and maintained it through 2011.", 'nggallery'); ?></p>
        <p><?php _e("<strong>NEED  HELP?</strong> If you need help or assistance please visit the <a href='http://wordpress.org/support/plugin/nextgen-gallery'>NextGEN Gallery forums on WordPress.org</a>. Please note that we actively monitor and  participate in the forums, but given that NextGEN Gallery is a free  product, we don't guarantee replies to support queries.", 'nggallery'); ?></p>
        <p><?php _e("<strong>EXTENDING NEXTGEN?</strong> There are many third party plugins that add displays and functionality for NextGEN Gallery. See our <a href='http://www.nextgen-gallery.com/nextgen-gallery-extension-plugins/'>Complete List of NextGEN Extension  Plugins</a>.", 'nggallery'); ?></p>
    </div>
<?php
}

function ngg_likeThisMetaBox() {

    echo '<p>';
    echo sprintf(__('This plugin is primarily developed, maintained, supported and documented by <a href="%s" target="_blank">Photocrati Media</a> with a lot of love & effort. Any kind of contribution would be highly appreciated. Thanks!', 'nggallery'), 'http://www.photocrati.com/');
    echo '</p><ul>';

    $url = 'http://wordpress.org/plugins/nextgen-gallery/' ;
    echo "<li style='padding-left: 38px; background:transparent url(" . NGGALLERY_URLPATH . "admin/images/icon-rating.png ) no-repeat scroll center left; background-position: 16px 50%; text-decoration: none;'><a href='{$url}' target='_blank'>";
    _e('Please click "Works" on WordPress.org', 'nggallery');
    echo "</a></li>";

    $url = 'http://wordpress.org/plugins/nextgen-gallery/' ;
    echo "<li style='padding-left: 38px; background:transparent url(" . NGGALLERY_URLPATH . "admin/images/icon-rating.png ) no-repeat scroll center left; background-position: 16px 50%; text-decoration: none;'><a href='{$url}' target='_blank'>";
    _e('Give it a good rating on WordPress.org', 'nggallery');
    echo "</a></li>";

    $url = 'http://www.nextgen-gallery.com';
    echo "<li style='padding-left: 38px; background:transparent url(" . NGGALLERY_URLPATH . "admin/images/nextgen.png ) no-repeat scroll center left; background-position: 16px 50%; text-decoration: none;'><a href='{$url}' target='_blank'>";
    _e("Visit the plugin homepage", 'nggallery');
    echo "</a></li>";

    $url = 'http://www.nextgen-gallery.com/languages/';
    echo "<li style='padding-left: 38px; background:transparent url(" . NGGALLERY_URLPATH . "admin/images/icon-translate.png ) no-repeat scroll center left; background-position: 16px 50%; text-decoration: none;'><a href='{$url}' target='_blank'>";
    _e("Help translating it", 'nggallery');
    echo "</a></li>";

    echo '</ul>';

    echo '
    <div class="social" style="text-align:center;margin:15px 0 10px 0;"><span class="social" style="margin-right:5px;"><a target="_blank" href="http://twitter.com/NextGENGallery"><img title="Follow NextGEN on Twitter" alt="Twitter" src="' . NGGALLERY_URLPATH . 'admin/images/twitter.png"></a></span><span class="social" style="margin-right:5px;"><a target="_blank" href="http://www.facebook.com/NextGENGallery"><img title="Like NextGEN on Facebook" alt="Facebook" src="' . NGGALLERY_URLPATH . 'admin/images/facebook.png"></a></span><span class="social"><a target="_blank" href="http://plus.google.com/101643895780935290171"><img title="Add NextGEN to your circles" alt="GooglePlus" src="' . NGGALLERY_URLPATH . 'admin/images/googleplus.png"></a></span></div>';
}

/**
 * Show the server settings in a dashboard widget
 *
 * @return void
 */
function ngg_overview_server() {
    ?>
    <div id="dashboard_server_settings" class="dashboard-widget-holder wp_dashboard_empty">
        <div class="ngg-dashboard-widget">
            <div class="dashboard-widget-content">
                <ul class="settings">
                    <?php ngg_get_serverinfo(); ?>
                </ul>
                <p><strong><?php _e('Graphic Library', 'nggallery'); ?></strong></p>
                <ul class="settings">
                    <?php ngg_gd_info(); ?>
                </ul>
            </div>
        </div>
    </div>
<?php
}

/**
 * Show the most recent donators
 *
 * @return void
 */
function ngg_widget_overview_donators() {
    echo '<p class="widget-loading hide-if-no-js">' . __( 'Loading&#8230;' ) . '</p><p class="describe hide-if-js">' . __('This widget requires JavaScript.') . '</p>';
}

function ngg_overview_donators() {
    global $ngg;

    $i = 0;
    $list = '';

    $supporter = nggAdminPanel::get_remote_array($ngg->donators);

    // Ensure that this is a array
    if ( !is_array($supporter) )
        return _e('Thanks to all donators...', 'nggallery');

    $supporter = array_reverse($supporter);

    foreach ($supporter as $name => $url) {
        $i++;
        if ($url)
            $list .= "<li><a href=\"$url\">$name</a></li>\n";
        else
            $list .= "<li>$name</li>";
        if ($i > 4)
            break;
    }

    ?>
    <div id="dashboard_server_settings" class="dashboard-widget-holder">
        <div class="ngg-dashboard-widget">
            <div class="dashboard-widget-content">
                <ul class="settings">
                    <?php echo $list; ?>
                </ul>
                <p class="textright">
                    <a class="button" href="admin.php?page=nggallery-about#donators"><?php _e('View all', 'nggallery'); ?></a>
                </p>
            </div>
        </div>
    </div>
<?php
}

/**
 * Show the latest NextGEN Gallery news
 *
 * @return void
 */
function ngg_widget_overview_news() {
    echo '<p class="widget-loading hide-if-no-js">' . __( 'Loading&#8230;' ) . '</p><p class="describe hide-if-js">' . __('This widget requires JavaScript.') . '</p>';
}
function ngg_overview_news(){

    ?>
    <div class="rss-widget">
        <?php
        $rss = @fetch_feed( 'http://feeds.feedburner.com/nextgen-gallery' );

        if ( is_object($rss) ) {

            if ( is_wp_error($rss) ) {
                echo '<p>' . sprintf(__('Newsfeed could not be loaded.  Check the <a href="%s">front page</a> to check for updates.', 'nggallery'), 'http://www.nextgen-gallery.com/') . '</p>';
                return;
            }

            echo '<ul>';
            foreach ( $rss->get_items(0, 3) as $item ) {
                $link = $item->get_link();
                while ( stristr($link, 'http') != $link )
                    $link = substr($link, 1);
                $link = nextgen_esc_url(strip_tags($link));
                $title = esc_attr(strip_tags($item->get_title()));
                if ( empty($title) )
                    $title = __('Untitled');

                $desc = str_replace( array("\n", "\r"), ' ', esc_attr( strip_tags( @html_entity_decode( $item->get_description(), ENT_QUOTES, get_option('blog_charset') ) ) ) );
                $desc = wp_html_excerpt( $desc, 360 );

                // Append ellipsis. Change existing [...] to [&hellip;].
                if ( '[...]' == substr( $desc, -5 ) )
                    $desc = substr( $desc, 0, -5 ) . '[&hellip;]';
                elseif ( '[&hellip;]' != substr( $desc, -10 ) )
                    $desc .= ' [&hellip;]';

                $desc = esc_html( $desc );

                $date = $item->get_date();
                $diff = '';

                if ( $date ) {

                    $diff = human_time_diff( strtotime($date, time()) );

                    if ( $date_stamp = strtotime( $date ) )
                        $date = ' <span class="rss-date">' . date_i18n( get_option( 'date_format' ), $date_stamp ) . '</span>';
                    else
                        $date = '';
                }
                ?>
                <li><a class="rsswidget" title="" target="_blank" href='<?php echo $link; ?>'><?php echo $title; ?></a>
                    <span class="rss-date"><?php echo $date; ?></span>
                    <div class="rssSummary"><strong><?php echo $diff; ?></strong> - <?php echo $desc; ?></div></li>
            <?php
            }
            echo '</ul>';
        }
        ?>
    </div>
<?php
}

/**
 * Show a summary of the used images
 *
 * @return void
 */
function ngg_overview_right_now() {
    global $wpdb;
    $images    = intval( $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->nggpictures") );
    $galleries = intval( $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->nggallery") );
    $albums    = intval( $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->nggalbum") );
    ?>
    <style type='text/css'>
        #ngg_overview_right_now p {
            padding: 0 0 6px 10px;
            margin: 0;
        }
        #ngg_overview_right_now table {
            margin-left: 10px;
        }
        #ngg_overview_right_now td {
            padding: 4px;
        }
        #ngg_overview_right_now td:first-child {
            font-size: 16px;
        }
    </style>
    <div class="table table_content" id='ngg_overview_right_now'>
        <p><?php _e('At a Glance', 'nggallery'); ?></p>
        <table>
            <tbody>
            <tr class="first">
                <td class="first b"><a href="admin.php?page=ngg_addgallery"><?php echo $images; ?></a></td>
                <td class="t"><a href="admin.php?page=ngg_addgallery"><?php echo _n( 'Image', 'Images', $images, 'nggallery' ); ?></a></td>
                <td class="b"></td>
                <td class="last"></td>
            </tr>
            <tr>
                <td class="first b"><a href="admin.php?page=nggallery-manage-gallery"><?php echo $galleries; ?></a></td>
                <td class="t"><a href="admin.php?page=nggallery-manage-gallery"><?php echo _n( 'Gallery', 'Galleries', $galleries, 'nggallery' ); ?></a></td>
                <td class="b"></td>
                <td class="last"></td>
            </tr>
            <tr>
                <td class="first b"><a href="admin.php?page=nggallery-manage-album"><?php echo $albums; ?></a></td>
                <td class="t"><a href="admin.php?page=nggallery-manage-album"><?php echo _n( 'Album', 'Albums', $albums, 'nggallery' ); ?></a></td>
                <td class="b"></td>
                <td class="last"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="versions" style="padding-top:14px">
        <br class="clear" />
    </div>
    <?php
    if ( is_multisite() )
        ngg_dashboard_quota();
}

// Display File upload quota on dashboard
function ngg_dashboard_quota() {

    if ( get_site_option( 'upload_space_check_disabled' ) )
        return;

    if ( !wpmu_enable_function('wpmuQuotaCheck') )
        return;

    $settings = C_NextGen_Settings::get_instance();
    $fs = C_Fs::get_instance();
    $dir = $fs->join_paths($fs->get_document_root('content'), $settings->gallerypath);

    $quota = get_space_allowed();
    $used = get_dirsize( $dir ) / 1024 / 1024;

    if ( $used > $quota )
        $percentused = '100';
    else
        $percentused = ( $used / $quota ) * 100;
    $used_color = ( $percentused < 70 ) ? ( ( $percentused >= 40 ) ? 'waiting' : 'approved' ) : 'spam';
    $used = round( $used, 2 );
    $percentused = number_format( $percentused );

    ?>
    <p class="sub musub" style="position:static" ><?php _e( 'Storage Space' ); ?></p>
    <div class="table table_content musubtable">
        <table>
            <tr class="first">
                <td class="first b b-posts"><?php printf( __( '<a href="%1$s" title="Manage Uploads" class="musublink">%2$sMB</a>' ), nextgen_esc_url( admin_url( 'admin.php?page=nggallery-manage-gallery' ) ), $quota ); ?></td>
                <td class="t posts"><?php _e( 'Space Allowed' ); ?></td>
            </tr>
        </table>
    </div>
    <div class="table table_discussion musubtable">
        <table>
            <tr class="first">
                <td class="b b-comments"><?php printf( __( '<a href="%1$s" title="Manage Uploads" class="musublink">%2$sMB (%3$s%%)</a>' ), nextgen_esc_url( admin_url( 'admin.php?page=nggallery-manage-gallery' ) ), $used, $percentused ); ?></td>
                <td class="last t comments <?php echo $used_color;?>"><?php _e( 'Space Used' );?></td>
            </tr>
        </table>
    </div>
    <br class="clear" />
<?php
}

/**
 * Show GD Library version information
 *
 * @return void
 */
function ngg_gd_info() {

    if(function_exists("gd_info")){
        $info = gd_info();
        $keys = array_keys($info);
        for($i=0; $i<count($keys); $i++) {
            if(is_bool($info[$keys[$i]]))
                echo "<li> " . $keys[$i] ." : <span>" . ngg_gd_yesNo($info[$keys[$i]]) . "</span></li>\n";
            else
                echo "<li> " . $keys[$i] ." : <span>" . $info[$keys[$i]] . "</span></li>\n";
        }
    }
    else {
        echo '<h4>'.__('No GD support', 'nggallery').'!</h4>';
    }
}

/**
 * Return localized Yes or no
 *
 * @param bool $bool
 * @return return 'Yes' | 'No'
 */
function ngg_gd_yesNo( $bool ){
    if($bool)
        return __('Yes', 'nggallery');
    else
        return __('No', 'nggallery');
}


/**
 * Show up some server infor's
 * @author GamerZ (http://www.lesterchan.net)
 *
 * @return void
 */
function ngg_get_serverinfo() {

    global $wpdb, $ngg;
    // Get MYSQL Version
    $sqlversion = $wpdb->get_var("SELECT VERSION() AS version");
    // GET SQL Mode
    $mysqlinfo = $wpdb->get_results("SHOW VARIABLES LIKE 'sql_mode'");
    if (is_array($mysqlinfo)) $sql_mode = $mysqlinfo[0]->Value;
    if (empty($sql_mode)) $sql_mode = __('Not set', 'nggallery');
    // Get PHP Safe Mode
    if(ini_get('safe_mode')) $safe_mode = __('On', 'nggallery');
    else $safe_mode = __('Off', 'nggallery');
    // Get PHP allow_url_fopen
    if(ini_get('allow_url_fopen')) $allow_url_fopen = __('On', 'nggallery');
    else $allow_url_fopen = __('Off', 'nggallery');
    // Get PHP Max Upload Size
    if (function_exists('wp_max_upload_size')) $upload_max = strval(round( (int) wp_max_upload_size() / (1024 * 1024) )) . 'M';
    else if(ini_get('upload_max_filesize')) $upload_max = ini_get('upload_max_filesize');
    else $upload_max = __('N/A', 'nggallery');
    // Get PHP Output buffer Size
    if(ini_get('pcre.backtrack_limit')) $backtrack_limit = ini_get('pcre.backtrack_limit');
    else $backtrack_limit = __('N/A', 'nggallery');
    // Get PHP Max Post Size
    if(ini_get('post_max_size')) $post_max = ini_get('post_max_size');
    else $post_max = __('N/A', 'nggallery');
    // Get PHP Max execution time
    if(ini_get('max_execution_time')) $max_execute = ini_get('max_execution_time');
    else $max_execute = __('N/A', 'nggallery');
    // Get PHP Memory Limit
    if(ini_get('memory_limit')) $memory_limit = $ngg->memory_limit;
    else $memory_limit = __('N/A', 'nggallery');
    // Get actual memory_get_usage
    if (function_exists('memory_get_usage')) $memory_usage = round(memory_get_usage() / 1024 / 1024, 2) . __(' MByte', 'nggallery');
    else $memory_usage = __('N/A', 'nggallery');
    // required for EXIF read
    if (is_callable('exif_read_data')) $exif = __('Yes', 'nggallery'). " ( V" . substr(phpversion('exif'),0,4) . ")" ;
    else $exif = __('No', 'nggallery');
    // required for meta data
    if (is_callable('iptcparse')) $iptc = __('Yes', 'nggallery');
    else $iptc = __('No', 'nggallery');
    // required for meta data
    if (is_callable('xml_parser_create')) $xml = __('Yes', 'nggallery');
    else $xml = __('No', 'nggallery');

    ?>
    <li><?php _e('Operating System', 'nggallery'); ?> : <span><?php echo PHP_OS; ?>&nbsp;(<?php echo (PHP_INT_SIZE * 8) ?>&nbsp;Bit)</span></li>
    <li><?php _e('Server', 'nggallery'); ?> : <span><?php echo $_SERVER["SERVER_SOFTWARE"]; ?></span></li>
    <li><?php _e('Memory usage', 'nggallery'); ?> : <span><?php echo $memory_usage; ?></span></li>
    <li><?php _e('MYSQL Version', 'nggallery'); ?> : <span><?php echo $sqlversion; ?></span></li>
    <li><?php _e('SQL Mode', 'nggallery'); ?> : <span><?php echo $sql_mode; ?></span></li>
    <li><?php _e('PHP Version', 'nggallery'); ?> : <span><?php echo PHP_VERSION; ?></span></li>
    <li><?php _e('PHP Safe Mode', 'nggallery'); ?> : <span><?php echo $safe_mode; ?></span></li>
    <li><?php _e('PHP Allow URL fopen', 'nggallery'); ?> : <span><?php echo $allow_url_fopen; ?></span></li>
    <li><?php _e('PHP Memory Limit', 'nggallery'); ?> : <span><?php echo $memory_limit; ?></span></li>
    <li><?php _e('PHP Max Upload Size', 'nggallery'); ?> : <span><?php echo $upload_max; ?></span></li>
    <li><?php _e('PHP Max Post Size', 'nggallery'); ?> : <span><?php echo $post_max; ?></span></li>
    <li><?php _e('PCRE Backtracking Limit', 'nggallery'); ?> : <span><?php echo $backtrack_limit; ?></span></li>
    <li><?php _e('PHP Max Script Execute Time', 'nggallery'); ?> : <span><?php echo $max_execute; ?>s</span></li>
    <li><?php _e('PHP Exif support', 'nggallery'); ?> : <span><?php echo $exif; ?></span></li>
    <li><?php _e('PHP IPTC support', 'nggallery'); ?> : <span><?php echo $iptc; ?></span></li>
    <li><?php _e('PHP XML support', 'nggallery'); ?> : <span><?php echo $xml; ?></span></li>
<?php
}

/**
 * Inform about the end of PHP4
 *
 * @return void
 */
function ngg_check_for_PHP5() {
    ?>
    <div class="updated">
        <p><?php _e('NextGEN Gallery contains some functions which are only available under PHP 5.2. You are using the old PHP 4 version, upgrade now! It\'s no longer supported by the PHP group. Many shared hosting providers offer both PHP 4 and PHP 5, running simultaneously. Ask your provider if they can do this.', 'nggallery'); ?></p>
    </div>
<?php
}

