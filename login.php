<?php 
    $page_title = 'User Login';
  include('inc/header.php');
    require_once('db_setup.php');
    $sql = "USE test;";
    if ($conn->query($sql) === TRUE) {
       // echo "using Database tbiswas2_company";
    } else {
       echo "Error using  database: " . $conn->error;
    }
    // Query:
    $Name = $_POST['Name'];//post获取表单里的name
    $Password = $_POST['Password'];//post获取表单里的password
    $Type = $_POST['Type'];//post获取表单里的type

    if ($Name && $Password && $Type){//如果用户名和密码都不为空
        $sql = "SELECT * FROM user where username = '$Name' AND password = '$Password' AND type = '$Type' ;";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
        	$_SESSION['Name'] = $Name;
          	$_SESSION['Type'] = $Type;
        } else {
          echo "<script> if(confirm( 'Information mismatching. Try again?'))  location.href='login_page.php';else location.href='index.php'; </script>"; 
        	
        } 

        $sql = "SELECT id FROM user WHERE username = '$Name' and type = '$Type'; ";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $User_id = $row['id'];
        $_SESSION['id'] = $User_id;


    } else{//如果用户名或密码有空
      echo "<script> if(confirm( 'The information is not completed. Try again?'))  location.href='login_page.php';else location.href='index.php'; </script>"; 
        // echo  $sql . "<br>" . $conn->error;
    }


	if (isset($_SESSION['Name'])){
		$username = $_SESSION['Name'];

		if ($Type === "A") {
      echo "<script> alert( 'Hi   $Type  $username, WELCOME TO FINDJOB!'); </script>"; 
      echo "
          <script>
              setTimeout(function(){window.location.href='home.php';},100);
          </script>";
			// echo "Hi " . $Type . $username ;

    	} elseif ($Type === "C") {
        echo "<script> alert( 'Hi   $Type  $username, WELCOME TO FINDJOB!'); </script>"; 
    		echo "
      		<script>
            	setTimeout(function(){window.location.href='manager.php';},100);
      		</script>";
    	} else 
    	{echo $sql . "<br>" . $conn->error;}


    } else {
    	echo "
              <script>
                    setTimeout(function(){window.location.href='login_page.php';},100);
              </script>";
    }

    ?>

 

<?php
$conn->close();
include('inc/footer.php');                             
