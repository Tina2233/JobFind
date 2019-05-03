<?php 
    $page_title = 'Edit Company Information';
  include('inc/header.php');
require_once('db_setup.php');
$sql = "USE test;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}


$Name = $_SESSION['Name'];
$Type = $_SESSION['Type'];

// echo "Hi " . $Type . $Name;

// Query:
$Company_id = $_SESSION['id'];
$Name = $_POST['Name'];
$Scale = $_POST['Scale'];

$sql = "SELECT * FROM Company where Company_id = '$Company_id' ;";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      //update
      $sql = "UPDATE Company SET Name = '$Name', Scale = '$Scale' where Company_id = '$Company_id'";


    } else {
      //insert
      $sql = "INSERT INTO Company values ('$Company_id', '$Name', '$Scale');";

    }


$result = $conn->query($sql);

if ($result === TRUE) {
  ?>
  <p align="center">New record created successfully!</p>
    <?php

    echo "
              <script>
                    setTimeout(function(){window.location.href='edit_info_create.php';},800);
              </script>";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>

<?php
$conn->close();

include('inc/footer.php');