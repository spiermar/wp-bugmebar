<?php

/*
Plugin Name: BugMeBar
Plugin URI: https://github.com/spiermar/wp-bugmebar
Description: Inserts your custom BugMeBar. Because of the WordPress User Bar, you might need to log out and visit your WordPress site again to see your BugMeBar.
Version: 1.0
Author: Martin Spier
Author URI: https://github.com/spiermar/wp-bugmebar
License: GPL v2

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

function add_bugmebar_css()
{
  echo '<link rel="stylesheet" href="' . plugins_url( 'css/bugme.min.css', __FILE__ ) . '" media="all" />';
}

function add_bugmebar_script()
{
  echo '<script src="' . plugins_url( 'js/jquery.cookie.min.js', __FILE__ ) . '"></script>';
  echo '<script src="' . plugins_url( 'js/jquery.bugme.min.js', __FILE__ ) . '"></script>';
  echo '<script src="' . plugins_url( 'js/bugmebar.js', __FILE__ ) . '"></script>';
}

add_action( 'wp_footer',  'add_bugmebar_script');
add_action('wp_head', 'add_bugmebar_css');

?>