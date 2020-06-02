<?php 

   require '../private/classes/Database.class.php';
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/d340964368.js" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <link rel="stylesheet" href="../public/css/registration.css">
   <title>Sign In</title>
</head>
<body>
   <div class="container">
      <div class="header">
         <h2>DevCrud</h2>
      </div>

      <form action="#" class="form" autocomplete="off" method="POST">
         <div class="form-control">
            <input type="text" name="username" id="username" placeholder="Username" required>
            <small class="msg" id="user_msg"></small>
         </div>

         <div class="form-control">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <small class="msg" id="email_msg"></small>
         </div>

         <div class="form-control" id="pw1">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <small class="msg" id="pw1_msg"></small>
         </div>

         <div class="form-control" id="pw2">
            <input type="password" name="password2" class="password2" id="password2" placeholder="Confirm Password" required>
            <small class="msg" id="pw2_msg"></small>
         </div>

         <div class="form-control">
            <input type="submit" name="submit" class="submit" id="submit" value="Sign Up">
         </div>

         <div class="options">
            <div class="create">
               <h4>Already have an account? <span><a href="../index.php">Sign In!</a></span></h4>
            </div>
         </div>
      </form>
   </div>

   <script type="text/javascript" src="../public/js/registration.js"></script>

</body>
</html>
