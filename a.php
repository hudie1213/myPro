<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/7
 * Time: 15:27
 */



header("Content-Type:text/html;charset=utf8");

    $link=mysql_connect("localhost","root","root");
     mysql_select_db("mypro", $link); //选择数据库

     $q = "SELECT * FROM dian where 类型 = '美食'"; //SQL查询语句
    mysql_query("SET NAMES utf8");//解决中文乱码问题
     $rs = mysql_query($q); //获取数据集
     if(!$rs){die("Valid result!");}
    echo "<table>";
    echo "<tr><th>店名</th><th>店面类型</th></tr>";
   while($row = mysql_fetch_array($rs)) echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>"; //显示数据
    echo "</table>";
    mysql_free_result($rs); //关闭数据集
?>