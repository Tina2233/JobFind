<?php 
    $page_title = 'Find a Job';
  include('inc/header.php');
?>

<!--         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="/stylesheets/main.css">
<link rel="stylesheet" href="form8.css"> -->


<div class="center">
<div class="form-style-8">


<h2 align="center"> Find a Job </h2>
<div style="width: 30%; margin:25px auto;">

<form action="find_job_result.php" method="post">
	<div class="form-group">
        Company Name: <input class="form-control" type="text" name="Name" placeholder="Company's Name">
    </div>
    <div class="form-group">
        Position: <input class="form-control" type="text" name="Position" placeholder="desired job position">
    </div>
    <div class="form-group">
        Location: <input class="form-control" type="text" name="Location" placeholder="desired working place">
    </div>

    <button type="submit" class="btn btn-default">submit</button>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-default" onclick="location.href='home.php'">return</button> 

</form>
</div>
<?php
include('inc/footer.php');