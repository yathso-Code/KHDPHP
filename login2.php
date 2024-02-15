<!DOCTYPE html>
<html lang="en">
<head>
<title> Login Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./Assist/CSS/index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

input[type='password'],input[type='email']{
width: 100%;
padding: 10px;
border-radius: 3px;
border: 1px solid #ccc;
margin-top: 10px;
margin-bottom: 20px;
}
input[type='password']:focus,input[type='email']:focus{
border: 1px solid #5db6db;
box-shadow: 0 0 10px #b9eaff;
outline: none !important;
}
input[type='submit']{
background: rgb(39,160,210);
color: #fff;
border: none;
padding: 10px 20px;
cursor: pointer;
}
.main-login-form{
max-width: 400px;
margin: 0 auto;
margin-top: 50px;
background: #f5f5f5c7;
padding: 20px 45px 20px 25px;
border-radius: 5px;
border: 1px solid #ccc;
}
</style>
</head>
<body>	
     <!-- -------------nav bar ------------- -->
     <?php
           require './reuse/nav.php'
      ?>
  <!-- --------------nav bar ----------------->
<div class="main-login-form">	
    <h1>Login your Account</h1> 
    <h3>Enter your Username & Passward to login</h3> 		
<form action="#" method="POST">
<label for="Username">Username</label>
<input type="email" name="username" class="email" placeholder="Enter your username" required>
<label for="Password">Password</label>
<input type="password" name="password" class="password" placeholder="Enter your password" required>
<input name="submit" type="submit" value="Submit">
</form>
<p>Don't have account?  
    <a href="#" 
     style="text-decoration: none;"> 
      Create an account 
  </a> 
</p> 
</div>
  <!-- footer-------------- -->
  <?php
       require './reuse/footer.php'
     ?>
    <!-- footer---------- -->
</body>
</html>