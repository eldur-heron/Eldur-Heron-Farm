<?php

$loggedin = FALSE;

session_start();
session_destroy();

header("Location: ../");
exit();

?>