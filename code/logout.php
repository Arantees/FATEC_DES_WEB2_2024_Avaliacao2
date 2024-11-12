<?php

require_once('classes/login.php');

$validador = new Login();
$validador->logout();

header("Location: index.php");
exit();
