<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$x = array("Dennis", "Ilaria", "Simona");
echo json_encode($x)."<br>"; //mi converte l'array in json

$y = array("Dennis"=>20, "Ilaria"=>4, "Simona"=>4);
echo json_encode($y)."<br>"; //mi converte l'array in json

//CONVERTIRE DA JSON AD ARRAY
$z = '{"Dennis":20,"Ilaria":4,"Simona":4}';
var_dump(json_decode($z, true)); //array(3) { ["Dennis"]=> int(20) ["Ilaria"]=> int(4) ["Simona"]=> int(4) }

//STAMPARE ARRAY COMPLETO
foreach ($y as $person => $age) {
    echo "<br>".$person.":".$age."<br>";
}

//ACCEDERE A UN VALORE SPECIFICO
$c = json_decode($z);
echo $c -> Dennis; //20




?>

</body>
</html>