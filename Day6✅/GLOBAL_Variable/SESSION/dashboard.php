<?php

    // dashboard.php
session_start();
if ($_SESSION['loggedin']) {
    echo "Welcome, " . $_SESSION['username'];
} else {
    echo "Please login.";
}

?>