<?php

$connection = new mysqli("localhost", "root", "", "dennis_db");

if($connection -> connect_error){
    die("Connessione fallita: ".$connection->connect_error);
}

?>