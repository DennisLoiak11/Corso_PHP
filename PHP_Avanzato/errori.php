<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function division($x, $y){
    if ($y == 0) {
        throw new Exception("Division ERROR");
    } 
    return $x / $y;
}

try {
    echo division(5, 0);
} catch(Exception $e) {
    echo 'Division by zero is not possible. ';
} finally{
    echo "Change the divisor.";
}

?>

</body>
</html>