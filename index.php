<?php

$myfile = fopen("task2input.txt", "r") or die("Unable to open file!");
$arr = array();
while (!feof($myfile)) {
    $arr[] = fgets($myfile);
}

fclose($myfile);

$sumsquare = 0;

foreach ($arr as $line) {
    $line = preg_replace('/\s+/', '', $line);
    list($l, $w, $h) = explode("x", $line);
    $square = (2*$l*$w) + (2*$l*$h) + (2*$h*$w);
    $dim = array($l, $w, $h);
    sort($dim);
    $plus = $dim[0]*$dim[1];
    $sumsquare += $square + $plus;
}

echo $sumsquare;

?>