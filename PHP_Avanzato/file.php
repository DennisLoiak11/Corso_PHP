<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

echo readfile("example.txt")."<br>"; //legge il file e basta

//echo fopen("example.txt", "r"); --> mi restituisce l'id della risorsa
//per leggere il file procediamo in questo modo:

$x = fopen("example.txt", "r"); //con "r" possiamo esclusivamente, 
                                //con "w" possiamo creare nuovi contenuti eliminando quelli già presenti, 
                                //con "a" possiamo aggiungere contenuti a quelli già presenti
echo fread($x, filesize("example.txt"))."<br>";
fclose($x);


//SOVRASCRIVERE FILE
$y = fopen("example2.txt", "w");
$z = "Francesco Totti";
fwrite($y, $z);
fclose($y); //aggiornando il browser apparirà tutto bianco ma il file txt verrà sovrascritto

//CREARE NUOVO FILE
$a = fopen("example3.txt", "w");
$b = "Daniele De Rossi";
fwrite($a, $b);
fclose($a); //aggiornando il browser apparirà tutto bianco ma il file example3.txt verrà creato

//AGGIUNGERE AL FILE
$a = fopen("example3.txt", "a"); //inserire la "funzione" -> a
$c = " Dybala";
fwrite($a, $c);
fclose($a); //aggiornando il browser apparirà tutto bianco ma il file example3.txt verrà modificato


?>

</body>
</html>