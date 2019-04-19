<?php

function verifyOTP($myotp){
	
	$pass="MYSECRETKEY";
	$time=30;
	$size=6;

	return substr(hash_hmac('sha256',floor(time()/$time) , $pass),0,$size)===$myotp;
}

?>
