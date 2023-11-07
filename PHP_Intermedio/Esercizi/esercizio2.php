<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
        //ESERCIZIO 2
        echo " Esercizio 2 "."<br>";

        $list = array(
            array("Dennis", 20),
            array("Ilaria", 4),
            array("Simona", 4)
        );
    
        echo $list[0][0]." is ".$list[0][1]." years old"."<br>";
        echo $list[1][0]." is ".$list[1][1]." years old"."<br>";
        echo $list[2][0]." is ".$list[2][1]." years old"."<br>";
    
    ?>
</body>
</html>