<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Virtual Reality</title>

    <link href="CSS/stylesheet_vr.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="Bilder/Logo/westerdals-logo.png">

</head>

<body>

    <?php require'header.php';?>

    <!-- contents of the page -->
    <div id="container">

        <!-- Change to your specific campus -->
        <h1 id="overskrift">
            Virtual Reality
        </h1>
        <!-- Kopier her -->

        <div class="slidebilder">
            <img class="mySlides" src="Bilder/VR/slide-img-1.jpg" style="width:100%">
            <img class="mySlides" src="Bilder/VR/slide-img-2.jpg" style="width:100%">
            <img class="mySlides" src="Bilder/VR/slide-img-3.jpg" style="width:100%">
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
                setTimeout(carousel, 3000);
            }

        </script>



        <div id="forsidelinje2"></div>

        <!-- First "content" wrapper -->
        <div id="wrap1">

            <!-- change the picture and text to what you want -->
            <div id="bildewrap1">
                <img id="bilde1" src="Bilder/VR/img-1.jpg">
            </div>
            <div id="tekstwrap1">
                <p>Som student hos Westerdals Oslo ACT, vil du ha muligheten til å spille på optimaliserte gaming-datamaskiner på Campus Brenneriet. Her kan du bli kjent med nye mennesker fra forskjellige linjer, og ikke minst, få muligheten til å bygge ditt eget nettverk blant likesinnede. Campus Brenneriet har også populære VR-Headset, som Oculus Rift og HTC Vive. Vi har dedikerte rom til gaming og spillutvikling, og i tillegg til dette, et eget "green screen"-rom.</p>

                <p>Dette tilbudet passer perfekt for studenter som elsker å spille spill, eller som har en lidenskap for spillprosjekter. Vi har alt av relevant, og nødvendig programvare elevene trenger. Om du liker VR-Spill, vil du ha muligheten til å ta Virtual Reality som et eget Valgemne. Hvis dette virker interessant, er du hjertelig velkommen innom, for å ta en titt! </p>
            </div>
        </div>

        <!-- line between each section of content -->
        <div id="forsidelinje1"></div>

        <!-- Second "content" wrapper -->
        <div id="wrap2">

            <!-- change the picture and text to what you want -->
            <div id="tekstwrap2">
                <p>
                    Vi på Campus Brenneriet prøver aktivt å få flere studenter hos oss. Vi blir ofte kalt for "spill-hovedstaden" av Westerdals Oslo Act. Vi har opp til 15 kraftig datamaskiner som du og dine medstudenter kan komme og spille på. Her vil du ha muligheten til å spille spill som studenter har laget, eller dine favorittspill. Campus Brenneriet tilbyr deg også de nyeste Virtual Reality-produktene i markedet. Vi har tre Oculus Rift-headset, og tre HTC Vive-headset. Vi kjøper med glede flere, dersom etterspørselen skulle kreve dette.</p>

                <p>Vi har programvare som Unity installert på alle PC-ene våre. Dette gir deg og dine medstudenter mulighetet til å produsere deres egne spill. Campus Brenneriet er ikke reservert for spillenteresserte studenter. Vi har to dedikerte klipperom til våre film-elver, åpne til alle som ønsker å redigere film og opptak.</p>

            </div>

            <div id="bildewrap2">
                <iframe width="480" height="315" src="https://www.youtube.com/embed/mHH-DBMbDW0" frameborder="0" allowfullscreen></iframe>
            </div>

        </div>

        <?php require'footer.php';?>

    </div>
</body>

</html>
