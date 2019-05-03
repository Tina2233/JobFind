<?php 
    $page_title = 'Edit Applicant Qualifications';
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
$User_id = $_SESSION['id'];

$Skills_ql = $_POST['Skills_ql'];
$Project = $_POST['Project'];
$Work_experience = $_POST['Work_experience'];

// if user's profile exists, add qualifications, else create profile first
$sql = "SELECT * FROM Applicant where User_id = '$User_id' ;";
$result = $conn->query($sql);
if($result->num_rows > 0){
  $sql = "SELECT * FROM Qualification where User_id = '$User_id' ;";
  $result = $conn->query($sql);
  if($result->num_rows > 0){

  // update
  $sql = "UPDATE Qualification SET Skills_ql = '$Skills_ql', Project = '$Project', Work_experience = '$Work_experience' where User_id = '$User_id' ";

} else {
  // insert
  $sql = "INSERT INTO Qualification(User_id, Skills_ql, Project, Work_experience) values ('$User_id', '$Skills_ql', '$Project', '$Work_experience');";

}




$result = $conn->query($sql);

if ($result === TRUE) {
  ?>
               <p align="center">New record created successfully!</p>
            <?php
    echo "
              <script>
                    setTimeout(function(){window.location.href='home.php';},800);
              </script>";


} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
} 
else {
   echo "<script> if(confirm( 'Please complete your profile first. Do it now?'))  location.href='edit_profile_create.php';else location.href='home.php'; </script>"; 

}

//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>

<?php
$conn->close();
include('inc/footer.php');
