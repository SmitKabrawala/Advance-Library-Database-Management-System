<?php
error_reporting(0);
$con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));

 $DocId = $_POST['docId'];
 $ISBN = $_POST['isbn'];
 $Title = $_POST['title'];
 $PublishDate = $_POST['publishDate'];
 $AuthorName = $_POST['authorName'];
 $AuthorId = $_POST['authorId'];
 $LibName = $_POST['libName'];
 $Location = $_POST['location'];
 $DocType= $_POST['docType'];
 $Descriptor=$_POST['docDescriptor'];




 $query1 = "INSERT INTO document
 ( DocId, Title, PublishDate, AuthorId, AuthorName, DocType)
 VALUES
 ( '{$DocId}', '{$Title}', '{$PublishDate}', '{$AuthorId}', '{$AuthorName}', '{$DocType}')";

 $query2= " INSERT INTO books"
 . "( DocId, ISBN )"
 . "VALUES"
 . "( '{$DocId}', '{$ISBN}' ) ";

 $query3="INSERT INTO docDescriptor(DocId, Descriptor) VALUES( '{$DocId}', '{$Descriptor}' )";
 $query4= " INSERT INTO libraryBranch"
 . "( LibName )"
 . "VALUES"
 . "( '{$LibName}' )";
 $query5= " INSERT INTO libraryBranch"
 . "( Location )"
 . "VALUES"
 . "( '{$Location}' )";
 $query6= " INSERT INTO author"
 . "(AuthorId, AuthorName)"
 . "VALUES"
 . "( '{$AuthorId}', '{$AuthorName}' )";



 if ( mysqli_query($con,$query1) && mysqli_query($con,$query2) && mysqli_query($con,$query3)&& mysqli_query($con,$query4)&& mysqli_query($con,$query5)&& mysqli_query($con,$query6) ){
 //$m1 ="<span style='color:blue;'>Reader details entered successfully</span>";
 header('location:books.php');
 // echo $m1;



 }
 else{
 echo " error while inserting the records".mysqli_error($con);
 }



 ?>