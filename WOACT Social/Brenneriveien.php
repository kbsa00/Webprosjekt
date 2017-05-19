<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Campus Brenneriet</title>
    
<link href="../CSS/stylesheet_brenneriveien.css" rel="stylesheet" type="text/css">
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
        Campus Brenneriet
    </h1>
    
    <!-- First "content" wrapper -->
    <div id="wrap1">
    
        <!-- change the picture and text to what you want -->
        <div id="bildewrap1">
            <img id="bilde1" src="../BILDER/Brenneriveien/img-1.jpg">
        </div>
        <div id="tekstwrap1">
            <p>
                Vårt Campus på Brenneriet har mye å tilby til deg som er interessert i kunst, kultur og konserter. Ta en tur innom brenneriveien for å oppleve noe av den fineste gatekunsten, laget av kunstnere fra hele verden. Bare på en kort tur får du se fantastiske malerier både i øst og vest. På brenneriet kan du ikke bare se på gatekunsten, men frilansere viser også frem sin kunst på eget galleri om søndager. Dette kan du selv oppleve mellom klokken 13.00 og 15.00, hvor det også er åpent for salg.
            </p>
            <p>
                Brenneriveien er Oslos mest historiske kulturbydel. I dette området finnes også det velkjente søndagsmarkedet rett ved Akerselvas bredder. Dersom konserter er din greie kan du reise innom Blå og Ingensteds for å oppleve både nasjonale og internasjonale artister. Lenger nede kan du se ulike spisesteder og barer i nærheten.
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
                Brenneriet ligger kun et steinkast unna Campus Vulkan. Med bare noen få fottrinn kan du komme deg fra det flotte moderne Campus Vulkan, til det kulturrike Campus Brenneriet. Her befinner det seg studenter fra maske- og hårdesign, i tillegg til deler av avdeling for spill, film og TV. Fra nattens danseliv til dagens mer kunstneriske side, finner du definitivt noe for deg. På Campus finnes det green screen-rom, grov- og finverksted og klipperom.
            </p>
            <p>
                Campus har blitt fornyet med nytt gulv, vegger og nymalte undervisningsrom, hvor kun bærebjelkene står igjen. Dette er for å kunne la den sterke kulturen stå igjen i alle byggene langs Akerselvas industriarv. 
            </p>
        </div>
        
        <div id="bildewrap2">
            <img id="bilde2" src="../BILDER/Brenneriveien/img-2.jpg">
        </div>
        
    </div>
    
    <!-- line between each section of content -->
    <div id="forsidelinje2"></div>
    
    <div id="kartboks">
    <h2 id=kartoverskrift>
        Finn aktiviteter og spisesteder i nærområdet!
    </h2>
    <p id="karttekst">
        Vi har funnet frem mange spisesteder, barer og aktiviteter i nærheten av våre Campus.
    </p>
    <p id=karttekst2>
        Trykk på ikonene for å få mer informasjon.
    </p>
    </div>
    
    <!-- the style portion of the map should not be changed, keep it as is -->
    <div id="map" style="margin-top: 50px; width: 1000px; margin-left: auto; margin-right: auto; height: 400px;"></div>
    
    
    <?php require'footer.php';?>

</div>    

<!-- change to your own googlemaps code -->
<script type="text/javascript">
//Her skriver du inn navn,longitude og latitude, bilder i URL.  
      var locations = [
      ['Campus Brenneriet', 59.920054,10.7525318, 1,  
       {url:'../Bilder/Hexagon/Brenneriveien.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Campus Fjerdingen', 59.916107,10.759980, 2, 
       {url:'../Bilder/Hexagon/Fjerdingen.png',
        scaledSize : new google.maps.Size(70, 70)} ],
      ['Campus Vulkan', 59.923353, 10.75236, 3,  
       {url:'../Bilder/Hexagon/Vulkan.png',
        scaledSize : new google.maps.Size(70, 70)}],
      ['Blå', 59.9201164,10.7530501, 4, 
       {url:'../Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)} ],
      ['britt powers', 59.9204042,10.7526689, 5, 
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)} ],
      ['Kuma', 59.9203146,10.7529034, 6,  
       {url:'../Bilder/GoogleMaps/cart.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['X-Ray Ungdomskulturhus', 59.9200676,10.7521184, 7,  
       {url:'../Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Delhi Tandoori', 59.9196866,10.7513497, 8,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Taxi Take Away', 59.9194769,10.7512829, 9,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Today Grill & Pizza', 59.9193306,10.7509687, 10,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Gourmet Pizza Grill', 59.9193913,10.7506003, 11,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Orlandos Pub', 59.9194409,10.7502574, 12,  
       {url:'../Bilder/GoogleMaps/cocktail.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Filippa Sushi', 59.9195072,10.7496785, 13,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Grusomhetens Teater', 59.9191488,10.7520666, 14,  
       {url:'../Bilder/GoogleMaps/kino.png',
        scaledSize : new google.maps.Size(40, 40)}],
      ['Pjoltergeist', 59.9196556,10.74866, 15,  
       {url:'../Bilder/GoogleMaps/knife-fork.png',
        scaledSize : new google.maps.Size(40, 40)}],  
    ];
      //Map Størrelse, ZOOM eller center: Hvor du vil sirka kartet ska spawne når du åpner siden.
    var map = new google.maps.Map(
        document.getElementById('map'), 
        {
      zoom: 17,
      scrollwheel: false,
      center: new google.maps.LatLng(59.9198339,10.7519318),
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