<?php

session_start();

$loggedin = FALSE;

if (isset($_SESSION['loggedin']) && isset($_SESSION['id'])) {
    $loggedin = $_SESSION['loggedin'];
    $id = $_SESSION['id'];
}

if (!$loggedin) {
    $_SESSION['loggedin'] = $loggedin;
    header('Location: ../login/');
    exit();
}
