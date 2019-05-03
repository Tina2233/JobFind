<?php
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

    if ($Name && $Password){//如果用户名和密码都不为空
        $sql = "SELECT * FROM user where username = '$Name' AND password = '$Password' ;";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
     
    ?>
            <table class="table table-striped">
             <!-- <h2>Company + Name?!</h2>    -->
              <tr>
                 <th>id</th>
                 <th>username</th>
                 <th>password</th>
              </tr>
            <?php
            while($row = $result->fetch_assoc()){
            ?>
              <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['username']?></td>
                  <td><?php echo $row['password']?></td>
              </tr>
            </table> 

    <?php
            }
        }
        else {
        echo "Item not found";
        } 
    }
    else{//如果用户名或密码有空
        echo "表单填写不完整" . $sql . "<br>" . $conn->error;
        echo "
              <script>
                    setTimeout(function(){window.location.href='login.html';},2000);
              </script>";

                //如果错误使用js 1秒后跳转到登录页面重试;
    }

    ?>

 

<?php
$conn->close();
?>