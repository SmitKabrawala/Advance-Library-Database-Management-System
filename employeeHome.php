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

 <title>Employee</title>

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

 <div> <?php include 'navinside.php';?></div>

 <div class="container">

 <!-- Main component for a primary marketing message or call to action -->

 <div class="jumbotron">
 <h1 style="color:#428bca;">Employee</h1>
 <!--<img src="NJIT.jpg" class="img-rounded" alt="Cinque Terre" width="700" height="236">-->

 </div>

 </div> <!-- /container -->

 <div class="container">
 <div class="row">
 <div class="col-sm-3 col-md-3 sidebar">
 <ul class="nav nav-sidebar">
 <li class="active"><a href="employeeHome.php"> Readers </a></li>
 <li><a href="copies.php">Copies</a></li>
 <li><a href="books.php">Books</a></li>
 <li><a href="journals.php">Journals</a></li>
 <li><a href="proceedings.php">Proceedings</a></li>
 <li><a href="borrowDocs.php">Borrowed Docs</a></li>
 <li><a href="reservedDocs.php">Reserverd Docs</a></li>
 </ul>
 </div>




 <div class="col-sm-9 col-md-9" style="left:20px;">

 <table class="table table-striped">
 <thead>
 <tr>
 <th>Reader Id</th>
 <th>Reader Name</th>
 <th>Address</th>
 <th>Type</th>
 <th>Phone Number</th>

 </tr>
 </thead>
 <tbody>
 <?php
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));

 $query = "SELECT * FROM reader";
 $result=mysqli_query($con, $query);
 while($row = mysqli_fetch_array($result)){
 echo "<tr><td>".$row["ReaderId"]."</td>"
 . "<td><a href='borrowedDocs.php?id={$row['ReaderId']} ' style='color:#428bca;'>".$row["ReaderName"]."</a></td>"
 . "<td>".$row["Address"]."</td>"
 . "<td>".$row["ReaderType"]."</td>"
 . "<td>".$row["PhoneNumber"]."</td></tr>";
 }
 ?>
 </tbody>
 </table>
 </div>

 </div>
 </div>
 </div> <!-- /container -->





 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>');</script>
 <script src="../../dist/js/bootstrap.min.js"></script>
 <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>



 </body>

 </html>