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

 <title>index</title>

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
 <div class="row" >
 <div class="col-sm-3 col-md-3 sidebar" style="right:20px;">
 <ul class="nav nav-sidebar">
 <li><a href="employeeHome.php"> Readers </a></li>
 <li><a href="copies.php">Copies</a></li>
 <li><a href="books.php">Books</a></li>
 <li class="active"><a href="journals.php">Journals</a></li>
 <li><a href="proceedings.php">Proceedings</a></li>
 <li><a href="borrowDocs.php">Borrowed Docs</a></li>
 <li><a href="reservedDocs.php">Reserved Docs</a></li>
 </ul>
 </div>



 <div class="col-sm-9 col-md-9" style="left:20px;">

 <div class="row" >

 <table class="table table-striped">
 <thead>
 <tr>

 <th>DocId</th>
 <th>Title</th>
 <th>Volume No</th>
 <th>Issue No</th>
 <th>Chief Editor Id</th>
 <th>Guest Editor Id</th>
 <th>Gname</th>
 <th>Scope</th>
 

 </tr>
 </thead>
 <tbody>
 <?php
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));

 $query = "SELECT document.DocId, document.Title, journals.VolumeNo, journals.IssueNo, journals.CId, journals.GId, journals.GName, journals.Scope "
 . "FROM (document NATURAL JOIN journals)";
 
 $result=mysqli_query($con, $query);

 while($row = mysqli_fetch_array($result)){
 echo "<tr><td>".$row["DocId"]."</td>"
 . "<td>".$row["Title"]."</td>"
 . "<td>".$row["VolumeNo"]."</td>"
 . "<td>".$row["IssueNo"]."</td>"
 . "<td>".$row["CId"]."</td>"
 . "<td>".$row["GId"]."</td>"
 . "<td>".$row["GName"]."</td>"
 . "<td>".$row["Scope"]."</td>";
 

 }

 ?>
 </tbody>
 </table>
 </div>



 <div class="row">
 <form action="addJournal.php" method="POST">

 <div class="form-group">

 <input class="form-control" placeholder="Document Id" name="docId" required = "true"><br>


 <input class="form-control" placeholder="Volume Number" name="volumeNo" required = "true"> <br>

 <input class="form-control" placeholder="Issue Number" name="issueNo" required = "true"> <br>

 <input class="form-control" placeholder="Chief Editor Id" name="cId" required = "true"> <br>

 <input class="form-control" placeholder="Guest Editor Id" name="gId" required = "true"> <br>
  <input class="form-control" placeholder="Chief Editor Name" name="cName" required = "true"> <br>

   <input class="form-control" placeholder="Guest Editor Name" name="gName" required = "true"> <br>


 <input class="form-control" placeholder="Scope" name="scope" required = "true"> <br>


 <input class="form-control" placeholder="Title" name="title" required = "true"><br>

 <input class="form-control" placeholder="Publish Date" type="date" name="publishDate" required = "true"><br>

 <input class="form-control" placeholder="Author Id" name="authorId" required = "true"><br>

 <input class="form-control" placeholder="Doc Type" name="docType" required = "true"></br>

 <input class="form-control" placeholder="Doc Descriptor" name="docDescriptor" required = "true"></br>


 <button class="btn btn-lg btn-primary btn-block" type="submit">Add Journal</button><br>


 </div>
 </form>
 </div>
 </div>
 </div>
 </div><!-- /container -->
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