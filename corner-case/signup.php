<?php 
    require_once('db_setup.php');
    $sql = "USE test;";
    if ($conn->query($sql) === TRUE) {
       // echo "using Database tbiswas2_company";
    } else {
       echo "Error using  database: " . $conn->error;
    }
    // Query:
    $name=$_POST['name'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password

    // -----name & password are not empty-----
    if ($name and $password) {

        //-----username is out of range-----
        if (strlen($name) > 10) {
            echo "The username you entered is too long." . $sql . "<br>" . $conn->error;
            echo "
              <script>
                    setTimeout(function(){window.location.href='signup.html';},2000);
              </script>";

                //如果错误使用js 2秒后跳转到登录页面重试;

        } else {
            // -----username used or not-----
            $sql = "SELECT * FROM user where username = '$name';";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "The username has already been used. Please try another username.";
                echo "
                      <script>
                            setTimeout(function(){window.location.href='signup.html';},2000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
            } else {
                $sql = "INSERT INTO user(id,username,password) values (null,'$name','$password')";
                $result = $conn->query($sql);

                if ($result === TRUE) {
                    echo "New record created successfully";
                    echo "
                      <script>
                            setTimeout(function(){window.location.href='login.html';},2000);
                      </script>";

                    //如果成功使用js 2秒后跳转到登录页面;
                }

            }

        }

    } else {
        echo "表单填写不完整" . $sql . "<br>" . $conn->error;
        echo "
              <script>
                    setTimeout(function(){window.location.href='signup.html';},2000);
              </script>";

                //如果错误使用js 2秒后跳转到登录页面重试;
    }

 

?>