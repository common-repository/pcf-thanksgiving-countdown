<?php
defined('ABSPATH') or die('No access.');

/*
Plugin Name: PCF Thanksgiving Countdown

Description: PCF Thanksgiving Countdown Plugin. Use shortcode [pcf_tg_countdown id="my-id" type="weeks|days|sleeps"].
Version: 1.2
Author: PC Futures
Author URI: https://wordpress.org/support/profile/pcfdev
License: GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages

PCF Thanksgiving Countdown is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

PCF Thanksgiving Countdown is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with PCF Thanksgiving Countdown. If not, see {plugin URI}.
*/

$dir = plugin_dir_path(__FILE__);

require_once($dir.'core/pcfct-countdown.php');
require_once($dir.'core/pcfct-admin.php');
require_once($dir.'core/pcfct-widget.php');

?>