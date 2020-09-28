<?php
/*
Plugin Name: imageus
Description: Hızlı ve güvenli resim işleme servisi.
Version: 0.1
Author: imageus
Author URI: https://imageus.dev
License: MIT
License URI: https://opensource.org/licenses/MIT
*/

define('IBUP_API', 'https://img.imageus.dev');
define('IBUP_BASENAME', plugin_basename(__FILE__));

require plugin_dir_path(__FILE__) . '/includes/url.php';
require plugin_dir_path(__FILE__) . '/admin/imageus-admin.php';
require plugin_dir_path(__FILE__) . '/public/imageus-public.php';
require plugin_dir_path(__FILE__) . '/uninstall.php';
