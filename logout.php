<?php
session_start();
setcookie("email", "", time() - (3600), "/");
setcookie("username", "", time() - (3600), "/");
session_unset();

session_destroy();

header("Location: index.php");

?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

