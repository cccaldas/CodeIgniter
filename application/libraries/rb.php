<?php

class Rb {

	function __construct() {
		include(APPPATH.'/config/database.php');
		include(APPPATH.'/third_party/rb.php');

		$host 	= $db[ENVIRONMENT]['hostname'];
		$user 	= $db[ENVIRONMENT]['username'];
		$pass 	= $db[ENVIRONMENT]['password'];
		$db 	= $db[ENVIRONMENT]['database'];

		R::setup("mysql:host=$host;dbname=$db", $user, $pass);
	}
}