<?php 

   if(!isset($_SESSION)) 
   { 
      session_start(); 
   } 

   if($_SESSION['status'] == "invalid" || empty($_SESSION['status'])){
      $_SESSION['status'] = "invalid";
      echo "<script>window.location.href='../index.php'</script>";
   }


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/d340964368.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../public/css/home.css">
   <link rel="shortcut icon" href="../public/img/64.png" type="image/x-icon">
   <title>Home | Devcrud</title>
</head>
<body>

   <header>
         <nav class="nav-main">
            <div class="brand">
               <h2>CHRISTIAN</h2>
            </div>

            <div id="iconTrigger" class="icon-container">
               <i id="icon" class="fa fa-bars" style="font-size:30px"></i>
            </div>
         </nav>
         <div class="menu-container">
            <ul class="ul-con">
               <li><a href="#" onclick="parallax()">Home</a></li>
               <li><a href="#about" onclick="parallax()">About</a></li>
               <li><a href="#contact" onclick="parallax()">Contact</a></li>
               <li><a href="#" onclick="out();">Logout</a></li>
            </ul>
         </div>
   </header>

   <section class="front-page">
      <div class="front">
         <img class="header-bg" src="../public/img/256.png" alt="">
      </div>
   </section>

   <section class="profile">
      <div class="profile-box">
         <div class="avatar">
            <img class="pic" src="../public/img/thea.jpg" alt="">
         </div>
         <div class="banner">
            <h3 class="name">christian Paranas</h3>
         </div>
         <div class="social">
            <i class="fa fa-2x fa-github"></i>
            <i class="fa fa-2x fa-facebook"></i>
            <i class="fa fa-2x fa-twitter"></i>
         </div>
      </div>
   </section>

   <footer>
      <p>CHRISTIAN PARANAS &copy; 2020 <img src="../public/img/python.png" alt=""></p>
   </footer>

   <script type="text/javascript" src="../public/js/home.js"></script>
   <script type="text/javascript">
      function out() {
         window.location.href="../private/includes/logout.php";
      }
   </script>
</body>
</html>