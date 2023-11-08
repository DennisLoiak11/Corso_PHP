<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

class users{
    public static $name = "Dennis";
    public static function start(){
        echo "This is a static method's result<br>";
    }
}

users::start(); //richiamo la funzione


//INSERIRE IL METODO STATICO NELL'ESTENSIONE DELLA CLASSE
class Dennis extends users {
    public $open;
    public function __construct() {
        $this->open = parent::start(); //"parent" è l'attributo necessario per richiamare il metodo statico
    }
}

$dennis = new Dennis;
echo $dennis -> open; // output: "This is a static method's result"

echo users::$name; // output: "Dennis"

?>
    
</body>
</html>