<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$month = date('F', time());
if ($month == "April") {
    echo "<p>April arrived! Happy spring!</p>";
    echo "<img src='http://www.fabuloussavers.com/new_wallpaper/Beautiful_Spring_Yellow_Flowers_freecomputerdesktopwallpaper_p.jpg'>";
} else {
    echo "<p>It is not April yet, but it will be soon....</p>";
    echo "<img src='http://data.whicdn.com/images/17730189/tumblr_luo9u8Sim21qmejd3o1_400_large.jpg'>";
}
?>

</body>
</html>