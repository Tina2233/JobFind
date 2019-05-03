<?php 
    $page_title = 'Delete a Job';
  include('inc/header.php');
 ?>

<div class="center">
<div class="form-style-8">

<h2 align="center"> Delete a Job </h2>
<div style="width: 30%; margin:25px auto;">

<form action="del_job_result.php" method="post">
	<div class="form-group">
        Job ID: <input class="form-control" type="number" name="Job_id" placeholder="Job_id" min="1" step="1" required="required">
    </div>

    <button type="submit" class="btn btn-default">submit</button>

</form>
</div>

<?php
include('inc/footer.php');