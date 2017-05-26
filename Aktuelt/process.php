<?php

$db_port = 3306;
$db_username = "hauale16_anwarz";
$db_password = "webprosjekt123";
$db_name = "hauale16_webprosjekt";
$db_host = "tek.westerdals.no";


$username = $_POST['username'];
$password = $_POST['password'];
$firstname;
$surname;

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

    $data = $connection->prepare("SELECT * FROM login_server LEFT JOIN login_id ON login_server.id = login_id.user_id WHERE username = :username AND password = :password");
    $data->execute( array(
        ':username' => $username,
        ':password' => $password,
        'Fornavn' => $firstname,
        'Etternavn' => $surname
        )
    );

    $count = $data->rowCount();

    if( $count === 1) {
        // Sett brukeren i session
        session_start();
        $_SESSION['username']= $username;
        $_SESSION['firstname'] = $firstname;
        $_SESSION['surname'] = $surname;
        header( 'Location: Aktuelt.php' ) ;

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
