<?php
$page_title = 'Edit User Password';

include('inc/header.php');
?>

<div class="container">
    <div class="row">
      <h1 style="text-align: center">Change Password</h1>
        <div style="width: 30%; margin:25px auto;" align="center">

        <form name="login" action="edit_password_change.php" method="post">
            <div class="form-group">
                Original Password: <input type="password" name="Ori_password" placeholder="Original Password" required="required">
             </div>

            <div class="form-group">
                New Password: <input type="password" name="New_password" placeholder="New Password" required="required">
             </div>

          
          <!--   <div class="menu">
              Applicant <input type="radio" name="Type" value="A">
              &nbsp; Company Manager <input type="radio" name="Type" value="C">
            </div> -->

            &emsp;

            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block">Verify</button>
            </div>
            </form>
          </div>
        </div>
      </div>

<?php
include('inc/footer.php');