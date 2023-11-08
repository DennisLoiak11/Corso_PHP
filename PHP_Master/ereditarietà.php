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

    public function __construct($name, $surname, $age){
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    protected function start(){
        echo "My name is: ".$this->name.", my surname is: ".$this->surname." and I'm ".$this->age." years old";
    }
}

class Dennis extends users{
    public function hello(){
        echo 'Hi, my name is Dennis!<br>';
        $this->start(); //la funzione start() è protected quindi funziona solo se richiamata nel metodo della classe che la estende
    }
}

$dennis = new Dennis("Dennis", "De Biasi", 20);//eredito gli attributi di "users"
//$dennis->start(); se la funzione start() fosse stata public avrebbe funzionato in questa posizione e sintassi
$dennis->hello();

?>

</body>
</html>