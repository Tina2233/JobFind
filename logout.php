<?php
session_start();
session_destroy();
// header('Location: login.php');
echo "
      		<script>
            	setTimeout(function(){window.location.href='index.php';},100);
      		</script>";
?>