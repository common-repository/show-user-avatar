<?php
/**
* Plugin Name: Show user avatar
* Plugin URI: https://wordtune.me
* Description: Use the shortcode [avatar] on any page ore post to show logged in user avatar.
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

function show_user_avatar (  ) {
    global $current_user;
       get_currentuserinfo();
       echo esc_attr (get_avatar( $current_user->ID, 64 ));
}
add_shortcode( 'avatar', 'show_user_avatar' );

?>
