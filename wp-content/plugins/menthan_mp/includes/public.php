<?php
class MenThanMP{
    public function __construct()
    {
        add_filter('the_title', array(__CLASS__, 'filter_title'), 10, 2);
    }

    public function filter_title($title, $id){
        $title = str_replace('Hello', 'xin chào', $title );
        return $title;
    }
}
?>