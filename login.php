<?php
require('connection.inc.php');
require('function.inc.php');
if(isset ($_POST['login'])){
		echo $username=get_safe_value($con,$_POST['username']);
		echo $password=get_safe_value($con,$_POST['password']);
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Page</title>
    <link rel="stylesheet" href="login1.css"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
   
</head>
<body>
   
        
    
    <div class="login-form">
        <form action="form1">
        <h2>Login Here</h2>
        <input type="email" name="email" placeholder="Enter your email"><br>
         <input type="password" name="password" placeholder="Enter your password">
         <a href="#"><h4>Forget Password?</h4></a>
         <button class="btn"><a href="#">Login</a></button>
         </form>
         
         
  
    </div>
    
</body>
</html>