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
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

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
                <div id="tekst1">
                    <p>
                        <b>Navn: </b>Fulin Halvorsen<br><b>Rolle</b>: Design og Webutvikling<br><b>Bakgrunn</b>: Java, HTML/CSS og C#.<br><b>Studielinje: </b>Intelligente Systemer
                    </p>
                </div>
                <div id="tekst2">
                    <p>
                        <b>Navn: </b>Tobias Dybwad<br><b>Rolle: </b>Webutvikling<br><b>Bakgrunn: </b>Java, HTML/CSS.<br><b>Studielinje: </b> E-Business
                    </p>
                </div>
                <div id="tekst3">
                    <p>
                        <b>Navn: </b>Khalid B. Said<br><b>Rolle: </b> ProsjektLeder og Webutvikling<br><b>Bakgrunn</b> Java, HTML/CSS, C# og JavaScript<br><b>Studielinje: </b>: Intelligente Systemer
                    </p>
                </div>
                <div id="tekst4">
                    <p>
                        <b>Navn: </b>Aleksander Hauabakk-Anwar<br><b>Rolle: </b>Design, SQL og Database funksjonalitet<br><b>Bakgrunn: </b>Java, HTML/CSS, JavaScript og PHP<br><b>Studielinje: </b> Interaktivt Design
                    </p>
                </div>
                <div id="tekst5">
                    <p>
                        <b>Navn: </b> Sebastian Knutsen<br><b>Rolle: </b> Webutvikling<br><b>Bakgrunn: </b>Java, HTML/CSS, JavaScript, og C#<br><b>Studielinje: </b>Programmering
                    </p>
                </div>
            </div>

        </div>

        <?php require'footer.php';?>

    </div>

</body>

</html>
