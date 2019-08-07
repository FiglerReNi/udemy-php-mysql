<?php

session_start();

if (isset($_SESSION['visit'])) {
    $_SESSION['visit']++;
    echo "You have visited this page " . $_SESSION['visit'] . " times.";
} else {
    $_SESSION['visit'] = 1;
    echo "You have visited this page " . $_SESSION['visit'] . " times.";
}