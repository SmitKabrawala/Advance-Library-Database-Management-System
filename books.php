<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="icon" href="../../favicon.ico">

 <title>Employee</title>

 <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <link href="style.css" rel="stylesheet">
 <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

 </head>

 <body>

 <div> <?php include 'navinside.php';?></div>

 <div class="container">

 
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
 <li class="active"><a href="books.php">Books</a></li>
 <li><a href="journals.php">Journals</a></li>
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

 <th>Document Id</th>
 <th>Title</th>
 <th>ISBN</th>
 <th>Author</th>
 

 </tr>
 </thead>
 <tbody>
 <?php
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));

 $query = "SELECT document.DocId, document.Title, document.DocType, document.AuthorName "
 . "FROM (document NATURAL JOIN books)";
 

 $result=mysqli_query($con, $query);
 while($row = mysqli_fetch_array($result)){
 echo "<tr><td>".$row["DocId"]."</td>"
 . "<td>".$row["Title"]."</td>"
 . "<td>".$row["DocType"]."</td>"
 . "<td>".$row["AuthorName"]."</td>";

 }

 ?>
 </tbody>
 </table>
 </div>


 <div class="row">
 <form action="addBook.php" method="POST">

 <div class="form-group">

 <input class="form-control" placeholder="Document Id" name="docId" required = "true"><br>

 <input class="form-control" placeholder="ISBN" name="isbn" required = "true"> <br>


 <input class="form-control" placeholder="Title" name="title" required = "true"><br>

 <input class="form-control" placeholder="Publish Date" name="publishDate" required = "true"><br>
 <input class="form-control" placeholder="Author Name" name="authorName" required = "true"><br>
 <input class="form-control" placeholder="Author Id" name="authorId" required = "true"><br>
  <input class="form-control" placeholder="Library Name" name="libName" required = "true"><br>
<input class="form-control" placeholder="Library Location" name="location" required = "true"><br>
 <input class="form-control" placeholder="Doc Type" name="docType" required = "true"></br>

 <input class="form-control" placeholder="Doc Descriptor" name="docDescriptor" required = "true"></br>
 <button class="btn btn-lg btn-primary btn-block" type="submit">Add Book</button><br>


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