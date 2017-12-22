<?php
 error_reporting(0);
 ?>
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

 <title>Reader</title>

 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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

 <div> <?php include 'nav.php';?></div>
 

 <div class="container">

 <!-- Main component for a primary marketing message or call to action -->

 <div class="jumbotron">
 <h1 style="color:#428bca;">Reader</h1>
 <!--<img src="NJIT.jpg" class="img-rounded" alt="Cinque Terre" width="700" height="236">-->
 </div>

 </div> <!-- /container -->

 <div class="container">

 <div class="row">
 <div class="col-md-4 col-md-offset-2">
 <?php echo $_GET['m'], $_GET['count']?>

 <form action="readerSearch.php" method="POST" class="form-signin">

 <div class="form-group">

 <label for="Search Type">Select</label>
 <select class="form-control" id="searchType" name="searchType">
 <option value="all">All Documents</option>
 <option value="docId">Document Id</option>
 <option value="title">Title</option>
 <option value="author">Author</option>
 <option value="docType">Document Type</option>
 <option value="libName">Library</option>
 <option value="keywords">Keywords</option>
 </select>

 </br>
 <input class="form-control" placeholder="Enter Details" name="details" required = "true"></br>
 <input class="form-control" placeholder="Reader Id" name="readerId" required = "true"></br>

 <button class="btn btn-lg btn-primary btn-block" type="Submit">Search</button><br>

 </div>
 </form>

 </div>
 </div>
 </div> <!-- /container -->



 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
 <script src="../../dist/js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
 </body>

 </html>