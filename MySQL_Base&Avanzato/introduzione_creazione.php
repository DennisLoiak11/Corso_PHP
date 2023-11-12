<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "connection.php";?>
    
<?php

//CREARE NUOVO DATABASE

// $db_3 = "CREATE DATABASE dennis3_db";
// if($connection->query($db_3) == TRUE){
//     echo "New db created!";
// }else{
//     echo "Error creating db".$connection->error;
// }

// $connection->close();



//CREARE NUOVA TABELLA

// $table = "CREATE TABLE testDennis (
//     id INT(9),
//     name VARCHAR(255),
//     surname VARCHAR(100)
// );";

// if($connection->query($table) == TRUE){
//     echo "New table created!";
// }else{
//     echo "Error creating db".$connection->error;
// }


//INSERIRE DATI NELLA TABELLA

// $data = "INSERT INTO test(id, name, surname, work) 
// VALUES(2, 'Francesco', 'Totti', 'Footballer'),
// (3, 'Daniele', 'De Rossi', 'Footballer')
// ";

// if($connection->query($data) == TRUE){
//     echo "New records added!";
// }else{
//     echo "Error creating db".$connection->error;
// }


//OPERAZIONI SQL - "SELECT"
// $sql_op = "SELECT * FROM test";
// $response = $connection->query($sql_op);

// if ($response->num_rows > 0) {
//     while($row = $response->fetch_assoc()){
//         echo "id: ".$row["id"]." - name: ".$row["name"]." - surname: ".$row["surname"]." - work: ".$row["work"]."<br>";
//     }
// }else{
//     echo "No result";
// }


//OPERAZIONI SQL - "UPDATE"
// $sql_op = "UPDATE test SET surname = 'Marzano' WHERE name = 'Francesco';";
// $response = $connection->query($sql_op);

// if($connection->query($sql_op) == TRUE){
//     echo "Table updated!";
// }else{
//     echo "Error creating db".$connection->error;
// }


// //OPERAZIONI SQL - "DELETE"
// $sql_op = "DELETE FROM test WHERE surname = 'De Biasi';";
// $response = $connection->query($sql_op);

// if($connection->query($sql_op) == TRUE){
//     echo "Record delete!";
// }else{
//     echo "Error".$connection->error;
// }


//OPERAZIONI SQL - "ALTER DROP"
// $sql_op = "ALTER TABLE test DROP COLUMN age;";

// if($connection->query($sql_op) == TRUE){
//     echo "Column delete!";
// }else{
//     echo "Error".$connection->error;
// }


// //OPERAZIONI SQL - "ORDER"

$sql_op = "SELECT * FROM test ORDER BY surname ASC;";
$response = $connection->query($sql_op);

if ($response->num_rows > 0) {
    while($row = $response->fetch_assoc()){
        echo "id: ".$row["id"]." - name: ".$row["name"]." - surname: ".$row["surname"]." - work: ".$row["work"]."<br>";
    }
}else{
    echo "No result";
}

?>

<?php include "close_conn.php";?>

</body>
</html>