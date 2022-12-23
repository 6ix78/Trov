<?php
session_start();
include 'config.php';


$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$agree = $_POST['agree'];
$stats = $_POST['stats'];
$ref_code = $_POST['ref_code'];
$balance = $_POST['balance'];

$ref_id = rand(time(), 10000);

if (!empty($name) || !empty($email) || !empty($password)) {

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // lets check if email already exist in the database
    $sql = mysqli_query($conn, "SELECT email FROM user WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) { // if email already exist 

      header("Location: ../register.php?error= <div style='color:red; font-size:15px; text-align:center;'>  $email - This Email Already Exist </div>");
    } else {




      $sql = mysqli_query($conn, "INSERT INTO user(name, email, password, agree, stats,ref_id,ref_code,balance) VALUES ('{$name}', '{$email}', '{$password}', '{$agree}' , '{$stats}', '{$ref_id}', '{$ref_code}', '{$balance}' ) ");

      // $sql3 = mysqli_query($conn, "INSERT INTO wallet (ref_id, btc, usdt) VALUE('{$ref_id}', '{$btc}', '{$usdt}')");

      if (!$sql) {
        header("Location: ../register.php.php?error=<div style='color:red'>Wahala </div> ");
      } else {
        // header("Location: ../Signup.php?error=<div style='color:green'>Sign Up Sucessful </div> ");
        $_SESSION['ref_id'] = $row['ref_id']; //using this session
        // header("Location: ../login.php?error= <div style='font-size:12px; color:green; text-align:center;'>Sucessful</div>");
        header("Location: ../dashboard.php?ref=" . $row['ref_id']);
        exit();
      }
    }
  }
} else {
  header("Location: ../register.php?error=<div style='color:red'>Please Fill all Input </div> ");
  exit();
}
