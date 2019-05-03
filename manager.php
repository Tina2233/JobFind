<?php 
    $page_title = 'Company Manager Home Page';
	include('inc/header.php');
?>

<div class="container">
     <header class="jumbotron">
         <div class="container">
             <h1>Welcome To JobFind!</h1>
             <p>Find best applicants from all over the world</p>
             <p>
                <a class="btn btn-primary btn-large" href="edit_info_create.php">Edit Company Information</a>
                <a class="btn btn-primary btn-large" href="add_job_show.php">Post New Jobs</a>
                <a class="btn btn-primary btn-large" href="edit_password_verify.php">Change Password</a>
                <!-- <a class="btn btn-primary btn-large" href="add_job_show.php">Edit Requirements to Exist Job</a> -->
             </p>
         </div>
     </header>
     <div class="row text-center" style="display:flex; flex-wrap: wrap;">

<?php
require_once('db_setup.php');
$sql = "USE test;";
if ($conn->query($sql) === TRUE) {

} else {
   echo "Error using  database: " . $conn->error;
}
// Query:

//get company_id from session
$Company_id = $_SESSION['id'];
$sql = "SELECT * FROM JOB, COMPANY where JOB.Company_id = $Company_id AND JOB.Company_id = COMPANY.Company_id;";

#$sql = "SELECT * FROM Students where Username like 'amai2';";
$result = $conn->query($sql);

if($result->num_rows > 0){

?>
     <?php
        while($row = $result->fetch_assoc()){
     ?>
         <!-- <div class="col-md-3 col-sm-6"> -->
          <div class="col-sm-3"> 
                <div class="thumbnail">
                   <div class="caption">
                       <h2><?php echo $row['Name']?></h2>
                       <h3><?php echo $row['Position']?></h3>
                       <h4><?php echo $row['Property']?></h4>
                       <p>Apply before <?php echo $row['Application_deadline']?></p>
                       <p><?php echo $row['Location']?></p>
                   </div>
                   <p>
                       <a href="<?php echo "edit_job_show.php?Job_id=".$row['Job_id'] ?>" class="btn btn-primary">Edit</a>
                       <a href="<?php echo "del_job_result.php?Job_id=".$row['Job_id'] ?>" class="btn btn-primary">Delete</a>
                   </p>
                </div>
            </div>

<?php
}
}
else {
echo "No posted job yet";
}
?>

<?php
$conn->close();
?>  
    </div>
    </div>
</body>
</html>