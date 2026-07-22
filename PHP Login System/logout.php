<?php

session_start();
session_unset();

session_destroy();
header("location: /PHP-Learning/PHP%20Login%20System/login.php");
exit();

?>