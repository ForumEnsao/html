<?php

define('DB_SERVER', 'forumensao.com');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'toor');
define('DB_NAME', 'register');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
