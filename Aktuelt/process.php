<?php

$db_port = 3306;
$db_username = "hauale16_anwarz";
$db_password = "webprosjekt123";
$db_name = "hauale16_webprosjekt";
$db_host = "tek.westerdals.no";


try {
	$connection = new PDO("mysql:host={$db_host};dbname={$db_name};port={$db_port};charset=utf8", $db_username, $db_password);

    foreach($connection->query('SELECT * from loggin_server') as $row) {
        print_r($row);

    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>