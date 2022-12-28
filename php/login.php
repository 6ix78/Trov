<?php
session_start();

include_once "config.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email) || !empty($password)){
  //check if user entered correct details 
  $sql = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$email}' AND password = '{$password}'");
  if (mysqli_num_rows($sql) > 0){// if user credentials match 

    $row = mysqli_fetch_assoc($sql);
    // $stats = " Verified";
    //   $sql2 = mysqli_query($conn, "UPDATE user SET stats = '{$stats}' WHERE ref_id = {$row['ref_id']}");
    
    if($sql){
      $_SESSION['ref_id'] = $row['ref_id'];//using this session
        // header("Location: ../login.php?error= <div style='font-size:12px; color:green; text-align:center;'>Sucessful</div>");
        header("Location: ../dashboard.php?ref=".$row['ref_id']);
        exit();
    }
    
    //  header("Location: ../main.php");
    //  exit();
    // // header("Location: ../main.php");

    // }
  }else{
    header("Location: ../login.php?error= <div style='font-size:12px; color:red; text-align:center;'>Email or Password Incorrect</div>");
    exit();
  }
}else{
    header("Location: ../login.php?error= <div style='font-size:12px; color:red; text-align:center;'>Email or Password Empty</div>");
    exit();
    }
  
?>
  