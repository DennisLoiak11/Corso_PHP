<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$x = "<h2>Hello Word</h2>";
$x_san = filter_var($x, FILTER_SANITIZE_STRING); //elimino dalla stringa i tag html 
echo $x."<br>";
echo $x_san;

?>

</body>
</html>