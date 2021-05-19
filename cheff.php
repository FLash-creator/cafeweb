      <?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "getorder";

$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="#">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div >
		<h1>Orders</h1>
	<table id="table table-striped">
		<button id="displaydata">Display</button>
		<thead>
			<th>id</th>
			<th>name</th>
			<th>order</th>
			<th>quantity</th>
			<th>Table no</th>

		</thead>
		<tbody id="response">
			

		</tbody>

	</table>
	</div>
<script>
	$(document).ready(function(){
		// $("#displaydata").click(function(){
	// 		displaydata();
	// 		function displaydata(){
	// 	$.ajax({
	// 		url:'chef.php',
	// 		type:'post',
	// 		success: function(responsedata){
	// 			$('#response').html(responsedata);
	// 		}
	// 	});
	// }
	// });

	setInterval(function(){
		$('#response').load("chef.php");

	},1000);

	});

</script>



</body>
</html>