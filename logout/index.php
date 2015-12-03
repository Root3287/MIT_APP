<?php
define('path', '../');
require path.'inc/init.php';

error_reporting(0);

$user = new User();
$user->logout();
echo 'Logout: true';

error_reporting(-1);