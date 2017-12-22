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

 <title>Reader Sign up</title>

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

 <div><?php include 'nav.php'; ?></div>

 <div class="container">

 <form class="form-signin">
 <h2 class="form-signin-heading">Reader Sign up</h2>
 <label for="readerId" class="sr-only">Reader ID</label><br/>
 <input type="text" id="readerId" class="form-control" placeholder="Reader ID" required autofocus><br/>
 <label for="name" class="sr-only">Name</label>
 <input type="text" id="name" class="form-control" placeholder="Name" required><br/>

 <label for="city" class="sr-only">City</label>
 <input type="text" id="city" class="form-control" placeholder="City" required autofocus><br/>
 <label for="phone" class="sr-only">Phone</label>
 <input type="phone" id="inputPassword" class="form-control" placeholder="Phone" required><br/>

 <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
 </form>

 </div> <!-- /container -->

 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 </body>
 </html>