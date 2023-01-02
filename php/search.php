<?php

include 'config.php';

if (isset($_GET['search'])) {

    $search = $_GET['search'];
    $ref_id = $_GET['ref_id'];
    // Get the search query from the form
  


    $sql = mysqli_query($conn, "SELECT * FROM user_withdraw WHERE ref_id  = '$ref_id'");
  if (mysqli_num_rows($sql) > 0) {
    while($row = $sql->fetch_assoc()) {

        echo $row['withdraw_amount'] . '<br>';
    }
}

  }



?>