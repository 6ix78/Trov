<?php
include 'config.php';

$ref_id = $_POST['ref_id'];

$sql = mysqli_query($conn, "DELETE FROM user WHERE ref_id = '$ref_id'");

if($sql){
    session_start();
    session_destroy();
   
    header("Location: ../login.php");
    exit();
}else{
    header("Location: ../dashboard.php?ref=$ref_id");
    exit();
}


?>