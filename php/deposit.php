<?php 

session_start();
if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
  }
include 'config.php';

if(isset($_POST['submit'])){

    $depo = $_POST['depo'];

    if($depo){
        header("Location: ../deposit_crypto.php?ref=".$ref);
        exit();
        // header("Location: ../dashboard.php?user_id=".$row['ref_id']);
        // exit();
    }else{
        header("Location: ../deposit.php");
        exit();
    }
}








?>