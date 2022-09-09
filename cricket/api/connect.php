<?php

$connect = mysqli_connect("localhost","root","","cricket") or die("connection failed!");
if($connect)
{
    echo("connected");
}
?>