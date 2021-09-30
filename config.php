<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'serverbtssiojv.ddns.net');
define('DB_USERNAME', 'pulcini');
define('DB_PASSWORD', 'pulcini');
define('DB_NAME', 'pulcini_projetcyb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>