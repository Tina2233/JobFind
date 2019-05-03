<?php 
    $page_title = 'Delete a Job';
  include('inc/header.php');

require_once('db_setup.php');
$sql = "USE test;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$Job_id = $_GET['Job_id'];
$sql = "DELETE FROM JOB where Job_id = $Job_id;";

$result = $conn->query($sql);

if ($result === TRUE) {
  ?>
  <p align="center">Record deleted successfully.</p>
    <?php
  
    echo "
              <script>
                    setTimeout(function(){window.location.href='manager.php';},800);
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
?>  

<?php
include('inc/footer.php');
?>