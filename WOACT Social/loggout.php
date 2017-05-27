<?php 
session_start(); 

// 
session_unset(); 

// destroy the session 
session_destroy(); 

header( "refresh:0;url=Aktuelt.php" );

?>

<h2>Du er logget ut.</h2>
<p>Vi tar deg til forsiden.</p>
<ul>
    <li><a href="Aktuelt.php">Tilbake til forsiden</a></li>
</ul>
