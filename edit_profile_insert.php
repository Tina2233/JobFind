<?php 
    $page_title = 'Edit Applicant Profile';
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

// Query:
$User_id = $_SESSION['id'];
$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$Gender = $_POST['Gender'];
$Phone_no = $_POST['Phone_no'];
$Email_addr = $_POST['Email_addr'];
$Address = $_POST['Address'];
$Education_background = $_POST['Education_background'];

$sql = "SELECT * FROM Applicant where User_id = '$User_id' ;";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			//update
			$sql = "UPDATE Applicant SET First_name = '$First_name', Last_name = '$Last_name', Gender = '$Gender', Phone_no = $Phone_no, Email_addr = '$Email_addr', Address = '$Address', Education_background = '$Education_background' where User_id = '$User_id'";


		} else {
			//insert
			$sql = "INSERT INTO Applicant values ('$User_id', '$First_name', '$Last_name', '$Gender', $Phone_no, '$Email_addr', '$Address', '$Education_background');";
		}


$result = $conn->query($sql);

if ($result === TRUE) {
  echo "<script> if(confirm( 'New record created successfully. Check it now?'))  location.href='edit_profile_create.php';else location.href='home.php'; </script>"; 
  

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
?>  

<?php
include('inc/footer.php');
