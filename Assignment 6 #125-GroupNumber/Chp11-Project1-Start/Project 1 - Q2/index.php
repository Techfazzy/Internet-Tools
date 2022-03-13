<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Chapter 11</title>         
   <link rel="stylesheet" href=".\css\styles.css">   
</head>
<body>
<main>

<?php

include 'rainbowIterator.php';

$red=0; 
$green=0;
$blue=0;
$top = 40;
$s = "px";
echo "<h1>Using iterator: $iterator </h1>";


for ($red = 0; $red <= 255; $red+=$iterator) {
    $top += $iterator; 
    echo "<div style =' position: absolute;
    top: $top$s;
    left: $red$s;z-index: $red;'>";
    for ($green = 0; $green <= 255; $green+=$iterator) {
        for ($blue = 0; $blue <= 255; $blue+=$iterator) {
            $a = sprintf('%02x', $red);
            $b = sprintf('%02x', $green);
            $c = sprintf('%02x', $blue);
            echo " <span style='background-color:
            rgb( $red,$green,$blue)' title='#$a$b$c'></span> ";
        }
        
    }
    echo "</div>";
}

?>
</main>
</body>
</html>    