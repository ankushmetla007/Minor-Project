<?php
session_start();
include 'dbconnect.php';
$test = new dbObj();
$test->getConnstring();
?>