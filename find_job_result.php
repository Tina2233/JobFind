<?php 
    $page_title = 'Find a Job';
  include('inc/header.php');

require_once('db_setup.php');
$sql = "USE test;";
if ($conn->query($sql) === TRUE) {
   // echo "using Database tbiswas2_company";
} else {
   echo "Error using  database: " . $conn->error;
}
// Query:
// if ($_POST['Name']) {
//   echo $_POST['Position'];
// }

// $sql = "SELECT * FROM Company, Job where Company.Company_id = Job.Company_id";
// // if ($_POST['Name']) {
// //   $Name = $_POST['Name'];
// //     $sql = $sql . "and Name = '$Name' ";
// // }
// // if ($_POST['Position']) {
// //     $Position = $_POST['Position'];
// //     $sql = $sql . "and Position LIKE '%$Position%' ";
// //   }
// if ($_POST['Location']) {
//     $Location = $_POST['Location'];
//     $sql = $sql . "and Location LIKE '%$Location%' ";
//   } else {echo "1";}



// if ($_POST['Name']) {
//   $Name = $_POST['Name'];
// $sql = "SELECT * FROM Company, Job where Name = '$Name' and Company.Company_id = Job.Company_id";
//   if ($_POST['Position']) {
//     $Position = $_POST['Position'];
//     $sql = $sql . "and Position LIKE '%$Position%' ";
//   if ($_POST['Location']) {
//     $Location = $_POST['Location'];
//     $sql = $sql . "and Location LIKE '%$Location%' ";
//   }
// }
  
// } elseif ($_POST['Position']) {
//   $Position = $_POST['Position'];
//   $sql = "SELECT * FROM Company, Job where Position LIKE '%$Position%' and Company.Company_id = Job.Company_id";
//   if ($_POST['Location']) {
//     $Location = $_POST['Location'];
//     $sql = $sql . "and Location LIKE '%$Location%' ";
//   }
// } elseif ($_POST['Location']) {
//   $Location = $_POST['Location'];
//   $sql = "SELECT * FROM Company, Job where Location LIKE '%$Location%' and Company.Company_id = Job.Company_id";
// } else{
//   echo "Please insert at least one condition.";
//   echo "
//               <script>
//                     setTimeout(function(){window.location.href='find_job.php';},200);
//               </script>";
//   // please insert at least one condition & go back to the last page
// }
if ($_POST['Name']) {
  $Name = $_POST['Name'];
  // $sql = "SELECT * FROM Company, Job where Name = '$Name' ";
  if ($_POST['Position']) {
    $Position = $_POST['Position'];
    // $sql = $sql . "and Position like '%$Position%' ";
    if ($_POST['Location']) {
      $Location = $_POST['Location'];
      $sql = "SELECT * FROM Company, Job where Name = '$Name' and Position like '%$Position%' and Location like '%$Location%' and Company.Company_id = Job.Company_id;";
    }else{
      $sql = "SELECT * FROM Company, Job where Name = '$Name' and Position like '%$Position%' and Company.Company_id = Job.Company_id;";
    }
  }
  else{
    if ($_POST['Location']) {
      $Location = $_POST['Location'];
      $sql = "SELECT * FROM Company, Job where Name = '$Name' and Location like '%$Location%' and Company.Company_id = Job.Company_id;";
    }else{
      $sql = "SELECT * FROM Company, Job where Name = '$Name' and Company.Company_id = Job.Company_id;";
    }

}
} else{
  if ($_POST['Position']) {
    $Position = $_POST['Position'];
    // $sql = $sql . "and Position like '%$Position%' ";
    if ($_POST['Location']) {
      $Location = $_POST['Location'];
      $sql = "SELECT * FROM Company, Job where Position like '%$Position%' and Location like '%$Location%' and Company.Company_id = Job.Company_id;";
    }else{
      $sql = "SELECT * FROM Company, Job where Position like '%$Position%'and Company.Company_id = Job.Company_id;";
    }
  }
  else{
    if ($_POST['Location']) {
      $Location = $_POST['Location'];
      $sql = "SELECT * FROM Company, Job where Location like '%$Location%'and Company.Company_id = Job.Company_id;";
    }else{
      $sql = "SELECT * FROM Company, Job where Company.Company_id = Job.Company_id;";
    }
  }
}

$result = $conn->query($sql);

if($result->num_rows > 0){
 
//$stmt = $conn->prepare("Select * from Students Where Username like ?");
//$stmt->bind_param("s", $username);
//$result = $stmt->execute();
//$result = $conn->query($sql);
?>
   <table class="table table-striped">
    <!-- <h2>Company + Name?!</h2>   --> 
      <tr>
         <th>Company Name</th>
         <th>Company Scale</th>

         <!-- <th>Job id</th>
         <th>Company id</th> -->
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
          <td><?php echo $row['Name']?></td>
          <td><?php echo $row['Scale']?></td>
          <!-- <td><?php echo $row['Job_id']?></td>
          <td><?php echo $row['Company_id']?></td> -->
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
  echo "<script> if(confirm( 'Job not found. Try a new one?'))  location.href='find_job.php';else location.href='home.php'; </script>"; 
}
?>

    </table>

    <div align="center" style="margin-bottom: 100px">
       <button type="button" class="btn btn-default" onclick="location.href='find_job.php'">return</button> 
    </div>
  
      

<?php
$conn->close();
?>  

<?php
include('inc/footer.php');
