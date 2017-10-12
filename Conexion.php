<?php
session_start();

class Connect {
    public static function con()
    {
     $con = mysql_connect("localhost","phpmyadmin","secret");
     mysql_query("SET NAMES 'utf8'");
     mysql_select_db("emerald");
     return $con;
    }
}
?>
