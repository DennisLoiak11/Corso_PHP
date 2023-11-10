<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$connection = new mysqli("localhost", "root", "", "dennis_db");

if($connection -> connect_error){
    die("Connessione fallita: ".$connection->connect_error);
}else{
    echo "Connession OK";
}

?>

</body>
</html>