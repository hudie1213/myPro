<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/9
 * Time: 14:20
 */
//$conn=mysql_connect("localhost","root","root")or die("连接错误".mysql_error());
//mysql_select_db("myPro",$conn);
//$q = "SELECT * FROM img";
//$rs = mysql_query($q);
////删除表内所有数据
////mysql_query("DELETE FROM img");
//while($rows = mysql_fetch_array($rs))
//    $array[] = $rows['lj'];
//echo json_encode($array);
//mysql_free_result($rs);
$conn = mysql_connect("localhost", "root", "root") or die("连接错误" . mysql_error());
mysql_select_db("myPro", $conn);
$q = "SELECT * FROM img";
$rs = mysql_query($q);
while ($rows = mysql_fetch_array($rs)){
    $arrays[] = $rows["Img"];
    $arrays[] = $rows["lj"];
}
echo json_encode($arrays);
mysql_free_result($rs);


?>

