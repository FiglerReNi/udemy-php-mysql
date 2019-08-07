<?php

//associative array
$cityCountry = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
    "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
    "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
    "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
       Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
    Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
    "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
    "Poland" => "Warsaw");
asort($cityCountry);
foreach ($cityCountry as $country => $city) {
    echo "The capital city of " . $country . " is " . $city;
    echo"<br>";
}

//cards
$suits = array("clubs", "diamonds", "hearts", "spades");
$values = array("Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King");
$suit = $suits[array_rand($suits)];
$value = $values[array_rand($values)];
echo "The randomly selected card is the " . $value . " of " . $suit;
echo "<br>";

//temperature
$temperature = array(32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0,
    36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2,
    29.1, 28.6, 30.6);
$avrage = round(array_sum($temperature) / count($temperature), 1, PHP_ROUND_HALF_UP);
echo "The average daily temperature is " . $avrage;
echo"<br>";
sort($temperature);
$result = array_slice($temperature, 0, 5);
echo "The 5 lowest temperatures are: ";
degree($result);
$result = array_slice($temperature, -5, 5);
echo "The 5 highest temperatures are: ";
degree($result);

function degree($result) {
    foreach ($result as $degree) {
        echo $degree . ", ";
    }
    echo"<br>";
}

//arrays
$cities = array("London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane");
order($cities);
array_push($cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome");
order($cities);

function order($cities) {
    sort($cities);
    echo "<ol>";
    foreach ($cities as $city) {
        echo "<li>" . $city . "</li>";
    }
    echo "</ol>";
}

//escape string
$name = "Sam";
echo "This is " . $name . "'s apple!";
echo"<br>";
echo "$name" . " said, \"Hello, Colin. How's your new PHP course going?\". ";
echo"<br>";
echo "$name" . "'s mother ordered a new book called \"A Day in my Life\" from her local
bookstore.";
echo"<br>";

//string function
$string = "Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.";
echo str_rot13($string);
echo"<br>";

//rectangle area
$length = 10;
$width = 5;
$answer = $length * $width;
echo $answer;
echo"<br>";

//triangle area
$base = 12;
$height = 3;
$answer1 = ($base * $height) / 2;
echo $answer1;
echo"<br>";

//circle
$radius = 5;
$answer2 = 3.14 * pow($radius, 2);
echo $answer2;
echo"<br>";

//trapezoid
$a = 10;
$b = 8;
$height1 = 4;
$answer3 = (($a + $b) / 2) * $height1;
echo $answer3;
echo"<br>";

//concat
$firstName = "John";
$middleName = "Henry";
$lastName = "Green";
$age = 42;
echo $firstName . " " . $middleName . " " . $lastName . " is " . $age . " years old.";
echo"<br>";

//loops
for ($i = 6; $i <= 60; $i += 6) {
    echo $i . "<br>";
}

$i = 6;
while ($i <= 60) {
    echo $i . "<br>";
    $i += 6;
}

for ($i = 1; $i <= 10; $i++) {
    echo "3";
}
echo"<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "3";
    }
}
echo"<br>";

//FIZZ BUZZ challange
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FIZZ BUZZ <br>";
    } elseif ($i % 3 == 0) {
        echo "FIZZ <br>";
    } elseif ($i % 5 == 0) {
        echo "BUZZ <br>";
    } else {
        echo $i . "<br>";
    }
}

//random
$veletlenSZam = rand(1, 2);
if ($veletlenSZam == 1) {
    echo "Heads, I win!";
} else {
    echo "Tails, you win!";
}

$egy = 0;
$ketto = 0;
for ($i = 1; $i <= 100; $i++) {
    $veletlenSZam1 = rand(1, 2);
    if ($veletlenSZam1 == 1) {
        echo "Heads, I win! <br>";
        $egy++;
    } else {
        echo "Tails, you win! <br>";
        $ketto++;
    }
}
echo "Egy: " . $egy . ", Kettő: " . $ketto;
echo "<br>";

//round()
$radius1 = 5;
$circleArea = pi() * pow($radius, 2);
echo round($circleArea, 2, PHP_ROUND_HALF_UP);
echo"<br>";

//timezone set
date_default_timezone_set('Europe/Budapest');
echo date('l jS F Y');
echo"<br>";
echo "Today is " . date('l');
echo"<br>";
echo date('l d F, Y');
echo"<br>";
echo date('Y/m/d');
echo"<br>";
echo date('l jS F Y, G:i A');
echo"<br>";
$leapYear = date('L');
if ($leapYear == 0) {
    echo "not leap year";
} else {
    echo "leap year";
}
echo"<br>";

//time()
$christmas = strtotime('2019-12-06');
$dayToChristmas = ($christmas - time()) / 60 / 60 / 24;
echo ceil($dayToChristmas);    //floor()
echo"<br>";

