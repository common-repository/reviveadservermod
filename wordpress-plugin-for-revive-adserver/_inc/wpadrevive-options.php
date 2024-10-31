<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
function adrevive_display_contents()
{
   $options = get_option( 'wprevive_op_array' );
?>
    <div class="wrap">
        <h2>Revive Adserver</h2>
        <?php
  if ( isset( $_GET['m'] ) && $_GET['m'] == '1' )
  {
?>
            <div id='message' class='updated fade'>
                <p><strong>You have successfully updated.</strong></p>
            </div>
            <?php
  }
?>
                <form method="post" action="admin-post.php">
                    <input type="hidden" name="action" value="wpads_wprevive_save_option" />
                    <?php wp_nonce_field( 'wpad_server_revive_op_verify' ); ?>
                        <div style="margin-bottom:10px;">
                            <label style="margin-bottom:3px; clear:both;">Revive Adserver Async URL:</label>
                            <br/>
                            <input type="text" name="wpads_wprevive_adserverurl" value="<?php echo esc_html( $options['wpads_wprevive_op_adserverurl'] ); ?>" />
                            <div style="margin-top:3px;">Enter Revive Ad Server Async URL. (//example.com/adserver)</div>
                        </div>
                        <div style="margin-bottom:10px;">
                            <label style="margin-bottom:3px;">Revive Adserver ID:</label>
                            <br/>
                            <input type="text" name="wpads_wprevive_reviveid" value="<?php echo esc_html( $options['wpads_wprevive_op_reviveid'] ); ?>" />
                            <div style="margin-top:3px;">Enter Revive Adserver ID.(data-revive-id="a7417xxxxxx") </div>
                        </div>

                        <input type="submit" value="Submit" class="button-primary" />
                </form>
                <br>
                <h3>Shortcodes</h3>
                <div style="padding:6px 0;"><b>1.Asynchronous JS Invocation Code:</b>&nbsp; [wpads_async zoneid="Zone Id Here"]</div>
                <div style="padding:6px 0;"><b>2.Javascript Invocation Code:</b>&nbsp; [wpads_js zoneid="Zone Id Here"]</div>
                <div style="padding:6px 0;"><b>3.IFrame Invocation Code:</b>&nbsp; [wpads_iframe zoneid="Zone Id Here" width="AD UNIT WIDTH" height="AD UNIT HEIGHT"]</div>
                <div style="padding:6px 0;"><b>4.Interstitial or Floating DHTML Tag:</b>
                    <div style="padding: 6px 19px;"><strong>1.Cursor:</strong></b>&nbsp; [wpads_inter_float_cursor zoneid="Zone Id Here"]</div>
                    <div style="padding: 6px 19px;"><strong>2.Floater:</strong></b>&nbsp; [wpads_inter_float_floater zoneid="Zone Id Here"]</div>
                    <div style="padding: 6px 19px;"><strong>3.Geocities:</strong></b>&nbsp; [wpads_inter_float_geocities zoneid="Zone Id Here"]</div>
                    <div style="padding: 6px 19px;"><strong>4.Simple:</strong></b>&nbsp; [wpads_inter_float_simple zoneid="Zone Id Here"]</div>
                </div>
                <div style="padding:6px 0;"><b>5.Image Tag:</b>&nbsp; [wp_image_tag zoneid="Zone Id Here"]</div>
            
    </div>
    <?php
}
add_action('admin_post_wpads_wprevive_save_option', 'wpadrevive_process_options' );
?>





