<?php

echo "<pre>";

$tmp = $_FILES['image']['tmp_name'];
$dest = getcwd() . "./storage" . $_FILES['image']['name'];
move_uploaded_file($tmp, $dest);
var_dump($_FILES);