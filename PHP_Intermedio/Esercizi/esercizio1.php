<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

//PRIMO ESERCIZIO
<?php

$x = 3;
$y = 4;

$z = 6;
$w = 5;

$a = $x*$y;
echo $a."<br>";

$b = $z*$w;
echo $b."<br>";

function somma(){
    global $a, $b;
    return $a + $b;
}
echo somma()."<br>";

?>


</body>
</html>