<?php
$pass="MYSECRETKEY";
$time=30;
$size=6;

echo substr(hash_hmac('sha256',floor(time()/$time) , $pass),0,$size)."\n";
?>
