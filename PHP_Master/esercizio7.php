<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class people{
    public $name;
    public $surname;
    public $age;

    function __construct($name, $surname, $age){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
}

$dennis = new People("Dennis", "De Biasi", 20);
echo "Name: ".$dennis->name."<br>Surname: ".$dennis->surname."<br>Age: ".$dennis->age;

?>
    
</body>
</html>