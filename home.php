<?php 
    $page_title = 'Applicant Home Page';
	include('inc/header.php');
?>

<div class="container">
     <header class="jumbotron">
         <div class="container">
             <h1>Welcome To FindJob!</h1>
             <p>View job opportunities from all over the world</p>
             <p>
                <a class="btn btn-primary btn-large" href="edit_profile_create.php">Edit Profile</a>
                <a class="btn btn-primary btn-large" href="edit_quali_create.php">Edit Qualification</a>
                <a class="btn btn-primary btn-large" href="find_job.php">Search jobs</a>
                <a class="btn btn-primary btn-large" href="edit_password_verify.php">Change Password</a>
             </p>
         </div>
     </header>


	<h2>Recommended jobs: </h2>
     <div class="row text-center" style="display:flex; flex-wrap: wrap;">
	<?php
		require_once('db_setup.php');
		$sql = "USE test;";
		if ($conn->query($sql) === TRUE) {
		   // echo "using Database tbiswas2_company";
		} else {
		   echo "Error using  database: " . $conn->error;
		}

		// Query:
$User_id = $_SESSION['id'];

$presql = "SELECT * FROM QUALIFICATION where User_id = $User_id;";

// #$sql = "SELECT * FROM Students where Username like 'amai2';";
$preresult = $conn->query($presql);
$prerow = $preresult->fetch_assoc();
$Skills_ql = $prerow['Skills_ql'];
$array = explode(',', $Skills_ql);


$sql = "SELECT * FROM JOB, COMPANY where JOB.Company_id = COMPANY.Company_id AND ( Job_id < 0 ";
foreach($array as $v){
    $sql = $sql."OR Skills_rq LIKE '"%$v%"' OR Description like '"%$v%"'";
}
$sql = $sql." );";
// $sql = "SELECT * FROM JOB, COMPANY where JOB.Company_id = $Company_id AND JOB.Company_id = COMPANY.Company_id;";


$result = $conn->query($sql);

if($result->num_rows > 0){

?>
     <?php
        while($row = $result->fetch_assoc()){
     ?>
         <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                   <div class="caption">
                       <h2><?php echo $row['Name']?></h2>
                       <h3><?php echo $row['Position']?></h3>
                       <h4><?php echo $row['Property']?></h4>
                       <p>Apply before <?php echo $row['Application_deadline']?></p>
                       <p><?php echo $row['Location']?></p>
                   </div>
                   <p>
                       <a href="<?php echo "views.php?Job_id=".$row['Job_id'] ?>" class="btn btn-primary">More Info</a>
                   </p> 
                </div>
            </div>

<?php
}
}
else {
echo "Item not found";
}
?>

<?php
$conn->close();
?>  
    </div>

</body>
</html>
