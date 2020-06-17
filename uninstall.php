<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit; 
}

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
  exit;
}

delete_option('billplz_fpx_banks');
delete_option('billplz_fpx_banks_last');

/*
 * Only remove ALL product and page data if BFW_REMOVE_ALL_DATA constant is set to true in user's
 * wp-config.php. This is to prevent data loss when deleting the plugin from the backend
 * and to ensure only the site owner can perform this action.
 */
if ( defined( 'BFW_REMOVE_ALL_DATA' ) && true === BFW_REMOVE_ALL_DATA ) {

}

