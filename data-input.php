<?php
    if(isset($_GET['color'])) {
        $color = 'wheat';
    } else {
        $color = $_GET['color'];
    }
// $_GET predefined variable contains an array of 'get' request
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: <?= $_GET['color']?>;">

<ul>
    <li><a href="?color=pink">Pink</a></li>
    <li><a href="?color=green">Green</a></li>

</ul>

</body>
</html>
