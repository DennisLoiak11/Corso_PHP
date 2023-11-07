<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$a = fopen("esercizio5.php", "a");
$b = "ciao";
fwrite($a, $b);
fclose($a);

// $a = fopen("example3.txt", "a"); //inserire la "funzione" -> a
// $c = " Dybala";
// fwrite($a, $c);
// fclose($a); //aggiornando il browser apparirà tutto bianco ma il file example3.txt verrà modificato

?>

</body>
</html