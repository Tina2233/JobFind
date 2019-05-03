<!DOCTYPE html>
<?php 
    session_start();
?>
<html>
<head>
  <title><?php echo isset($page_title) ? $page_title : 'default title'; ?></title>
  

    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/main.css">
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">FindJob (main page)</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(! $_SESSION['Name']){ ?>
                        <li><a href="login_page.php">Login</a></li>
                        <li><a href="register_page.php">Sign Up</a></li>
                    <?php } else { ?>
                        <li><a href="#">Signed In As <?php echo $_SESSION['Type']?> &nbsp; <?php echo $_SESSION['Name']?></a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- <div class="container">
            <?php if(error && error.length > 0){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php= error ?>
                </div>
            <?php } ?>
            <?php if(success && success.length > 0){ ?>
                <div class="alert alert-success" role="alert">
                    <?php= success ?>
                </div>
            <?php } ?>
        </div> -->