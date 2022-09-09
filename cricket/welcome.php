<?php
 session_start();
 if(!isset($_SESSION['userdata']))
 { header("location: ../");

 }
?>
<html>
    <head>
        <title>Cricket Player Rating</title>
    </head>
    <body>
        <h1>Welcome to Cicket Player Rating<br><br><br><br>Here you can see the stats of your favorite players and even rate them</h1>
        
    </body>
</html>