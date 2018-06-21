<?php
$startDate = mktime(0, 0, 0, 3, 1, 2018);
$newDate = '';
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date table</title>
    <style>
        table {
            margin: auto;
            font-family: sans-serif;
            font-size: 20px;
        }
        table tr td {
            background-color: lightblue;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <?php for($i = 0; $i < 122; $i += 1) : ?>
            <?php $newDate = $startDate + (60 * 60 * 24 * $i); ?>
            <?php if (date("D", $newDate) == "Mon" || date("D", $newDate) == "Wed") : ?>
                <tr>
                    <td><?= date("jS", $newDate) . " of " . date("F", $newDate)?></td>
                    <td><?= date("l", $newDate) ?></td>
                </tr>
            <?php endif; ?>
        <?php endfor; ?>
    </table>
</body>
</html>