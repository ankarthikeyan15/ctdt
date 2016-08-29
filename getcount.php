<?php
$con = mysql_connect("127.0.0.1", "root" , "");
$db = mysql_select_db("test");

$str = "";

$result = mysql_query("SELECT COUNT(*) from summa"); 
$row = mysql_fetch_array($result);
$str = $row[0];
if ($result) {
        echo $str;
    } else {
        echo "Failed in query!!!";
    }
?>