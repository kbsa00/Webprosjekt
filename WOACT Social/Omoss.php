<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Om oss</title>
    
<link href="CSS/stylesheet_omoss.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="Bilder/Logo/westerdals-logo.png">
    
<!-- don't forget to change to your specific source here -->
<script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
    
</head>
    
<body>
    
    <?php require'header.php';?>
    
<!-- contents of the page -->
<div id="container">
    
    <!-- Change to your specific campus -->
    <h1 id="overskrift">
        Om oss
    </h1>
    
    <!-- First "content" wrapper -->
    <div id="wrap">
    
        <!-- change the picture and text to what you want -->
        <div id="bildewrap">
            <img id="bilde1" src="Bilder/Contributors/img-1.jpg">
            <img id="bilde2" src="Bilder/Contributors/img-2.jpg">
            <img id="bilde3" src="Bilder/Contributors/img-3.jpg">
            <img id="bilde4" src="Bilder/Contributors/img-4.jpg">
            <img id="bilde5" src="Bilder/Contributors/img-5.jpg">
        </div>
        <div id="tekstwrap">
            <p id="tekst1">
                Navn: Fulin<br>Rolle: Design og Webutvikling<br>Bakgrunn: Java, HTML/CSS, C#.<br>Studielinje: Programmering 
            </p>
            <p id="tekst2">
                Navn: Tobias<br>Rolle: Webutvikling<br>Bakgrunn: Java, HTML/CSS.<br>Studielinje: E-Business  
            </p>
            <p id="tekst3">
                Navn: Khalid<br>Rolle: Hovedansvar og Webutvikling<br>Bakgrunn: Java, HTML/CSS, C# og JavaScript<br>Studielinje: Intelligente Systemer
            </p>
            <p id="tekst4">
                Navn: Aleksander<br>Rolle: Desing og Datbase funksjonalitet<br>Bakgrunn: Java, HTML/CSS, JavaScript og PHP<br>Studielinje: Interaktivt Design
            </p>
            <p id="tekst5">
                Navn: Sebastian<br>Rolle: Webutvikling<br>Bakgrunn: Java, HTML/CSS, JavaScript, og C#<br>Studielinje: Programmering
            </p>
        </div>
        
    </div>
    
    <?php require'footer.php';?>

</div>    
    
</body>
</html>