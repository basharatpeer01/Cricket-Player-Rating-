<?php
 session_start();
 include("connect.php");
 $email = $_POST['email'];
 $psw = $_POST['password'];
 $check = mysqli_query($connect,"SELECT * FROM user WHERE email='$email' AND password= '$psw'");
 if(mysqli_num_rows($check)>0)
 {  $userdata= mysqli_fetch_array($check);
    $_SESSION['userdata']=$userdata;
    echo
    '<script>
           alert("Logged in!!");
           window.location= "../welcome.php"
         </script>
         ';

 }
 else
 { echo
   '<script>
          alert("User not found or user not found!!");
          window.location= "../login.html"
        </script>
        ';
 }

?>