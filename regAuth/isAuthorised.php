<?php

session_start();

$_RESULT = array();

$_RESULT['set'] = false;
if (isset($_SESSION['username'])){
    $_RESULT['set'] = true;
    $_RESULT['username'] = $_SESSION['username'];
    $_RESULT["id"] = 1;
}

echo json_encode($_RESULT);