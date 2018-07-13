<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9
 * Time: 17:28
 */
//$conn=mysqli_connect("localhost","root","root","mypro");
//?\mysql_query("DELETE FROM img");
mysql_connect("localhost","root","root");
mysql_select_db("mypro");
mysql_query("DELETE FROM img");
?>