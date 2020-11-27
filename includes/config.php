<?php

// Database connection
$conn = mysqli_connect('localhost', 'root', '', 'aviano-db');

// check connection + error page redirect
if(!$conn){
  header("Location: error.php");
  exit;
}

// Site-wide config
$site_title = "Woodbox";
$site_owner = "WoodBox";
?>