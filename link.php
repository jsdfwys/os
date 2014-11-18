<?php
$link=mysql_connect("127.0.0.1","root","1234"); 
if(!$link) echo "Mysql数据库连接失败!"; 
else echo "55555"; 
mysql_close(); 
?>