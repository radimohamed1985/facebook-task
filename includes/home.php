<?php
session_start();

echo "welcome"."  ".$_SESSION['user'];
echo ' <br>';

echo'<a href="/dashboard/facebook/includes/logout.php">logout</a>';
include '/xampp/htdocs/dashboard/facebook/includes/connect.php';

