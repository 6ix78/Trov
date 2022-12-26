<?php
session_start();
include 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$agree = $_POST['agree'];
$stats = $_POST['stats'];
$ref_code = $_POST['ref_code'];
$balance = $_POST['balance'];

$code = rand(999999, 111111);

$ref_id = rand(time(), 10000);

if (!empty($name) || !empty($email) || !empty($password)) {

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // lets check if email already exist in the database
    $sql = mysqli_query($conn, "SELECT email FROM user WHERE email = '{$email}'");
    if (mysqli_num_rows($sql) > 0) { // if email already exist 

      header("Location: ../register.php?error= <div style='color:red; font-size:15px; text-align:center;'>  $email - This Email Already Exist </div>");
    } else {




      $sql = mysqli_query($conn, "INSERT INTO user(name, email, password, stats,ref_id,ref_code,code,balance) VALUES ('{$name}', '{$email}', '{$password}',  '{$stats}', '{$ref_id}', '{$ref_code}',  '{$code}' ,  '{$balance}' ) ");

      $sql2 = mysqli_query($conn, "INSERT INTO balance(ref_id,main_balance) VALUES ('{$ref_id}', '{$balance}') ");

      // $sql3 = mysqli_query($conn, "INSERT INTO wallet (ref_id, btc, usdt) VALUE('{$ref_id}', '{$btc}', '{$usdt}')");

      if (!$sql) {
        header("Location: ../register.php.php?error=<div style='color:red'> An Error Occured </div> ");
      } else {
        
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'mail.dxcodingweb.site';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'danieldx@dxcodingweb.site';                     //SMTP username
                $mail->Password   = ';(4Gg*4#1qDr';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $mail->setFrom('danieldx@dxcodingweb.site', 'Dxcodingweb');
                $mail->addAddress($email, 'Daniel Dx');     //Add a recipient
       
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Email Verification Code';
                $mail->Body    =  " Your Verification Email is $code <br>
                <br>
                Eco fX";
                $mail->AltBody = 'From $name';
               
            
                $mail->send();
             
                $info = "We've sent a verification code to your email - $email";
                
                $_SESSION['ref_id'] = $row['ref_id'];//using this session
                // header("Location: ../login.php?error= <div style='font-size:12px; color:green; text-align:center;'>Sucessful</div>");
            
                header("Location: ../otp.php?ref=".$ref_id);
       
      }
    }
  }
} else {
  header("Location: ../register.php?error=<div style='color:red'>Please Fill all Input </div> ");
  exit();
}
