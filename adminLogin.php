<!DOCTYPE html>


 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="../../favicon.ico">

 <title>Admin Login</title>

 <!-- Bootstrap core CSS -->
 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="style.css" rel="stylesheet">

 <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
 <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 <![endif]-->
 </head>

 <body>
 <body background="blur.jpg" no-repeat fixed >
 <div><?php include 'nav.php';?></div>

 <div class="container">

 <form action="adminAuth.php" method="POST" class="form-signin">
 <h2 class="form-signin-heading">Admin</h2>
 <label for="inputUsername" class="sr-only">Username</label>
 <input type="text" id="uname" class="form-control" placeholder="uname" name="uname"required autofocus><br/>
 <label for="inputPassword" class="sr-only">Password</label>
 <input type="password" id="password" class="form-control" placeholder="password" name="password" required><br/>
 <div class="checkbox">
 
 <label>
 <input type="checkbox" value="remember-me"> Remember me
 </label>
 </div>
 <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
 </form>

 </div> <!-- /container -->


 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 </body>
 </html>


