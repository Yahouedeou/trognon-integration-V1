<?php

$db = array();
$db['host'] = 'localhost';
$db['user'] = 'root'; // utilisateur
$db['pass'] = 'root'; //password
$db['base'] = 'goldenrule'; //nom de la base de donnee


if($_SERVER['SERVER_NAME'] != 'localtest.com'){
	$db['host']= 'goldenrurugold.mysql.db';
	$db['user']= 'goldenrurugold';
	$db['pass']= 'Golden268';
	$db['base']= 'goldenrurugold';
}


?>
