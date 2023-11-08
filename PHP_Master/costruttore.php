<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

class users{
    public $name;
    public $surname;
    public $age;

function __construct($name, $surname, $age){
    $this->name = $name;
    $this->surname = $surname;
    $this->age = $age;
}

function i_name(){
    return $this->name;
}

function i_surname(){
    return $this->surname;
}

function i_age(){
    return $this->age;
}
}

$dennis = new Users("Dennis", "De Biasi", 20); 
echo "Name: ".$dennis->i_name()."<br>Surname: ".$dennis->i_surname()."<br>Age: ".$dennis->i_age();

?>

</body>
</html>