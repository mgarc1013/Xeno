<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>XENO</title>

  <!-- CSS  -->
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i" rel="stylesheet">
  <link rel="icon" type="image/png" href="img/Alien.png" />
</head>
<body>

  <script src="https://cdn.jsdeliver.net/particles.js/2.0.0/particles.min.js"></script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSep-15Ln0mco29PXQ4cMJjebvwwWA2ME
    &callback=initMap">
    </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/UFOdata.js"></script>
  
  
  <div align="center" class="body-particles">
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center white-text">XENO</h1>
      <div class="row center">
        <h4 class="header col s12 light">UFO sightings across Central Florida</h4>
      </div>
      <br><br>

    </div>
  </div>

  <div class="container">
    <div class="section map-container">
      <div>
          <div id="map"></div>
      </div>
    </div>
    <br><br>
  </div>

  </div>

  <div id="particles-js"></div>

  <div id="ufo-data">
    <?php
      $json = file_get_contents('https://ufo-api.herokuapp.com/api/sightings/location/near?lat=27.6648&lon=-81.5158&radius=100000000&limit=400');
      echo $json;
    ?>
  </div>

  <script>
  particlesJS.load('particles-js', 'particles.json', function(){
    console.log('particles.json loaded');
  });
    </script>

  </body>
</html>
