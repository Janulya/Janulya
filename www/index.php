<?php

include_once("config.php");

$conn = new PDO(
	'mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'].';charset=utf8',
	$config['db']['username'],
	$config['db']['userpass']
);



