<?php 
    $page_title = 'Edit Applicant Profile';
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

		$sql = "SELECT * FROM Applicant where User_id = '$User_id' ;";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			//show the current information, and then user can edit them.
			?>
               <p align="center">Here are your applicant information. You can change them.</p>
            <?php
        
        	$row = $result->fetch_assoc();
?>
<h2 align="center"> Edit Applicant Information</h2>
<div style="width: 30%; margin:25px auto;">
	<form action="edit_profile_insert.php" method="post">
		<!-- <div class="form-group">
            UserID: <input class="form-control" type="number" name="User_id" placeholder="User_id" min="1" step="1">
        </div> -->
		<div class="form-group">
	        <span style="color:red">*</span>First Name: <input class="form-control" type="text" name="First_name" placeholder="First_name" required="required" value=<?php echo $row['First_name']?>>
	    </div>
	    <div class="form-group">
          <span style="color:red">*</span>Last Name: <input class="form-control" type="text" name="Last_name" placeholder="Last_name" required="required" value=<?php echo $row['Last_name']?>>
      </div>
      <div class="form-group">
          Gender: <input class="form-control" type="text" name="Gender" placeholder="M / F" value=<?php echo $row['Gender']?>>
      </div>
      <div class="form-group">
          <span style="color:red">*</span>Phone Number: <input class="form-control" type="text" name="Phone_no" placeholder="10 digits number" length="10" required="required" value=<?php echo $row['Phone_no']?>>
      </div>
      <div class="form-group">
          <span style="color:red">*</span>Email Address: <input class="form-control" type="text" name="Email_addr" placeholder="email@ur.rochester.edu" required="required" value=<?php echo $row['Email_addr']?>>
      </div>
      <div class="form-group">
          Address: <input class="form-control" type="text" name="Address" placeholder="your local address (3 digits number)" value=<?php echo $row['Address']?>>
      </div>
      <div class="form-group">
          Education Background: <input class="form-control" type="text" name="Education_background" placeholder="B / M / P" value=<?php echo $row['Education_background']?>>
      </div>

	    <button type="submit" class="btn btn-default">edit</button>
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

<h2 align="center"> Insert Applicant </h2>
<div style="width: 30%; margin:25px auto;">
	<form action="edit_profile_insert.php" method="post">
		<!-- <div class="form-group">
            UserID: <input class="form-control" type="number" name="User_id" placeholder="User_id" min="1" step="1">
        </div> -->
		<div class="form-group">
	        <span style="color:red">*</span>First Name: <input class="form-control" type="text" name="First_name" placeholder="First_name" required="required">
	    </div>
	    <div class="form-group">
	        <span style="color:red">*</span>Last Name: <input class="form-control" type="text" name="Last_name" placeholder="Last_name" required="required">
	    </div>
	    <div class="form-group">
	        Gender: <input class="form-control" type="text" name="Gender" placeholder="M / F" >
	    </div>
	    <div class="form-group">
	        <span style="color:red">*</span>Phone Number: <input class="form-control" type="text" name="Phone_no" placeholder="10 digits number" length="10" required="required">
	    </div>
	    <div class="form-group">
	        <span style="color:red">*</span>Email Address: <input class="form-control" type="text" name="Email_addr" placeholder="email@ur.rochester.edu" required="required">
	    </div>
	    <div class="form-group">
	        Address: <input class="form-control" type="text" name="Address" placeholder="your local address (3 digits number)">
	    </div>
	    <div class="form-group">
	        Education Background: <input class="form-control" type="text" name="Education_background" placeholder="B / M / P">
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

