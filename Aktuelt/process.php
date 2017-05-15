<?php

$db_port = 3306;
$db_username = "root";
$db_password = "root";
$db_name = "hauale16_webprosjekt";
$db_host = "localhost";


$username = $_POST['username'];
$password = $_POST['password'];

// Sjekker at brukeren har skrevet inn et brukernavn  
if(!$username) {
    echo "Du må skrive inn et brukernavn.";
}

// Sjekker at brukeren har skrevet inn et passord 
if(!$password) {
    echo "Du må skrive inn et passord.";
}

// Forsøk å koble til databasen for å sjekke brukeren
try {

    $connection = new PDO("mysql:host={$db_host};dbname={$db_name};port={$db_port};charset=utf8", $db_username, $db_password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $data = $connection->prepare("SELECT * FROM loggin_server WHERE username = :username AND password = :password");
    $data->execute( array(
        ':username' => $username,
        ':password' => $password 
        )
    );

    $count = $data->rowCount();

    if( $count === 1) {
        // Sett brukeren i session
        session_start();
        $_SESSION['username']= $username;
        header( 'Location: /aktuelt' ) ;

    }

    else {
        echo "Feil brukernavn eller passord.";
    }

}
// Dersom det skjer en feil med databasetilkoblingen
// Gi en feilmelding. 
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


    
?>