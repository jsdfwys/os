<?php

$host = "127.0.0.1";

$user = "root";

$password = "1234";//123改成你的mysql密码

$link=mysql_connect($host,$user,$password);  

if(!$link) echo "<h1>abc!</h1>";

else echo "<h1>efg!</h1>";

mysql_close();

?>
