<?php

$cars = ['mazda', 'toyota', 'honda'];

echo $cars[0], "<br>", $cars[1], "<br>", $cars[2], "<br>";

echo "<hr>";

foreach ($cars as $car) {
    echo $car . "<br>";
}

echo "<hr>";

$user = [
    'name' => 'Mary',
    'lastname' => 'Doe',
    'age' => 14
];

echo "<ul>";
foreach ($user as $key => $value) {
    echo "<li>" . ucfirst($key) . ": " . $value . "</li>";
}
echo "</ul>";

echo "<hr>";

echo "<table>";
foreach ($user as $key => $value) :
    echo "<tr> <td>" . ucfirst($key) . "</td> <td> . $value . </td> <tr/>";
endforeach;
echo "</table>";

echo "<hr>";

$n = 0;
echo "<table>";
foreach ($user as $key => $value) {
    echo "<tr>";
    if ($n = 0) {
        echo "<th>";
        echo $value;
        echo "</th>";
        $n++;
    } else {
        echo "<td>";
        echo $key;
        echo "</td>";
        $n++;
    }
    echo "</tr>";

}
echo "</table>";

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background-color: #333;
            color: aliceblue;
        }
        table {
            border: 1px solid green;
        }
    </style>
</head>
<body>

<hr>
<table>
    <?php
    for ($i = 0; $i < 2; $i++) : ?>
    <tr>
        <?php
        foreach ($user as $key => $value): ?>
        <td><?php
            if ($i == 0) {
                echo $key;
            } else {
                echo $value;
            }
            ?></td>
        <?php
        endforeach;
        ?>
    </tr>
    <?php
    endfor;
    ?>
</table>


</body>
</html>