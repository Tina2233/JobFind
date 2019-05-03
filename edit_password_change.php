<?php 
    $page_title = 'Edit User Password';
  include('inc/header.php');
    require_once('db_setup.php');
    $sql = "USE test;";
    if ($conn->query($sql) === TRUE) {
       // echo "using Database tbiswas2_company";
    } else {
       echo "Error using  database: " . $conn->error;
    }
    // Query:
    $Name = $_SESSION['Name'];//post获取表单里的name
    $Ori_password = $_POST['Ori_password'];//post获取表单里的password
    $New_password = $_POST['New_password'];
    $Type = $_SESSION['Type']; //post获取表单里的type

    if ($Name && $Ori_password){//如果用户名和密码都不为空
        $sql = "SELECT * FROM user where username = '$Name' AND password = '$Ori_password' ;";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
          // original password correct
        	// $_SESSION['Name'] = $Name;
         //  	$_SESSION['Type'] = $Type;
            // echo "<script> alert( 'Original Password Correct!'); </script>"; 
            $sql = "UPDATE user SET password = '$New_password' where username = '$Name' ;";

            $result = $conn->query($sql);

             ?>
               <p align="center">Password Changed Succesfully!</p>
            <?php


            if ($Type === "A") {
               echo "
                  <script>
                      setTimeout(function(){window.location.href='home.php';},800);
                  </script>";
              // echo "Hi " . $Type . $username ;

              } elseif ($Type === "C") {
                echo "
                  <script>
                      setTimeout(function(){window.location.href='manager.php';},800);
                  </script>";
              }


        } else {
          echo "<script> if(confirm( 'Original Password mismatching. Try again?'))  location.href='edit_password_verify.php';else location.href='index.php'; </script>"; 
        	
        } 


    } else{//如果用户名或密码有空
      echo "<script> if(confirm( 'The information is not completed. Try again?'))  location.href='edit_password_verify.php';else location.href='index.php'; </script>"; 
        // echo  $sql . "<br>" . $conn->error;
    }


    ?>

 

<?php
$conn->close();
include('inc/footer.php');                             
