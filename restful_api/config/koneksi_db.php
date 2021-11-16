<?php
define('HOST', 'localhost');
define('USER', 'root');
define('DB', 'dbrest');
define('PASS', 'yes');
$conn = new mysqli(HOST, USER, DB, PASS) or die('Koneksi error untuk database');
?>