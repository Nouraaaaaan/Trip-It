<?php
include("DBManager.php");

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

class controller
{
  //public $dbMan;// = new DBManager;
 
  public function __construct()
  {
      //$dbMan = new DBManager;
  }
/*public function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') == $date;
}*/
    
  public function form_validate($Name ,$Email ,$Password ,$DOB ,$gender ,$CPassword)
  {
      $nm = $Name;
      $eml = $Email;
      //$cntrl = new controller;
      //$validDate = validateDate($DOB);
      if(!preg_match("/^[a-zA-Z ]*$/",$nm) || empty(trim($Name)) || ctype_space($Name))
          return ("name is invalid");
      
      if(!filter_var($eml, FILTER_VALIDATE_EMAIL) ||  empty(trim($Email)) || ctype_space($Email))
          return ("Email is invalid");
      
      if(empty(trim($Password)) || ctype_space($Password))
          return ("Password is invalid");
      
      if($Password != $CPassword)
          return ("invalid confirm Password");
      
      if(!validateDate($DOB,'Y-m-d'))
          return ("invalid Date of Birth");
      
      $query = "INSERT INTO `user`(`Name`, `Email`, `Password`, `Date of Birth` , `Gendar`)VALUES('$Name','$Email','$Password','$DOB','$gender')";
      
      $dbMan = new DBManager;
      $test = $dbMan->ExecuteNonQuery($query);
      return (NULL); 
  }
 
  public function User_Login($Email ,$Password )
  {
      $query = "SELECT`Password` FROM `user` WHERE Email = '$Email'" ;
      $dbMan = new DBManager;
      $result = $dbMan->ExecuteReader($query);
      if (mysqli_num_rows($result) > 0) 
     /*if($result->num_rows >0)*/
      {
          $row = $result->fetch_assoc();
          if($row["Password"] == $Password)
              return NULL;
          else
              return ("Password is invalid");
      }
      else 
          return ("Email is invalid");
  }
}
 
/*// Create a new object
$obj = new MyClass;
 
// Get the value of $prop1
echo $obj->getProperty();
 
// Output a message at the end of the file
echo "End of file.<br />";*/



















?>