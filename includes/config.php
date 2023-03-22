<?php
$dbuser="root";
$dbpass="";
$host="localhost";
$db="project";
$mysqli =new mysqli($host,$dbuser, $dbpass, $db);
set_include_path(get_include_path() . PATH_SEPARATOR . 'vendor/autoload.php');
?>