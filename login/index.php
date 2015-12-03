<?php
define('path', '../');
include '../inc/init.php';

/*if(Input::exists()){
	$val = new Validation();
	$validate = $val->check($_POST, array(
		'username' => array(
			'required' => true,
		),
		'password' => array(
			'required' => true,
		),
	));
	if($validate->passed()){
		if($user->login(escape(Input::get('username')), escape(Input::get('password')), false)){
			echo 'you have been logged in!';
		}
	}
	echo 'val failed';
}
echo 'post failed';*/

// A horrible way to get our varibles but it have to do...
$user = new User();
if(Input::exists('get')){
	$val = new Validation();
	$validate = $val->check($_GET, array(
			'username' => array(
					'required' => true,
			),
			'password' => array(
					'required' => true,
			),
	));
	if($validate->passed()){
		if($user->login(escape(Input::get('username')), escape(Input::get('password')), false)){
			echo 'you have been logged in!';
		}else{
			echo 'invalid username and password';
		}
	}else{
		foreach($validate->errors() as $e){
			echo $e;
			echo'
			';
		}
	}
}