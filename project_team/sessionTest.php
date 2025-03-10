<?php
session_start();
if (!isset($_SESSION['role_as'])) {
    echo "Session role_as is not set.";
    exit();
}
if ($_SESSION['role_as'] != 1) {
    echo "You are not an admin.";
    exit();
}
?>
