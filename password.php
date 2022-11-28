<?php 
session_start();
$password=$_SESSION["password"];
echo "<h1>LA tua password è : {$password}</h1>";
