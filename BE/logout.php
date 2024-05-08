<?php
session_start();
session_destroy(); 
header('Location: ../FE/login.php');
exit();
?>
