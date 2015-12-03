<?php
define('path', '');
include path.'inc/init.php';
$user = new User();
if(Input::exists('get')){
	if($user->isLoggedIn() && Input::get('isLoggedIn')== 'true'){
		echo 'true';
	}else{
		echo 'false';
	}
}
//sdjfl;a