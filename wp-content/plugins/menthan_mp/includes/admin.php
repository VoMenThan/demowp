<?php
/**
 * Created by PhpStorm.
 * User: Vo Men Than
 * Date: 11/14/2017
 * Time: 8:45 PM
 */

class AddSetting{
    private $_slug_menu_page = 'menthan-menu-page';

    public function __construct()
    {
        add_action('admin_menu', array($this, 'myMenuPage'));
        add_action('admin_init', array($this, 'add_setting_and_field'));
    }

    //===========================================
    // dang ky phan setting menu
    //===========================================
    public function add_setting_and_field(){

        //MAIN SECTION
        $id_section = 'menthan_main_section';
        register_setting('menthan_mp_setting_group', 'menthan_setting', array($this, 'validate_setting_field'));

        add_settings_section($id_section, 'Main setting', array($this, 'main_section'), $this->_slug_menu_page);

        add_settings_field('menthan_mp_field', 'Site title', array($this, 'menthan_mp_title'),$this->_slug_menu_page, $id_section);


        //EXT SECTION
        $id_ext = 'menthan_ext_section';
        add_settings_section($id_ext, 'Ext setting', array($this, 'main_section'), $this->_slug_menu_page);

        add_settings_field('menthan_mp_slogan', 'Slogan', array($this, 'menthan_mp_slogan'),$this->_slug_menu_page, $id_ext);
    }
    public function validate_setting_field($data_setting){
        echo '<pre>';
        print_r($data_setting);
        echo '</pre>';

        return $data_setting;

    }
    public function main_section(){

    }

    public function menthan_mp_title(){
        echo '<input type="text" name="menthan_main_section[menthan_mp_title]" value="" />';
    }

    public function menthan_mp_slogan(){
        echo '<input type="text" name="menthan_ext_section[menthan_mp_slogan]" value="" />';
    }


    //===========================================
    // them phan my setting vao menu admin
    //===========================================
    public function myMenuPage(){

        add_options_page('My setting page', 'My setting', 'manage_options', $this->_slug_menu_page, array($this, 'myMenu'));

    }
    public function myMenu(){
        require PLUGIN_VIEW_PATH . '/menthan-my-menu.php';
    }


}