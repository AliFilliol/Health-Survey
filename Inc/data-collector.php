<?php
session_start();

$pageId = $_POST["lastPageID"];

$_SESSION[$pageId] = $_POST;
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
?>


