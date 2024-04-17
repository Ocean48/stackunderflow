<?php
require_once('admin/private/initialize.php');

session_destroy(); //destroy the session since it was only used for admin login info

header("Location: login.php")

?>
