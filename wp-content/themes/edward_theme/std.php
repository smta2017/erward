<?php
require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
class std 
{
    public static function store($sname, $age ,$dep){
        global $wpdb;
        $res = $wpdb->insert('students',array(
            'sname' => $sname,
            'age' => $age, 
            'dep' => $dep
        ));
        return $res;
    }
}
?>