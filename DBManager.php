<?php

class DBManager
{
  public $link;
 
  public function __construct()
  {
      $link = mysqli_connect("localhost","root","","Tripit"); // Create connection
      // Check connection
      if(mysqli_connect_error()) 
			die("<b>connection error:</b>".mysqli_connect_error());
  }
 
  public function ExecuteNonQuery($query)
  {
      $link = mysqli_connect("localhost","root","","Tripit");
       $result = mysqli_query($link,$query);
      return($result);
  }
    
 public function ExecuteReader($query)
 {
     $link = mysqli_connect("localhost","root","","Tripit");
     $result = mysqli_query($link, $query);
     //$result = $link->query($query);
     return $result;
 }
    
  public function close()
  {
      mysqli_close($link);
  }
    
}
 
?>