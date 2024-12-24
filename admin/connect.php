<?php

$con=new mysqli('localhost','root','','iwt_ass2');

if(!$con){
    die(mysqli_error($con));
}
else
{
    echo "connected successfully";
}

    
?>