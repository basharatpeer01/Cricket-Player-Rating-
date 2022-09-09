<?php
 include("connect.php");
?>
 
<?php
 if(isset( $pswrepeat)|| isset($psw) ||isset($fname) ||isset($lname) ||isset($email));

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $psw = $_POST['password'];
  $pswrepeat = $_POST['pswrepeat'];
  $query="INSERT INTO user (fname,lname,email,password) VALUES ('$fname','$lname','$email','$psw')";
  if($psw==$pswrepeat)
  {  $insert = mysqli_query($connect,$query);
     if($insert)
     {
        echo '<script> alert("Registration Successful!!");
          window.location= "../login.html"
        </script>';
      }
     else
    {
        echo '
        <script>
          alert("Some error occured!!");
          window.location= "../sigin.html";
        </script>
        ';
    }
  }
 else
 {
     echo '
        <script>
          alert("Passwords do not match!!");
          window.location= "../signin.html";
        </script>
        ';
 }        
?>