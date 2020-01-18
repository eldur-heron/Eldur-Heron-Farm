<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    $loggedin = FALSE;
} else {
    //$loggedin = filter_input(INPUT_SESSION, 'loggedin');
    $loggedin = $_SESSION['loggedin'];
}

if (!$loggedin) {
    header('Location: ../login/');
    exit();
}
