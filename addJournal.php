<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));

 $DocId = $_POST['docId'];

 $VolumeNo = $_POST['volumeNo'];
 $IssueNo = $_POST['issueNo'];
 $CId = $_POST['cId'];
 $GId = $_POST['gId'];
 $CName = $_POST['cName'];
 $GName = $_POST['gName'];
 $Scope = $_POST['scope'];

 $Title = $_POST['title'];
 $PublishDate = $_POST['publishDate'];
 $AuthorId = $_POST['authorId'];
 $DocType= $_POST['docType'];
 $Descriptor=$_POST['docDescriptor'];



 $query1 = "INSERT INTO document
 ( DocId,Title, PublishDate, AuthorId, DocType)
 VALUES
 ( '{$DocId}', '{$Title}', '{$PublishDate}', '{$AuthorId}', '{$DocType}')";

 $query2= " INSERT INTO journals"
 . "( DocId, VolumeNo, IssueNo, CId, GId, CName, Gname, Scope )"
 . "VALUES"
 . "( '{$DocId}', '{$VolumeNo}', '{$IssueNo}', '{$CId}', '{$GId}', '{$CName}', '{$GName}', '{$Scope}' ) ";

 $query3="INSERT INTO docDescriptor(DocId, Descriptor) VALUES( '{$DocId}', '{$Descriptor}' )";
 $query4= " INSERT INTO ceditor"
 . "( CName )"
 . "VALUES"
 . "( '{$CName}' ) ";
 $query5= " INSERT INTO geditor"
 . "( GName )"
 . "VALUES"
 . "( '{$GName}' ) ";

 if ( mysqli_query($con,$query1) && mysqli_query($con,$query2)&& mysqli_query($con,$query3)&& mysqli_query($con,$query4)&& mysqli_query($con,$query5) ){
 //$m1 ="<span style='color:blue;'>Reader details entered successfully</span>";
 header('location:journals.php');
 // echo $m1;



 }
 else{
 echo " error while inserting the records".mysqli_error($con);
 }



 ?>