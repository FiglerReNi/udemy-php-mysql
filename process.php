<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $color = $_POST['color'];
    setcookie('nev', $name, time()+600);
    setcookie('kor', $age, time()+600);
    setcookie('szin', $color, time()+600);
}