<?php
include 'config.php';
$info = "";
if (isset($_POST['user'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $ref_id = $_POST['ref_id'];


    $sql = mysqli_query($conn, "UPDATE user SET name = '{$name}', phone = '{$phone}', gender = '{$gender}', dob = '{$dob}' WHERE ref_id = '$ref_id'");

    if (!$sql) {
        echo "error ";
    } else {
        header("Location: ../profile.php?ref=" . $ref_id);
        exit();
    }
}

if (isset($_POST['submit_add'])) {
    $address_line = $_POST['address_line'];
    $second_address_line = $_POST['second_address_line'];
    $city  = $_POST['city'];
    $user_state = $_POST['user_state'];
    $profile_zip = $_POST['profile_zip'];
    $country = $_POST['country'];
    $ref_id = $_POST['ref_id'];

    $sql3 = mysqli_query($conn, "UPDATE user_address SET address_line = '{$address_line}', second_address_line = '{$second_address_line}',
     city = '{$city}', user_state = '{$user_state}' , profile_zip = '{$profile_zip}' , country = '{$country}' WHERE ref_id = '$ref_id'");

    if (!$sql3) {
        echo "error ";
    } else {
        header("Location: ../profile.php?ref=" . $ref_id);
        exit();
    }
}

if (isset($_POST['submit_wallet'])) {

    $wallet = $_POST['wallet'];
    $ref_id = $_POST['ref_id'];
    $wall_et = $_POST['wall_et'];

    if ($wall_et == 'btc') {


        // $sql2 = mysqli_query($conn, "UPDATE user SET wallet = '$wallet' WHERE ref_id = '$ref' ");
        // $sql2 = mysqli_query($conn, "INSERT INTO wallet (btc, ref_id, name) VALUE('{$wallet}', '{$ref_id}','{$wall_et}' )");
        $sql2 = mysqli_query($conn, "UPDATE user_wallet SET btc = '$wallet' WHERE ref_id = '$ref_id' ");

        if ($sql2) {
            header("Location: ../profile_account.php?ref=" . $ref_id);
            exit();
        }
    } else {

        $sql3 = mysqli_query($conn, "UPDATE user_wallet SET Usdt = '$wallet' WHERE ref_id = '$ref_id' ");

        if ($sql3) {
            header("Location: ../profile_account.php?ref=" . $ref_id);
            exit();
        }
    }
}
if (isset($_POST['subm_t'])) {

    $wallet = $_POST['wallet'];
    $ref_id = $_POST['ref_id'];
    $wall_et = $_POST['wall_et'];

    if ($wall_et == 'btc') {


        // $sql2 = mysqli_query($conn, "UPDATE user SET wallet = '$wallet' WHERE ref_id = '$ref' ");
        // $sql2 = mysqli_query($conn, "INSERT INTO wallet (btc, ref_id, name) VALUE('{$wallet}', '{$ref_id}','{$wall_et}' )");
        $sql2 = mysqli_query($conn, "UPDATE wallet SET btc = '$wallet' WHERE ref_id = '$ref_id' ");

        if ($sql2) {
            header("Location: profile.php");
            exit();
        }
    } else {

        $sql3 = mysqli_query($conn, "UPDATE wallet SET Usdt = '$wallet' WHERE ref_id = '$ref_id' ");

        if ($sql3) {
            header("Location: profile.php?ref=.re");
            exit();
        }
    }
}


if (isset($_POST['update_email'])) {

    $old_email = $_POST['old_email'];
    $password = $_POST['password'];
    $new_email = $_POST['new_email'];
    $ref_id = $_POST['ref_id'];

    $sql5 = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$old_email}' AND password = '{$password}'");
    if (mysqli_num_rows($sql5) > 0) { // if user credentials match 

        $row = mysqli_fetch_assoc($sql5);

        if ($sql5) {

            $sql6 = mysqli_query($conn, "UPDATE user SET email = '$new_email' WHERE ref_id = '$ref_id' ");

            if($sql6){
                header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
            }else{
                header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
            }
        }else{
            header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
        }



    }else{
        header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
    }
    

}


if (isset($_POST['update_password'])) {

    $old_password = $_POST['old_password'];
    // $password = $_POST['password'];
    $new_password = $_POST['new_password'];
    $ref_id = $_POST['ref_id'];

    $sql5 = mysqli_query($conn, "SELECT * FROM user WHERE email = '{$old_email}' AND password = '{$password}'");
    if (mysqli_num_rows($sql5) > 0) { // if user credentials match 

        $row = mysqli_fetch_assoc($sql5);

        if ($sql5) {

            $sql6 = mysqli_query($conn, "UPDATE user SET email = '$new_email' WHERE ref_id = '$ref_id' ");

            if($sql6){
                header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
            }else{
                header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
            }
        }else{
            header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
        }



    }else{
        header("Location: ../profile_setting.php?ref=" . $ref_id);
            exit();
    }
    

}
?>
