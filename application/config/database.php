<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$db[ENV_DEVELOPMENT]["hostname"] = "127.0.0.1";
$db[ENV_DEVELOPMENT]["username"] = "user";
$db[ENV_DEVELOPMENT]["password"] = "pass";
$db[ENV_DEVELOPMENT]["database"] = "database";

$db[ENV_TESTING]["hostname"] = "test.domain.com";
$db[ENV_TESTING]["username"] = "user";
$db[ENV_TESTING]["password"] = "pass";
$db[ENV_TESTING]["database"] = "database";

$db[ENV_PRODUCTION]["hostname"] = "domain.com";
$db[ENV_PRODUCTION]["username"] = "user";
$db[ENV_PRODUCTION]["password"] = "pass";
$db[ENV_PRODUCTION]["database"] = "database";
 