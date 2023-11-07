<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
    echo date("d/m/Y")."<br>";
    echo date("h:i:sa")."<br>";
    echo date_default_timezone_set("America/Los_Angeles")."America - Los Angeles = ";
    echo date("h:i:sa")."<br>";
    echo date_default_timezone_set("Europe/Rome")."Italia - Roma = ";
    echo date("h:i:sa")."<br>";

    //impostare una data specifica da una stringa 
    echo "La mia data"."<br>";
    $x = strtotime("10:00pm 27 may 2003");
    echo date("d/m/Y h:i:sa", $x)
    ?>

</body>
</html>