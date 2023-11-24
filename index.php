<?php
session_start();

if (isset($_SESSION["authenticated"]) && $_SESSION["authenticated"] === true) {
    header("Location: pages/index.html");
    exit();
} else {
    header("Location: pages/login.html");
    exit();
}
?>

