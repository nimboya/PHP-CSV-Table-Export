<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_medplus = "localhost";
$database_medplus = "medplus";
$username_medplus = "root";
$password_medplus = "";
$medplus = mysql_pconnect($hostname_medplus, $username_medplus, $password_medplus) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
