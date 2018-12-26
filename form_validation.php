<!--<?php
include("controller.php");
 
class form_validation
{
  public $Controll;
 
  public function __construct()
  {
      $Controll = new controller;
  }
    
  public function Submit_click($Username,$Email,$Password ,$DOB, $gendar)
  {
      $check = $Controll->form_validation($Username,$Email,$Password ,$DOB, $gendar);
      if($check)
          echo "done";
      else
          echo "error";
  }
 
}
 
?>-->