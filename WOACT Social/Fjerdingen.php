<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Campus Fjerdingen</title>
    
<link href="../CSS/stylesheet_fjerdingen.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="../BILDER/Logo/westerdals-logo.png">
    
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
       Campus Fjerdingen
    </h1>
    
    <!-- First "content" wrapper -->
    <div id="wrap1">
    
        <!-- change the picture and text to what you want -->
        <div id="bildewrap1">
            <img id="bilde1" src="../Bilder/Fjerdingen/img-1.jpg">
        </div>
        <div id="tekstwrap1">
            <p>
                Campus Fjerdingen er den nyeste skolebygget som ble ferdig høsten 2016. Skolen ligger på Christian Kroghs gate.
                
                Navnet "Fjerdingen" ble til da skolen mente at det var fint at Westerdals Oslo ACT, med vårt nye skolebygg, hadde anledning til å tilføre området noe positivt i form av et solid og slitesterkt navn, som samtidig bidrar til at Osloboere blir litt bedre kjent med byens lokalhistorie. Dermed ble Fjerdingen til. 

            </p>
            <p>
                Ved Campus Fjerdingen så tilbyr skolen med bar, kantine, bibliotek hvor du kan låne alt fra bøker til brettspill. Skolen tilbyr også makerspace, hvor det er 3D printere og andre kule utstyr som man kan teste ut og være kreative med.
                
            </p>
        </div>
        
    </div>
    
    
    <!-- line between each section of content -->
    <div id="forsidelinje1"></div>
    
    <!-- Second "content" wrapper -->
    <div id="wrap2">
        <h2 id="wrap2overskrift">Fjerdingens Gate</h2>
        <!-- change the picture and text to what you want -->
        <div id="tekstwrap2">
            <p> Gaten har faktisk eksistert siden midten av 1600-tallet. Da het den         Fjerdingens gate, fordi den løp gjennom området nord for Vaterland som       da ble kalt Fjerdingen.
                
                Fjerdingen utgjorde, i likhet med Vaterland lenger nede, en forstad til Christiania, og strakk seg langs elva helt ned til Vaterlands bru. Strøket var blant de eldste forstedene, og karakteristisk med bebyggelse helt ned til elva. Dette var fattigstrøk, og ikke overraskende ble det anlagt hele to fattighus her i 1807.
            </p>
            <p>
                Blant industrielle minnesmerker står fortsatt Brødrene Ottesens Dampchokoladefabrikk i Nedre Vaskegang 2. Navnet er så vidt leselig i fasaden ut mot elva. Bygget er tegnet av arkitektene Ekman og Smith, som også tegnet det karakteristiske Indigo-bygget tilpasset svingen i elva litt lenger opp.
                
                Campus Vulkan og lokalene i Brenneriveien har også navn som spiller på lokalhistorien, og dermed føyer campusnavnet Fjerdingen seg fint inn i den tradisjonen.
            </p>
        </div>
        
        <div id="bildewrap2">
            <img id="bilde2" src="../Bilder/Fjerdingen/img-2.jpeg">
        </div>
        
    </div>
    
    <!-- line between each section of content -->
    <div id="forsidelinje2"></div>
    
    <div id="kartboks">
    <h2 id=kartoverskrift>
        Utkikk etter noe å spise?
    </h2>
    <p id="karttekst">
        Er du på Campus Fjerdingen og vet ikke hva nærområdet har å tilby eller bare sulten på noe godt? fortvil ikke, Vi har samlet alt fra Cafeer, treningssenter Resturanter og fastFood. En av det beste tingene å studere på Campus Fjerdingen er at du vil alltid ha uendelig alternativer.
        Du vil finne alt du trenger i kartet.
    </p>
    <p id=karttekst2>
        Trykk på ikonene for å få mer informasjon.
    </p>
    </div>
    
    <!-- the style portion of the map should not be changed, keep it as is -->
    <div id="map" style="border: 3px solid black;margin-top: 50px; width: 1000px; margin-left: auto; margin-right: auto; height: 400px;"></div>
    
    <?php require'footer.php';?>

