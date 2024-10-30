<?php
/*
 * Plugin Name: JoinUp recruiting bot
 * Version: 1.1.0
 * Description: Our recruiting bot hire and pre-qualify candidates at scale 24 hours a day.
 * Author: Joinup
 * Author URI: https://www.joinup.io/?ref=wordpress
 * Plugin URI: https://www.joinup.io
 */

// Prevent Direct Access
defined('ABSPATH') or die("Restricted access!");

/*
* Define
*/
define('JOINUP_VERSION', '1.1.0');
define('JOINUP_DIR', plugin_dir_path(__FILE__));
define('JOINUP_URL', plugin_dir_url(__FILE__));
defined('JOINUP_PATH') or define('JOINUP_PATH', untrailingslashit(plugins_url('', __FILE__)));

require_once(JOINUP_DIR . 'includes/core.php');
require_once(JOINUP_DIR . 'includes/menus.php');
require_once(JOINUP_DIR . 'includes/admin.php');
require_once(JOINUP_DIR . 'includes/embed.php');


?>
