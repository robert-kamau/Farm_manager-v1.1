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
           
           <?php include 'inventory_summary.php'; ?>
     

     </div><!--container end-->
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://code.jquery.com/jquery.js"></script>
 <!-- Include all compiled plugins (below), or include individual files 
 as needed -->
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>