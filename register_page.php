<?php
$page_title = 'User Register';

include('inc/header.php');
// echo '<div style="width:100%;height:825px;background-color:skyblue;">首页主体</div>';
?>

<div class="container">
    <div class="row">
      <h1 style="text-align: center">Sign Up!</h1>
        <div style="width: 30%; margin:25px auto;" align="center">
        <form name="signup" action="register.php" method="post">
        	<!-- 1. input: user name
                   password 
                   Type: A/C -->

   			<!-- 2. post input to register.php -->
            <div class="form-group">
              <!-- id="name" -->
            Username: <input type="text" name="name" placeholder="only letters and digitals" 
                onkeyup="value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')" onpaste="value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')" oncontextmenu = "value=value.replace(/[^\a-\z\A-\Z0-9]/g,'')"> 
              </div>

            <div class="form-group">
              <!-- id="password"  -->
            Password: <input type="password" name="password" placeholder="more than 3 characters" minlength="3" maxlength="40">
            </div>

            <!-- <div class="form-group" align="center">
            Type: <input id="type" type="text" name="type" placeholder="A / C">
            </div> -->

            <div class="menu">
            	Applicant <input type="radio" name="type" value="A">
            	&nbsp; Company Manager <input type="radio" name="type" value="C">
            </div>

            &emsp;

            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Sign Up</button>
            </div>
        </form>
      </div>
    </div>
</div>


<?php
include('inc/footer.php');