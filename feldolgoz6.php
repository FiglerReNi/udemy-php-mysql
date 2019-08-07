<!DOCTYPE html>
<html>
<head>
    <title>Chess table</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="chess.css">
</head>
<body>
<form action="" method="post"/>
<input type="number" name="num"/>
<input type="submit" name="submit" value="Submit"/><br>
<?php
if (isset($_POST['submit'])) {
    $num = $_POST['num'];
    echo "<br>";
    echo "<table>";
    for ($j = 0; $j < $num; $j++) {
        echo "<tr>";
        if ($j % 2 == 0) {
            for ($i = 0; $i < $num; $i++) {
                echo "<td class='b'>";
                echo "</td>";
            }
        } else {
            for ($i = 0; $i < $num; $i++) {
                echo "<td class='w'>";
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
?>
</body>
</html>
