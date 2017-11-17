<?php
/**
 * Created by PhpStorm.
 * User: Vo Men Than
 * Date: 11/14/2017
 * Time: 8:45 PM
 */

class AddSetting{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'myMenuPage'));
    }

    public function myMenuPage(){
        $slug_menu_page = 'menthan-menu-page';
        add_menu_page('My menu page', 'My Menu','manage_options',
            $slug_menu_page, array($this, 'myMenu'), PLUGIN_IMAGES_URL. '/icon-menu.png');

        add_submenu_page( $slug_menu_page,'My About', 'About','manage_options',
            $slug_menu_page . '-about', array($this, 'myAbout'));

        add_submenu_page( $slug_menu_page,'My Setting', 'Setting','manage_options',
            $slug_menu_page . '-setting', array($this, 'mySetting'));
    }

    public function myMenu(){
        require PLUGIN_VIEW_PATH . '/menthan-my-menu.php';
    }

    public function myAbout(){
        require PLUGIN_VIEW_PATH . '/menthan-about.php';
    }

    public function mySetting(){
        require PLUGIN_VIEW_PATH . '/menthan-help.php';
    }
}