</div>    

<!-- change to your own googlemaps code -->
<script type="text/javascript">
//Her skriver du inn navn,longitude og latitude, bilder i URL.  
      var locations = [
      ['Campus Fjerdingen', 59.916107,10.759980, 1, 
       {url:'../Bilder/Hexagon/Fjerdingen.png',
        scaledSize : new google.maps.Size(100, 100)} ],
      ['Campus Vulkan', 59.923353, 10.75236, 2,  
       {url:'../Bilder/Hexagon/Vulkan.png',
        scaledSize : new google.maps.Size(70, 70)}],
      ['Campus Brenneriet', 59.920298, 10.752712, 3,  
       {url:'../Bilder/Hexagon/Brenneriveien.png',
        scaledSize : new google.maps.Size(70, 70)}],
      ['Efesos Tyrkisk AS', 59.916960, 10.755960, 4, 
       {url:'../Bilder/GoogleMaps/pizza.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Actic Treningssenter', 59.916180, 10.757616, 5, 
       {url:'../Bilder/GoogleMaps/dumbbell.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Tehran Kebab House Restaurant', 59.916096, 10.757911, 6, 
       {url:'../Bilder/GoogleMaps/pizza.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Haralds Gym', 59.915785, 10.758705, 7, 
       {url:'../Bilder/GoogleMaps/dumbbell.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Cafe Sara', 59.917625, 10.754184, 8,  
       {url:'../Bilder/GoogleMaps/kaffekopp.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Verkstedet', 59.917714, 10.753985, 9,  
       {url:'../Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Freddy Fuego Burrito Bar', 59.917816, 10.753846, 10,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Crowbar & Bryggeri', 59.917200, 10.753605, 11,  
       {url:'../Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Taco República', 59.917045, 10.753256, 12,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Zaffran mat og grill', 59.917055, 10.752617, 13,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Dalat Cafe Tran', 59.916821, 10.753621, 14,  
       {url:'../Bilder/GoogleMaps/kaffekopp.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Starbucks', 59.916200, 10.751976, 15,  
       {url:'../Bilder/GoogleMaps/kaffekopp.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Viet Nam House', 59.916035, 10.752409, 16,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Torggata Botaniske', 59.916093, 10.752163, 17,  
       {url:'../Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Munchies', 59.916264, 10.751552, 18,  
       {url:'../Bilder/GoogleMaps/food.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Arakataka', 59.916358, 10.750850, 19,  
       {url:'../Bilder/GoogleMaps/kaffekopp.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Meatballs', 59.917929, 10.753629, 20,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Wünderburger', 59.917371, 10.754201, 21,  
       {url:'../Bilder/GoogleMaps/food.png',
        scaledSize : new google.maps.Size(40, 40)}],
    ];
      //Map Størrelse, ZOOM eller center: Hvor du vil sirka kartet ska spawne når du åpner siden.
   var map = new google.maps.Map(
        document.getElementById('map'), 
        {
      zoom: 16,
      scrollwheel: false,
      center: new google.maps.LatLng(59.917243, 10.754016),
      mapTypeId: google.maps.MapTypeId.ROADMAP, 
 
//ALT INNEN FOR STYLES ER BARE KART THEME. DO NOT TOUCH! :) 
    styles:
        [
    {
        "featureType": "administrative",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": "50"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "30"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "40"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffff00"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -97
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "lightness": -25
            },
            {
                "saturation": -100
            }
        ]
    }
]    
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;
 //Metode for bildet
  var image = { 
        url:'../Bilder/Vulkan.png',
        scaledSize : new google.maps.Size(70, 70)
          };
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map, 
        icon: locations[i][4]     
      });
//Metode for Klikk på bildet. Ikke kødd med denne 
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>
    
</body>
</html>