<?php
$page_title = 'User Login';

include('inc/header.php');
// echo '<div style="width:100%;height:825px;background-color:skyblue;">首页主体</div>';
?>

<div class="container">
    <div class="row">
      <h1 style="text-align: center">Login!</h1>
        <div style="width: 30%; margin:25px auto;" align="center">

        <form name="login" action="login.php" method="post">
            <div class="form-group">
                Username: <input type="text" name="Name" placeholder="User's Name">
             </div>

            <div class="form-group">
                Password: <input type="password" name="Password" placeholder="User's Password">
             </div>

          
            <div class="menu">
              Applicant <input type="radio" name="Type" value="A">
              &nbsp; Company Manager <input type="radio" name="Type" value="C">
            </div>

            &emsp;

            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Login!</button>
            </div>
                <!-- <p>User Name<input type=text name="name"></p>
                <p>Password<input type=password name="password"></p>

                <button type="submit" class="btn btn-default">login</button> -->
                <!-- <p><input type="submit" name="submit" value="登录"></p> -->
            </form>
          </div>
        </div>
      </div>

<?php
include('inc/footer.php');