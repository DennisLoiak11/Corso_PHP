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

    function c_name($name){
        $this->name = $name;
    }

    function i_name(){
        return $this->name;
    }

    function c_surname($surname){
        $this->surname = $surname;
    }

    function i_surname(){
        return $this->surname;
    }

    function c_age($age){
        $this->age = $age;
    }

    function i_age(){
        return $this->age;
    }
}

    $dennis = new Users();
    $dennis->c_name("Dennis");
    $dennis->c_surname("De Biasi");
    $dennis->c_age(20);

    echo "Name: ".$dennis->i_name()."<br>Surname: ".$dennis->i_surname()."<br>Age: ".$dennis->i_age();
?>

</body>
</html>