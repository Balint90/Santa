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
    $dim = explode("x", $line);
    $square = 2*$dim[0]*$dim[2];
    $min = $square;
    for ($i=0; $i < count($dim)-1; $i++) { 
        $tmp = $dim[$i]*$dim[$i+1];
        $square += 2*$tmp;
        if ($min>$tmp) $min = $tmp;
        // echo $square . " min: " . $min . "<br />";
    }
    $square += $min;
    // echo $square . " min: " . $min . "<br />";
    $sumsquare += $square;
}

echo $sumsquare;

?>