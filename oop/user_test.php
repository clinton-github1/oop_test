<?php


include "db_auto_conn_class.php";

class Users extends Database{

public function query($query= "SELECT * FROM users_test"){

// $query= "SELECT * FROM users_test";
$result= mysqli_query($this->connection, $query);
while ($row= mysqli_fetch_assoc($result)) {
	echo "ID=" . $row['id'] . "<br>" ;
	echo "FIRST NAME=" . $row['first_name'] . "<br>" ;
	echo "LAST NAME=" . $row['last_name'] . "<br>" ;
	echo "USERNAME=" . $row['username'] . "<br>" ;
	echo "PASSWORD=" . $row['password'] . "<br><br>" ;
	
}
}
}


$user= new Users();
$user-> query();

?>