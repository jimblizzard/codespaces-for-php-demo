<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '51.210.151.13');
define('DB_USERNAME', 'EleveRostand1!');
define('DB_PASSWORD', 'EleveRostand1!');
define('DB_NAME', 'tobji');

/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "connexion réussie";
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
