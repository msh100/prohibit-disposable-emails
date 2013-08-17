<?php
// Simple check of disposable email service 
// list by https://gist.github.com/adamloving

function is_disposable_email($email){
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		$filteredmail	=	explode("\n", file_get_contents(__DIR__."/prohibit.txt"));
		$emaildomain	=	strtolower(array_pop(explode("@", $email)));
		
		if(in_array($emaildomain, $filteredmail)) return true;
		else return false;
	}
	else return false;
}