<?php

/*
Plugin Name: Men Than MP
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Men Than
Version: 1.0
Author URI: http://ma.tt/
*/

register_activation_hook(__FILE__, 'menthan_mp_active');

function menthan_mp_active(){

    global $wpdb;

    $tbl_name = $wpdb->prefix.'menthan_mp_test';
    $sql_like = $wpdb->get_var("SHOW TABLES LIKE '.$tbl_name.'");

    if($sql_like != $tbl_name){
        $sql = 'CREATE TABLE '.$tbl_name.' (
            my_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name VARCHAR (50),
            author VARCHAR (50),
            description VARCHAR (100),
            date DATE
            );';
        require_once ABSPATH.'wp-admin/includes/upgrade.php';
        dbDelta($sql);
    }

}

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