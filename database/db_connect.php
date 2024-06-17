<?php
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tuinman_hendrik";

$con = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}

function prettyDump($var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

define("BASEURL", "http://localhost/"); 
define("BASE_PATH", "C:/xampp/htdocs");

if(!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
}