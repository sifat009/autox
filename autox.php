<?php

/**
 * Autox
 *
 * @package      sifat009/autox
 * @author       sifat
 * @copyright    2024 sifat
 * @license      GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name:       Autox
 * Plugin URI:        https://github.com/sifat009/autox
 * Description:       A Simple Auto Updater Plugin From Github
 * Version:           0.0.1
 * Author:            Sifat Haque
 * Author URI:        #
 * Text Domain:       autox
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/sifat009/autox
 * GitHub Branch:     main
 */

// Include the Git Updater library
if (!class_exists('Fragen\\Git_Updater\\Bootstrap')) {
    include_once plugin_dir_path(__FILE__) . '/git-updater/vendor/autoload.php';
}

add_action('plugins_loaded', function () {
    new Fragen\Git_Updater\Bootstrap('autox.php');
});
