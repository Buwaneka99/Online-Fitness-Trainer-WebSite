<?php
include 'C:\xampp\htdocs\iwtass2\connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from trainer where tid=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>