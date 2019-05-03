<?php 
    $page_title = 'User Register';
  include('inc/header.php');
    require_once('db_setup.php');
    $sql = "USE test;";
    if ($conn->query($sql) === TRUE) {
    } else {
       echo "Error using  database: " . $conn->error;
    }
    // Query:
    $name=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
    $type=$_POST['type'];//post获取表单里的type

    // -----name & password are not empty-----
    if ($name and $password and $type) {

        //-----username is out of range-----
        if (strlen($name) > 10) {

            echo "<script> if(confirm( 'The username you entered is too long. Try a shorter one?'))  location.href='register_page.php';else location.href='index.php'; </script>"; 

            // echo "The username you entered is too long." . $sql . "<br>" . $conn->error;

        } else if (strlen($name) < 3){
            echo "<script> if(confirm( 'The username you entered is too short. Try a longer one?'))  location.href='register_page.php';else location.href='index.php'; </script>"; 

        }
        else {
            // -----username used or not-----
            $sql = "SELECT * FROM user where username = '$name';";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<script> if(confirm( 'The username has already been used. Try another username?'))  location.href='register_page.php';else location.href='index.php'; </script>"; 

            } else {
                $sql = "INSERT INTO user(id,username,password,type) values (null,'$name','$password','$type');";
                $result = $conn->query($sql);

                if ($result === TRUE) {
                    echo "<script> if(confirm( 'New record created successfully. Login now?'))  location.href='login_page.php';else location.href='index.php'; </script>"; 
                 //    echo "
              			// <script>
                 //    		setTimeout(function(){window.location.href='login_page.php';},2000);
              			// </script>";
                    
                }

            }

        }

    } else {
        echo "<script> if(confirm( 'Form is not completed. Finish it?'))  location.href='register_page.php';else location.href='index.php'; </script>"; 

        // echo "" . $sql . "<br>" . $conn->error;
        
    }


include('inc/footer.php');
