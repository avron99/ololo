<?php
$host = 'localhost';
$user = 'new_user';
$pswd = 'admin';
$db_name = 'workbase';
try
{
	$db = new PDO("mysql:host={$host};dbname={$db_name}", $user, $pswd);
	$db->exec('SET CHARACTER SET utf8');
}
catch (PDOException $e) {
    print "PDO: " . $e->getMessage() . "<br/>";
    die();
}

?>