<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$y = date("Y"). " Current Year". "<br>";
echo $y;

if($y > 2000){
    echo "Anno superiore al 2000";
}else if($y = 2000){
    echo "Ti trovi nell'anno 2000";
}else{
    echo "Anno inferiore al 2000";
}

?>

</body>
</html>