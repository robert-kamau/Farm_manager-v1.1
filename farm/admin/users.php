<script>
<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "kcf_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$contact = $_REQUEST['contact'];
		$password = $_REQUEST['password'];
		$confirm_password = $_REQUEST['confirm_password'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO kcf_users VALUES ('user_id','$first_name','$last_name','$email','$contact','$password','$confirm_password')";
		
  		?>
    </script>

<!DOCTYPE html>
<html lang="en">
 <head>
 <title>kuku-farm</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
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
           <!--img src="img/kuku.png" alt="Nature" class="responsive" height="200%" width="100%"-->
           <br/><br/><br/>
           <div class="container"><!--container start-->
           <div class="panel panel-default"><!--Create user jumbotron start-->
            <div class="panel-heading">
                <h4>Create User  <span class="glyphicon glyphicon-plus"></span><span class="glyphicon glyphicon-user"></span></h4>
            </div>
            <div class="panel-body">
              
            <div class="alert alert-success alert-dismissible">
             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> This alert box could indicate a successful or positive action.
             </div>
                        
                           <script>
                           <?php
                           /*if(mysqli_query($conn, $sql)){
		                      	echo "<h3>User created successfully.</h3>";

			                    echo nl2br("Welcome $first_name\t $last_name\t $email\t to Kuku Farm");
		                            } else{
			                      echo "ERROR: Hush! Sorry $sql. "
			                       	. mysqli_error($conn);
		                             }
                             */?>
                           </script>
                          
                <div class="btn-group">
                    <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#login-modal">Create New <span class="glyphicon glyphicon-plus-sign"></span></button>
                    <button type="button" class="btn btn-danger">Delete User <span class="glyphicon glyphicon-remove-sign"></span></button>
                 </div>
            </div>
            </div>
         </div><!--Create user jumbotron end -->           
        
         <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;"><!--pop-up signin form start-->
                <div class="modal-dialog">
                      <div class="loginmodal-container">
                          <h2>Create New User</h2><br>
                        <form action="users.php" method="POST">
                          <label for="first_name" >First Name: <span style="color:Tomato;">*</span></label>
                          <input type="text" name="first_name" id="firstName" placeholder="First Name">
                          <label for="second_name">Second Name: <span style="color:Tomato;">*</span></label>
                          <input type="text" name="last_name" id="lastName" placeholder="Second Name">
                          <label for="Email">Email: <span style="color:Tomato;">*</span></label>
                          <input type="text" name="email" id="Email" placeholder="Email: johndoe@gmail.com">
                          <label for="Contact">Contact: <span style="color:Tomato;">*</span></label>
                          <input type="text" name="contact" id="Contact" placeholder="Phone: +254 701 234 567">
                          <label for="Password">Password: <span style="color:Tomato;">*</span></label>
                          <input type="password" name="password" id="Password" placeholder="Password">
                          <label for="Confirm_password">Confirm Password: <span style="color:Tomato;">*</span></label>
                          <input type="password" name="confirm_password" id="Confirm_Password" placeholder="Confirm Password">
                          <input type="submit" name="login" class="login loginmodal-submit" value="Register User">
                        </form>
                      </div>
                  </div>
                </div><!--pop-up signin form end-->

            <script>
                 <?php
		            // Close connection
		           mysqli_close($conn);
                 ?>
              </script>

     </div><!--container end-->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://code.jquery.com/jquery.js"></script>
 <!-- Include all compiled plugins (below), or include individual files 
 as needed -->
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>