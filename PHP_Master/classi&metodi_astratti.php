<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

abstract class users{
    public $name;
    public $surname;
    public $age;

    public function __construct($name){
        $this->name = $name;
    }

    abstract function start() : string;
}

class Person extends users{
    public function start() : string{
        return 'My name is '.$this->name;
    }
}

$dennis = new Person("Dennis");
echo $dennis->start()."<br>";

$totti = new Person("Totti");
echo $totti->start();

?>
    
</body>
</html>