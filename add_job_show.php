<?php 
    $page_title = 'Add a Job';
  include('inc/header.php');
?>

<div class="center">
<div class="form-style-8">


<h2 align="center"> Add a Job </h2>
<div style="width: 30%; margin:25px auto;">


<form action="add_job_result.php" method="post">
	<!-- <div class="form-group">
        Job ID: <input class="form-control" type="number" name="Job_id" placeholder="Job_id" min="1" step="1">
    </div> -->
    <!-- <div class="form-group">
        Company ID: <input class="form-control" type="number" name="Company_id" placeholder="Company_id" min="1" step="1">
    </div> -->
	<div class="form-group">
	    <span style="color:red">*</span>Position: <input class="form-control" type="text" name="Position" placeholder="eg. Data Analyst" required="required">
	    
	</div>
	<div class="form-group">
	    <span style="color:red">*</span>Property: <input class="form-control" type="text" name="Property" placeholder="full-time / part-time" required="required">
	</div>
	<div class="form-group">
	    Category: <input class="form-control" type="text" name="Category" placeholder="eg. Program Management">
	</div>
    <div class="form-group">
        <span style="color:red">*</span>Application Deadline: <input class="form-control" type="date" name="Application_deadline" placeholder="YYYY-MM-DD" required="required">
    </div>
    <div class="form-group">
	    Location: <input class="form-control" type="text" name="Location" placeholder="eg. Salt">
	</div>

	<div class="form-group">
	    Required Skills: <input class="form-control" type="text" name="Skills_rq" placeholder="eg. java,c++">
	</div>
	<div class="form-group">
	    Description: <input class="form-control" type="text" name="Description" placeholder="eg. Develop new system">
	</div>
	<div class="form-group">
	    Minimal_education: <input class="form-control" type="text" name="Minimal_education" placeholder="eg. M">
	</div>

	<button type="sumit" class= "btn btn-default">submit</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-default" onclick="location.href='manager.php'">return</button> 
      <div>
      	
      </div>

</form>
</div>
</div>

<?php
include('inc/footer.php');
