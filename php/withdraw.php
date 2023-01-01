<?php 

session_start();
if (isset($_GET['ref'])) {
    $ref = $_GET['ref'];
  }
include 'config.php';

if(isset($_POST['submit'])){

    $withdraw_method = $_POST['withdraw_method'];
    $ref_id = $_POST['ref_id'];

    if($withdraw_method){
        header("Location: ../Withdraw2.php?ref=".$ref_id);
        exit();
        // header("Location: ../dashboard.php?user_id=".$row['ref_id']);
        // exit();
    }else{
        header("Location: ../withdraw.php?ref=".$ref_id);
        exit();
    }
}






?>