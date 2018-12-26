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
      
      <title>Trip it! - Trip-Planner</title>
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
            <form class="navbar-form" role="search" action="Search_results.php">
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
                    <a href="Trip%20Planner.php"><font color = 00ffcc>MY Trip-Planner</font></a>
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