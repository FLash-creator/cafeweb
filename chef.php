<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "getorder";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,name,ordergiven,quantity,table_number FROM orderinfo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
       
       ?>
  <tr>
  	<td><?php echo $row["id"]  ?></td>
  	<td><?php echo $row["name"] ?></td>
  	<td><?php echo $row["ordergiven"] ?></td>
  	<td><?php echo $row["quantity"] ?></td>
  	<td><?php echo $row["table_number"] ?></td>
  </tr>



<?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<!--  echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["ordergiven"]." ".$row["quantity"]." ".$row["table_number"]. "<br>"; -->