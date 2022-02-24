<?php
$server="localhost";
$user="shivanshu";
$password="123456";
$database="manav_swajan_foundation";
$con=mysqli_connect($server,$user,$password,$database);
if(mysqli_connect_error())
{
    echo"connection faild";
}
?>