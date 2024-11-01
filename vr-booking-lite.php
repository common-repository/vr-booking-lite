<?php
/**
 * @wordpress-plugin
 * Plugin Name:       VR Booking Lite
 * Plugin URI: https://www.myhotelzone.com/wordpress-booking-plugin-vacation-holiday-rentals
 * Description: VR Booking Lite is a WordPress booking plugin customized for specific needs of all types of accommodation / property rentals.
 * Version:           1.0
 * Author:            MyHotelZone
 * Author URI:        https://www.myhotelzone.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) )
	exit;
    
define( 'VR_BOOKING_VERSION_LIGHT', '1.0.0' );
define( 'VR_BOOKING_PLUGIN', __FILE__ );
define( 'VR_BOOKING_PLUGIN_DIR', untrailingslashit( dirname( VR_BOOKING_PLUGIN ) ) );
define( 'VR_BOOKING_TEXTDOMAIN', 'booking' );

if ( file_exists(  VR_BOOKING_PLUGIN_DIR . '/includes/plugins/cmb2/init.php' ) ) {
  require_once  VR_BOOKING_PLUGIN_DIR . '/includes/plugins/cmb2/init.php';
}

include_once VR_BOOKING_PLUGIN_DIR . '/includes/functions.php';

if ( is_admin() ) {
   	include_once VR_BOOKING_PLUGIN_DIR . '/admin/booking-admin.php';
}

include_once VR_BOOKING_PLUGIN_DIR . '/vr-booking-main.php';


