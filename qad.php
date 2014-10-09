<?php
/*
Plugin Name: QAD WP Plugin
Plugin URI: https://www.anthonydelgado.me
Description: A Quick and Dirty WordPress Plugin that adds an Admin Menu item containing a link to an iFrame within the wp-admin panel.
Author: Anthony Delgado 
Author URI: https://www.anthonydelgado.me
*/

// Hook for adding admin menus



add_action('admin_menu', 'tdnyc_help_add_pages');

function tdnyc_help_add_pages() {

    // Add a new top-level menu (ill-advised):
add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page(__('Support','menu-tdnyc-help'), __('Support','menu-tdnyc-help'), 'manage_options', 'tdnyc-help-handle', 'tdnyc_help_page' );
  }
  
  
function tdnyc_help_page() {
    echo '<div class="wrap">
<div id="icon-tools" class="icon32"><br /></div><h2>Get Support</h2>
<p>You can get 24/7 Tech Support for your website using the ticket system below:</p>
<iframe class="wrapper" id="blockrandom" name="iframe" align="top" src="http://example.com/" frameborder="0" width="850" height="700">
	This option will not work correctly. Unfortunately, your browser does not support Inline Frames</iframe>
	</div>
';
}



?>
