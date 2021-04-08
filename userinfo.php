<?php 

$con =mysqli_connect('localhost','root');

if ($con) {
	echo "connection successfull";
}else{
	echo "connection NOT successfull";
}

mysqli_select_db($con,'abir');

$user = $_POST['user'];
$email= $_POST['email'];
$mobile =$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into ab(user,email,mobile,comment)

values('$user','$email','$mobile','$comment')";


mysqli_query($con, $query);

header('location:index.php');

 ?>
 