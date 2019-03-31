<?php
session_start();
session_unset(); 
include "config.php";
// destroy the session 
session_destroy();
echo "<script>alert('Logout Successfully, Have a nice time!');window.location.href='$base_url/index.php';</script>";  
?>