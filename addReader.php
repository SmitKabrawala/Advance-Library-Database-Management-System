<?php
 error_reporting(0);
 $con= mysqli_connect("localhost","root",'',"LibraryDb") or die("Error: ". mysqli_error($con));


 $readerid = $_POST['readerid'];
 $rname = $_POST['rname'];
 $address = $_POST['address'];
 $type = $_POST['type'];
 $phone = $_POST['phone'];




 $query = "SELECT * FROM reader WHERE PhoneNumber='$phone'";
 $result = mysqli_query($con, $query);
 $num = mysqli_num_rows($result);

 if ($num != 0)
 {
 $m ="<span style='color:red;'>Entered Phone Number Already Exists</span>";
 //header('location:addReader.php?m='.$m);
 echo $m;
 }
 else{
 $query = "SELECT * FROM reader WHERE ReaderId='$readerid'";
 $result = mysqli_query($con, $query);
 $num = mysqli_num_rows($result);

 if ($num != 0)
 {
 $m0 ="<span style='color:red;'>Entered Reader Id Already Exists</span>";
 //header('location:addReader.php?m0='.$m0);
 echo$m0;
 }
 else{
 $query = "INSERT INTO reader
 (ReaderId, ReaderName, Address, ReaderType, PhoneNumber)
 VALUES
 ('{$readerid}','{$rname}','{$address}','{$type}','{$phone}')";
 if(mysqli_query($con,$query)){
 $m ="<span style='color:black;'>Reader details entered successfully</span>";
 header('location:adminHome.php?m='.$m);
 // echo $m1;

 }
 else{
 echo "error while inserting the records".mysqli_error($con);
 }
 }
 }

 ?>