<?php 
    $page_title = 'Edit Company Information';
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

    $Company_id = $_SESSION['id'];
    $sql = "SELECT * FROM Company where Company_id = '$Company_id' ;";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      ?>
  <p align="center">Here are your company information. You can change them.</p>
    <?php
      $row = $result->fetch_assoc();

  ?>

<h2 align="center"> Edit Company Information </h2>
<div style="width: 30%; margin:25px auto;">
  <form action="edit_info_insert.php" method="post">
    <!-- <div class="form-group">
            UserID: <input class="form-control" type="number" name="User_id" placeholder="User_id" min="1" step="1">
        </div> -->
      <div class="form-group">
          <span style="color:red">*</span>Company Name: <input class="form-control" type="text" name="Name" placeholder="Company's Name" required="required" value=<?php echo $row['Name']?>>
      </div>
    
      <div class="form-group">
          Scale: <input class="form-control" type="text" name="Scale" placeholder="Company's Scale" value=<?php echo $row['Scale']?>>
      </div>
   

      <button type="submit" class="btn btn-default">submit</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-default" onclick="location.href='manager.php'">return</button> 

    </form>

</div>
<?php

    } else {
      ?>
  <p align="center">You have no company profile yet. Let's create one.</p>
    <?php
    
  ?>
  <h2 align="center"> Create Company Information </h2>
<div style="width: 30%; margin:25px auto;">
  <form action="edit_info_insert.php" method="post">
    <!-- <div class="form-group">
            UserID: <input class="form-control" type="number" name="User_id" placeholder="User_id" min="1" step="1">
        </div> -->
      <div class="form-group">
          <span style="color:red">*</span>Company Name: <input class="form-control" type="text" name="Name" placeholder="Company's Name" required="required">
      </div>
    
      <div class="form-group">
          Scale: <input class="form-control" type="text" name="Scale" placeholder="Company's Scale">
      </div>
   

      <button type="submit" class="btn btn-default">submit</button>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="button" class="btn btn-default" onclick="location.href='manager.php'">return</button> 

    </form>

</div>
<?php
}
?>

</div>
</div>
<?php
include('inc/footer.php');