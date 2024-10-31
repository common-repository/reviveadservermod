<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_action('admin_menu', 'adreviveas_adminmenu');
function adreviveas_adminmenu() {
add_submenu_page( 'options-general.php' , 'AD-Revive Options', 'Ad Server Options' , 'manage_options' , 'ad2revive_options' , 'adrevive_display_contents');
}
?>
