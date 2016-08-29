<?php
$con = mysql_connect("127.0.0.1", "root" , "ctdtproj");
$db = mysql_select_db("ctdt");

$str = "Success!!!";

$result = mysql_query("INSERT into notif(val) values('1')"); 

if ($result) {
        echo $str;
    } else {
        echo "Failed in query!!!";
    }
?>