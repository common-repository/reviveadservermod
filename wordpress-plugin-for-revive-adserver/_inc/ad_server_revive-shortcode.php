<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( is_admin ()){
  echo '<style>
    .error, .components-notice.is-error.is-dismissible {
    display: none ! important;

  </style>';
}
if ( is_admin ()){
   return ;
}
if ( get_option( 'wprevive_op_array' ) === false ) {

} else {
  //Async Insertion
  function ad_server_revive_displayasync ($atts){
    extract(shortcode_atts( array('zoneid' => ''), $atts));
    $options =get_option( 'wprevive_op_array' );
    $url =$options['wpads_wprevive_op_adserverurl'];
    $reviveid =$options['wpads_wprevive_op_reviveid'];

   $content = '<ins data-revive-zoneid="' . $zoneid . '" data-revive-id="' . $reviveid . '"></ins>
<script async src="' . $url . '/www/delivery/asyncjs.php"></script></div>';
return $content;
    }

//Javascript Insertion
function ad_server_revive_displayjs ($atts){
  extract(shortcode_atts( array('zoneid' => ''), $atts));
  $options =get_option( 'wprevive_op_array' );
  $url =$options['wpads_wprevive_op_adserverurl'];
  $reviveid =$options['wpads_wprevive_op_reviveid'];
  ?>
<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'<?php echo $url; ?>/www/delivery/ajs.php':'<?php echo $url; ?>/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=<?php echo $zoneid; ?>");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='<?php echo $url; ?>/www/delivery/ck.php?n=a86c7caa&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='<?php echo $url; ?>/www/delivery/avw.php?zoneid=1&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a86c7caa' border='0' alt='' /></a></noscript>

<?php
}
//Iframe Insertion
function ad_server_revive_displayiframe ($atts){
  extract(shortcode_atts( array('zoneid' => ''), $atts));
  extract(shortcode_atts( array('width' => ''), $atts));
  extract(shortcode_atts( array('height' => ''), $atts));
  extract(shortcode_atts( array('iframeID' => ''), $atts));
  extract(shortcode_atts( array('iframeName' => ''), $atts));
  $options =get_option( 'wprevive_op_array' );
  $url =$options['wpads_wprevive_op_adserverurl'];
  $reviveid =$options['wpads_wprevive_op_reviveid'];

$content='<iframe id="' . $iframeID . '" name="' . $iframeName . '" src="' . $url . '/www/delivery/afr.php?zoneid=' . $zoneid . '&amp;cb=INSERT_RANDOM_NUMBER_HERE" frameborder="0" scrolling="no" width="' . $width . '"
  height="' . $height . '"><a href="' . $url . '/www/delivery/ck.php?n=a23d0313&amp;cb=INSERT_RANDOM_NUMBER_HERE" target="_blank">
  <img src="' . $url . '/www/delivery/avw.php?zoneid=1&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a23d0313" border="0" alt="" /></a></iframe>';

return $content;
}

//Revive Adserver Interstitial or Floating DHTML Tag  cursor
function ad_server_interstitial_float_cursor ($atts){
  extract(shortcode_atts( array('zoneid' => ''), $atts));
  $options =get_option( 'wprevive_op_array' );
  $url =$options['wpads_wprevive_op_adserverurl'];
  $reviveid =$options['wpads_wprevive_op_reviveid'];
  ?>
<!-- Revive Adserver Interstitial or Floating DHTML Tag - Generated with Revive Adserver v5.0.3 -->
<script type='text/javascript'><!--//<![CDATA[
   var ox_u = 'http:<?php echo $url; ?>/www/delivery/al.php?zoneid=<?php echo $zoneid; ?>&layerstyle=cursor&hide=0&trail=0&offsetx=10&offsety=10';
   if (document.context) ox_u += '&context=' + escape(document.context);
   document.write("<scr"+"ipt type='text/javascript' src='" + ox_u + "'></scr"+"ipt>");
//]]>--></script>
<?php
}

//Revive Adserver Interstitial or Floating DHTML Tag  Floater
function ad_server_interstitial_float_floater ($atts){
  extract(shortcode_atts( array('zoneid' => ''), $atts));
  $options =get_option( 'wprevive_op_array' );
  $url =$options['wpads_wprevive_op_adserverurl'];
  $reviveid =$options['wpads_wprevive_op_reviveid'];
  ?>
<script type='text/javascript'><!--//<![CDATA[
   var ox_u = 'http:<?php echo $url; ?>/www/delivery/al.php?zoneid=<?php echo $zoneid; ?>&amp;layerstyle=floater&amp;ltr=t&amp;loop=n&amp;speed=3&amp;pause=10&amp;shiftv=0&amp;transparent=t&amp;limited=f';
   if (document.context) ox_u += '&context=' + escape(document.context);
   document.write("<scr"+"ipt type='text/javascript' src='" + ox_u + "'></scr"+"ipt>");
//]]>--></script>

<?php
}

//Revive Adserver Interstitial or Floating DHTML Tag  geocities
function ad_server_interstitial_float_geocities ($atts){
  extract(shortcode_atts( array('zoneid' => ''), $atts));
  $options =get_option( 'wprevive_op_array' );
  $url =$options['wpads_wprevive_op_adserverurl'];
  $reviveid =$options['wpads_wprevive_op_reviveid'];
  ?>

<script type='text/javascript'><!--//<![CDATA[
   var ox_u = 'http:<?php echo $url; ?>/www/delivery/al.php?zoneid=<?php echo $zoneid; ?>&layerstyle=geocities&align=right&padding=2&closetext=%5BClose%5D';
   if (document.context) ox_u += '&context=' + escape(document.context);
   document.write("<scr"+"ipt type='text/javascript' src='" + ox_u + "'></scr"+"ipt>");
//]]>--></script>

<?php
}

//Revive Adserver Interstitial or Floating DHTML Tag  Simple
function ad_server_interstitial_float_simple ($atts){
  extract(shortcode_atts( array('zoneid' => ''), $atts));
  $options =get_option( 'wprevive_op_array' );
  $url =$options['wpads_wprevive_op_adserverurl'];
  $reviveid =$options['wpads_wprevive_op_reviveid'];
  ?>

<!-- Revive Adserver Interstitial or Floating DHTML Tag - Generated with Revive Adserver v5.0.3 -->
<script type='text/javascript'><!--//<![CDATA[
   var ox_u = 'http:<?php echo $url; ?>/www/delivery/al.php?zoneid=<?php echo $zoneid; ?>&layerstyle=simple&align=right&valign=top&padding=2&padding=2&shifth=0&shiftv=0&closebutton=f&backcolor=FFFFFF&bordercolor=000000';
   if (document.context) ox_u += '&context=' + escape(document.context);
   document.write("<scr"+"ipt type='text/javascript' src='" + ox_u + "'></scr"+"ipt>");
//]]>--></script>

<?php
}

// Revive Adserver Image Tag - Generated with Revive Adserver 
    function ad_server_image_tag ($atts){
  extract(shortcode_atts( array('zoneid' => ''), $atts));
  $options =get_option( 'wprevive_op_array' );
  $url =$options['wpads_wprevive_op_adserverurl'];
  $reviveid =$options['wpads_wprevive_op_reviveid'];
  ?>
   <a href='http:<?php echo $url; ?>/www/delivery/ck.php?n=a6247345&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='<?php echo $url; ?>/www/delivery/avw.php?zoneid=38&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a6247345' border='0' alt='' /></a>
   <?php
   }

}

   add_shortcode('wpads_js', 'ad_server_revive_displayjs');
   add_shortcode('wpads_iframe', 'ad_server_revive_displayiframe');
   add_shortcode('wpads_async', 'ad_server_revive_displayasync');
   add_shortcode('wpads_inter_float_cursor', 'ad_server_interstitial_float_cursor');
   add_shortcode('wpads_inter_float_floater', 'ad_server_interstitial_float_floater');
   add_shortcode('wpads_inter_float_geocities', 'ad_server_interstitial_float_geocities');
   add_shortcode('wpads_inter_float_simple', 'ad_server_interstitial_float_simple');
   add_shortcode('wp_image_tag', 'ad_server_image_tag');
?>
