<?php
/*
Plugin Name: Admin Footer Be Gone
Plugin URI: http://madebycoffee.co.uk/admin-footer-be-gone
Description: This plugin removes the admin footer from you wordpress admin dashboard. You can also add your own text or links to your empty footer. 
Author: Joshua George
Version: 1.0.0
Author URL: http://madebycoffee.co.uk
License: GPL2
*/

/*  Copyright 2015  Joshua George | joshua@madebycoffee.co.uk

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
*/

function admin_footer_be_gone ()   
{  
    echo '<div id="new_footer"> <!-- THIS IS WHERE YOU CAN ADD YOUR NEW TEXT OR LINKS IF YOU WISH --> </div>';  

}  
add_filter('admin_footer_text', 'admin_footer_be_gone');
function replace_footer_version() 
{
	return ' ';
}
add_filter( 'update_footer', 'replace_footer_version', '123456');
