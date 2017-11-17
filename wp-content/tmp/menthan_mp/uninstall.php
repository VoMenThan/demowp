<?php
if (!defined('WP_UNINSTALL_PLUGIN')){
    exit();
}
menthan_mp_uninstall();

function menthan_mp_uninstall(){
    global $wpdb;
    $tblName = $wpdb->prefix.'menthan_mp_test';

    delete_option('menthan_mp_action_option');
    delete_option('menthan_mp_action_option_new');

    $sql = 'DROP TABLES IF EXISTS '. $tblName;
    $wpdb->query($sql);
}
