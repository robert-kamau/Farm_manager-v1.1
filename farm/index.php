<!DOCTYPE html>
<html>
 <head>
 <title>kuku-farm</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="css/pop.css">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
 queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page svia file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
 html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
 respond.min.js"></script>
 <![endif]-->
 </head>
 <body>
           <nav class="navbar navbar-inverse" role="navigation"><!--start of navbar-->
            <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Kuku Chick Farm</a>
            </div>       
           </nav><!--end of navbar-->
<div class="container">
<!--<center><div class="alert alert-success"><strong><?php include 'db_connect.php' ?></strong></div></center>-->
<div class="jumbotron"><!--jumbotron start-->
    <h1 class="display-4">Welcome to Farm management</h1>
    <p class="lead">Your one stop for easy farm management.</p>
    <hr class="my-4">
    <h5>Kindly Log In to continue</h5>
      <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#login-modal">Log In <span class="glyphicon glyphicon-log-in"></span></button>
  </div><!--jumbotron end-->

  <!--pop-up log in form start-->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
          <div class="loginmodal-container">
              <h1>Login to Your Account</h1><br>
            <form action="#" method="POST">
            <label for="first_name" >Username: </label>
              <input type="text" name="user" placeholder="Username">
              <label for="first_name" >Password: </label>
              <input type="password" name="pass" placeholder="Password">
              <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>
               
            <div class="login-help">
              <a href="admin/summary.php">Forgot Password?</a> -
              <a href="users/summary.php">Reset Password.</a>
            </div>
          </div>
      </div>
    </div><!--pop-up log in form end-->


</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files 
as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>