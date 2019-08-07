<?php

//A VÁLTOZAT
$badwords = array('stupid', 'idiot', 'shit');
if (isset($_POST['submit'])) {
    $text = $_POST['comment'];
    $texttomb = explode(' ', $text);
    for ($i = 0; $i < count($texttomb); $i++) {
        for ($j = 0; $j < count($badwords); $j++) {
            if ($texttomb[$i] == $badwords[$j]) {
                $texttomb[$i] = str_replace("$badwords[$j]", "***", "$texttomb[$i]");
            }
        }
    }
    echo "<textarea name= 'comment1' rows='10' cols='30'>";
    foreach ($texttomb as $text){           
        echo $text . " ";
    }
    echo  "</textarea>";
}

//B VÁLTOZAT
$badwords = array('stupid', 'idiot', 'shit');
if (isset($_POST['submit'])) {
    $text = $_POST['comment'];
    for ($i = 0; $i < count($badwords); $i++) {
           $text = str_replace("$badwords[$i]", "***", "$text");
            }
    echo "<textarea name= 'comment1' rows='10' cols='30'>";
    foreach ($texttomb as $text){           
        echo $text . " ";
    }
    echo  "</textarea>";
}


