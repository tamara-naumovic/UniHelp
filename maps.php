<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>UniHelp - Ranks</title>
<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/feed.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php include ("menu.php"); ?>
  <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
  <div id="map" style="width: 500px; height: 400px;"></div>

  <script type="text/javascript">
  var locations = [];
   

   var xhttp=new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (xhttp.readyState == 4 && xhttp.status == 200) {
      locations=JSON.parse(xhttp.responseText);
      proceed();
      }
    };
      xhttp.open("GET", "maps_upit.php", true);
      xhttp.send();

   function proceed() {
     
     var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: new google.maps.LatLng(44.768222, 20.438518),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i].long, locations[i].lat),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i].name);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
    }

  </script>
  </body>
</html>


