<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
if ( is_admin ()){return false;}
function wpadrevive_process_options()
{
  
   if ( !current_user_can( 'manage_options' ) )
   {
      wp_die( 'You are not allowed to be on this page.' );
   }

   check_admin_referer( 'wpad_server_revive_op_verify' );

   $options = get_option( 'wprevive_op_array' );

   if ( isset( $_POST['wpads_wprevive_adserverurl'] ) )
   {
      $options['wpads_wprevive_op_adserverurl'] = esc_url( $_POST['wpads_wprevive_adserverurl'] );
   }

    if ( isset( $_POST['wpads_wprevive_reviveid'] ) )
   {
      $options['wpads_wprevive_op_reviveid'] = sanitize_text_field( $_POST['wpads_wprevive_reviveid'] );
   }


   update_option( 'wprevive_op_array', $options );

wp_redirect(admin_url('options-general.php?page=ad2revive_options&m=1')  );
   exit;


}
?>
