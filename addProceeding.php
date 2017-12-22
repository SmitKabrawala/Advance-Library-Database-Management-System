<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));
 $DocId = $_POST['docId'];

 $CDate = $_POST['cDate'];
 $CLocation = $_POST['cLocation'];
 $CChair = $_POST['cChair'];


 $Title = $_POST['title'];
 $PublishDate = $_POST['publishDate'];
 $AuthorId = $_POST['authorId'];
 $DocType= $_POST['docType'];
 $Descriptor=$_POST['docDescriptor'];



 $query1 = "INSERT INTO document
 ( DocId,Title, PublishDate, AuthorId, DocType)
 VALUES
 ( '{$DocId}', '{$Title}', '{$PublishDate}', '{$AuthorId}', '{$DocType}')";

 $query2= " INSERT INTO proceedings"
 . "( DocId, CDate, CLocation, CChair )"
 . "VALUES"
 . "( '{$DocId}', '{$CDate}', '{$CLocation}', '{$CChair}' ) ";

 $query3="INSERT INTO docDescriptor(DocId, Descriptor) VALUES( '{$DocId}', '{$Descriptor}' )";

 if ( mysqli_query($con,$query1) && mysqli_query($con,$query2)&& mysqli_query($con,$query3) ){
 //$m1 ="<span style='color:blue;'>Reader details entered successfully</span>";
 header('location:proceedings.php');
 // echo $m1;



 }
 else{
 echo " error while inserting the records".mysqli_error($con);
 }



 ?>