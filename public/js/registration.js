
// username
$(document).ready(function() {

   $('#username').keyup(function() {
   
      var check_username = $('#username').val();

      if(check_username == ""){
         $('#user_msg').css("visibility", "hidden");

      } else {

         $.ajax({
            type: "POST",
            url: "../ajaxcheck.php",
            data: { "check_username": check_username },
            success: function(msg){
               $('#user_msg').css("visibility", "visible").html(msg); 
                
            }
         });
      }

   });
});

// email
$(document).ready(function() {

   $('#email').keyup(function() {
   
      var check_email = $('#email').val();

      if(check_email == ""){
         $('#email_msg').css("visibility", "hidden");

      } else {

         $.ajax({
            type: "POST",
            url: "../ajaxcheck.php",
            data: { "check_email": check_email },
            success: function(msg){
               $('#email_msg').css("visibility", "visible").html(msg); 
                
            }
         });
      }

   });
});

// password1
$(document).ready(function() {

   $('#password').keyup(function() {
   
      var check_pw1 = $('#password').val();

      if(check_pw1 == ""){
         $('#pw1_msg').css("visibility", "hidden");

      } else {

         $.ajax({
            type: "POST",
            url: "../ajaxcheck.php",
            data: { "check_pw1": check_pw1 },
            success: function(msg){
               $('#pw1_msg').css("visibility", "visible").html(msg); 
                
            }
         });
      }

   });
});

// password2
$(document).ready(function() {

   $('#password2').keyup(function() {
   
      var pw1 = $('#password').val();
      var check_pw2 = $('#password2').val();

      if(check_pw2 == ""){
         $('#pw2_msg').css("visibility", "hidden");

      } else {

         $.ajax({
            type: "POST",
            url: "../ajaxcheck.php",
            data: { "pw1": pw1,
                    "check_pw2": check_pw2 },
            success: function(msg){
               $('#pw2_msg').css("visibility", "visible").html(msg); 
            }
         });
      }
   });
});

