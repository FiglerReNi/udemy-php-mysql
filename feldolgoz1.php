<?php

if (isset($_POST['submit'])) {
    $temp = $_POST['text'];
    $space = $_POST['space'];
    if ($temp != "" && $space == 's') {
        $length = strlen($temp);
        echo "The string is " . $length . " characters long.";
    }
    else{
        $wordLength = str_word_count($temp);
        $length = strlen($temp) - ($wordLength-1);  
        echo "The string is " . $length . " characters long.";
    }
        
}

    
    
    
    
    
    