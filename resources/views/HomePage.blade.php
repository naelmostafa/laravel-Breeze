<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default%22%3E"></script> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/HomePage.css') }}" />
    <title>Document</title>
  
</head>


<header>
    <div class="topnav">
        <img src="wello.jpg" alt="wello">
        <a class="active" href="#Home">Home</a>
        <a href="#About">About</a>
        <a href="#Login">Login</a>
        <a href="#SignUp">Sign up</a>
    </div>
</header>



<body>

    <div id="doc">
    
        <h1>HTML5 Geolocation Demo</h1>
        
        <div id="geo-wrapper"></div>
        <p id="msg"></p>
        <p id="lat"></p>
        <p id="long"></p>
        
    </div>
    
    <script type="text/javascript">
    function supports_geolocation() {
      return !!navigator.geolocation;
    }
    
    function get_location() {
      if ( supports_geolocation() ) {
        navigator.geolocation.getCurrentPosition(show_map, handle_error);
      } else {
        // no native support;
        $("#msg").text('Your browser doesn\'t support geolocation!');
      }
    }
    
    function show_map(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        // let's show a map or do something interesting!
        
        $("#geo-wrapper").css({'width':'640px','height':'480px'});
        
        var latlng = new google.maps.LatLng(latitude, longitude);
        var myOptions = {
            zoom: 10,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("geo-wrapper"), myOptions);
        
        var marker = new google.maps.Marker({
            position: latlng,
            title:"You are here (more or less)!"
        });
      
        // To add the marker to the map, call setMap();
        marker.setMap(map);
        
        $("#msg").text('Your browser thinks you are here:');
        $("#lat").text('Latitude: ' + latitude);
        $("#long").text('Longitude: ' + longitude);
    }
    
    function handle_error(err) {
      if (err.code == 1) {
        // user said no!
        $("#msg").text('You chose not to share your location.');
      }
    }
    
    get_location();
    </script>
    
</body>





<footer>
    <div class="footer">
        lorem ipsunm something something
    </div>
</footer>


</html>