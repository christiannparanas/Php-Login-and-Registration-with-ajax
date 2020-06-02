<?php

   require './private/classes/Database.class.php';

   // username ajax
   if(isset($_POST['check_username'])){

      $conn = new mysqli("localhost", "root", "", "devcrud");

      $check = new Database();
      $username = mysqli_real_escape_string($conn, $_POST['check_username']);

      $sql = "SELECT * FROM users WHERE username = '$username'";
      $sqlValidate = $check->connection()->query($sql);

      $numRows = $sqlValidate->num_rows;

      $user = '';

      if($numRows > 0) {
         $user = "Username already exist!";
      }

      echo $user;
   }

   // email ajax
   if(isset($_POST['check_email'])){

      $conn = new mysqli("localhost", "root", "", "devcrud");

      $check = new Database();
      $email = mysqli_real_escape_string($conn, $_POST['check_email']);

      $sql = "SELECT * FROM users WHERE email = '$email'";
      $sqlValidate = $check->connection()->query($sql);

      $numRows = $sqlValidate->num_rows;
      $mail = '';

      if($numRows > 0) {
         $mail = "Email address already exist!";
      }

      echo $mail;
   }

   // password 1
   if(isset($_POST['check_pw1'])){

      
      // minimum at least 8 char
      $pattern = '/^.{8,}$/';
      $pass = "";

      if(!preg_match($pattern, $_POST['check_pw1'])){

         $pass = "Maximum of 8 characters for password!";
      } 

      echo $pass;
   }

?>