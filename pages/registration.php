<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/d340964368.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../public/css/registration.css">
   <title>Sign In</title>
</head>
<body>
   <div class="container">
      <div class="header">
         <h2>DevCrud</h2>
      </div>
      <div class="warning">
         
      </div>

      <form action="#" class="form" autocomplete="off">
         <div class="form-control">
            <input type="text" name="username" id="username" placeholder="Username or Email" required>
            <small>Username Already taken!</small>
         </div>

         <div class="form-control">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <small>Email already taken!</small>
         </div>

         <div class="form-control">
            <input type="password" name="password" id="password" placeholder="Password" required>
            <small>Password must conntain uppercase!</small>
         </div>

         <div class="form-control">
            <input type="password" name="password2" id="password2" placeholder="Confirm Password" required>
            <small>Password didn't match!</small>
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

</body>
</html>
