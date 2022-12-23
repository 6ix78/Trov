<?php 
include 'config.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$ref_id = $_POST['ref_id'];


$sql = mysqli_query ($conn, "UPDATE user SET name = '{$name}', phone = '{$phone}', gender = '{$gender}', dob = '{$dob}' WHERE ref_id = {$row['ref_id']}");

if(!$sql){
    echo "error ";
}else{
    echo "edon work o";
}



?>