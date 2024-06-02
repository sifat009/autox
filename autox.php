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
 * Version:           0.0.4
 * Author:            Sifat Haque
 * Author URI:        #
 * Text Domain:       autox
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: https://github.com/sifat009/autox
 * GitHub Branch:     main
 */

require 'plugin-update-checker/plugin-update-checker.php';
use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

add_action('plugins_loaded', function () {

    $myUpdateChecker = PucFactory::buildUpdateChecker(
        'https://github.com/sifat009/autox/',
        __FILE__,
        'autox'
    );

    //Set the branch that contains the stable release.
    $myUpdateChecker->setBranch('main');

});

function autox_page()
{
    echo '<h1>Autox updated v0.0.4</h1>';
    echo '<p>Autox is a simple auto updater plugin from github.</p>';
}

function autox_menu()
{
    add_menu_page('Autox', 'Autox', 'manage_options', 'autox', 'autox_page');
}
add_action('admin_menu', 'autox_menu');
