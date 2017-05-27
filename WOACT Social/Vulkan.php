<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Campus Vulkan</title>
    
<link href="CSS/stylesheet_vulkan.css" rel="stylesheet" type="text/css">
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
        Campus Vulkan
    </h1>
    
    <!-- First "content" wrapper -->
    <div id="wrap1">
    
        <!-- change the picture and text to what you want -->
        <div id="bildewrap1">
            <img id="bilde1" src="Bilder/Vulkan/img-1.jpg">
        </div>
        <div id="tekstwrap1">
            <p>
                På Campus Vulkan kan du slippe kreativiteten løs. Her møter du elever fra både kunst, film, TV, spill og skuespillerlinjer. Nærmiljøet myldrer av liv, kaféer, restauranter og aktivitet, blant annet i Kubaparken, som ligger helt inntil skolen. Campus Vulkan ligger helt øverst i Vulkanpromenaden, inntil den vakre Akerselven. Følger du elven nedover, finner du shopping, mat og kulturliv. Mathalleln og Vulkan Arena er populære møteplasser blant elever ved skolen. Se kartet nederst på siden for å finne flere aktuelle aktiviteter og tilbud i umiddelbar nærhet. Velkommen til Vulkan!
            </p>
            <p>
                Som student ved Westerdals, kan du oppdage, og være med på arrangementer ved Campus Vulkan nesten hver uke. Vil du bli med på spillkveld, bokklubb, utstilling, eller bare ta en halvliter i baren? Klikk <a href=Aktuelt.php><u>her</u></a> for å se hva som skjer på Vulkan!
            </p>
        </div>
        
    </div>
    
    
    <!-- line between each section of content -->
    <div id="forsidelinje1"></div>
    
    
    
    <!-- Second "content" wrapper -->
    <div id="wrap2">
    
        <!-- change the picture and text to what you want -->
        <div id="tekstwrap2">
            <h2 id="underoverskrift">Vi har alt på Vulkan!</h2>
            <p>
                Campus Vuklan åpnet dørene høsten 2011, og huser en rekke fasiliteter og områder, som er til stor nytte for elevene. Det nye bygget, som står som en port inn til Vulkan, tilbyr elevene spesialrom for relevante studieretninger. Skuespillerlinjen har fått en hel fløy av fjerdeetasje, dedikert til blackbox. Flere av studiene, som film, TV og spill, har et spesialrom med både hvit, svart og grønn bakgrunn, et såkalt "greenscreen-rom".
            </p>
            <p>
                Studentene har god plass til å arbeide, og et fint auditorium for forelesninger og fremføringer. Kantinen er bemannet av OsloKantine, og ved siden av, finner vi et litt spesielt tilbud. Ved Campus Vulkan har vi et "Gamebrary", et spillbibliotek som i tillegg til bøker, også leier ut flere slag av konsoller, spill, og masse mer! Interressert i å finne ut mer om dette tilbudet? Besøk skolens "gamebrarian", og slipp deg løs.
            </p>
        </div>
        
        <div id="bildewrap2">
            <img id="bilde2" src="Bilder/Vulkan/img-2.jpg">
        </div>
        
        
    </div>
    
    <!-- line between each section of content -->
    <div id="forsidelinje2"></div>
    
    <div id="kartboks">
    <h2 id=kartoverskrift>
        Utkikk etter noe å spise?
    </h2>
    <p id="karttekst">
        Befinner du deg på Campus Vulkan, og vil vite hva nærområdet har å tilby? Ny i Oslo? Fortvil ikke, Vi har samlet alt fra Caféer, treningssentre, restauranter og hurtigmat. En av det beste tingene ved å studere på Campus Vulkan, er at du området har gode, varierte tilbud, som burde dekke de fleste behov.
        Du vil finne alt du trenger i kartet.
    </p>
    <p id=karttekst2>
        Trykk på ikonene for å få mer informasjon.
    </p>
    </div>
    
    <!-- the style portion of the map should not be changed, keep it as is -->
    <div id="map" style="border: 3px solid black; margin-top: 50px; width: 1000px; margin-left: auto; margin-right: auto; height: 400px; margin-bottom: 50px;"></div>
    
    <?php require'footer.php';?>

</div>    

<!-- change to your own googlemaps code -->
<script type="text/javascript">
//Her skriver du inn navn,longitude og latitude, bilder i URL.  
      var locations = [
      ['Campus Fjerdingen', 59.916107,10.759980, 4, 
       {url:'Bilder/Hexagon/Fjerdingen.png',
        scaledSize : new google.maps.Size(70, 70)} ],
      ['Campus Vulkan', 59.923353, 10.75236, 5,  
       {url:'Bilder/Hexagon/Vulkan.png',
        scaledSize : new google.maps.Size(70, 70)}],
      ['Campus Brenneriet', 59.920298, 10.752712, 3,  
       {url:'Bilder/Hexagon/Brenneriveien.png',
        scaledSize : new google.maps.Size(70, 70)}],
          //Puber ved Vulkan
    ['Vulkan Pub', 59.922466,10.751214, 4, 
       {url:'Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Bar Vulkan', 59.922903,10.752408, 4, 
       {url:'Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Hendrix Ibsen', 59.921941,10.751380, 4, 
       {url:'Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Søvnløs Bar', 59.921740,10.751605, 4, 
       {url:'Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Fyrhuset Kuba', 59.923606,10.751839, 4, 
       {url:'Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Smelteverket', 59.922374,10.752352, 4, 
       {url:'Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          
          //Trening ved Vulkan
          ['SiO Athletica', 59.923145,10.752196, 4, 
       {url:'Bilder/GoogleMaps/dumbbell.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Vulkan Klatresenter', 59.922945,10.751958, 4, 
       {url:'Bilder/GoogleMaps/dumbbell.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          
          //Mat ved Vulkan
          ['La Crêpe', 59.922576,10.751644, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Lucky Bird', 59.922602,10.752003, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Restaurant Kontrast', 59.922468,10.751032, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Handwerk', 59.922396,10.750694, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Ristorante Ferro', 59.922291,10.751225, 4, 
       {url:'Bilder/GoogleMaps/pizza.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Døgnvill Burger Vulkan', 59.921710,10.751665, 4, 
       {url:'Bilder/GoogleMaps/food.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['PARADIS Gelateria', 59.922014,10.752086, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Tacos El Brujo', 59.922069,10.752223, 4, 
       {url:'Bilder/GoogleMaps/food.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Noodles Vulkan', 59.922028,19.752331, 4, 
       {url:'Bilder/GoogleMaps/food.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Atelier Asian Tapas', 59.922232,10.751923, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Mathallen Oslo', 59.922220,10.752003, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Hitchhiker', 59.922279,10.751998, 4, 
       {url:'Bilder/GoogleMaps/food.png',
        scaledSize : new google.maps.Size(40, 40)} ],
          ['Champagneria Bodega', 59.922442,10.752288, 4, 
       {url:'Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ]
    ];
      //Map Størrelse, ZOOM eller center: Hvor du vil sirka kartet ska spawne når du åpner siden.
    var map = new google.maps.Map(
        document.getElementById('map'), 
        {
      zoom: 17,
      scrollwheel: false,
      center: new google.maps.LatLng(59.922945,10.751958),
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
        url:'Vulkan.png',
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