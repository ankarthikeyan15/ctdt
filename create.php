<?php
$con = mysql_connect("127.0.0.1", "root" , "");
$db = mysql_select_db("test");

//if (isset($_POST["data"])) {
 
$door = $_POST["door"];
$light = $_POST["light"];
$fan = $_POST["fan"];

    $result = mysql_query("INSERT INTO summa(door,light,fan) VALUES('$door','$light','$fan')"); 
    if ($result) {
        echo "Success!!!";
    } else {
        echo "Failed in query!!!";
    }
//} else {
      //echo "Failed to set data!!!";
//}

echo "It works!!!";
?>