<?php
$weather = ['snow', 'wind', 'sunshine', 'clouds', 'rain', 'hail', 'sleet'];
echo "At the beginning of the month, we had ", $weather[0], " and ", $weather[1], ". Then came ", $weather[2], " with a few ", $weather[3], " and some ", $weather[4], ". At least we didn't get any ", $weather[5], " or ", $weather[6], ".";

echo "<hr>";

function palindrome($word) {
    $word = strtolower($word);
    $word = str_replace(" ", "", $word);
    $letters = str_split("$word");
    $letters_reverse = array_reverse($letters);
    if ($letters == $letters_reverse) {
        echo "Yes";
    }
    if ($letters !== $letters_reverse) {
        echo "no!";
    }
    return $letters == $letters_reverse;
}

$guess = "muah";
$gas = 0;

if($gas > 0) {
    $car = "running";
} else {
    $car = "parked";
}
$car = ($gas > 0) ? "running" : "parked";

palindrome($guess);

function dd($val) {
    var_dump($var);
    die;
}