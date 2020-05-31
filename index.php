<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="./public/css/index.css">
   <title>Sign In</title>
</head>
<body>
   <div class="container">
      <div class="header">
         <h2>DevCrud</h2>
      </div>
      <div class="warning">
         
      </div>

      <form action="#" class="form">
         <div class="form-control">
            <input type="text" name="username" placeholder="Username or Email" required>
         </div>

         <div class="form-control">
            <input type="password" name="password" placeholder="Password" required>
         </div>
         <div class="form-control">
            <input type="submit" name="submit" class="submit" value="Sign In">
         </div>
         <div class="options">
            <div class="forgot">
               <h4>forgot password?</h4>
            </div>
            <div class="create">
               <h4>New here? <span><a href="./pages/registration.php">Sign Up!</a></span></h4>
            </div>
         </div>
      </form>
   </div>

</body>
</html>
