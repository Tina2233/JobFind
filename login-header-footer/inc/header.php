<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title><?php echo isset($page_title) ? $page_title : '默认标题'; ?></title>
</head>
<body>
<nav class="navbar navbar-default">
  <div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span>Toggle navigation</span>
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">首页 <span>(current)</span></a></li>
        <li><a href="#">Link</a></li>
       
      </ul>
      <form class="navbar-form navbar-left">
        <div>
          <input type="text" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><?php if((isset($_COOKIE['user_id']))&&basename($_SERVER['PHP_SELF'])!='logout.php'){
  echo '<a href="logout.php">退出</a>';
}else{
  echo '<a href="login.php">登录</a>';
} ?></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>