<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Makerspace</title>

        <link href="CSS/stylesheet_ms.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="BILDER/Logo/westerdals-logo.png">

    </head>

    <body>

    <?php require'header.php';?>

        <!-- contents of the page -->
        <div id="container">

            <!-- Change to your specific campus -->
            <h1 id="overskrift">
                Makerspace
            </h1>
            <!-- Kopier her -->

            <div class="slidebilder">
                <img class="mySlides" src="BILDER/MS/slide-img-1.jpg" style="width:100%">
                <img class="mySlides" src="BILDER/MS/slide-img-2.jpg" style="width:100%">
                <img class="mySlides" src="BILDER/MS/slide-img-3.jpg" style="width:100%">
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
                    if (myIndex > x.length) {myIndex = 1}    
                    x[myIndex-1].style.display = "block";  
                    setTimeout(carousel, 3000); 
                }
                
            </script>
        
            

            <div id="forsidelinje2"></div>

            <!-- First "content" wrapper -->
            <div id="wrap1">

                <!-- change the picture and text to what you want -->
                <div id="bildewrap1">
                    <img id="bilde1" src="BILDER/MS/img-1.jpg">
                </div>
                <div id="tekstwrap1">
                    <p>Vi på Westerdals er stolte over å presentere dere for vår egen lille MakerSpace rom hvor studenter kan komme innom og jobbe med sine egne/gruppe prosjekter. WOACT Social arrangerer ofte MakerSpace eventer som, 3D-printing, Dronebygging og mange flere. Vi ønsker å stimulere til kompetanseutvikling, nettverksbygging, samt et større fokus på gjenbruk og modifisering av forbrukerprodukter ikke minst vil studentene ha mulighet til å bygge sitt eget nettverk. Det er kun 5-8 MakerSpace i Oslo og vår MakerSpace er åpen for alle. Man vil ikke trenge å være student for å oppleve vår flotte lille MakerSpace.</p>
                    
                    <p> om dere har noen morsomme eller kule ideer om eventer vi burde lage så er det bare å sende oss en melding.</p></div>
            </div>
            
            <!-- line between each section of content -->
            <div id="forsidelinje1"></div>

            <!-- Second "content" wrapper -->
            <div id="wrap2">

                <!-- change the picture and text to what you want -->
                <div id="tekstwrap2">
                    <p>
                        Vår Makerspace vokser hver dag. Vi kjøper inn nye verktøy som våre Studenter kan ha seg godt av. Vi er stolte av å eie vår egen 3D-printer, som studenter har mulighet til å prøve ut. Vi jobber aktivt med å bygge og kjøpe inn mer verktøy. Studentene har vært med å forme Makerspace til det den er i dag. Makerspace ønsker å være et lavterskel møtested med mange forskjellige aktiviteter og workshops.</p>
                    
                        <p>Er du en person som elsker å fikse på ting. Eller kanskje har en kul ide som dere vil bygge på? Ta gjerne kontakt med oss på WOACT Social og vi vil ordne slik at dere vil få tilgang. Vi holder interessante arrangementer hver uke. Om du har interesse for dette så er det bare å logge seg inn på aktuelt og sjekke alle disse arrangementer Makerspace holder. Klikk <a href="Aktuelt.php"><u>her</u></a></p>
                    
                </div>

                <div id="bildewrap2">
                    <img id="bilde2" src="BILDER/MS/img-2.jpg">
                </div>

            </div>

            <?php require'footer.php';?>
            
    </div>
</body>
</html>