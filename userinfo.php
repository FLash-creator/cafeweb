<?php 

$con = mysqli_connect('localhost:3307','root');

if ($con) {
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'feedback');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user','$email','$mobile','$comment')";

mysqli_query($con, $query );

header('location:index.php');

 ?>