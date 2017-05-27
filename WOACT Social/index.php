<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WOACT Social</title>

    <link href="CSS/stylesheet_forside.css" rel="stylesheet" type="text/css">
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
            Velkommen til WOACT Social
        </h1>

        <!-- First "content" wrapper -->
        <div id="wrap1">

            <div id="tekstwrap1">
                <p id="tekst1">
                    En av gode tingene med å gå på Westerdals Oslo Act er at campusene våre ligger så sentralt i Oslo. Du vil ha alt fra matbutikk, bar, restauranter, gym og annet lignende i gåavstand fra våre Campuser. For hvert Campus har vi funnet de beste, billigste alternativene for våre studenter. For å finne disse stedene er det bare å klikke seg inn på Campuset du går på.
                </p>
            </div>

        </div>


        <!-- line between each section of content -->
        <div id="forsidelinje1"></div>

        <h1 id="underoverskrift">
            Se hva din campus har å tilby!
        </h1>

        <!-- Second "content" wrapper -->
        <div id="wrap2">

            <div id="venstrewrap">

                <a href="Fjerdingen.php">
                    <div class="fjerd" data-hover= FJERDINGEN></div>
                </a>

                <a href="Vulkan.php">
                    <div class="vulk" data-hover= VULKAN></div>
                </a>

                <a href="Brenneriveien.php">
                    <div class="bren" data-hover= BRENNERIET></div>
                </a>

            </div>

            <div id="hoyrewrap">

                <a href="Aktuelt.php">
                    <div class="aktuelt" data-hover= AKTUELT></div>
                </a>
                <a href="MS.php">
                    <div class="makerspace" data-hover= MAKERSPACE></div>
                </a>
                <a href="VR.php">
                    <div class="VR" data-hover= VR></div>
                </a>

            </div>

        </div>

        <!-- line between each section of content -->
        <div id="forsidelinje2"></div>

        <div id="kartboks">
            <h2 id=kartoverskrift>
                Våre Campuser
            </h2>
            <p id="karttekst">
                En av gode tingene med å gå på Westerdals Oslo Act er at campusene våre ligger så sentralt i Oslo. Du vil ha alt fra matbutikk, bar, restauranter, gym og annet lignende i gåavstand fra våre Campuser. For hvert Campus har vi funnet de beste, billigste alternativene for våre studenter. For å finne disse stedene er det bare å klikke seg inn på Campuset du går på.
            </p>
        </div>

        <!-- the style portion of the map should not be changed, keep it as is -->
        <div id="map" style="border: 3px solid black; margin-top: 50px; width: 1000px; margin-left: auto; margin-right: auto; height: 400px;"></div>


        <?php require'footer.php';?>

    </div>

    <!-- change to your own googlemaps code -->
    <script type="text/javascript">
        //Her skriver du inn navn,longitude og latitude, bilder i URL.  
        var locations = [
            ['Campus Fjerdingen', 59.916107, 10.759980, 4,
                {
                    url: 'Bilder/Hexagon/Fjerdingen.png',
                    scaledSize: new google.maps.Size(70, 60)
                }
            ],
            ['Campus Vulkan', 59.923353, 10.75236, 5,
                {
                    url: 'Bilder/Hexagon/Vulkan.png',
                    scaledSize: new google.maps.Size(70, 60)
                }
            ],
            ['Campus Brenneriet', 59.920298, 10.752712, 3,
                {
                    url: 'Bilder/Hexagon/Brenneriveien.png',
                    scaledSize: new google.maps.Size(70, 60)
                }
            ]

        ];
        //Map Størrelse, ZOOM eller center: Hvor du vil sirka kartet ska spawne når du åpner siden.
        var map = new google.maps.Map(
            document.getElementById('map'), {
                zoom: 14,
                scrollwheel: false,
                center: new google.maps.LatLng(59.920780, 10.753855),
                mapTypeId: google.maps.MapTypeId.ROADMAP,

                //ALT INNEN FOR STYLES ER BARE KART THEME. DO NOT TOUCH! :) 
                styles: [{
                        "featureType": "administrative",
                        "elementType": "all",
                        "stylers": [{
                            "saturation": "-100"
                        }]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [{
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
                        "stylers": [{
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
                        "stylers": [{
                            "saturation": "-100"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [{
                            "visibility": "simplified"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "all",
                        "stylers": [{
                            "lightness": "30"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "all",
                        "stylers": [{
                            "lightness": "40"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [{
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
                        "stylers": [{
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
                        "stylers": [{
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
            url: 'Vulkan.png',
            scaledSize: new google.maps.Size(70, 70)
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
