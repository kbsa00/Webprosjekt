<?php

$port = 3306;
$username = "hauale16_anwarz";
$password = "webprosjekt123";
$name = "hauale16_webprosjekt";
$host = "tek.westerdals.no";

$connection = new PDO("mysql:host={$host};dbname={$name};port={$port};charset=utf8", $username, $password);
        
$statement = $connection->prepare('SELECT * FROM login_server');


while($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $row;
}

echo $users['password'];

if (($row['username'] == $_POST['user']) && ($row['password'] == $_POST['pass'])) {
    echo "login success!!!";
} else {
    echo "failed to login!";
}
    
    
?>

