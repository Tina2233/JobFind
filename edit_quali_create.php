<?php 
    $page_title = 'Edit Applicant Qualifications';
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

		$User_id = $_SESSION['id'];

		$sql = "SELECT * FROM Qualification where User_id = '$User_id' ;";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			//show the current information, and then user can edit them.
			?>
               <p align="center">Here are your qualification information. You can change them.</p>
            <?php
        	echo "";
        	$row = $result->fetch_assoc();
	?>
	<h2 align="center"> Edit Qualifications </h2>
<div style="width: 30%; margin:25px auto;">
	<form action="edit_quali_insert.php" method="post">
		<!-- <div class="form-group">
            UserID: <input class="form-control" type="number" name="User_id" placeholder="User_id" min="1" step="1">
        </div> -->
	
	    <div class="form-group">
	        Skills_ql: <input class="form-control" type="text" name="Skills_ql" placeholder="eg. java,c (splitted by comma)" value="<?php echo $row['Skills_ql']?>">
	    </div>
	    <div class="form-group">
	        Project: <input class="form-control" type="text" name="Project" placeholder="eg. A" value="<?php echo $row['Project']?>">
	    </div>
	    <div class="form-group">
	        Work Experience: <input class="form-control" type="text" name="Work_experience" placeholder="eg. Amazon" value="<?php echo $row['Work_experience']?>">
	    </div>

	    <button type="submit" class="btn btn-default">submit</button>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-default" onclick="location.href='home.php'">return</button> 

		</form>

</div>
<?php

		// $sql = "DELETE FROM Applicant where User_id = '$User_id'; ";
		// $conn->query($sql);
		} else {
			?>
               <p align="center">You have no applicant profile yet. Let's create one.</p>
            <?php

	?>





<h2 align="center"> Insert Qualifications </h2>
<div style="width: 30%; margin:25px auto;">
	<form action="edit_quali_insert.php" method="post">
		<!-- <div class="form-group">
            UserID: <input class="form-control" type="number" name="User_id" placeholder="User_id" min="1" step="1">
        </div> -->
	
	    <div class="form-group">
	        Skills_ql: <input class="form-control" type="text" name="Skills_ql" placeholder="eg. java,c (splitted by comma)" value=<?php echo $row['Skills_ql']?>>
	    </div>
	    <div class="form-group">
	        Project: <input class="form-control" type="text" name="Project" placeholder="eg. A" value=<?php echo $row['Project']?>>
	    </div>
	    <div class="form-group">
	        Work Experience: <input class="form-control" type="text" name="Work_experience" placeholder="eg. Amazon" value=<?php echo $row['Work_experience']?>>
	    </div>

	    <button type="submit" class="btn btn-default">submit</button>
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-default" onclick="location.href='home.php'">return</button> 

		</form>

</div>
<?php
}
?>
</div>
</div>
<?php
include('inc/footer.php');