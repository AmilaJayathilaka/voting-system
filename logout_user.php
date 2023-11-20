<?php
session_start();
unset($_SESSION['nic']);
session_destroy();
header('location:index_user.php');
?>