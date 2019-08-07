<?php

if (isset($_POST['submit'])) {
    $temp = $_POST['temp'];
    $fok = $_POST['fok'];
    $pontossag = $_POST['pontossag'];
    $i = 0;
    if ($pontossag == "egy") {
        $i = 1;
    } elseif ($pontossag == "ketto") {
        $i = 2;
    } elseif ($pontossag == "harom") {
        $i = 3;
    }
    if ($fok == "°C") {
        echo round($temp * 9 / 5 + 32, $i);
    } else {
        echo round(($temp - 32) * 5 / 9, $i);
    }
}

