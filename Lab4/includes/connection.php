<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$db='mysql_tut';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
if(!$conn){
    die('error connecting to da database');
}

?>