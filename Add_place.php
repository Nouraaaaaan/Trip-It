<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/MyStyle.css">
      
     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
     <![endif]-->
      
      <title>Trip it! - Add a place</title>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
var geocoder= new google.maps.Geocoder();;
var map;
var infowindow = new google.maps.InfoWindow();
var marker;

function initialize() {
    //**********************************************************************geocoder 
  var mapOptions = {
    zoom: 15
  };
  map = new google.maps.Map(document.getElementById('map-canvas-locator'),
      mapOptions);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      geocoder.geocode({'latLng': pos}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        map.setZoom(18);
        marker = new google.maps.Marker({
            position: pos,
            map: map
        });
        infowindow.setContent(results[1].formatted_address);
        document.getElementById("Address").innerHTML = results[1].formatted_address;
        infowindow.open(map, marker);
      } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  }); 

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
////////////////////////////
    google.maps.event.addListener(map, 'click', function(e) {
    placeMarker(e.latLng, map);
  });
////////////////////////////
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }
    

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
   
}
        /*///////////////////////////////////////////
    function placeMarker(position, map) {
  var marker = new google.maps.Marker({
    position: position,
    map: map
  });
  map.panTo(position);
}
    ////////////////////*/
        ///////////////////////////////////////////
    function placeMarker(position, map) {
  marker.setPosition(position);
  map.panTo(position);
geocoder.geocode({'latLng': position}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        map.setZoom(18);
        infowindow.setContent(results[1].formatted_address);
        document.getElementById("Address").innerHTML = results[1].formatted_address;
        infowindow.open(map, marker);
      } else {
        alert('No results found');
      }
    } else {
      alert('Geocoder failed due to: ' + status);
    }
  }); 
    }
    ////////////////////

google.maps.event.addDomListener(window, 'load', initialize);


    </script>
      
  </head>
    
    <body>
        
        <a href="index.php"><img src="img/trip_it_logo.png" alt="TripItLogo" style="width:280px;height:91px"></a>
    <nav class="navbar navbar-inverse" color = "606060" >	 
        <ul class="nav navbar-nav">
        <li><a href="#menu-toggle" class="navbar-toggle collapsed" id="menu-toggle" style= "background-color:000000">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span></a></li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <div class="col-sm-6 col-md-6 pull-right">
            <form class="navbar-form" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </form>
      </div>        
        <li><a href="Register.php"><span class="glyphicon glyphicon-user"></span> <font color = 00ffcc> Sign Up</font></a></li>
        <li class="dropdown" id="menu1">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
			 <span class="glyphicon glyphicon-log-in"></span>
               <font color = 00ffcc>Login</font>
                <b class="caret"></b>
             </a>
             <div class="dropdown-menu">
               <form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" /></div>
                 <fieldset class='textbox' style="padding:10px">
                   <input style="margin-top: 8px" type="text" placeholder="Username" />
                   <input style="margin-top: 8px" type="password" placeholder="Passsword" />
                   <input class="btn-primary" name="commit" type="submit" value="Log In" />
                 </fieldset>
               </form>
             </div>
           </li>
      </ul>
	</nav>
<!-- /#sidebar-wrapper -->
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                         <font color = c8c8c8> My Settings</font>
                    </a>
                </li>
                <li>
                   <a href="WishList.php"> <font color = 00ffcc>My Wish-List</font ></a>
                </li>
                <li>
                    <a href="Trip%20Planner.php"><font color = 00ffcc> MY Trip-Planner</font></a>
                </li>
                <li>
                    <a href="Add_place.php"><font color = 00ffcc>Add Place</font></a>
                </li>
             </ul>
        </div>
        <!-- Page Content -->
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
        
        <div class="container">
        <form class="form-horizontal">
        
                <div class="form-group">
                <label for="PlaceName" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Place name </label>
                <div class="col-sm-5 col-xs-9">
                    <input type="text" class="form-control" id="PlaceName" name="PlaceName" placeholder="PlaceName">
                </div>
                </div>
                
                <div class="form-group">
                <label for="Descrition" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Descrition</label>
                <div class="col-sm-5 col-xs-9">
                    <input type="text" class="form-control" id="Descrition" name="Descrition" placeholder="Descrition">
                </div>
            </div>
            <div class="form-group">
                <label for="Address" class="col-sm-offset-3 col-sm-2 col-xs-3 control-label">Address</label>
                <div class="col-sm-offset-0 col-sm-3 col-xs-9">
                    <p class="form-control-static " name="Address" id="Address">Show Time :D</p>
                </div>
                
                <div class="col-sm-offset-0 col-sm-2 col-xs-9">
                    <button type="submit" class="btn btn-default" onclick="#"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Locate Me</button>
                </div>
            </div>
            <div class="form group">
            <div class="col-sm-offset-5 col-sm-3"><div id="map-canvas-locator"></div></div>
            </div>
            <div class="form-group">
                <label for="PlacePicture" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Place picture </label>
                    <div class="col-sm-5 col-xs-9 ">
                        <input type="file" class="form-control-static" id="PlacePicture" name="PlacePicture" >
                    </div>  
            </div>
                
                
            <div class="form-group">
                <label for="PlaceType" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Place type </label>
                
            <div class="col-sm-offset-0 col-sm-2 col-xs-offset-2 col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="type" id="type" value="R">Resturant or cafe
                </label>
                </div>
                <div class="col-sm-offset-0 col-sm-2 col-xs-offset-0 col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="type" id="type" value="P">Park
                </label>
                </div>
                <div class="col-sm-offset-5 col-sm-2 col-xs-offset-0 col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="type" id="type" value="E">Entertainment
                </label>
                </div>
                <div class="col-sm-offset-0 col-sm-2 col-xs-offset-0 col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="type" id="type" value="H">Historical
                </label>
                </div>
                <div class="col-sm-offset-5 col-sm-2 col-xs-offset-0 col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="type" id="type" value="E">Educational
                </label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10 col-xs-offset-2 col-xs-3">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
                </form>
            </div>
        
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    
    </body>
    


</html>