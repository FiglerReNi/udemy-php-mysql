<?php

if (isset($_POST['submit'])) {
    $isbn = $_POST['isbn'];
    $isbntomb = str_split($isbn);
    $sum = 0;
    if (count($isbntomb) == 10) {
        for($i=0; $i<10; $i++){
           $sum += $isbntomb[$i]*($i+1);
        }
        if ($sum % 11 == 0){
            echo "Valid ISBN";
        }
        else{
            echo "Invalid ISBN";
        }
    }
    else{
        echo "Have to write 10 digits.";
    }
}
    

