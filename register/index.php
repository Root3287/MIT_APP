<?php
define('path', '../');
include path.'inc/init.php';

/*$user = new User();

if(Input::exists()){
	$val = new Validation();
	$validate = $val->check($_POST, array(
		'username' => array(
			'required'=> true,
			'unique'=> "users",
			'min' => 1,
			'max' => 16,
		),
		'email' => array(
			'required' => true,
			'min' => 3,
		),
		'name'=>array(
			'required' => true,
		),
		'password' => array(
			'required' => true,
			'min' => 8,
		),
		'password_conf' => array(
			'required' => true,
			'matches' => 'password',
		)
	));
	if($validate->passed()){
		$salt = Hash::salt(32);
		$password = Hash::make(Input::get('password'), $salt);
		try {
			$user->create(array(
				'username' => escape(Input::get('username')),
				'password' => $password,
				'salt' => $salt,
				'joined' => date('Y-m-d- H:i:s'),
				'group' => Input::get('group'),
				'name' => escape(Input::get('name')),
			));
		}catch (Exception $e){
			echo 'try 0';
		}
		echo '1';
	}
}
echo 'failed 0';*/

// A horrible way to get our varibles but it have to do....

$user = new User();

if(Input::exists('get')){
	$val = new Validation();
	$validate = $val->check($_GET, array(
			'username' => array(
					'required'=> true,
					'unique'=> "users",
					'min' => 1,
					'max' => 16,
			),
			'email' => array(
					'required' => true,
					'min' => 3,
			),
			'name'=>array(
					'required' => true,
			),
			'password' => array(
					'required' => true,
					'min' => 8,
			),
			'password_conf' => array(
					'required' => true,
					'matches' => 'password',
			)
	));
	if($validate->passed()){
		$salt = Hash::salt(32);
		$password = Hash::make(Input::get('password'), $salt);
		try {
			$user->create(array(
					'username' => escape(Input::get('username')),
					'password' => $password,
					'salt' => $salt,
					'joined' => date('Y-m-d- H:i:s'),
					'group' => '1',
					'name' => escape(Input::get('name')),
			));
			echo 'You have made your user';
		}catch (Exception $e){
			echo 'creating user failed';
		}
	}else{
		foreach($validate->errors() as $e){
			echo $e.'
			
			';
		}
	}
}