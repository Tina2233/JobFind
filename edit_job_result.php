<?php 
    $page_title = 'Edit a Job';
  include('inc/header.php');

require_once('db_setup.php');
$sql = "USE test;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}

$Job_id = $_GET['Job_id'];
$Company_id = $_SESSION['id'];
$Position = $_POST['Position'];
$Property = $_POST['Property'];
$Category = $_POST['Category'];
$Application_deadline = $_POST['Application_deadline'];
$Location = $_POST['Location'];

$Skills_rq = $_POST['Skills_rq'];
$Description = $_POST['Description'];
$Minimal_education = $_POST['Minimal_education'];

$sql0 = "DELETE FROM JOB where Job_id = $Job_id;";
$result0 = $conn->query($sql0);

$sql = "INSERT JOB (Company_id, Position, Property, Category, Application_deadline, Location, Skills_rq, Description, Minimal_education) values ('$Company_id', '$Position', '$Property', '$Category', '$Application_deadline', '$Location', '$Skills_rq', '$Description', '$Minimal_education');";
$result = $conn->query($sql);


if ($result === TRUE) {
   ?>
  <p align="center">New record created successfully!</p>
    <?php
    echo "
              <script>
                    setTimeout(function(){window.location.href='manager.php';},100);
              </script>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
?>

<?php
$conn->close();
?>  