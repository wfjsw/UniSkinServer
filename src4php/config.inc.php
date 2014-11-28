<?php 
//Define MySQL connect parameters here
$con = mysql_connect("localhost","username","password");
if (!$con)
{
Header("HTTP/1.1 500 Internal Error");
error_log('Could not connect: ' . mysql_error());
die();
}
if(!mysql_select_db("dbname", $con)){Header("HTTP/1.1 500 Internal Error");
error_log('Database not exist');
die();}


