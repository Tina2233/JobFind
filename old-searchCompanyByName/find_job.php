<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE test;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
$Job_id = $_POST['Job_id'];
$sql = "SELECT * FROM Job where Job_id = $Job_id;";

#$sql = "SELECT * FROM Students where Username like 'amai2';";
$result = $conn->query($sql);

if($result->num_rows > 0){
 
//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>
   <table class="table table-striped">
      <tr>
         <th>Job id</th>
         <th>Company id</th>
         <th>Position</th>
         <th>Property</th>
         <th>Category</th>
         <th>Application Deadline</th>
         <th>Location</th>
      </tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['Job_id']?></td>
          <td><?php echo $row['Company_id']?></td>
          <td><?php echo $row['Position']?></td>
          <td><?php echo $row['Property']?></td>
          <td><?php echo $row['Category']?></td>
          <td><?php echo $row['Application_deadline']?></td>
          <td><?php echo $row['Location']?></td>
      </tr>

<?php
}
}
else {
echo "Item not found";
}
?>

    </table>

<?php
$conn->close();
?>  

</body>
</html>
