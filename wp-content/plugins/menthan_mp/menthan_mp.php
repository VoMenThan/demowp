<?php

/*
Plugin Name: Men Than MP
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Men Than
Version: 1.0
Author URI: http://ma.tt/
*/

define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_VIEW_PATH', PLUGIN_DIR_PATH. '/views');

define('PLUGIN_DIR_URL', plugin_dir_url(__FILE__));
define('PLUGIN_IMAGES_URL', PLUGIN_DIR_URL . '/images');

$pathPlugin = PLUGIN_DIR_PATH.'/includes/';
$urlPlugin = PLUGIN_DIR_URL.'/includes/';

if (!is_admin()){
    include $pathPlugin.'public.php';
    new MenThanMP();
}else{
    include $pathPlugin.'admin.php';
    new AddSetting();
}


















//$dirPlugin = plugin_dir_path(__FILE__);
//
//require_once $dirPlugin.'/includes/public.php';
//
//ActionClass::actionHook1();
//ActionClass::actionHook2();

//$newHook = new ActionClass();
//
//add_action('wp_footer', array($newHook, 'actionHook1'));
//add_action('wp_footer', array($newHook, 'actionHook2'));




















/*add new action hook*/
//add_action('new_action_hook', 'menthan_mp_add_action_new', 10, 2);

//function menthan_mp_add_action_new($author, $age){
//    echo "Author: ".$author. " Age: ".$age;
//}
//
//function new_action_hook($author = 'Vo Men Than', $age = '23'){
//    do_action('new_action_hook', $author, $age);
//}

















//register_activation_hook(__FILE__, 'menthan_mp_active');

//function menthan_mp_active(){
//
//    global $wpdb;
//
//    $tbl_name = $wpdb->prefix.'menthan_mp_test';
//    $sql_like = $wpdb->get_var("SHOW TABLES LIKE '.$tbl_name.'");
//
//    if($sql_like != $tbl_name){
//        $sql = 'CREATE TABLE '.$tbl_name.' (
//            my_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//            name VARCHAR (50),
//            author VARCHAR (50),
//            description VARCHAR (100),
//            date DATE
//            );';
//        require_once ABSPATH.'wp-admin/includes/upgrade.php';
//        dbDelta($sql);
//    }
//
//}

//function menthan_mp_deactive(){
//
//    global $wpdb;
//    $tblName = $wpdb->prefix.'options';
//    $wpdb->update(
//        $tblName,
//        array('autoload' => 2),
//        array('option_name' => 'menthan_mp_action_option_new'),
//        array('%s'),
//        array('%s')
//    );
//
//}


//function menthan_mp_active(){
//
//    global $wpdb;
//
//    $tbl_name = $wpdb->prefix.'menthan_mp_test';
//    $sql_like = $wpdb->get_var("SHOW TABLES LIKE '.$tbl_name.'");
//
//    if($sql_like != $tbl_name){
//        $sql = 'CREATE TABLE '.$tbl_name.' (
//            my_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//            name VARCHAR (50),
//            author VARCHAR (50),
//            description VARCHAR (100),
//            date DATE
//            );';
//        require_once ABSPATH.'wp-admin/includes/upgrade.php';
//        dbDelta($sql);
//    }
//
//}



//function menthan_mp_active(){
//    $menthan_mp_tmp = array(
//        'plugin' => 'demo',
//        'author' => 'men than',
//        'version' => '1.0'
//    );
//    add_option("menthan_mp_action_option_new", $menthan_mp_tmp, '', 'yes');
//}