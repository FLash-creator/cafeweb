<?php 

$con = mysqli_connect('localhost:3307','root');

if ($con) {
	echo "Connection Successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'getorder');

$name = $_POST['name'];
$select = $_POST['select'];
$quantity = $_POST['quantity'];
$tab = $_POST['tab'];

$query = " insert into orderinfo (name, ordergiven, quantity, table_number)
values ('$name','$select','$quantity','$tab')";

mysqli_query($con, $query );

header('location:order.php');
?>