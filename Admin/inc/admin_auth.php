<?php
session_start();
include("inc/config.php");

if (!isset($_SESSION["uname"])) {
      header("Location: ../login.php");
}elseif (isset($_SESSION["role"])) {
   	header("Location: ../login.php");
}
?>