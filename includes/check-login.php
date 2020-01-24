<?php

session_start();

$loggedin = FALSE;

if (isset($_SESSION['loggedin'])) {
    $loggedin = $_SESSION['loggedin'];
}

if (!$loggedin) {
    header('Location: ../login/');
    exit();
}
