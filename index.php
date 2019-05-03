<?php
$page_title = 'FindJob System';

include('inc/header.php');
?>

<style>
    body {
      background-image: url(https://www.rewire.org/wp-content/uploads/2019/01/How-to-Avoid-Job-Search-Burnout-and-Find-the-Job-You-Want_CMS.jpg);
      /*  https://ss2.bdstatic.com/70cFvnSh_Q1YnxGkpoWK1HF6hhy/it/u=3510835722,2835329334&fm=26&gp=0.jpg);*/
      /*opacity:0.2;*/
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size:100% 100%;
            -moz-background-size:100% 100%;
      /*background-position: left;*/
    }
/*    h1 {color: white; text-align: center; margin-top: 50px; font-family: Bad Script;}*/
    p {font-family:"Bad Script"; margin-top: 100px; font-size:40px; margin-left: 340px;

    /*background-color: white; background-color: opacity:0.1;*/
  }
  </style>

<div class="center form-style-8">
<div></div>
<p> Welcome <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to <br>
FindJob <br>
Website </p>



<?php
if (isset($_SESSION['Type'])){
    $username = $_SESSION['Name'];

    if ($_SESSION['Type'] === "A") {
      // echo "<script> alert( 'Hi   $Type  $username, WELCOME TO FINDJOB!'); </script>"; 
      echo "
          <script>
              setTimeout(function(){window.location.href='home.php';},3000);
          </script>";

      } else {
        echo "
          <script>
              setTimeout(function(){window.location.href='manager.php';},3000);
          </script>";
      } 

    } 


include('inc/footer.php');



	
