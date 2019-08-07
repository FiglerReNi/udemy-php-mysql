<?php

if (isset($_POST['submit'])) {
    $text = $_POST['text'];
    $texts = str_replace(" ", "", $text);
    $textr = strrev($texts);
    if ($texts == $textr) {
        echo "The word " . $text . " is a palindrome.";
    } else {
        echo "The word " . $text . " is not a palindrome.";
    }
}
