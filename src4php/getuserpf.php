<?php 
require 'config.inc.php';
$result = mysql_query("SELECT * FROM users WHERE name='" . filename . "'");
if ($result){$row = mysql_fetch_array($result);}
else{Header("HTTP/1.1 404 Not Found");die(1);}
$player_name=$row['player_name'];
$last_update=$row['last_update'];
$uuid=$row['uuid'];
$model_preference=$row['preference'];
$slimhash=$row['HASH_alex'];
$defaulthash=$row['HASH_steve'];
$capehash=$row['HASH_cape'];
