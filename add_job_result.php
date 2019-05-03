<?php 
    $page_title = 'Add a Job';
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

// $Job_id = $_POST['Job_id'];
$Company_id = $_SESSION['id'];
$Position = $_POST['Position'];
$Property = $_POST['Property'];
$Category = $_POST['Category'];
$Application_deadline = $_POST['Application_deadline'];
$Location = $_POST['Location'];

$Skills_rq = $_POST['Skills_rq'];
$Description = $_POST['Description'];
$Minimal_education = $_POST['Minimal_education'];


$sql = "INSERT INTO JOB (Company_id, Position, Property, Category, Application_deadline, Location, Skills_rq, Description, Minimal_education) values ('$Company_id', '$Position', '$Property', '$Category', '$Application_deadline', '$Location', '$Skills_rq', '$Description', '$Minimal_education');";
$result = $conn->query($sql);

// $sql2 = "INSERT INTO REQUIREMENT(Job_id, ) values ($Job_id, $Skills_rq, '$Position', '$Property', '$Category', '$Application_deadline', '$Location');";
// $result1 = $conn->query($sql1);

if ($result === TRUE) {
  ?>
  <p align="center">New record created successfully!</p>
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
