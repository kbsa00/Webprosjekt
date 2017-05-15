<?php 

session_start(); 
$user = $_SESSION['username']; 

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

    <link href="CSS/Aktuelt.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


</head>

<body>

    <!-- header html code, don't mess with this -->
    <div id="header">

        <img id="logo" src="Bilder/wdals.png">
        <img class="hexagons" id="hexagon" src="Bilder/17619338_10210736187733678_641845115_n.png">
        <img class="hexagons" id="hexagon1" src="Bilder/17619338_10210736187733678_641845115_n.png">
        <img class="hexagons" id="hexagon2" src="Bilder/17619338_10210736187733678_641845115_n.png">
        <img class="hexagons" id="hexagon3" src="Bilder/17619338_10210736187733678_641845115_n.png">
        <img class="hexagons" id="hexagon4" src="Bilder/17619338_10210736187733678_641845115_n.png">

        <a href="https://www.facebook.com/westerdalsosloact/" target="_blank"><img id="fb" src="Bilder/fb.png"></a>
        <a href="https://twitter.com/westerdalsact" target="_blank"><img id="tw" src="Bilder/twitter_icon-aa3c1f5542de27e4810b43c5af1c756f.png"></a>
        <a href="https://www.instagram.com/westerdalsact/" target="_blank"><img id="ig" src="Bilder/circle-social-instagram-512.png"></a>
        <a href=""><img id="sc" src="Bilder/SnapChat_Rounded_icon-icons.com_61574.png"></a>
        <div class="menylinjer" id="menylinje1"></div>
        <div class="menylinjer" id="menylinje2"></div>

    </div>


    <!-- contents of the page -->
    <div id="container">

        <!-- Change to your specific campus -->
        <h1 id="overskrift">
            Aktuelt
        </h1>
        <!-- Kopier her -->

        <div class="slidebilder">
            <img class="mySlides" src="Bilder/Aktuelt1.jpeg" style="width:100%" height="100%">
            <img class="mySlides" src="Bilder/Aktuelt2.jpeg" style="width:100%" height="100%">
            <img class="mySlides" src="Bilder/Aktuelt3.jpg" style="width:100%" height="100%">
            <img class="mySlides" src="Bilder/Aktuelt4.jpeg" style="width:100%" height="100%">

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
                <img id="bilde1" src="Bilder/Biliotek%20Aktuelt.jpeg">
            </div>
            <div id="tekstwrap1">
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>

            <div id="bildewrap2">
                <img id="bilde2" src="Bilder/Kreativ%20aktuelt.jpg">
            </div>

        </div>

        <div id="innlogging">

            <div>
                <h2>Events</h2>
            </div>

            <?php if($user): ?>
                <!--  Brukeren er logget inn --> 

                <h2>Innlogget! :D <?php echo $user ?></h2>
                <a href="loggout.php">Logg ut!</a>

            <?php else: ?>
                <!--  Brukeren er ikke logget inn --> 

                <h3>Logg inn for se alle eventer!</h3>

                <a href="login.php">Logg inn</a>


            <?php endif;  ?>


        </div>

        <!-- footer -->
        <div id="footer">
            <img id="wdalslogo" src="Bilder/Logo-Westerdals-hvit.png">
            <p>Har du noen kule tips? Gjerne Kontakt oss:</p>
            <li>Telefon: 22 05 75 50</li>
            <li>Epost: post@westerdals.no</li>
        </div>
    </div>



</body>

</html>