<?php 

include ('includes/connection.php');
if ($conn->connect_error) {
	die("Connection error: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM users");

if ($result->num_rows > 0) {
	echo "<table align='center' border=1 >  <caption>All the users!</caption><tr><th>First name</th><th>Last Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
	     echo '<tr><td>'.$row['user_fname'].'</td><td>'.$row['user_lname'] .'</td></tr>' ;
	}
}
?>