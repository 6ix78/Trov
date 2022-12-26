<?php
session_start();

include_once "config.php";
// if (isset($_GET['ref'])) {
//     $ref = $_GET['ref'];
//   }



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if(isset($_POST['check'])){
   
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM user WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if(mysqli_num_rows($code_res) > 0){
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $code = 0;
        $stats = 'verified';
        $update_otp = "UPDATE user SET code = $code, stats = '$stats' WHERE code = $fetch_code";
        $update_res = mysqli_query($conn, $update_otp);
        if($update_res){

            $_SESSION['ref_id'] = $row['ref_id'];//using this session
            // header("Location: ../login.php?error= <div style='font-size:12px; color:green; text-align:center;'>Sucessful</div>");
            header("Location: ../dashboard.php?ref=".$row['ref_id']);
            exit();
       
        }else{
            // $errors['otp-error'] = "Failed while updating code!";
            header("Location: ../otp.php?error=<div style='color:red'>Failed while updating code!</div> ");
        }
    }else{
        $errors['otp-error'] = "You've entered incorrect code!";
        header("Location: ../otp.php?error=<div  style='color:red'> You've entered incorrect code!</div> ");
    }
}



if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $check_email = "SELECT * FROM user WHERE email='$email'";
    $run_sql = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($run_sql) > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE user SET code = $code WHERE email = '$email'";
        $run_query =  mysqli_query($conn, $insert_code);
        if($run_query){
            
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
            $mail->Subject = 'Password Reset Code';
            $mail->Body    =  " Your password reset code is $code <br>
            <br>
            ";
            $mail->AltBody = 'From $name';
           
         
            $mail->send();

                $info = "We've sent a passwrod reset otp to your email - $email";
            
                header('location: ../forgot_password_verification.php');
                exit();
            }else{
                // $errors['otp-error'] = "Failed while sending code!";
                header("Location: ../forgot_password.php?error=<div  style='color:red'> Failed while sending code!</div> ");
            }
        }else{
            // $errors['db-error'] = "Something went wrong!";
            header("Location: ../forgot_password.php?error=<div  style='color:red'> Something went wrong!</div> ");
        }
    }else{
        // $errors['email'] = "This email address does not exist!";
        header("Location: ../forgot_password.php?error=<div  style='color:red'> This email address does not exist! </div> ");
    }


     //if user click check reset otp button
     if(isset($_POST['check-reset-otp'])){
       
        $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
        $check_code = "SELECT * FROM user WHERE code = $otp_code";
        $code_res = mysqli_query($conn, $check_code);
        if(mysqli_num_rows($code_res) > 0){
            $fetch_data = mysqli_fetch_assoc($code_res);
            $email = $fetch_data['email'];
            $_SESSION['email'] = $email;
            $info = "Please create a new password that you don't use on any other site.";
            $_SESSION['info'] = $info;
            header('location: ../new_password.php');
            exit();
        }else{
            $errors['otp-error'] = "You've entered incorrect code!";
        }
    }


    //if user click change password button
    if(isset($_POST['change-password'])){
        
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
        if($password !== $cpassword){
            $errors['password'] = "Confirm password not matched!";
        }else{
            $code = 0;
            $email = $_SESSION['email']; //getting this email using session
            // $encpass = password_hash($password, PASSWORD_BCRYPT);
            $update_pass = "UPDATE user SET code = $code, password = '$password' WHERE email = '$email'";
            $run_query = mysqli_query($conn, $update_pass);
            if($run_query){
                $info = "Your password changed. Now you can login with your new password.";
                
                header('Location: ../login.php');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
        }
    }

?>