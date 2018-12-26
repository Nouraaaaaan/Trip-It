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
      
      <title>Trip it! - Register</title>
  </head>
    
    <body>
        <a href="index.php"><img src="img/trip_it_logo.png" alt="TripItLogo" style="width:280px;height:91px"></a>
    <nav class="navbar navbar-inverse" color = "606060" >	  
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
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> <font color = 00ffcc> Login</font></a></li>
      </ul>
	</nav>
        <div class="container">
        <form class="form-horizontal">
        
                <div class="form-group">
                <label for="UserName" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Username </label>
                <div class="col-sm-4 col-xs-9">
                    <input type="text" class="form-control" id="Username" name="Username" placeholder="Email">
                </div>
                </div>
                
                <div class="form-group">
                <label for="Email" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Email</label>
                <div class="col-sm-4 col-xs-9">
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="Password" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Password</label>
                    <div class="col-sm-4 col-xs-9">
                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                    </div>  
            </div>
                
                <div class="form-group">
                <label for="CPassword" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Confirm Password</label>
                    <div class="col-sm-4 col-xs-9">
                        <input type="password" class="form-control" id="CPassword" name="CPassword" placeholder="Password">
                    </div>  
            </div>
                
            <div class="form-group">
                <label for="DOB" class="col-sm-2 col-sm-offset-3 col-xs-3 control-label">Date of birth </label>
                    <div class="col-sm-4 col-xs-9">
                        <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Date of birth">
                    </div>  
            </div>
                
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-1 col-xs-offset-2 col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="gendar" id="gender" value="male"> Male
                </label>
                </div>
                <div class="col-sm-offset-0 col-sm-1 col-xs-offset-0 col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="gendar" id="gender" value="female"> Female
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
    </body>
    


</html>