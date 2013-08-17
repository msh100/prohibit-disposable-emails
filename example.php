<?php
// Simple usage
include_once(__DIR__."/prohibit.php");
$emails	=	array("spam@mailinator.com", "randomemail@gmail.com", "wtf@teleworM.com");

foreach($emails as $email){
	if(is_disposable_email($email))	echo $email." is a disposable email address";
	else echo $email." is not a disposable email address";
	echo "\n";
}