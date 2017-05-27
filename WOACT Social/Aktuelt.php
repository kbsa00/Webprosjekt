<?php 

session_start(); 
$username = $_SESSION['username']; 
$firstname = $_SESSION['firstname'];
$surname = $_SESSION['surname'];

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aktuelt </title>

    <link href="CSS/stylesheet_aktuelt.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="Bilder/Logo/westerdals-logo.png">


</head>

<body>

    <?php require'header.php';?>

    <!-- contents of the page -->
    <div id="container">

        <!-- Change to your specific campus -->
        <h1 id="overskrift">
            Aktuelt
        </h1>
        <!-- Kopier her -->

        <div class="slidebilder">
            <img class="mySlides" src="Bilder/Aktuelt/Aktuelt1.jpeg" style="width:100%" height="100%">
            <img class="mySlides" src="Bilder/Aktuelt/Aktuelt2.jpeg" style="width:100%" height="100%">
            <img class="mySlides" src="Bilder/Aktuelt/Aktuelt3.jpg" style="width:100%" height="100%">
            <img class="mySlides" src="Bilder/Aktuelt/Aktuelt4.jpeg" style="width:100%" height="100%">

        </div>


        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {
                    myIndex = 1
                }
                x[myIndex - 1].style.display = "block";
                setTimeout(carousel, 5000);
            }

        </script>

        <div id="forsidelinje2"></div>

        <!-- First "content" wrapper -->
        <div id="wrap1">

            <!-- change the picture and text to what you want -->
            <div id="bildewrap1">
                <img id="bilde1" src="Bilder/Aktuelt/Biliotek%20Aktuelt.jpeg">
            </div>
            <div id="tekstwrap1">
                <p> Westerdals er en skole hvor ting alltid skjer. Vi har vår egen festkomite som lager storfester hvor vi har forskjellig festtemaer som, Afterski, Halloween, Karneval og mange flere. Ikke minst har vi en Student Bar i Campus Fjerdingen hvor vi Studenter har muligheten til å komme å drikke alkohol til en billig studentpris. <br><br>Westerdals er en stor skole med studenter, som studerer forskjellige studielinjer og du vil alltid ha muligheten til å bli kjent med nye mennesker og ikke minst få bygget ditt nettverk. For folk som har lyst til å drikke billig alkohol og liker å synge karaoke så har Westerdals Studentene mulighet til dette hos Syng Bar, som ligger bare noen få minutter fra skolen. Hos oss WOACT Social vil du ha muligheten til og aktivt være med å arrangere fester, og ikke minst få med deg de store festene festkomiteen arrangerer.
                </p>

            </div>

        </div>


        <!-- line between each section of content -->
        <div id="forsidelinje1"></div>

        <!-- Second "content" wrapper -->
        <div id="wrap2">

            <!-- change the picture and text to what you want -->
            <div id="tekstwrap2">
                <p>
                    Her på Westerdals Oslo Act så er det alltid noe som skjer. Hver uke har vi arrangementer laget av studenter for studenter. Studentsamfunnet arrangerer fester og konkurranser for studenter. <br><br>Vi på WOACT Social har har gjort det lettere for studenter å få med seg de alle kommende eventer som foregår på alle Campuser.Alt fra Workshops til konkurranser og store fester. WOACT Social prøver aktivt å få lage nye arrangementer og aktiviteter for dere. Vil du ha muligheten til å få med deg alt som skjer? Logger deg inn under siden!

                </p>

            </div>

            <div id="bilde6wrap2">
                <img id="bilde2" src="Bilder/Aktuelt/Kreativ%20aktuelt.jpg">
            </div>

        </div>

        <div id="forsidelinje3"></div>


        <div id="login-event">
            <h2>Hva skjer?</h2>


            <?php if($username): ?>
            <!--  Brukeren er logget inn -->

            <p>Du er logget inn som ->
                <?php echo $firstname . " " . $surname . " (" .  $username . ") " ?> </p>

            <form action="loggout.php">
                <input id="logoutbtn" type="submit" value="Logg ut" />
            </form>

            <div id="events">
                <img class="eventBilder" src="Bilder/Aktuelt/Fiksefest.png">
                <img class="eventBilder" src="Bilder/Aktuelt/Sommerfest.png">
                <img class="eventBilder" src="Bilder/Aktuelt/Tedtalks.png">
            </div>

            <?php else: ?>
            <!--  Brukeren er ikke logget inn -->

            <h3>Her kan du logge inn for å se kommende eventer rundt campus</h3>
            <form action="login.php">
                <input id="loginbtn" type="submit" value="Logg inn" />
            </form>
            <img id="eventimg" src="Bilder/Aktuelt/EventsBilde.jpg">


            <?php endif;  ?>
        </div>

        <?php require'footer.php';?>

    </div>



</body>

</html>
