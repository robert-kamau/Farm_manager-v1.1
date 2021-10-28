<!DOCTYPE html>
<html>
 <head>
 <title>kuku-farm</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
 queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page svia file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
 html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
 respond.min.js"></script>
 <![endif]-->
 <!--background-image-->
 <style>
   body {
     background-image: url("img/bg.jpg");
     background-repeat: no-repeat;
     background-attachment: fixed;
     background-position: center;
     background-size: cover;
   }
 </style>
 <!--background-image-->
 </head>
 <body>
 <?php include 'header.php'; ?>
      <div class="container"><!--container start-->        
           <br/><br/><br/>
           <div class="panel panel-info"><!--create user start-->
        <div class="panel-heading">
        <h3>Create User  <span class="glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-user"></span></h3>
        </div>
            <div class="panel-body">
                 <center>
                 <div class="alert alert-success alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Success!</strong> This alert box could indicate a successful or positive action.
                 </div>
                 <div class="alert alert-danger alert-dismissible fade in">
                 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                 <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
                 </div>
                <!--div style="font-size:11px; color:red; margin-top:10px"><?php echo $error; ?></div><br/-->
                 </center>
           <form action="/action_page.php">
           <div class="form-group">
           <label for="f_name">First name: *</label>
           <input type="text" class="form-control" id="f_name" placeholder="First Name">
           </div>
           <div class="form-group">
           <label for="l_name">Last name: *</label>
           <input type="text" class="form-control" id="l_name" placeholder="Last Name">
           </div>
           <div class="form-group">
           <label for="email">Email: *</label>
           <input type="email" class="form-control" id="email" placeholder="johndoe@gmail.com">
           </div>
           <div class="form-group">
           <label for="contact">Contact: *</label>
           <input type="text" class="form-control" id="contact" placeholder="Phone: +254">
           </div>
           <div class="form-group">
           <label for="pwd">Password: *</label>
           <input type="password" class="form-control" id="pwd" placeholder="Password">
           </div>
           <div class="form-group">
           <label for="c_pwd">Password: *</label>
           <input type="password" class="form-control" id="c_pwd" placeholder="Confirm Password">
           </div>
           <button type="submit" class="btn btn-primary btn-block">Submit</button>
           </form>
     </div>
    </div>
   </div>
                 </div>
</div><!--create user end -->

     

     </div><!--container end-->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://code.jquery.com/jquery.js"></script>
 <!-- Include all compiled plugins (below), or include individual files 
 as needed -->
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>

