<?php
session_start();
session_unset();
session_destroy();
header("Location: ../sign up.php");
die();

?>