<?php
session_start();
session_destroy();
header("location:/a3j/login/login.php");
?>