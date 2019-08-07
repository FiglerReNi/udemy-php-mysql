<?php

if (isset($_POST['submit'])) {
    $card = $_POST['card'];
    $cardtomb = str_split($card);
    $cardtombr = array_reverse($cardtomb);
    $sum = 0;
    $szorzat = 0;
    for ($i = 0; $i < count($cardtombr); $i = ($i + 2)) {
        $sum += $cardtombr[$i];
    }
    for ($i = 1; $i < count($cardtombr); $i = ($i + 2)) {
        $tempsz = $cardtombr[$i] * 2;
        if ($tempsz > 9) {
            $szorzat += ($tempsz - 9);
        } else {
            $szorzat += $tempsz;
        }
    }
    $end = array_slice($cardtomb, -4, 4);
    $string = implode('', $end);
    if (($sum + $szorzat) % 10 == 0) {
        echo "Your credit card number ending in " . $string . " is valid";
    } else {
        echo "Your credit card number ending in " . $string . " is invalid";
    }
}

