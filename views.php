<?php 
    $page_title = 'Edit a Job';
  include('inc/header.php');
?>

<div class="center">
<div class="form-style-8">

<?php
	require_once('db_setup.php');
	$sql = "USE test;";
	if ($conn->query($sql) === TRUE) {
		// echo "using Database tbiswas2_company";
	} else {
		echo "Error using  database: " . $conn->error;
	}

	$Job_id = $_GET['Job_id'];
	$sql = "SELECT * From JOB where Job_id = $Job_id;";
	$result = $conn->query($sql);

	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
	?>

<h2 align="center"> Edit a Job </h2>
<div style="width: 30%; margin:25px auto;">


<form action="<?php echo "edit_job_result.php?Job_id=".$row['Job_id'] ?>" method="post">
	<!-- <div class="form-group">
        Job ID: <input class="form-control" type="number" name="Job_id" placeholder="Job_id" min="1" step="1">
    </div> -->
    <!-- <div class="form-group">
        Company ID: <input class="form-control" type="number" name="Company_id" placeholder="Company_id" min="1" step="1">
    </div> -->
	<div class="form-group">
		<span style="color:red">*</span>Position: <input class="form-control" type="text" name="Position" readonly value=<?php echo $row['Position']?>>
	</div>
	<div class="form-group">
	    <span style="color:red">*</span>Property: <input class="form-control" type="text" name="Property" readonly value=<?php echo $row['Property']?>>
	</div>
	<div class="form-group">
	    Category: <input class="form-control" type="text" name="Category" readonly value=<?php echo $row['Category']?>>
	</div>
    <div class="form-group">
        <span style="color:red">*</span>Application Deadline: <input class="form-control" type="date" name="Application_deadline" readonly value=<?php echo $row['Application_deadline']?>>
    </div>
    <div class="form-group">
	    Location: <input class="form-control" type="text" name="Location" readonly value=<?php echo $row['Location']?>>
	</div>

	<div class="form-group">
	    Required Skills: <input class="form-control" type="text" name="Skills_rq" readonly value=<?php echo $row['Skills_rq']?>>
	</div>
	<div class="form-group">
	    Description: <input class="form-control" type="text" name="Work_experience"  readonly value=<?php echo $row['Work_experience']?>>
	</div>
	<div class="form-group">
	    Minimal_education: <input class="form-control" type="text" name="Minimal_education"  readonly value=<?php echo $row['Minimal_education']?>>
	</div>

      <button type="button" class="btn btn-default" onclick="location.href='home.php'">return</button> 
      <div>
      	
      </div>

</form>
</div>
</div>

<?php
	}

include('inc/footer.php');
?>