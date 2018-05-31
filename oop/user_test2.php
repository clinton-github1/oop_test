<?php

include "connect2.php";


$sql= "SELECT * FROM users_test";
$result= $conn->query($sql);

if($result->num_rows> 0){

echo "<table><tr><th>ID</th><th>FIRST-NAME</th><th>LAST-NAME</th><th>USERNAME</th></tr>";

while($row= $result->fetch_assoc()){


	echo "<tr><td>" . $row['id'] . "</td>" . "<td>". $row['first_name'] . "</td>" . "<td>" . $row['last_name'] . "</td>" . "<td>" . $row['username'] . "</td></tr>";
}

echo "</table>" . "<br><br>";

}




class Users{

public function all_users(){


// $conn= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
global $conn;
$sql= "SELECT * FROM users_test";
$result= $conn->query($sql);

if($result->num_rows> 0){

echo "<table><tr><th>id</th><th>first-name</th><th>last-name</th><th>username</th><tr>";

	while ($row= $result->fetch_assoc()) {
		echo "<tr><td>" . $row['id'] . "</td>" . "<td>" . $row['first_name'] . "</td>" . "<td>" . $row['last_name'] . "</td>" . "<td>" . $row['username'] . "</td></tr>";
	}
	echo "</table>";
}


	}
}

$user= new Users();
$user->all_users();


?>