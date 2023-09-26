<?php
include 'connection.php';

$admin_id = $_SESSION['admin_name'];

session_destroy();
header('location:login.php');

?>