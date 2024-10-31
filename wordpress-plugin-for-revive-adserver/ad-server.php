<?php
/*
Plugin Name: Wordpress Plugin For Revive Adserver
Plugin URI:
Description: Display Adserver and adcampaigns anywhere on your WordPress website using Shortcodes.
Version: 0.0.1
Author: Reviveadservermod
Author URI: http://www.reviveadservermod.com/
*/

if ( ! defined( 'ABSPATH' ) ) exit; 
include('_inc/wpadprocess.php');
include('_inc/wpadrevive-options.php');
include('_inc/wpadmenu.php');
include('_inc/ad_server_revive-shortcode.php');
?>
