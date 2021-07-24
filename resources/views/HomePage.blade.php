@extends('layouts.layout1')



@section('content')
<header>
  <div class="topnav">
    <div id = "logo">
      <a href="#Home"><img src="img/logo.png" alt="logo"></a>
    </div>
    <div>
      <a href="#SignUp">Sign up</a>
      <a href="#Login">Login</a>
      <a href="#About">About</a>
      <!--<a class="active" href="#Home">Home</a>-->
    </div>
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
@endsection

