<?php
session_start();
$email="admin";
$password="123456";

if(isset($_POST["email"])&& isset($_POST["password"]))
{
    if ($_POST["email"] === $email && $_POST["password"] === $password) 
    { 
    
    $_SESSION["inloggedin"] = true; 
      
    header("Location:education.html");
    exit;
    }
    else
    {
  echo "please enter the correct password";
    }
}
?>
