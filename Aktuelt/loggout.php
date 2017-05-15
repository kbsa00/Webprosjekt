<?php 
session_start(); 

// 
session_unset(); 

// destroy the session 
session_destroy(); 

header( "refresh:5;url=index.php" );

?>

<h2>Du er logget ut.</h2>
<p>Vi tar deg til forsiden om ca 5 sekunder.</p>
<ul>
	<li><a href="index.php">Tilbake til forsiden</a></li>
</ul>