<?php
$con = mysql_connect("127.0.0.1", "root" , "");
$db = mysql_select_db("test");

$str = "";

$result = mysql_query("SELECT door,light,fan from summa order by id desc limit 1"); 
$row = mysql_fetch_array($result);
$str .= $row['door'];
$str .= $row['light'];
$str .= $row['fan'];
if ($result) {
        echo $str;
    } else {
        echo "Failed in query!!!";
    }
?>